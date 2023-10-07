@php $setting=\App\Models\setting::first(); @endphp       
       <!-- header section strats -->
        <header class="header_section header-bg mb-3">
            <div class="container">
                <nav class="navbar navbar-expand-lg custom_nav-container">
                    <div class="logo-div">
                        <a class="" href="index.html">
                            <img src="{{asset('uploads/setting/thumb/'.$setting->company_logo)}}" alt="" />
                        </a>
                    </div>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
                            <ul class="navbar-nav">
                                @php $rows = DB::table('front_menus')->where('parent_id',0)->where('status',1)->orderBy("rang");
                                $flcount=$rows->count();
                                @endphp
                                @forelse($rows->get() as $i=>$mf)
                                @php $rows_second = DB::select("SELECT * FROM front_menus WHERE parent_id='{$mf->id}' and status='1' ORDER BY rang"); @endphp
                                    @if(!$rows_second)
                                    <li class="nav-item active">
                                        <a class="nav-link" href="{{url($mf->href)}}">{{$mf->name}} <span class="sr-only">(current)</span></a>
                                    </li>
                                    @else
                                        
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="{{url($mf->href)}}" id="{{$mf->name}}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            {{$mf->name}}
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="{{$mf->name}}">
                                               
                                        
                                                @php $rows_third = DB::select("SELECT * FROM front_menus WHERE parent_id='{$mf->id}' and status='1' ORDER BY rang"); @endphp
                                                @if($rows_third)
                                                    @foreach($rows_third as $mt)
                                                    <a class="dropdown-item" href="{{url($mt->href)}}">{{$mt->name}}</a>
                                                    @endforeach
                                                @endif
                                            </div>
                                           
                           
                                        </li>
                                        
                                    @endif
                                @empty
                                @endforelse
                                {{--<li class="nav-item active">
                                    <a class="nav-link" href="{{route('front')}}">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="About" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        About us
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="About">
                                        <a class="dropdown-item" href="{{route('overview')}}">Overview</a>
                                        <a class="dropdown-item" href="#">Founder Chairman</a>
                                        <a class="dropdown-item" href="#">Message from Chairperson</a>
                                        <a class="dropdown-item" href="#">Message from Managing Director</a>
                                        <a class="dropdown-item" href="#">Board of Directors</a>
                                        <a class="dropdown-item" href="#">Key Management</a>
                                        <a class="dropdown-item" href="#">Our Mission & Vision</a>
                                        <a class="dropdown-item" href="#">CSR</a>
                                        <a class="dropdown-item" href="#">Group Logo</a>
                                    </div>
                                </li>
                                @php $business = \DB::table('our_businesses')->select('heading_text','page_slug')->get(); @endphp
                                <li class="nav-item @if(count($business) > 0) dropdown @endif">
                                    <a class="nav-link @if(count($business) > 0) dropdown-toggle @endif" href="#" id="Business" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Our Business
                                    </a>
                                    
                                    @if(count($business) > 0)
                                    <div class="dropdown-menu" aria-labelledby="Business">
                                        @forelse($business as $b)
                                        <a class="dropdown-item" href="{{route('singleBusinessPage',$b->page_slug)}}">{{$b->heading_text}}</a>
                                        @empty
                                        @endforelse
                                    </div>
                                    @endif
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('brand')}}"> Our Brands </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="Media" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Media
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="Media">
                                        <a class="dropdown-item" href="#">News Letter</a>
                                        <a class="dropdown-item" href="{{route('pGallery')}}">Photo Gallery</a>
                                        <a class="dropdown-item" href="{{route('vGallery')}}">Videos</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('team')}}"> Our Team </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('career')}}"> Career </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('contact')}}">Contact us</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="Reports" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Reports
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="Reports">
                                        <a class="dropdown-item" href="{{route('report')}}">Financial Reports</a>
                                    </div>
                                </li>
                            </ul>--}}

                            <!-- <form class="form-inline">
                                <button class="btn my-2 my-sm-0 nav_search-btn" type="submit"></button>
                            </form> -->
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <!-- end header section -->