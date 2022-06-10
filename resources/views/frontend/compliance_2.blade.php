@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')

<section class="compliance-2 hero-section">
    <div class="container">
        <div class="content-block">
            <div class="title-block">
                <div class="title">COMPLIANCE</div>
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
                    <div class="title">Our complaints procedures</div>
                    <p>We take instructions across the practice areas in which we serve.</p>
                    <p>If you know the member of our team that you would like to instruct, you can get in touch with the member by visiting our team page and get in touch with them via phone or email.</p>
                    <p>Upon instructing us, you will be required to sign a letter of authority in order for us to act on your behalf. You will also be required to present 2 forms of identification so we know who you are. You will then be required to sign a client care letter and our terms and conditions of business.</p>
                    <p>Upon instructing us, you will be required to sign a letter of authority in order for us to act on your behalf. You will also be required to present 2 forms of identification so we know who you are. You will then be required to sign a client care letter and our terms and conditions of business.</p>
                    <p>Upon instructing us, you will be required to sign a letter of authority in order for us to act on your behalf. You will also be required to present 2 forms of identification so we know who you are. You will then be required to sign a client care letter and our terms and conditions of business.</p>
                    <p>Upon instructing us, you will be required to sign a letter of authority in order for us to act on your behalf. You will also be required to present 2 forms of identification so we know who you are. You will then be required to sign a client care letter and our terms and conditions of business.</p>
                    <p>Upon instructing us, you will be required to sign a letter of authority in order for us to act on your behalf. You will also be required to present 2 forms of identification so we know who you are. You will then be required to sign a client care letter and our terms and conditions of business.</p>
                    <p>Upon instructing us, you will be required to sign a letter of authority in order for us to act on your behalf. You will also be required to present 2 forms of identification so we know who you are. You will then be required to sign a client care letter and our terms and conditions of business.</p>
                </div>
            </div>
            <div class="image-block">
                <img src="{{url('images/compliance/scroll-img-2.png')}}" alt="">
                <div class="square"></div>
            </div>
        </div>
    </div>
</section>

<section class="cta-section">
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

<section class="contact-section">
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
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type </p>
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
