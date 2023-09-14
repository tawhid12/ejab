<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Http\Traits\ImageHandleTraits;
use Exception;

class BlogController extends Controller
{
    use ImageHandleTraits;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::paginate(10);
        return view('blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
            $b = new Blog;
            $b->heading_text = $request->heading_text;
            $b->description = $request->description;
            $b->link = $request->link;
            if ($request->has('Picture'))
                $b->image = $this->resizeImage($request->Picture, 'uploads/blogs', true, 358, 239, true);
           
            if ($b->save()) {
                Toastr::success('Blog Uploaded Successfully!');
                return redirect()->route(currentUser() . '.blog.index');
            } else {
                Toastr::warning('Please try Again!');
                return redirect()->back();
            }
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $Blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $Blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $Blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $b=Blog::findOrFail(encryptor('decrypt',$id));
        return view('blog.edit',compact('b'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $Blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try{
            $b=Blog::findOrFail(encryptor('decrypt',$id));
            $b->heading_text = $request->heading_text;
            $b->description = $request->description;
            $b->link = $request->link;
            $path='uploads/blogs/';
            $dpath='uploads/blogs/thumb/';
            if($request->has('Picture') && $request->Picture)
            if($this->deleteImage($b->image,$dpath))
                $b->image=$this->resizeImage($request->Picture,$path,true,358,239,true);
            if($b->save()){
            Toastr::success('Blog Update Successfully!');
            return redirect()->route(currentUser().'.blog.index');
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
     * @param  \App\Models\Blog  $Blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $b= Blog::findOrFail(encryptor('decrypt',$id));
        $path='uploads/blogs/thumb/';
        if($this->deleteImage($b->image,$path));
        $b->delete();
        Toastr::warning('Blog Deleted Permanently!');
        return redirect()->back();
    }
}
