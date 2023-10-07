<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Traits\ImageHandleTraits;
use Brian2694\Toastr\Facades\Toastr;
use Exception;
use Carbon\Carbon;
class SettingController extends Controller
{
    use ImageHandleTraits;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting = Setting::first();
        return view('com_profile.index',compact('setting'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $setting=Setting::findOrFail(encryptor('decrypt',$id));
        return view('com_profile.edit',compact('setting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        try {
            $b = Setting::findOrFail(encryptor('decrypt', $id));
            $b->email = $request->email;
            $b->contact = $request->contact;
            $path = 'uploads/setting/';
            $dpath = 'uploads/setting/thumb/';
            if ($request->has('image') && $request->image)
            if ($this->deleteImage($b->image, $dpath))
            $b->company_logo = $this->resizeImage($request->image, $path, true, 80, 88, true);

            $path = 'uploads/payment_logo/';
            $dpath = 'uploads/payment_logo/thumb/';
            if ($request->has('payment_logo') && $request->payment_logo)
            if ($this->deleteImage($b->payment_logo, $dpath))
            $b->payment_logo = $this->resizeImage($request->payment_logo, $path, true, 555, 89, true);

            $path = 'uploads/memeber_logo_1/';
            $dpath = 'uploads/memeber_logo_1/thumb/';
            if ($request->has('memeber_logo_1') && $request->memeber_logo_1)
            if ($this->deleteImage($b->memeber_logo_1, $dpath))
            $b->memeber_logo_1 = $this->resizeImage($request->memeber_logo_1, $path, true, 106, 51, true);

            $path = 'uploads/memeber_logo_2/';
            $dpath = 'uploads/memeber_logo_2/thumb/';
            if ($request->has('memeber_logo_2') && $request->memeber_logo_2)
            if ($this->deleteImage($b->memeber_logo_2, $dpath))
            $b->memeber_logo_2 = $this->resizeImage($request->memeber_logo_2, $path, true, 106, 51, true);


            if ($b->save()) {
                Toastr::success(' Uploaded Successfully!');
                return redirect()->route(currentUser() . '.setting.index');
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
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Setting $setting)
    {
        //
    }
}
