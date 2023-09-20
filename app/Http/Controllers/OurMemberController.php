<?php

namespace App\Http\Controllers;

use App\Models\OurMember;
use Illuminate\Http\Request;
use App\Http\Traits\ImageHandleTraits;
use Brian2694\Toastr\Facades\Toastr;
use Exception;
use Carbon\Carbon;

class OurMemberController extends Controller
{
    use ImageHandleTraits;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ourmember=OurMember::paginate(10);
        return view('ourmember.index',compact('ourmember'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ourmember.create');
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
            $b = new OurMember;
            $b->given_name = $request->given_name;
            $b->designation = $request->designation;
            $b->linked_in_profile = $request->linked_in_profile;
            $b->facebook_profile = $request->facebook_profile;
            $b->details = $request->details;
            if ($request->has('image'))
                $b->image = $this->resizeImage($request->image, 'uploads/ourmember', true, 409, 333, true);

            if ($b->save()) {
                Toastr::success('Member Uploaded Successfully!');
                return redirect()->route(currentUser() . '.ourMember.index');
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
     * @param  \App\Models\OurMember  $ourMember
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OurMember  $ourMember
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $b=OurMember::findOrFail(encryptor('decrypt',$id));
        return view('ourmember.edit',compact('b'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OurMember  $ourMember
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $b = Ourmember::findOrFail(encryptor('decrypt', $id));
            $b->given_name = $request->given_name;
            $b->designation = $request->designation;
            $b->linked_in_profile = $request->linked_in_profile;
            $b->facebook_profile = $request->facebook_profile;
            $b->details = $request->details;
            $path = 'uploads/ourmember/';
            $dpath = 'uploads/ourmember/thumb/';
            if ($request->has('image') && $request->image)
            if ($this->deleteImage($b->image, $dpath))
            $b->image = $this->resizeImage($request->image, $path, true, 409, 333, true);


            if ($b->save()) {
                Toastr::success('Member Uploaded Successfully!');
                return redirect()->route(currentUser() . '.ourMember.index');
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
     * @param  \App\Models\OurMember  $ourMember
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $b= OurMember::findOrFail(encryptor('decrypt',$id));
        $path = 'uploads/ourmember/thumb/';
        if ($this->deleteImage($b->image, $path));
        $b->delete();
        Toastr::warning('Deleted Permanently!');
        return redirect()->back();
    }
}
