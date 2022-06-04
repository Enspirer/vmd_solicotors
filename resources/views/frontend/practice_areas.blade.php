@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')

<section class="practice-areas hero-section">
    <div class="container">
        <div class="content-block">
            <div class="title-block">
                <div class="subtitle">Our Specialties</div>
                <div class="title">Areas of <br> Practice</div>
            </div>
            <div class="text-block">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also</div>
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

<section class="pa-header-section">
    <img src="{{url('images/practice-areas/header-icon.png')}}" alt="">
    <div class="title">OUR LAW FIRM'S PRACTICE AREAS</div>
</section>

<section class="pa-card-section">
    <div class="container">
        <div class="inner-wrapper">
            <div class="pa-card rhs-card">
                <div class="image-block">
                    <img src="{{url('images/practice-areas/card-1.png')}}" alt="">
                </div>
                <div class="content-block">
                    <div class="header">
                        <div class="title">Civil Litigation</div>
                        <div class="subtitle">Last Updated: 25th February 2022</div>
                    </div>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro repellat iste magni consequatur tempora nobis in perferendis cupiditate praesentium aperiam optio cumque labore, non magnam tempore doloribus est officiis? Eos nisi non iure asperiores aspernatur!</p>
                    <a href="#" class="card-link">Details <i class="bi bi-arrow-right"></i></a>
                    <div class="index">01</div>
                </div>
            </div>
            <div class="pa-card lhs-card">
                <div class="image-block">
                    <img src="{{url('images/practice-areas/card-1.png')}}" alt="">
                </div>
                <div class="content-block">
                    <div class="header">
                        <div class="title">Civil Litigation</div>
                        <div class="subtitle">Last Updated: 25th February 2022</div>
                    </div>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro repellat iste magni consequatur tempora nobis in perferendis cupiditate praesentium aperiam optio cumque labore, non magnam tempore doloribus est officiis? Eos nisi non iure asperiores aspernatur!</p>
                    <a href="#" class="card-link">Details <i class="bi bi-arrow-right"></i></a>
                    <div class="index">01</div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@push('after-scripts')

@endpush
