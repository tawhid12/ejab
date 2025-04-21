<?php

namespace App\Http\Controllers;


use App\Models\About;
use App\Models\Brand;
use App\Models\Page;
use App\Models\year;
use App\Models\Frontend;
use App\Models\Notice;
use App\Models\scroll_notice;
use App\Models\photoGallaryCategory;
use App\Models\video_notice;
use App\Models\OurMember;
use App\Models\Setting;
use App\Models\Slider;
use App\Models\Partner;
use App\Models\OurBusiness;
use App\Models\Blog;
use App\Models\Message;
use Illuminate\Http\Request;
use App\Http\Traits\ImageHandleTraits;
use App\Models\Report;
use App\Models\Product;
use Brian2694\Toastr\Facades\Toastr;
use Exception;
use DB;
class FrontendController extends Controller
{
    use ImageHandleTraits;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $today=\Carbon\Carbon::today()->toDateString();
        $slider=Slider::get();
        /*$notice=Notice::where('published_date', '<=',$today)->where(function ($query) use ($today) {
                            $query->where('unpublished_date', '>',$today);
                            $query->orWhereNull('unpublished_date');
                        })->latest()->limit(12)->get();*/
        $scroll_notice=scroll_notice::get();/*where('published_date', '<=',$today)->where(function ($query) use ($today) {
                            $query->where('unpublished_date', '>',$today);
                            $query->orWhereNull('unpublished_date');
                        })->latest()->limit(12)->get();*/
        $about= About::first();
        $brands=Brand::get();
        /*echo '<pre>';
        print_r($brands);die;*/
        $partners=Partner::orderBy('id','desc')->limit(3)->get();
        $our_business=OurBusiness::get();
        $blogs=Blog::get();
        return view('front.home',compact('slider','scroll_notice','about','brands','partners','our_business','blogs'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function benefit()
    {
        $benefit=BenefitsOfMember::all();
        return view('frontend.benefit',compact('benefit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function contactUs()
    {
        $contactReason = contact_reason::all();
        return view('frontend.membership.contact',compact('contactReason'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function newsEventsDetail($id)
    {
        $detail = video_notice::where('id',$id)->first();
        $newsEv = video_notice::all();
        return view('frontend.notice.newsEvents',compact('newsEv','detail'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function newsEvents()
    {
        $detail = video_notice::first();
        $newsEv = video_notice::paginate(12);
        return view('frontend.notice.newsEvents',compact('newsEv','detail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Frontend  $frontend
     * @return \Illuminate\Http\Response
     */
    public function nwesSearch(Request $request)
    {
        $search = $request['name']?? "";
        $news = video_notice::query();

        if ($search != "") {
            $news->where('title', 'LIKE', '%'.$search.'%');
        }

        $newsEv = $news->paginate(12);
        return view('frontend.notice.newsEvents', compact('newsEv','search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function allNotice()
    {
        $today=\Carbon\Carbon::today()->toDateString();

        $notice=Notice::where('published_date', '<=',$today)->where(function ($query) use ($today) {
            $query->where('unpublished_date', '>',$today);
            $query->orWhereNull('unpublished_date');
        })->paginate(20);

        return view('frontend.notice.notice',compact('notice'));
    }
    
    /* get daynamic page */
    public function page($slug)
    {
        $page_data= Page::where('page_slug',"$slug")->where('published',1)->first();
        return view('front.Page.index',compact('page_data'));
    }

    /* get daynamic page */
    public function club_dues(Request $r)
    {
        $members = array();
        if($r->input('member_type') && $r->input('search')){
            $searchText=$r->input('search');
            $members = total_due::where('member_type', $r->input('member_type'))
                            ->where(function($query) use ($searchText){
                                $query->orWhereHas('member', function($q) use ($searchText) {
                                    $q->where(function($q) use ($searchText) {
                                        $q->where('membership_no', $searchText);
                                        $q->orwhere('given_name', $searchText);
                                    });
                                });
                            })->first();
        }
        return view('frontend.club_dues',compact('members'));
    }
    public function singleBusinessPage($page_slug)
    {
        $data = OurBusiness::with('brand','brand.products')->where('page_slug', $page_slug)->firstOrFail();
        return view('front.single_business_page',compact('data'));
    }
    public function career(){
        $data =  OurBusiness::get();
        return view('front.career',compact('data'));
    }
    public function financialReport(){
        $report = Report::where('report_type_id',2)->orderBy('id', 'desc')->get();
        return view('front.finace_report',compact('report'));
    }
    public function PSIReport(){
        $report = Report::where('report_type_id',1)->orderBy('id', 'desc')->get();
        return view('front.psi_report',compact('report'));
    }
    public function contact(){
        return view('front.contact');
    }
    public function brand(){
        $brands = Brand::all();
        $our_business = OurBusiness::all();
        return view('front.our_brand',compact('brands','our_business'));
    }
    public function product(Request $request){
        if($request->has('brand')){
            $products = Product::where('brand_id',$request->brand)->get();
        }else{
            $products = Product::paginate(12);
        }
        return view('front.product',compact('products'));
    }
    public function productDetails($barcode){
        $product = Product::where('barcode',$barcode)->first();
        $relatedProducts = Product::where('brand_id',$product->brand_id)->get();
        return view('front.product_details',compact('product','relatedProducts'));
    }
    public function team(){
        $our_team = OurMember::all();
        return view('front.our_team',compact('our_team'));
    }
    public function overview(){
        $m = Message::first();
        return view('front.overview',compact('m'));
    }
    public function foundermsg (){
        $m = Message::first();
        return view('front.foundermsg',compact('m'));
    }
    public function chairpersonMsg (){
        $m = Message::first();
        return view('front.chairpersonMsg',compact('m'));
    }
    public function boardDirect (){
        $our_team = OurMember::all();
        return view('front.board_director',compact('our_team'));
    }
    public function keyManagement (){
        $m = Message::first();
        return view('front.keyManagement',compact('m'));
    }
    public function msnVsn (){
        $m = Message::first();
        return view('front.msnVsn',compact('m'));
    }
    public function csr (){
        $m = Message::first();
        return view('front.csr',compact('m'));
    }
    public function groupLogo (){
        $logo = OurBusiness::get();
        return view('front.groupLogo',compact('logo'));
    }
}
