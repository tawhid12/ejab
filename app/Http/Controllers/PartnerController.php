<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Http\Traits\ImageHandleTraits;
use Exception;

class PartnerController extends Controller
{
    use ImageHandleTraits;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partners = Partner::paginate(10);
        return view('partner.index', compact('partners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('partner.create');
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
            $p = new Partner;
            $p->short_text = $request->short_text;
            if ($request->has('Picture'))
                $p->image = $this->resizeImage($request->Picture, 'uploads/partners', true, 150, 101, true);
           
            if ($p->save()) {
                Toastr::success('Partner Uploaded Successfully!');
                return redirect()->route(currentUser() . '.partner.index');
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
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function show(Partner $partner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $p=Partner::findOrFail(encryptor('decrypt',$id));
        return view('partner.edit',compact('p'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try{
            $p=Partner::findOrFail(encryptor('decrypt',$id));
            $p->short_text = $request->short_text;
            $path='uploads/partners/';
            $dpath='uploads/partners/thumb/';
            if($request->has('Picture') && $request->Picture)
            if($this->deleteImage($p->image,$dpath))
                $p->image=$this->resizeImage($request->Picture,$path,true,150,101,true);
            if($p->save()){
            Toastr::success('Partner Update Successfully!');
            return redirect()->route(currentUser().'.partner.index');
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
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $p= Partner::findOrFail(encryptor('decrypt',$id));
        $path='uploads/partners/thumb/';
        if($this->deleteImage($p->image,$path));
        $p->delete();
        Toastr::warning('Partner Deleted Permanently!');
        return redirect()->back();
    }
}
