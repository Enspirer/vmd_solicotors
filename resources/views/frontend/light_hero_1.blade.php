@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')
    
<section class="home hero-section">
    <div class="overlay"></div>
    <video autoplay muted loop>
        <source src="{{url('videos/london-light-1.mp4')}}" type="video/mp4">
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
            <div class="dot"></div>
        </div>
    </div>
</section>

<section class="home-about-section">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-7">
                <div class="main-block" style="background: linear-gradient(to bottom, rgba(0, 19, 22, 0.9), rgba(0, 19, 22, 0.9)), url('{{url('images/home/home-about.png')}}');">
                    <div class="title">The Firm</div>
                    <p>SVMD Solicitors is a well-established, vibrant and friendly law practice in North London. We advise and represent clients on a wide range of practice areas form immigration to Civil Disputes.</p>
                    <div class="nav-links">
                        <a href="#" class="nav-link">Explore our Expertise</a>
                        <a href="#" class="nav-link">Meet our team</a>
                        <a href="#" class="nav-link">More about The Firm </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
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
            <div class="col-xl-11">
                <div class="content-block">
                    <div class="header">Our Practice Areas</div>
                    <div class="splide area-slider" role="group" id="areaSlider">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide">
                                    <a href="#">
                                        <div class="area-slide">
                                            <div class="index">01</div>
                                            <div class="text-block">
                                                <div class="title">Civil Litigation</div>
                                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Numquam unde non perspiciatis id, amet sequi!</p>
                                            </div>
                                            <img src="{{url('images/home/area-slide-1.png')}}">
                                        </div>
                                    </a>
                                </li>
                                <li class="splide__slide">
                                    <a href="#">
                                        <div class="area-slide">
                                            <div class="index">02</div>
                                            <div class="text-block">
                                                <div class="title">Contract Disputes</div>
                                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Numquam unde non perspiciatis id, amet sequi! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Numquam unde non perspiciatis id, amet sequi!</p>
                                            </div>
                                            <img src="{{url('images/home/area-slide-2.png')}}">
                                        </div>
                                    </a>
                                </li>
                                <li class="splide__slide">
                                    <a href="#">
                                        <div class="area-slide">
                                            <div class="index">03</div>
                                            <div class="text-block">
                                                <div class="title">Debt Recovery</div>
                                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Numquam unde non perspiciatis id, amet sequi!</p>
                                            </div>
                                            <img src="{{url('images/home/area-slide-1.png')}}">
                                        </div>
                                    </a>
                                </li>
                                <li class="splide__slide">
                                    <a href="#">
                                        <div class="area-slide">
                                            <div class="index">04</div>
                                            <div class="text-block">
                                                <div class="title">Drafting and Document Review</div>
                                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Numquam unde non perspiciatis id, amet sequi!</p>
                                            </div>
                                            <img src="{{url('images/home/area-slide-1.png')}}">
                                        </div>
                                    </a>
                                </li>
                                <li class="splide__slide">
                                    <a href="#">
                                        <div class="area-slide">
                                            <div class="index">05</div>
                                            <div class="text-block">
                                                <div class="title">Employment</div>
                                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Numquam unde non perspiciatis id, amet sequi!</p>
                                            </div>
                                            <img src="{{url('images/home/area-slide-1.png')}}">
                                        </div>
                                    </a>
                                </li>
                                <li class="splide__slide">
                                    <a href="#">
                                        <div class="area-slide">
                                            <div class="index">06</div>
                                            <div class="text-block">
                                                <div class="title">Immigration</div>
                                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Numquam unde non perspiciatis id, amet sequi!</p>
                                            </div>
                                            <img src="{{url('images/home/area-slide-1.png')}}">
                                        </div>
                                    </a>
                                </li>
                                <li class="splide__slide">
                                    <a href="#">
                                        <div class="area-slide">
                                            <div class="index">07</div>
                                            <div class="text-block">
                                                <div class="title">Landlord and Tenant</div>
                                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Numquam unde non perspiciatis id, amet sequi!</p>
                                            </div>
                                            <img src="{{url('images/home/area-slide-1.png')}}">
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-1">
                <div class="devider"></div>
            </div>
        </div>
    </div>
</section>

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

<script>
var areaSlider = new Splide( '#areaSlider', {
    type   : 'loop',
    direction: 'ttb',
    height   : '190px',
    wheel    : true,
    arrows   : false,
    autoplay: true,
    breakpoints: {
        991: { height: '400px' },
    },
} );

areaSlider.mount();
</script>

@endpush
