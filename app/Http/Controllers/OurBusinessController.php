<?php

namespace App\Http\Controllers;

use App\Models\OurBusiness;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Http\Traits\ImageHandleTraits;
use Exception;

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
        return view('business.create');
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
    public function show(OurBusiness $ourBusiness)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OurBusiness  $ourBusiness
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $b=OurBusiness::findOrFail(encryptor('decrypt',$id));
        return view('business.edit',compact('b'));
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
        try{
            $b=OurBusiness::findOrFail(encryptor('decrypt',$id));
            $b->heading_text = $request->heading_text;
            $b->description = $request->description;
            $b->link = $request->link;
            $path='uploads/business/';
            $dpath='uploads/business/thumb/';
            if($request->has('Picture') && $request->Picture)
            if($this->deleteImage($b->image,$dpath))
                $b->image=$this->resizeImage($request->Picture,$path,true,150,101,true);
            if($b->save()){
            Toastr::success('Business Update Successfully!');
            return redirect()->route(currentUser().'.business.index');
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
     * @param  \App\Models\OurBusiness  $ourBusiness
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $b= OurBusiness::findOrFail(encryptor('decrypt',$id));
        $path='uploads/business/thumb/';
        if($this->deleteImage($b->image,$path));
        $b->delete();
        Toastr::warning('Business Deleted Permanently!');
        return redirect()->back();
    }
}
