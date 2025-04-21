@extends('front.layout.front-layout')
@section('pageTitle','EJAB Group')
@section('meta')
@endsection
@section('pageSubTitle',' HOME')
@push('styles')
<style>
/* Single Product View Styles */
.product-details {
    padding: 40px 0;
}

.product-image {
    border-radius: 10px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    width: 100%;
    height: auto;
    object-fit: cover;
}

.product-info {
    padding: 20px;
}

.product-title {
    font-size: 32px;
    color: #333;
    margin-bottom: 20px;
    font-weight: 600;
}

.product-description {
    color: #666;
    font-size: 16px;
    line-height: 1.6;
    margin-bottom: 30px;
}

.product-meta {
    background: #f8f9fa;
    padding: 20px;
    border-radius: 10px;
    margin-bottom: 30px;
}

.product-meta p {
    display: flex;
    align-items: center;
    margin-bottom: 12px;
    color: #555;
}

.product-meta strong {
    min-width: 100px;
    color: #333;
    font-weight: 600;
}

/* Related Products Styles */
.related-products {
    padding: 40px 0;
    background: #f8f9fa;
}

.related-products h2 {
    font-size: 28px;
    color: #333;
    margin-bottom: 30px;
    text-align: center;
}

.related-product-card {
    background: white;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
    margin-bottom: 20px;
}

.related-product-card:hover {
    transform: translateY(-5px);
}

.related-product-image {
    width: 100%;
    height: 200px;
    object-fit: cover;
}

.related-product-info {
    padding: 15px;
}

.related-product-title {
    font-size: 18px;
    color: #333;
    margin-bottom: 10px;
    font-weight: 600;
}

.related-product-description {
    color: #666;
    font-size: 14px;
    margin-bottom: 15px;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.view-details-btn {
    display: inline-block;
    padding: 8px 20px;
    background: #9b87f5;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    transition: background 0.3s ease;
}

.view-details-btn:hover {
    background: #7E69AB;
    color: white;
    text-decoration: none;
}
</style>
@endpush

@section('content')
<div class="ejab-overlay">
    @include('front.includes.nav')
</div>

<section class="about-support">
    <span class="shape"></span>
    <span class="shape2"></span>
    <span class="shape3"></span>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h3 class="mb-0">Product Details</h3>
            </div>
            <div class="col-lg-6">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-end bg-transparent mb-0">
                        <li class="breadcrumb-item">
                            <a href="" class="breadcrumb-item">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{route('product')}}">Products</a>
                        </li>
                        <li class="breadcrumb-item active">
                            {{$product->name}}
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<!-- Single Product Details -->
<section class="product-details">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <img src="{{asset('uploads/products/'.$product->image)}}" alt="{{$product->name}}" class="product-image">
            </div>
            <div class="col-lg-6">
                <div class="product-info">
                    <h1 class="product-title">{{$product->name}}</h1>
                    <p class="product-description">{{$product->description}}</p>
                    <div class="product-meta">
                        @if($product->barcode)
                        <p><strong>Barcode:</strong> {{$product->barcode}}</p>
                        @endif
                        @if($product->brand)
                        <p><strong>Brand:</strong> {{$product->brand->title}}</p>
                        @endif
                        @if($product->weight)
                        <p><strong>Weight:</strong> {{$product->weight}}</p>
                        @endif
                        @if($product->width)
                        <p><strong>Width:</strong> {{$product->width}}</p>
                        @endif
                        @if($product->height)
                        <p><strong>Height:</strong> {{$product->height}}</p>
                        @endif
                        @if($product->length)
                        <p><strong>Length:</strong> {{$product->length}}</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Related Products -->
<section class="related-products">
    <div class="container">
        <h2>Related Products</h2>
        <div class="row">
            @foreach($relatedProducts as $relatedProduct)
            <div class="col-md-4">
                <div class="related-product-card">
                    <img src="{{asset('uploads/products/thumb/'.$relatedProduct->image)}}" alt="{{$relatedProduct->name}}" class="related-product-image">
                    <div class="related-product-info">
                        <h3 class="related-product-title">{{$relatedProduct->name}}</h3>
                        <p class="related-product-description">{{$relatedProduct->description}}</p>
                        <a href="{{route('productDetails',$relatedProduct->barcode)}}" class="view-details-btn">View Details</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection