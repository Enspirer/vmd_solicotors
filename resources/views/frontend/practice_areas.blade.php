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
                        <!-- <div class="subtitle">Last Updated: 25th February 2022</div> -->
                    </div>
                    <p>Civil litigation concerns a legal dispute between two or more parties commonly known as the Claimant and Defendant. In most civil litigation cases, the Claimant is trying to seek monetary compensation or specific performance of services from the other party and the Defendant is denying liability thus defending the claim.</p>
                    <a href="{{route('frontend.civil_litigation')}}" class="card-link">Details <i class="bi bi-arrow-right"></i></a>
                    <div class="index">01</div>
                </div>
            </div>
            <div class="pa-card lhs-card">
                <div class="image-block">
                    <img src="{{url('images/practice-areas/2.png')}}" alt="">
                </div>
                <div class="content-block">
                    <div class="header">
                        <div class="title">Criminal Litigation</div>
                        <!-- <div class="subtitle">Last Updated: 25th February 2022</div> -->
                    </div>
                    <p>Our team of criminal defence has a wealth of experience in all areas of criminal law, from personal allegations to the most serious cases of murder, fraud, theft and homicide.</p>
                    <a href="{{route('frontend.criminal_litigation')}}" class="card-link">Details <i class="bi bi-arrow-right"></i></a>
                    <div class="index">02</div>
                </div>
            </div>
            <div class="pa-card rhs-card">
                <div class="image-block">
                    <img src="{{url('images/practice-areas/3.png')}}" alt="">
                </div>
                <div class="content-block">
                    <div class="header">
                        <div class="title">Contract Disputes</div>
                        <!-- <div class="subtitle">Last Updated: 25th February 2022</div> -->
                    </div>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro repellat iste magni consequatur tempora nobis in perferendis cupiditate praesentium aperiam optio cumque labore, non magnam tempore doloribus est officiis? Eos nisi non iure asperiores aspernatur!</p>
                    <a href="{{route('frontend.contract_disputes')}}" class="card-link">Details <i class="bi bi-arrow-right"></i></a>
                    <div class="index">03</div>
                </div>
            </div>
            <div class="pa-card lhs-card">
                <div class="image-block">
                    <img src="{{url('images/practice-areas/4.png')}}" alt="">
                </div>
                <div class="content-block">
                    <div class="header">
                        <div class="title">Debt Recovery</div>
                        <!-- <div class="subtitle">Last Updated: 25th February 2022</div> -->
                    </div>
                    <p>At VMD our Debt Recovery Charges are published in line and in accordance with the price transparency rules laid out by the Solicitors Regulation Authority. This page sets out the cost for engaging VMD Solicitors to recover debts.</p>
                    <a href="{{route('frontend.debt_recovery')}}" class="card-link">Details <i class="bi bi-arrow-right"></i></a>
                    <div class="index">04</div>
                </div>
            </div>
            <div class="pa-card rhs-card">
                <div class="image-block">
                    <img src="{{url('images/practice-areas/5.png')}}" alt="">
                </div>
                <div class="content-block">
                    <div class="header">
                        <div class="title">Drafting and Document <br> Review</div>
                        <!-- <div class="subtitle">Last Updated: 25th February 2022</div> -->
                    </div>
                    <p>Employers have vested rights to take the decisions in line with the business needs, however, as an employee you deserve to be treated fairly.</p>
                    <a href="{{route('frontend.drafting')}}" class="card-link">Details <i class="bi bi-arrow-right"></i></a>
                    <div class="index">05</div>
                </div>
            </div>
            <div class="pa-card lhs-card">
                <div class="image-block">
                    <img src="{{url('images/practice-areas/6.png')}}" alt="">
                </div>
                <div class="content-block">
                    <div class="header">
                        <div class="title">Employment</div>
                        <!-- <div class="subtitle">Last Updated: 25th February 2022</div> -->
                    </div>
                    <p>Employers have vested rights to take the decisions in line with the business needs, however, as an employee you deserve to be treated fairly.</p>
                    <a href="{{route('frontend.employment')}}" class="card-link">Details <i class="bi bi-arrow-right"></i></a>
                    <div class="index">06</div>
                </div>
            </div>
            <div class="pa-card rhs-card">
                <div class="image-block">
                    <img src="{{url('images/practice-areas/7.png')}}" alt="">
                </div>
                <div class="content-block">
                    <div class="header">
                        <div class="title">Immigration</div>
                        <!-- <div class="subtitle">Last Updated: 25th February 2022</div> -->
                    </div>
                    <p>VMD is your first choice for all your Immigration matters. Our high success rate especially in Immigration and Nationality Law visa has become our pillar of strength. We are proud of our repeated clientele and welcome new customers with open arms.</p>
                    <a href="{{route('frontend.immigration')}}" class="card-link">Details <i class="bi bi-arrow-right"></i></a>
                    <div class="index">07</div>
                </div>
            </div>
            <div class="pa-card lhs-card">
                <div class="image-block">
                    <img src="{{url('images/practice-areas/8.png')}}" alt="">
                </div>
                <div class="content-block">
                    <div class="header">
                        <div class="title">Landlord and Tenant</div>
                        <!-- <div class="subtitle">Last Updated: 25th February 2022</div> -->
                    </div>
                    <p>If you’ve got problem tenants or rent arrears and need to recover your property, we can assist you. Start off with our case review. After that, if you need our help, our step-by-step approach and simple, fixed-fee services will keep you on the</p>
                    <a href="{{route('frontend.landlord')}}" class="card-link">Details <i class="bi bi-arrow-right"></i></a>
                    <div class="index">08</div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@push('after-scripts')

@endpush
