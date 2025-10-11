<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use Illuminate\Http\Request;
use App\Http\Traits\ImageHandleTraits;

class ProductCategoryController extends Controller
{
    use ImageHandleTraits;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $categories = ProductCategory::latest()->get();
        return view('backend.product-category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = ProductCategory::latest()->get();
        return view('backend.product-category.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:product_categories,name',
            'slug' => 'required'
        ]);
        
        if ($request->has('image')){
            $path='uploads/product-category';
            $imageName= $this->resizeImage($request->image,$path,true,1520,520,false);
            
            $this->saveOriginalImage($request->image,$path,$imageName);
            $request->image = $imageName;
        }

        $category = ProductCategory::create($request->all());
        return redirect()->route(currentUser().'.product-category.index')->with('success', 'Product category created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ReportCategory  $reportCategory
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ReportCategory  $reportCategory
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $category = ProductCategory::find(encryptor('decrypt',$id));
        
        $categories = ProductCategory::where('id','!=',$category->id)->latest()->get();
        return view('backend.product-category.edit', compact('category','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ReportCategory  $reportCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $category = ProductCategory::find(encryptor('decrypt',$id));
        $input = $request->all();
        $request->validate([
            'name' => 'required|unique:product_categories,name,'.$category->id,
            'slug' => 'required'
        ]);
        if ($request->has('image')){
            $path='uploads/product-category';
            $imageName= $this->resizeImage($request->image,$path,true,1520,520,false);
            
            $this->saveOriginalImage($request->image,$path,$imageName);
            $input['image'] = $imageName;
        }
        $category->update($input);
        return redirect()->route(currentUser().'.product-category.index')->with('success', 'Product category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ReportCategory  $reportCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $category = ProductCategory::find(encryptor('decrypt',$id));
        $category->delete();
        return redirect()->route(currentUser().'.product-category.index')->with('success', 'Product category deleted successfully');
    }
}
