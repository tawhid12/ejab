<?php

namespace App\Http\Controllers;

use App\Models\OurBusiness;
use App\Models\photoGallaryCategory;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Http\Traits\ImageHandleTraits;
use Exception;
use File;

class OurBusinessController extends Controller
{
    use ImageHandleTraits;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $business = OurBusiness::paginate(10);
        return view('business.index', compact('business'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $photo_gal_cat = photoGallaryCategory::get();
        return view('business.create',compact('photo_gal_cat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $b = new OurBusiness;
            $b->heading_text = $request->heading_text;
            $b->description = $request->description;
            $b->link = $request->link;
            if ($request->has('Picture'))
                $b->image = $this->resizeImage($request->Picture, 'uploads/business', true, 80, 80, true);

            /* Page Slug and Image */
            $b->page_slug = strtolower(str_replace(' ', '-', $request->heading_text));
            if ($request->has('page_image'))
                $b->page_image = $this->resizeImage($request->page_image, 'uploads/page_image', true, 1349, 1349, true);

            /*===== Section One =======*/
            $b->sec_1_headline = $request->sec_1_headline;
            $b->sec_1_desc = $request->sec_1_desc;
            $b->sec_1_link = $request->sec_1_link;
            $sec_one_path = 'uploads/sec_1_image/';
        
            if ($request->has('sec_1_image') && $request->sec_1_image){
                $b->sec_1_image = $this->resizeImage($request->sec_1_image, $sec_one_path, true, 555, 277, true);
            }

            /*===== Section Two =======*/
            $b->sec_2_headline = $request->sec_2_headline;
            $b->sec_2_desc = $request->sec_2_desc;
            $b->sec_2_link = $request->sec_2_link;
            $b->sec_2_box_text = $request->sec_2_box_text;
            $sec_two_path = 'uploads/sec_2_image/';
            if ($request->has('sec_2_image') && $request->sec_2_image){
                $b->sec_2_image = $this->resizeImage($request->sec_2_image, $sec_two_path, true, 555, 277, true);
            }

            /*===== Section Three =======*/
            $b->sec_3_headline = $request->sec_3_headline;
            $b->sec_3_box_text = $request->sec_3_box_text;

            $b->sec_3_box_1_headline = $request->sec_3_box_1_headline;
            $b->sec_3_box_1_detl = $request->sec_3_box_1_detl;

            $b->sec_3_box_2_headline = $request->sec_3_box_2_headline;
            $b->sec_3_box_2_detl = $request->sec_3_box_2_detl;

            $b->sec_3_box_3_headline = $request->sec_3_box_3_headline;
            $b->sec_3_box_3_detl = $request->sec_3_box_3_detl;

            $b->sec_3_box_4_headline = $request->sec_3_box_4_headline;
            $b->sec_3_box_4_detl = $request->sec_3_box_4_detl;
            
            $sec_three_path = 'uploads/sec_3_image/';
            if ($request->has('sec_3_image') && $request->sec_3_image){
                $b->sec_3_image = $this->resizeImage($request->sec_3_image, $sec_three_path, true, 555, 277, true);
            }    

            /*===== Section Four =======*/
            $b->sec_4_headline = $request->sec_4_headline;
            $b->sec_4_link1 = $request->sec_4_link1;
            $b->sec_4_link2 = $request->sec_4_link2;
            $b->sec_4_link3 = $request->sec_4_link3;

            $sec_four_path = 'uploads/sec_4_image/';
            if ($request->has('sec_4_image') && $request->sec_4_image){
                $b->sec_4_image = $this->resizeImage($request->sec_4_image, $sec_four_path, true, 555, 277, true);
            } 

            $b->gallery_id = $request->gallery_id;
            $b->map = $request->map;
            $b->footer_email = $request->footer_email;
            $b->footer_contact = $request->footer_contact;    

            if ($b->save()) {
                Toastr::success('Business Uploaded Successfully!');
                return redirect()->route(currentUser() . '.business.index');
            } else {
                Toastr::warning('Please try Again!');
                return redirect()->back();
            }
        } catch (Exception $e) {
            Toastr::warning('Please try Again!');
            // dd($e);
            return back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OurBusiness  $ourBusiness
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $b = OurBusiness::findOrFail(encryptor('decrypt', $id));
        return view('business.show', compact('b'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OurBusiness  $ourBusiness
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $b = OurBusiness::findOrFail(encryptor('decrypt', $id));
        $photo_gal_cat = photoGallaryCategory::get();
        return view('business.edit', compact('b','photo_gal_cat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OurBusiness  $ourBusiness
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        /*echo '<pre>';
        print_r($request->toArray());die;*/
        try {
            $b = OurBusiness::findOrFail(encryptor('decrypt', $id));
            $b->heading_text = $request->heading_text;
            $b->description = $request->description;
            $b->link = $request->link;
            $path = 'uploads/business/';
            $dpath = 'uploads/business/thumb/';
            if ($request->has('Picture') && $request->Picture)
                if ($this->deleteImage($b->image, $dpath))
                $b->image = $this->resizeImage($request->Picture, $path, true, 150, 101, true);

            /* Page Slug and Image */
            $page_path = 'uploads/page_image/';
            $d_page_path = 'uploads/page_image/thumb/';
            $b->page_slug = strtolower(str_replace(' ', '-', preg_replace("/[^a-zA-Z\s]/", "", $request->heading_text)));
            if ($request->has('page_image') && $request->page_image){
                if (File::exists($d_page_path.$b->page_image)) {
                    $this->deleteImage($b->page_image, $d_page_path);
                   }
                $b->page_image = $this->resizeImage($request->page_image, $page_path, true, 1349, 1349, true);
            }
                

            /*===== Section One =======*/
            $b->sec_1_headline = $request->sec_1_headline;
            $b->sec_1_desc = $request->sec_1_desc;
            $b->sec_1_link = $request->sec_1_link;
            $sec_one_path = 'uploads/sec_1_image/';
            $d_sec_one_path = 'uploads/sec_1_image/thumb/';
            if ($request->has('sec_1_image') && $request->sec_1_image){
                if (File::exists($d_sec_one_path.$b->sec_1_image)) {
                    $this->deleteImage($b->sec_1_image, $d_sec_one_path);
                    }
                $b->sec_1_image = $this->resizeImage($request->sec_1_image, $sec_one_path, true, 555, 277, true);
            }

            /*===== Section Two =======*/
            $b->sec_2_headline = $request->sec_2_headline;
            $b->sec_2_desc = $request->sec_2_desc;
            $b->sec_2_link = $request->sec_2_link;
            $b->sec_2_box_text = $request->sec_2_box_text;
            $sec_two_path = 'uploads/sec_2_image/';
            $d_sec_two_path = 'uploads/sec_2_image/thumb/';
            if ($request->has('sec_2_image') && $request->sec_2_image){
                if (File::exists($d_sec_two_path.$b->sec_2_image)) {
                    $this->deleteImage($b->sec_1_image, $d_sec_two_path);
                    }
                $b->sec_2_image = $this->resizeImage($request->sec_2_image, $sec_two_path, true, 555, 277, true);
            }

            /*===== Section Three =======*/
            $b->sec_3_headline = $request->sec_3_headline;
            $b->sec_3_box_text = $request->sec_3_box_text;

            $b->sec_3_box_1_headline = $request->sec_3_box_1_headline;
            $b->sec_3_box_1_detl = $request->sec_3_box_1_detl;

            $b->sec_3_box_2_headline = $request->sec_3_box_2_headline;
            $b->sec_3_box_2_detl = $request->sec_3_box_2_detl;

            $b->sec_3_box_3_headline = $request->sec_3_box_3_headline;
            $b->sec_3_box_3_detl = $request->sec_3_box_3_detl;

            $b->sec_3_box_4_headline = $request->sec_3_box_4_headline;
            $b->sec_3_box_4_detl = $request->sec_3_box_4_detl;
            
            $sec_three_path = 'uploads/sec_3_image/';
            $d_sec_three_path = 'uploads/sec_3_image/thumb/';
            if ($request->has('sec_3_image') && $request->sec_3_image){
                if (File::exists($d_sec_two_path.$b->sec_3_image)) {
                    $this->deleteImage($b->sec_3_image, $d_sec_three_path);
                    }
                $b->sec_3_image = $this->resizeImage($request->sec_3_image, $sec_three_path, true, 555, 277, true);
            }    

            /*===== Section Four =======*/
            $b->sec_4_headline = $request->sec_4_headline;
            $b->sec_4_link1 = $request->sec_4_link1;
            $b->sec_4_link2 = $request->sec_4_link2;
            $b->sec_4_link3 = $request->sec_4_link3;

            $sec_four_path = 'uploads/sec_4_image/';
            $d_sec_four_path = 'uploads/sec_4_image/thumb/';
            if ($request->has('sec_4_image') && $request->sec_4_image){
                if (File::exists($d_sec_four_path.$b->sec_4_image)) {
                    $this->deleteImage($b->sec_4_image, $d_sec_four_path);
                    }
                $b->sec_4_image = $this->resizeImage($request->sec_4_image, $sec_four_path, true, 555, 277, true);
            } 

            $b->gallery_id = $request->gallery_id;
            $b->map = $request->map;
            $b->footer_email = $request->footer_email;
            $b->footer_contact = $request->footer_contact;
          
            if ($b->save()) {
                Toastr::success('Update Successfully!');
                return redirect()->route(currentUser() . '.business.index');
            } else {
                Toastr::warning('Please try Again!');
                return redirect()->back();
            }
        } catch (Exception $e) {
            Toastr::warning('Please try Again!');
            // dd($e);
            return back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OurBusiness  $ourBusiness
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $b = OurBusiness::findOrFail(encryptor('decrypt', $id));
        $path = 'uploads/business/thumb/';
        if ($this->deleteImage($b->image, $path));
        $b->delete();
        Toastr::warning('Business Deleted Permanently!');
        return redirect()->back();
    }
}
