@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')

<section class="fees hero-section" style="background: linear-gradient(to top, rgba(0, 0, 0, 1), rgba(0, 0, 0, 0.25)), url('{{url('images/fees/hero-banner.png')}}');">
    <div class="container">
        <div class="content-block">
            <div class="title-block">
                <div class="title">OUR FEE & <br>PAYMENTS</div>
                <a href="#" class="cta-btn btn-fill">Contact us</a>
            </div>
            <div class="text-block">Money Laundering Risk Assessment and Our complaints procedures</div>
        </div>
        <div class="scroll-btn">
            <div class="dot"></div>
        </div>
    </div>
</section>

<section class="scroll-section rtl tall">
    <div class="container">
        <div class="inner-wrapper">
            <div class="content-block">
                <div class="wrapper">
                    <div class="title">OUR FEE & PAYMENTS</div>
                    <p>At VMD, we ensure that our fees are transparent allowing you to have the information you need to make an informed decision of the legal service(s) that you require. This also include understanding what the cost may be.</p>
                    <p>Our legal offerings are located in our <a href="{{route('frontend.practice_areas')}}">Practice Areas</a> where you will find information on the services, we provide including the fees we charge for the service.</p>
                    <p>We understand that our clients work within budgets, and we assure the most cost effective and appropriate solutions. Our expert team will assist you throughout the whole process from the beginning to the end.</p>
                    <p>We maintain transparency with regard to consultation fee throughout out the process, each individual need and circumstance at the outset are open to discussion. Costs may be agreed at the beginning as fixed agreed fee or as an hourly rate with a suggestion of how many hours are likely to be needed.</p>
                    <p>Disbursements, payments made to other parties on behalf of you may become a considerable cost to VMD solicitors. Therefore, application fees, counsel fees, courier charges and other expenses will be charged additionally.</p>
                    <p>Our clients pay VAT addition to the agreed fixed fees or hourly rates. We offer flexible payment terms for all our clients, as we believe clients are our best assets.</p>
                    <p>Find out more about our fees by visiting our <a href="{{route('frontend.practice_areas')}}">Practice Areas</a></p>
                </div>
            </div>
            <div class="image-block">
                <img src="{{url('images/fees/scroll-img.png')}}" alt="">
                <div class="square"></div>
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

@endsection

@push('after-scripts')

@endpush
