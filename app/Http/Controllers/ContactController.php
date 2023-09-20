<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Exception;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts =  Contact::paginate(10);
        return view('contact.index',compact('contacts'));
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
        try {
            $c = new Contact();
            $c->name =  $request->name;
            $c->email =  $request->email;
            $c->message =  $request->message;
            if ($c->save()) {
                /*To User */
                /*\Mail::send('mail.reply_user_body', ['inquiry' => $inquiry,'type' => $type], function ($message) use ($inquiry,$v_data){
                    $message->from('info@icarjapan.com', 'Icarjapan')
                            ->to($inquiry->email)
                            ->subject('Inquiry For '.$v_data->name.' and Stock Id '.$v_data->stock_id);
                });*/
                /*To Admin */
                /*\Mail::send('mail.reply_admin_body', ['inquiry' => $inquiry,'v_data' => $v_data,'type' => $type], function ($message) use ($v_data){
                    $message->from('info@icarjapan.com', 'Icarjapan')
                            ->to('icarjapanofficial@gmail.com')
                            ->subject('Inquiry For '.$v_data->name.' and Stock Id '.$v_data->stock_id);
                });*/
                Toastr::success('Message Received!');
                return redirect()->back();
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
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
