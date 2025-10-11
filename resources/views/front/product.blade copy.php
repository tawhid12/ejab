@extends('front.layout.front-layout')
@section('title','Products')
@section('keywords',"Products, Ejab Group, Industries, Bangladesh")
@section('description',"Products, Ejab Group, Industries, Bangladesh")
@push('styles')

@endpush
@section('content')
<div class="ejab-overlay">
    <!-- header section strats -->
    @include('front.includes.nav')
</div>
<section class="about-support">
  <span class="shape"></span>
  <span class="shape2"></span>
  <span class="shape3"></span>
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <h3 class="mb-0">All Products</h3>
      </div>
      <div class="col-lg-6">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb justify-content-end bg-transparent mb-0">
            <li class="breadcrumb-item">
              <a href="#" class="breadcrumb-item router-link-active">Our</a>
            </li>
            <li class="breadcrumb-item">
              <a href="">Products</a>
            </li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</section>
<div class="container py-4">
  <div class="row">
    <div class="col-lg-12 px-2 ">
      <main class="gallery">
        @forelse($products as $product)
        <div class="gallery-item">
            <div class="image-box"  
            data-toggle="modal" 
            data-target="#projectModal"
            data-title="{{$product->name}}"
            data-description="{{$product->description}}"
            data-image="{{asset('uploads/products/'.$product->image)}}"
            data-barcode="{{$product->barcode}}"
            data-brand="{{$product->brand?->title}}"
            data-weight="{{$product->weight}}"
            data-width="{{$product->width}}"
            data-height="{{$product->height}}"
            data-length="{{$product->length}}"
            data-link="{{route('productDetails',$product->barcode)}}">
                <img src="{{asset('uploads/products/thumb/'.$product->image)}}" alt="Product 1">
                <div class="image-overlay">
                    <h3>{{$product->name}}</h3>
                    
                </div>
            </div>
        </div>
        @empty
        <div class="gallery-item">
            <div class="image-box">
                <img src="https://www.free-css.com/assets/files/free-css-templates/preview/page240/present/assets/images/img_3.jpg" alt="Product 2">
            </div>
        </div>
        @endforelse
        
      </main>
    </div>
  </div>
</div>

<!-- Project Details Modal -->
<div class="modal fade" id="projectModal" tabindex="-1" role="dialog" aria-labelledby="projectModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="projectModalLabel">Product Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="project-details">
          <div class="row">
            <div class="col-md-6">
              <img src="" alt="Project Image" class="img-fluid project-image">
            </div>
            <div class="col-md-6">
              <h4 class="project-title mb-3"></h4>
              <p class="project-description mb-4"></p>
              <div class="project-meta">
                <p><strong>barcode:</strong> <span class="project-barcode"></span></p>
                <p><strong>Brand:</strong> <span class="project-brand"></span></p>
                <p><strong>Weight:</strong> <span class="project-weight"></span></p>
                <p><strong>Width:</strong> <span class="project-width"></span></p>
                <p><strong>Height:</strong> <span class="project-height"></span></p>
                <p><strong>Length:</strong> <span class="project-length"></span></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="" class="btn btn-primary project-link">Product Details <i class="fa fa-arrow-right"></i></a>
      </div>
    </div>
  </div>
</div>

@endsection
@push('scripts')
<script>
$(document).ready(function() {
    $('.image-box').on('click', function() {
        // Get the data attributes from the clicked button
        var title = $(this).data('title');
        var description = $(this).data('description');
        var image = $(this).data('image');
        var barcode = $(this).data('barcode');
        var brand = $(this).data('brand');
        var weight = $(this).data('weight');
        var width = $(this).data('width');
        var height = $(this).data('height');
        var length = $(this).data('length');
        var link = $(this).data('link');

        // Update modal content
        $('.project-title').text(title);
        $('.project-description').text(description);
        $('.project-image').attr('src', image);
        $('.project-link').attr('href', link);

        // Build meta data HTML based on available values
        var metaHtml = '';
        
        if (barcode) {
            metaHtml += `<p><strong>Barcode:</strong> <span class="project-barcode">${barcode}</span></p>`;
        }
        
        if (brand) {
            metaHtml += `<p><strong>Brand:</strong> <span class="project-brand">${brand}</span></p>`;
        }
        
        if (weight) {
            metaHtml += `<p><strong>Weight:</strong> <span class="project-weight">${weight}</span></p>`;
        }
        
        if (width) {
            metaHtml += `<p><strong>Width:</strong> <span class="project-width">${width}</span></p>`;
        }
        
        if (height) {
            metaHtml += `<p><strong>Height:</strong> <span class="project-height">${height}</span></p>`;
        }
        
        if (length) {
            metaHtml += `<p><strong>Length:</strong> <span class="project-length">${length}</span></p>`;
        }

        // Update meta data section
        $('.project-meta').html(metaHtml);
    });
});
</script>
@endpush