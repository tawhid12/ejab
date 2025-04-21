<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Brand;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Http\Traits\ImageHandleTraits;

class ProductController extends Controller
{
    use ImageHandleTraits;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = Brand::all();
        return view('product.create', compact('brands'));
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
            $product = new Product();
            $product->name = $request->name;
            $product->brand_id = $request->brand_id;
            $product->description = $request->description;
            $product->barcode = $request->barcode;

        if ($request->has('image')){
            $path='uploads/products';
            $imageName= $this->resizeImage($request->image,$path,true,254,143,false);
            
            $this->saveOriginalImage($request->image,$path,$imageName);
             $product->image = $imageName;
        }
        
        $product->weight = $request->weight;
        $product->width = $request->width;
        $product->height = $request->height;
        $product->length = $request->length;
        $product->save();
        return redirect()->route(currentUser().'.product.index')->with('success', 'Product created successfully');
        } catch (\Exception $e) {
            dd($e);
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find(encryptor('decrypt',$id));
        $brands = Brand::all();
        return view('product.edit', compact('product', 'brands'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $product = Product::find(encryptor('decrypt',$id));
            $product->name = $request->name;
            $product->brand_id = $request->brand_id;
            $product->description = $request->description;
            $product->barcode = $request->barcode;

            if ($request->has('image')){
                $path='uploads/products';
                $dpath='uploads/products/thumb/';
                $imageName= $this->resizeImage($request->image,$path,true,254,143,false);
                $this->saveOriginalImage($request->image,$path,$imageName);
                if($imageName){
                    $this->deleteImage($product->image,$path);
                    $this->deleteImage($product->image,$dpath);
                    $product->image = $imageName;
                }
            }

            $product->weight = $request->weight;
            $product->width = $request->width;
            $product->height = $request->height;
            $product->length = $request->length;
            $product->save();
            return redirect()->route(currentUser().'.product.index')->with('success', 'Product updated successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find(encryptor('decrypt',$id));
        $product->delete();
        return redirect()->route(currentUser().'.product.index')->with('success', 'Product deleted successfully');
    }
}
