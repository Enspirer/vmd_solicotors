@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')

<section class="pai-section">
    <div class="container">
        <div class="header">Civil Litigation</div>
        <div class="content-block">
            <div class="row">
                <div class="col-lg-8">
                    <div class="title-block">
                        <div class="title">Civil Litigation</div>
                        <!-- <div class="date">Last Updated: 25th February 2022</div> -->
                    </div>
                    <p>Civil litigation concerns a legal dispute between two or more parties commonly known as the Claimant and Defendant. In most civil litigation cases, the Claimant is trying to seek monetary compensation or specific performance of services from the other party and the Defendant is denying liability thus defending the claim.</p>
                    <p>Our aim at VMD is to resolve the majority of civil litigation cases outside the court through arbitration, negotiation and mediation commonly referred to Alternative Dispute Resolution (ADR).</p>
                    <p>It’s all about the burden of proof and the balance of probabilities…</p>
                    <div class="subtitle">OUR AREAS OF WORK INCLUDES:</div>
                    <ul>
                        <li><i class="bi bi-square-fill"></i>Civil Disputes; Issuing and Defending Claims.</li>
                        <li><i class="bi bi-square-fill"></i>Prohibitory and Mandatory Injunctions</li>
                        <li><i class="bi bi-square-fill"></i>Part 36 Offers</li>
                        <li><i class="bi bi-square-fill"></i>Summary Judgement Applications</li>
                        <li><i class="bi bi-square-fill"></i>Setting Aside Default Judgements</li>
                        <li><i class="bi bi-square-fill"></i>Debt Recovery</li>
                        <li><i class="bi bi-square-fill"></i>Disclosures</li>
                        <li><i class="bi bi-square-fill"></i>Witness Statements & Depositions</li>
                        <li><i class="bi bi-square-fill"></i>Witness Summons</li>
                        <li><i class="bi bi-square-fill"></i>Particulars of Claim</li>
                        <li><i class="bi bi-square-fill"></i>Defense statements</li>
                        <li><i class="bi bi-square-fill"></i>Enforcement of Judgements & Orders</li>
                    </ul>
                    <p>Our hourly rate is based on grade 3 billings and starts at £121.00 per hour to £229.00 per hour. Our rates are based on seniority and experience; however, we do provide some services on a fix fee basis. Please <a href="{{route('frontend.contact')}}">contact us</a> to find out more…</p>
                    <p>If you have a dispute against a person or a business, <a href="{{route('frontend.contact')}}">contact us</a> to find out what VMD can do for you!</p>
                </div>
                <div class="col-lg-4">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link nav-header">Our Practice Areas</a></li>
                        <li class="nav-item"><a href="{{route('frontend.civil_litigation')}}" class="nav-link active">Civil Litigation</a></li>
                        <li class="nav-item"><a href="{{route('frontend.criminal_litigation')}}" class="nav-link">Criminal Litigation</a></li>
                        <li class="nav-item"><a href="{{route('frontend.contract_disputes')}}" class="nav-link">Contract Disputes</a></li>
                        <li class="nav-item"><a href="{{route('frontend.debt_recovery')}}" class="nav-link">Debt Recovery</a></li>
                        <li class="nav-item"><a href="{{route('frontend.drafting')}}" class="nav-link">Drafting and Document Review</a></li>
                        <li class="nav-item"><a href="{{route('frontend.employment')}}" class="nav-link">Employment</a></li>
                        <li class="nav-item"><a href="{{route('frontend.immigration')}}" class="nav-link">Immigration</a></li>
                        <li class="nav-item"><a href="{{route('frontend.landlord')}}" class="nav-link">Landlord and Tenant</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cta-section" style="background: linear-gradient(to bottom, rgba(18, 34, 53, 0.75), rgba(18, 34, 53, 0.75)), url('{{url('images/practice-areas/pai-cta-bg.png')}}');">
    <div class="container">
        <div class="inner-wrapper">
            <div class="subtitle">CONFIDENTIAL CONSULTATIONS</div>
            <div class="title">Let’s get started together</div>
            <p>We’re thrilled to get to continue to provide a personal experience for amazing clients just like you.</p>
            <div class="cta-text">Contact us today and let’s get started.</div>
            <a href="#" class="btn-fill cta-btn">Contact us</a>
        </div>
    </div>
</section>

<section class="contact-section" style="background: url('{{url('images/practice-areas/contact-bg.svg')}}');">
    <div class="container">
        <div class="header">
            <div class="subtitle">Contact us</div>
            <div class="title">Let’s Work Together</div>
        </div>
        <div class="contact-form">            
            <form action="{{route('frontend.contact_us.store')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
                <div class="row g-lg-0 g-5">

                    @if(session()->has('error'))
                        <div class="alert alert-danger">
                            {{ session()->get('error') }}
                        </div>
                    @endif
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-12">
                                <input type="text" name="name" class="form-control" placeholder="Your Name*" required>
                            </div>
                            <div class="col-md-6">
                                <input type="email" name="email" class="form-control" placeholder="Your Email*" required>
                            </div>
                            <div class="col-md-6">
                                <input type="tel" name="phone_number" class="form-control" placeholder="Your Phone Number*" required>
                            </div>
                            <div class="col-12">
                                <textarea name="message" rows="8" class="form-control" placeholder="Your Message" required></textarea>
                            </div>
                            <div class="col-12">
                                <div class="g-recaptcha" data-callback="checked" data-sitekey="6Lel4Z4UAAAAAOa8LO1Q9mqKRUiMYl_00o5mXJrR" ></div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn-fill cta-btn form-submit-btn">Send Message</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="inner-wrapper">
                            <p>VMD Solicitors is a well-established, vibrant and friendly law practice in North London. We advise and represent clients on a wide range of practice areas form immigration to Civil Disputes.</p>
                            <ul class="contacts">
                                <li><a href="#"><i class="bi bi-geo-alt-fill"></i>Solar House 915 High Road. North Finchley, <br>London N12 8QJ</a></li>
                                <li><a href="tel:02085148703"><i class="bi bi-telephone-fill"></i>0208 514 8703</a></li>
                                <li><a href="mailto:info@vmdsolicitors.co.uk" class="light-teal"><i class="bi">@</i>info@vmdsolicitors.co.uk</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>


@if(\Session::has('success'))

<div class="modal fade form-submit-modal" id="overlay" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" style="width: 90%; max-width: 600px; margin: 0; top: 50%; left: 50%; transform: translate(-50%, -50%) !important;">
        <div class="modal-content" style="background: linear-gradient(60deg, #E4F2FB, #9ACDFF); border: 2px solid #0C75FF; border-radius: 15px;">
            <div class="modal-body" style="display: flex; flex-direction: row; align-items: center; justify-content: center; gap: 30px;">
                <i class="bi bi-x-lg" data-bs-dismiss="modal" style="position: absolute; top: -15px; right: -15px; color: #fff; font-size: 16px; background-color: rgba(255, 255, 255, 0.5); width: 35px; height: 35px; border-radius: 50%; display: flex; flex-direction: row; justify-content: center; align-items: center; backdrop-filter: blur(5px);"></i>
                <div class="image-block">
                    <img src="{{url('images/success.png')}}" alt="">
                </div>
                <div class="content-block">
                    <div class="title" style="font-size: 40px; color: #0C75FF; font-weight: 400; margin-bottom: 10px;">Success !</div>
                    <p class="text" style="font-size: 16px; ont-weight 300; margin: 0; color: #333;">Your message submitted successfully.</p>
                    <p class="text" style="font-size: 16px; ont-weight 300; margin: 0; color: #333;">One of our agents will be in touch shortly.</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endif



@endsection

@push('after-scripts')

<script>
    $(window).on('load', function () {
        $('#overlay').modal('show');
    });
    $("#close-btn").click(function () {
        $('#overlay').modal('hide');
    });
</script>

<script>
    window.oncontextmenu = () => {
        var captcha = grecaptcha.getResponse();
    };

    function checked() {
        $('.form-submit-btn').removeAttr('disabled');
    };
</script>

@endpush
