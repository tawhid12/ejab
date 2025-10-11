@extends('front.layout.front-layout')
@section('title','Products')
@section('keywords',"Products, Ejab Group, Industries, Bangladesh")
@section('description',"Products, Ejab Group, Industries, Bangladesh")
@push('styles')
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />
	<style>
		#product-carousels { height: 320px; position: relative; }
		.product-carousel .item { position: relative; display: flex; flex-direction: column; justify-content: flex-start; border-radius: 12px; overflow: hidden; height: 300px; background: #f9f9f9; transition: transform 0.3s ease; }
		.product-carousel .item img { width: 100%; height: 220px; object-fit: contain; border-radius: 12px; cursor: pointer; transition: transform 0.3s ease; }
		/* Hover Zoom */
		.product-carousel .item:hover img { transform: scale(1.1); }

		.product-carousel .item p { margin-top: 8px; font-size: 1rem; text-align: center; flex-shrink: 0; }

		.carousel-nav { position: absolute; top: 50%; transform: translateY(-50%); width: 40px; height: 40px; background: rgba(45, 202, 5, 0.8); color: #fff; border-radius: 50%; display: flex; justify-content: center; align-items: center; cursor: pointer; opacity: 0; transition: opacity 0.3s; z-index: 20; }
		#product-carousels:hover .carousel-nav { opacity: 1; }
		.nav-left { left: -10px; }
		.nav-right { right: -10px; }

		@media(max-width: 767px){ 
		  .product-carousel .item { height: 240px; } 
		  .product-carousel .item img { height: 180px; } 
		  .carousel-nav { opacity: 1; } 
		}
	</style>
@endpush
@section('content')
<!-- slider SECTION================================================== -->
<section class="page-section black-section innerpage-heading-2 padfix" style="background: url('{{asset('uploads/product-category/thumb/'.$category->image)}}') no-repeat center center; background-size: cover;">
	<div class="relative container">
		<div class="eight columns">
			<div class="page-heading">
			<!-- Content here -->
			</div>
		</div>
	</div>              
</section>
<div class="curve-container n20"> <svg xmlns="http://www.w3.org/2000/svg" class="curve-container__curve curve-three" viewBox="0 0 1440 68" enable-background="new 0 0 1440 68"><path d="m1622.3 1937.7c0 0-410.7 169.1-913.4 75.5-502.7-93.6-977.7 56.3-977.7 56.3v440h1891.1v-571.8" fill="#fff" transform="translate(0-1977)"></path></svg> </div>  
	<!-- SECTION ABOUT==================================================  --> 
    <section class="page-section bg_color--6 sp-top40 sp-bottom0" id="scroll-link" style="background-color:#fff;">
       <section style="padding:40px 0; margin-bottom: 50px;"> 
         <div class="container">
 
         <h2 style="color:#54A50A; font-weight:700; font-size:2rem; margin-bottom:5px; text-align:left;">
           Our Product
         </h2>
 
         <div class="d-flex justify-content-between align-items-center" 
            style="border-bottom:1px solid #ccc; padding-bottom:15px; margin-bottom:20px;">
           <h2 style="margin:0; font-weight:600; font-size:2rem; color:#000;">
           {{$category->name}} Product List
           </h2>
           <img src="{{asset('uploads/product-category/thumb/'.$category->image)}}" alt="icon" style="width:134px; height:114px; object-fit:contain;">
         </div>
 
         <div class="d-flex" style="gap:20px; margin-bottom:20px;">
            @forelse($category->children as $i=>$subcategory)
           <span class="px-3 py-2 rounded-pill filter-btn @if($i==0) active @endif" data-category="{{$subcategory->slug}}"
             style="cursor:pointer;border-radius: 7px; font-size:1rem; border:1px solid #54A50A; @if($i==0) color:#fff; background:#54A50A; @else color:#54A50A; background:#fff; @endif">
           {{$subcategory->name}}
           </span>
		   @empty
		   <span class="px-3 py-2 rounded-pill filter-btn active" data-category="chips"
             style="cursor:pointer;border-radius: 7px; font-size:1rem; border:1px solid #54A50A; color:#fff; background:#54A50A;">
           Chips
           </span>
           <span class="px-3 py-2 rounded-pill filter-btn" data-category="cake"
             style="cursor:pointer;border-radius: 7px; font-size:1rem; border:1px solid #54A50A; color:#54A50A; background:#fff;">
           Cake
           </span>
           <span class="px-3 py-2 rounded-pill filter-btn" data-category="biscuits"
             style="cursor:pointer;border-radius: 7px; font-size:1rem; border:1px solid #54A50A; color:#54A50A; background:#fff;">
           Biscuits
           </span>
		   @endforelse
         </div>
 
         <div id="product-carousels" style="margin-top:30px; position:relative;">
			@forelse($category->children as $i=>$subcategory)
           <div class="owl-carousel owl-theme product-carousel" id="active_cat{{ $i }}" data-category="{{$subcategory->slug}}"></div>
		   @empty
		   <div class="owl-carousel owl-theme product-carousel" data-category="chips"></div>
		   <div class="owl-carousel owl-theme product-carousel" data-category="cake"></div>
		   <div class="owl-carousel owl-theme product-carousel" data-category="biscuits"></div>
		   @endforelse
 
           <div class="carousel-nav nav-left">&#10094;</div>
           <div class="carousel-nav nav-right">&#10095;</div>
         </div>
         </div>
       </section>
     </section>

@endsection
@push('scripts')


			<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
			<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>

			<script>
			const products = {
				@forelse($category->children as $subcategory)
				{{$subcategory->slug}}: [
					@forelse($subcategory->products as $product)
					{img: "{{asset('uploads/products/thumb/'.$product->image)}}", text: "{{$product->name}}"},
					@empty
					{img: "{{asset('front/assets/images/products/Kiddo Chocolate  Cake Mockup.png')}}", text: "Crispy potato chips"},
					@endforelse
				],
				@empty
				chips: [
					{img: "{{asset('front/assets/images/products/Kiddo Chocolate  Cake Mockup.png')}}", text: "Crispy potato chips"},
				],
				cake: [
					{img: "{{asset('front/assets/images/products/Kiddo Chocolate  Cake Mockup.png')}}", text: "Crispy potato chips"},
				],
				biscuits: [
					{img: "{{asset('front/assets/images/products/Kiddo Chocolate  Cake Mockup.png')}}", text: "Crispy potato chips"},
				],
				@endforelse
			  
			};
			$(".product-carousel").each(function() {
			  const category = $(this).data("category");
			  products[category].forEach((item) => {
				$(this).append(`
				  <div class="item">
					<a data-fancybox="gallery-${category}" href="${item.img}" data-caption="${item.text}">
					  <img src="${item.img}" alt="${item.text}">
					</a>
					<p>${item.text}</p>
				  </div>
				`);
			  });

			  $(this).owlCarousel({
				loop: false,   // 🔹 আর রিপিট করবে না
				margin: 15,
				nav: false,
				dots: false,
				autoplay: true,
				autoplayTimeout: 3000,
				smartSpeed: 800,
				responsive:{
				  0:{ items:2 },
				  576:{ items:2 },
				  768:{ items:3 },
				  992:{ items:4 }
				}
			  }).on("translated.owl.carousel", function(e) {
				const carousel = $(this).data("owl.carousel");
				if (carousel.current() === carousel.items().length - carousel.settings.items) {
				  // 🔹 শেষ slide এ গেলে আবার প্রথম থেকে autoplay শুরু হবে
				  setTimeout(() => {
					$(this).trigger("to.owl.carousel", [0, 500]);
				  }, 3000); // same autoplay delay
				}
			  });
			});


			// Fancybox config: next/prev + close only
			Fancybox.bind("[data-fancybox]", {
			  Toolbar: { display: ["close","prev","next"] },
			  Image: { zoom: false, fit: "contain" },
			  caption: (fancybox, carousel, slide) => slide.$trigger.dataset.caption,
			  placeFocusBack: false
			});

			// Show first tab initially
			$(".product-carousel").hide();
			$(".product-carousel[id='active_cat0']").show();

			// Tab switch
			$(".filter-btn").on("click", function(){
			  $(".filter-btn").css({background:"#fff", color:"#54A50A"});
			  $(this).css({background:"#54A50A", color:"#fff"});
			  const category = $(this).data("category");
			  $(".product-carousel:visible").fadeOut(300);
			  setTimeout(() => { $(`.product-carousel[data-category='${category}']`).fadeIn(300); }, 300);
			});

			// Carousel nav
			$("#product-carousels .nav-left").on("click", function(){ $("#product-carousels .product-carousel:visible").trigger('prev.owl.carousel'); });
			$("#product-carousels .nav-right").on("click", function(){ $("#product-carousels .product-carousel:visible").trigger('next.owl.carousel'); });
			</script>

@endpush