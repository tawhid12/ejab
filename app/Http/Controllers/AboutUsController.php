<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Http\Traits\ImageHandleTraits;
use Exception;

class AboutUsController extends Controller
{
    use ImageHandleTraits;
    public function index()
    {
        $about_us = About::get();
        return view('aboutus.index', compact('about_us'));
    }
    public function create()
    {
        return view('aboutus.create');
    }
    public function store(Request $request)
    {
        try {
            $a = new About;
            if ($request->has('Picture'))
                $a->image = $this->resizeImage($request->Picture, 'uploads/about_us', true, 555, 370, true);
            $a->link = $request->Link;
            $a->description = $request->description;
            if ($a->save()) {
                Toastr::success('About Us Successfully!');
                return redirect()->route(currentUser() . '.aboutus.index');
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
    public function edit($id)
    {
        $a=About::findOrFail(encryptor('decrypt',$id));
        return view('aboutus.edit',compact('a'));
    }
    public function update(Request $request, $id)
    {
        try{
            $a=About::findOrFail(encryptor('decrypt',$id));

            $path='uploads/aboutus';
            $dpath='uploads/aboutus/thumb/';
            if($request->has('Picture') && $request->Picture)
            if($this->deleteImage($a->image,$dpath))
                $a->image=$this->resizeImage($request->Picture,$path,true,555,370,true);

            $a->link=$request->Link;
            $a->description=$request->description;
            if($a->save()){
            Toastr::success('About Us Update Successfully!');
            return redirect()->route(currentUser().'.aboutus.index');
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
}
