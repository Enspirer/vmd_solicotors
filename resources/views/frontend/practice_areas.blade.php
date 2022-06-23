@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')

<section class="practice-areas hero-section" style="background: linear-gradient(to top, rgba(0, 0, 0, 1), rgba(0, 0, 0, 0.25)), url('{{url('images/practice-areas/hero-banner.png')}}');">
    <div class="container">
        <div class="content-block">
            <div class="title-block">
                <div class="subtitle">Our Specialties</div>
                <div class="title">Areas of <br> Practice</div>
                <a href="#" class="cta-btn btn-fill">Contact us</a>
            </div>
            <div class="text-block">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also</div>
        </div>
        <div class="scroll-btn">
            <div class="dot"></div>
        </div>
    </div>
</section>

<section class="pa-header-section">
    <img src="{{url('images/practice-areas/header-icon.png')}}" alt="">
    <div class="title">OUR LAW FIRM'S PRACTICE AREAS</div>
</section>

<section class="pa-card-section">
    <div class="container">
        <div class="inner-wrapper">
            <div class="pa-card rhs-card">
                <div class="image-block">
                    <img src="{{url('images/practice-areas/1.png')}}" alt="">
                </div>
                <div class="content-block">
                    <div class="header">
                        <div class="title">Civil Litigation</div>
                        <div class="subtitle">Last Updated: 25th February 2022</div>
                    </div>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro repellat iste magni consequatur tempora nobis in perferendis cupiditate praesentium aperiam optio cumque labore, non magnam tempore doloribus est officiis? Eos nisi non iure asperiores aspernatur!</p>
                    <a href="{{route('frontend.practice_areas_individual')}}" class="card-link">Details <i class="bi bi-arrow-right"></i></a>
                    <div class="index">01</div>
                </div>
            </div>
            <div class="pa-card lhs-card">
                <div class="image-block">
                    <img src="{{url('images/practice-areas/2.png')}}" alt="">
                </div>
                <div class="content-block">
                    <div class="header">
                        <div class="title">Contract Disputes</div>
                        <div class="subtitle">Last Updated: 25th February 2022</div>
                    </div>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro repellat iste magni consequatur tempora nobis in perferendis cupiditate praesentium aperiam optio cumque labore, non magnam tempore doloribus est officiis? Eos nisi non iure asperiores aspernatur!</p>
                    <a href="#" class="card-link">Details <i class="bi bi-arrow-right"></i></a>
                    <div class="index">02</div>
                </div>
            </div>
            <div class="pa-card rhs-card">
                <div class="image-block">
                    <img src="{{url('images/practice-areas/3.png')}}" alt="">
                </div>
                <div class="content-block">
                    <div class="header">
                        <div class="title">Debt Recovery</div>
                        <div class="subtitle">Last Updated: 25th February 2022</div>
                    </div>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro repellat iste magni consequatur tempora nobis in perferendis cupiditate praesentium aperiam optio cumque labore, non magnam tempore doloribus est officiis? Eos nisi non iure asperiores aspernatur!</p>
                    <a href="{{route('frontend.practice_areas_individual')}}" class="card-link">Details <i class="bi bi-arrow-right"></i></a>
                    <div class="index">03</div>
                </div>
            </div>
            <div class="pa-card lhs-card">
                <div class="image-block">
                    <img src="{{url('images/practice-areas/4.png')}}" alt="">
                </div>
                <div class="content-block">
                    <div class="header">
                        <div class="title">Drafting and Document <br> Review</div>
                        <div class="subtitle">Last Updated: 25th February 2022</div>
                    </div>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro repellat iste magni consequatur tempora nobis in perferendis cupiditate praesentium aperiam optio cumque labore, non magnam tempore doloribus est officiis? Eos nisi non iure asperiores aspernatur!</p>
                    <a href="#" class="card-link">Details <i class="bi bi-arrow-right"></i></a>
                    <div class="index">04</div>
                </div>
            </div>
            <div class="pa-card rhs-card">
                <div class="image-block">
                    <img src="{{url('images/practice-areas/5.png')}}" alt="">
                </div>
                <div class="content-block">
                    <div class="header">
                        <div class="title">Employment</div>
                        <div class="subtitle">Last Updated: 25th February 2022</div>
                    </div>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro repellat iste magni consequatur tempora nobis in perferendis cupiditate praesentium aperiam optio cumque labore, non magnam tempore doloribus est officiis? Eos nisi non iure asperiores aspernatur!</p>
                    <a href="{{route('frontend.practice_areas_individual')}}" class="card-link">Details <i class="bi bi-arrow-right"></i></a>
                    <div class="index">05</div>
                </div>
            </div>
            <div class="pa-card lhs-card">
                <div class="image-block">
                    <img src="{{url('images/practice-areas/6.png')}}" alt="">
                </div>
                <div class="content-block">
                    <div class="header">
                        <div class="title">Immigration</div>
                        <div class="subtitle">Last Updated: 25th February 2022</div>
                    </div>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro repellat iste magni consequatur tempora nobis in perferendis cupiditate praesentium aperiam optio cumque labore, non magnam tempore doloribus est officiis? Eos nisi non iure asperiores aspernatur!</p>
                    <a href="#" class="card-link">Details <i class="bi bi-arrow-right"></i></a>
                    <div class="index">06</div>
                </div>
            </div>
            <div class="pa-card rhs-card">
                <div class="image-block">
                    <img src="{{url('images/practice-areas/7.png')}}" alt="">
                </div>
                <div class="content-block">
                    <div class="header">
                        <div class="title">Landlord and Tenant</div>
                        <div class="subtitle">Last Updated: 25th February 2022</div>
                    </div>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro repellat iste magni consequatur tempora nobis in perferendis cupiditate praesentium aperiam optio cumque labore, non magnam tempore doloribus est officiis? Eos nisi non iure asperiores aspernatur!</p>
                    <a href="{{route('frontend.practice_areas_individual')}}" class="card-link">Details <i class="bi bi-arrow-right"></i></a>
                    <div class="index">07</div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@push('after-scripts')

@endpush
