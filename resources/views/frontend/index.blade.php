@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')
    
<section class="home hero-section">
    <video autoplay muted loop>
        <source src="{{url('videos/london.mp4')}}" type="video/mp4">
    </video>
    <div class="container">
        <div class="content-block">
            <div class="title-block">
                <div class="subtitle">We are expert in</div>
                <div class="title">Legal <br> Profession</div>
            </div>
            <div class="text-block">VMD Solicitors is a well-established, vibrant and friendly law practice in North London. We advise and represent clients on a wide range of practice areas form immigration to Civil Disputes.</div>
        </div>
        <div class="scroll-btn">
            <div class="inner-wrapper">
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
            </div>
        </div>
    </div>
</section>

<section class="home-about-section">
    <div class="container">
        <div class="row g-4">
            <div class="col-xl-7">
                <div class="main-block">
                    <div class="title">The Firm</div>
                    <p>SVMD Solicitors is a well-established, vibrant and friendly law practice in North London. We advise and represent clients on a wide range of practice areas form immigration to Civil Disputes.</p>
                    <div class="nav-links">
                        <a href="#" class="nav-link">Explore our Expertise</a>
                        <a href="#" class="nav-link">Meet our team</a>
                        <a href="#" class="nav-link">More about The Firm </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-5">
                <div class="row g-4">
                    <div class="col-12">
                        <div class="feature-block top-block bg-teal">
                            <div class="title">We have you <br> covered</div>
                            <a href="#" class="nav-link">Explore about us page</a>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="feature-block bg-dark-blue">
                            <div class="title">Equality and Diversity</div>
                            <p>SVMD Solicitors is a well-established, vibrant and friendly law practice in North London. We advise and represent clients on a wide range of practice areas form immigration to Civil Disputes. </p>
                            <a href="#" class="nav-link">Explore about us page</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="home-practice-area-section">
    <div class="container">
        <div class="row g-0">
            <div class="col-lg-11">
                <div class="content-block">
                    <div class="header">Our Practice Areas</div>
                    <div class="area-slider" id="areaSlider">
                        <div class="slide-wrapper">
                            <div class="area-slide">
                                <div class="index">01</div>
                                <div class="text-block">
                                    <div class="title">Debt Recovery</div>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Numquam unde non perspiciatis id, amet sequi!</p>
                                </div>
                                <img src="{{url('images/home/area-slide-1.png')}}">
                            </div>
                            <div class="area-slide">
                                <div class="index">01</div>
                                <div class="text-block">
                                    <div class="title">Debt Recovery</div>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Numquam unde non perspiciatis id, amet sequi! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Numquam unde non perspiciatis id, amet sequi!</p>
                                </div>
                                <img src="{{url('images/home/area-slide-2.png')}}">
                            </div>
                            <div class="area-slide">
                                <div class="index">01</div>
                                <div class="text-block">
                                    <div class="title">Debt Recovery</div>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Numquam unde non perspiciatis id, amet sequi!</p>
                                </div>
                                <img src="{{url('images/home/area-slide-1.png')}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-1">
                <div class="devider"></div>
            </div>
        </div>
    </div>
</section>

@if(count($testimonials) != 0)
<section class="home-testimony-section">
    <div class="container">
        <div class="header">
            <div class="title">What Do they Say <br> About VMD?</div>
            <p>We provide the best solution for each client, they get tailor-made legal advice and we stand with them till everything is sorted.</p>
            <img src="{{url('images/home/comma-lg.png')}}" alt="">
        </div>
        <div class="splide testimonial-slider" id="testimonialSlider">
            <div class="splide__track">
                <ul class="splide__list">
                    @foreach($testimonials as $testimonial)
                        <li class="splide__slide">
                            <div class="slide">
                                <img src="{{url('images/home/comma-sm.png')}}" alt="">
                                <p>{{$testimonial->description}}</p>
                                <div class="profile-block">
                                    <div class="image-block">
                                        <img src="{{uploaded_asset($testimonial->image)}}" alt="">
                                    </div>
                                    <div class="text-block">
                                        <div class="name">{{$testimonial->name}}</div>
                                        <div class="star-rating">
                                            @if($testimonial->stars == '1 Star')
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star"></i>
                                                <i class="bi bi-star"></i>
                                                <i class="bi bi-star"></i>
                                                <i class="bi bi-star"></i>
                                            @elseif($testimonial->stars == '2 Stars')
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star"></i>
                                                <i class="bi bi-star"></i>
                                                <i class="bi bi-star"></i>
                                            @elseif($testimonial->stars == '3 Stars')
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star"></i>
                                                <i class="bi bi-star"></i>
                                            @elseif($testimonial->stars == '4 Stars')
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star"></i>
                                            @elseif($testimonial->stars == '5 Stars')
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach


                </ul>
            </div>
        </div>
    </div>
</section>
@endif


@if(count($posts) != 0)
<section class="home-insight-section">
    <div class="container">
        <div class="header">
            <div class="title">Insights Center</div>
            <div class="input-group">
                <i class="bi bi-search"></i>
                <input type="text" class="form-control" name="search" placeholder="I'm looking for...">
            </div>
        </div>
        <div class="splide insight-slider" id="insightSlider">
            <div class="splide__track">
                <ul class="splide__list">

                    @foreach($posts as $post)
                        <li class="splide__slide">
                            <div class="slide">
                                <div class="image-block">
                                    <img src="{{uploaded_asset($post->feature_image)}}" alt="">
                                </div>
                                <div class="content-block">
                                    <div class="subtitle">Report</div>
                                    <div class="title">{{$post->title}}</div>
                                    <p>{!!$post->description!!}</p>
                                </div>
                            </div>
                        </li>
                    @endforeach
                    
                </ul>
            </div>
        </div>
    </div>
</section>
@endif



@endsection

@push('after-scripts')

<script>
    var testimonialSlider = new Splide( '#testimonialSlider', {
    type   : 'loop',
    fixedWidth: '600px',
    gap: '2rem',
    arrows: false,
    breakpoints: {
            991: {
                fixedWidth: '300px',
            },
    },
    } );
    testimonialSlider.mount();
</script>

<script>
    var insightSlider = new Splide( '#insightSlider', {
    type   : 'loop',
    fixedWidth: '800px',
    gap: '2rem',
    arrows: false,
    pagination: false,
    breakpoints: {
            991: {
                fixedWidth: '300px',
            },
    },
    } );

    insightSlider.mount();
</script>

@endpush
