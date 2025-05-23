<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\OurBusiness;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Http\Traits\ImageHandleTraits;
use Exception;

class BrandController extends Controller
{
    use ImageHandleTraits;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::paginate(10);
        return view('brand.index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ourBusinesses = OurBusiness::all();
        return view('brand.create', compact('ourBusinesses'));
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
            $b = new Brand;
            $b->title = $request->title;
            $b->description = $request->description;
            $b->our_business_id = $request->our_business_id;
            if ($request->has('Picture')){
                $path='uploads/brands';
                $imageName= $this->resizeImage($request->Picture,$path,true,254,143,true);
                
                $this->saveOriginalImage($request->Picture,$path,$imageName);
                 $b->image = $imageName;
            }
            if ($b->save()) {
                Toastr::success('Brand Uploaded Successfully!');
                return redirect()->route(currentUser() . '.brand.index');
            } else {
                Toastr::warning('Please try Again!');
                return redirect()->back();
            }
        } catch (Exception $e) {
            Toastr::warning('Please try Again!');
             dd($e);
            return back()->withInput();
        }
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\brand  $brand
     * @return \Illuminate\Http\Response
    */
    public function show(brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $b=Brand::findOrFail(encryptor('decrypt',$id));
        $ourBusinesses = OurBusiness::all();
        return view('brand.edit',compact('b','ourBusinesses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try{
            $b=Brand::findOrFail(encryptor('decrypt',$id));
            $b->title = $request->title;
            $b->description = $request->description;
            $b->our_business_id = $request->our_business_id;

            if ($request->has('Picture')){
                $path='uploads/brands';
                $dpath='uploads/brands/thumb/';
                $imageName= $this->resizeImage($request->Picture,$path,true,254,143,true);
                $this->saveOriginalImage($request->Picture,$path,$imageName);
                if($imageName){
                    $this->deleteImage($b->image,$path);
                    $this->deleteImage($b->image,$dpath);
                    $b->image = $imageName;
                }
            }
           
            if($b->save()){
                Toastr::success('Brand Update Successfully!');
                return redirect()->route(currentUser().'.brand.index');
            } else{
                Toastr::warning('Please try Again!');
                return redirect()->back();
            }
        }
        catch (Exception $e){
            Toastr::warning('Please try Again!');
            // dd($e);
            return back()->withInput();

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $b= Brand::findOrFail(encryptor('decrypt',$id));
        $path='uploads/brands';
        $dpath='uploads/brands/thumb/';
        $this->deleteImage($b->image,$path);
        $this->deleteImage($b->image,$dpath);
        $b->delete();
        Toastr::warning('Brand Deleted Permanently!');
        return redirect()->back();
    }
}
