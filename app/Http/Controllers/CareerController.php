<?php

namespace App\Http\Controllers;

use App\Models\Career;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Exception;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
class CareerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $career = Career::paginate(10);
        return view('career.index', compact('career'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
            // $request->validate([
            //     'company_id' => 'required',
            //     'position' => 'required',
            //     'upload_file' => 'required',
            //     'g-recaptcha-response' => 'required',
            // ]);
        
            $request->validate([
                'g-recaptcha-response' => 'required',
            ]);

            // Verify the reCAPTCHA response
            $recaptchaSecret = env('GOOGLE_RECAPTCHA_SITE');
            $recaptchaResponse = env('GOOGLE_RECAPTCHA_SECRET');

            // Make the API request to Google to verify the reCAPTCHA response
            $verify = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$recaptchaSecret&response=$recaptchaResponse");
            $responseData = json_decode($verify);

            if (!$responseData->success || $responseData->score < 0.5) {
                // If the reCAPTCHA verification failed, return an error message
                return back()->withErrors(['captcha' => 'reCAPTCHA verification failed. Please try again.']);
            }

            $c = new Career;
           
            if ($request->file('upload_file')->isValid()) {
                $file = $request->file('upload_file');
                $fileName = time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('uploads/career/'), $fileName);
                $c->company_id = $request->company_id;
                $c->position = $request->position;
                $c->upload_file = $fileName;
                if ($c->save()) {
                    Toastr::success('Submitted Successfully!');
                    return redirect()->back();
                } else {
                    Toastr::warning('Please try Again!');
                    return redirect()->back();
                }
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
     * @param  \App\Models\Career  $career
     * @return \Illuminate\Http\Response
     */
    public function show(Career $career)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Career  $career
     * @return \Illuminate\Http\Response
     */
    public function edit(Career $career)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Career  $career
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Career $career)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Career  $career
     * @return \Illuminate\Http\Response
     */
    public function destroy(Career $career)
    {
        //
    }
}
