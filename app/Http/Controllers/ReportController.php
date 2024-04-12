<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Models\ReportType;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Exception;
use File;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reports = Report::paginate(10);
        return view('reports.index', compact('reports'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $reportType = ReportType::get();
        return view('reports.create',compact('reportType'));
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
            $r = new Report;

            if ($request->file('upload_file')->isValid()) {
                $file = $request->file('upload_file');
                $fileName = time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('uploads/report/'), $fileName);
                $r->upload_file = $fileName;
                $r->title = $request->title;
                $r->report_type_id = $request->report_type_id;
                $r->published_date = $request->published_date;
                $r->unpublished_date = $request->unpublished_date;
                if ($r->save()) {
                    Toastr::success('Uploaded Successfully!');
                    return redirect()->route(currentUser() . '.report.index');
                } else {
                    Toastr::warning('Please try Again!');
                    return redirect()->back();
                }
            }else {
                    Toastr::warning('You have to choice a file to upload.');
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
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function show(Report $report)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function edit(Report $report)
    {
        $reportType = ReportType::get();
        return view('reports.edit',compact('reportType','report'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $r = Report::findOrFail(encryptor('decrypt',$id));

            if ($request->file('upload_file')->isValid()) {

                $path='uploads/report/'.$r->upload_file;
                if (File::exists(public_path($path))) {
                    File::delete(public_path($path));
                }

                $file = $request->file('upload_file');
                $fileName = time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('uploads/report/'), $fileName);
                $r->upload_file = $fileName;
                $r->title = $request->title;
                $r->report_type_id = $request->report_type_id;
                $r->published_date = $request->published_date;
                $r->unpublished_date = $request->unpublished_date;
                if ($r->save()) {
                    Toastr::success('Uploaded Successfully!');
                    return redirect()->route(currentUser() . '.report.index');
                } else {
                    Toastr::warning('Please try Again!');
                    return redirect()->back();
                }
            }else {
                    Toastr::warning('You have to choice a file to upload.');
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
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $r= Report::findOrFail(encryptor('decrypt',$id));
        $path='uploads/report/'.$r->upload_file;
        if (File::exists(public_path($path))) {
            File::delete(public_path($path));
        }
        $r->delete();
        Toastr::warning('Report Deleted Permanently!');
        return redirect()->back();
    }
}
