<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Exception;
use App\Http\Traits\ImageHandleTraits;
class MessageController extends Controller
{
    use ImageHandleTraits;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $m = Message::first();
        return view('message.index',compact('m'));
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
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function show(Message $message)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $m=Message::findOrFail(encryptor('decrypt',$id));
        return view('message.edit',compact('m'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $m = Message::findOrFail(encryptor('decrypt', $id));
            $m->overview = $request->overview;
            $m->overview_headline = $request->overview_headline;
            $path = 'uploads/overview_image/';
            $ovpath = 'uploads/overview_image/thumb/';
            if ($request->has('overview_image') && $request->overview_image)
            if ($this->deleteImage($m->overview_image, $ovpath))
            $m->overview_image = $this->resizeImage($request->overview_image, $path, true, 555, 374, true);

            $m->founder_msg = $request->founder_msg;
            $m->founder_headline = $request->founder_headline;
            $path = 'uploads/founder_image/';
            $fpath = 'uploads/founder_image/thumb/';
            if ($request->has('founder_image') && $request->founder_image)
            if ($this->deleteImage($m->founder_image, $fpath))
            $m->founder_image = $this->resizeImage($request->founder_image, $path, true, 555, 374, true);

            $m->chariman_msg = $request->chariman_msg;
            $m->chairman_headline = $request->chairman_headline;
            $path = 'uploads/chairman_image/';
            $chpath = 'uploads/chairman_image/thumb/';
            if ($request->has('chairman_image') && $request->chairman_image)
            if ($this->deleteImage($m->chairman_image, $chpath))
            $m->chairman_image = $this->resizeImage($request->chairman_image, $path, true, 555, 374, true);

            $m->md_msg = $request->md_msg;
            $m->md_headline = $request->md_headline;
            $path = 'uploads/md_image/';
            $mdpath = 'uploads/md_image/thumb/';
            if ($request->has('md_image') && $request->md_image)
            if ($this->deleteImage($m->md_image, $mdpath))
            $m->md_image = $this->resizeImage($request->md_image, $path, true, 555, 374, true);

            $m->mission_vission = $request->mission_vission;
            $m->mission_vission_headline = $request->mission_vission_headline;
            $path = 'uploads/mission_vission_image/';
            $mvpath = 'uploads/mission_vission_image/thumb/';
            if ($request->has('mission_vission_image') && $request->mission_vission_image)
            if ($this->deleteImage($m->mission_vission_image, $mvpath))
            $m->mission_vission_image = $this->resizeImage($request->mission_vission_image, $path, true, 555, 374, true);

            $m->key_management = $request->key_management;
            $m->key_management_headline = $request->key_management_headline;
            $path = 'uploads/key_management_image/';
            $kpath = 'uploads/key_management_image/thumb/';
            if ($request->has('key_management_image') && $request->key_management_image)
            if ($this->deleteImage($m->key_management_image, $kpath))
            $m->key_management_image = $this->resizeImage($request->key_management_image, $path, true, 555, 374, true);

            $m->csr = $request->csr;
            $m->csr_headline = $request->csr_headline;
            $path = 'uploads/csr_image/';
            $cspath = 'uploads/csr_image/thumb/';
            if ($request->has('csr_image') && $request->csr_image)
            if ($this->deleteImage($m->csr_image, $cspath))
            $m->csr_image = $this->resizeImage($request->csr_image, $path, true, 555, 374, true);


            if ($m->save()) {
                Toastr::success(' Updated Successfully!');
                return redirect()->route(currentUser() . '.message.index');
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
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $message)
    {
        //
    }
}
