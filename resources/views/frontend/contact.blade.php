@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))

@section('content')

<section class="contact hero-section">
    <div class="container">
        <div class="content-block">
            <div class="title-block">
                <div class="title">Contact Us</div>
                <a href="#" class="cta-btn btn-fill">Contact us</a>
            </div>
            <div class="text-block">We provide the best solution for each client to make every business decision, and satisfaction is the main thing.</div>
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

<section class="contact contact-section">
    <div class="container">
        <div class="contact-form">            
            <form action="{{route('frontend.contact_us.store')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="row flex-row-reverse">

                    @if(session()->has('error'))
                        <div class="alert alert-danger">
                            {{ session()->get('error') }}
                        </div>
                    @endif
                    <div class="col-lg-6">
                        <p>Fill out this form for an Immediate Case Evaluation.</p>
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
                            <div class="subtitle">Contact us</div>
                            <div class="title">We are <br><span>Ready</span></div>
                            <p>Get in touch with us.</p>
                            <ul class="contacts">
                                <li><a href="#"><i class="bi bi-geo-alt-fill"></i>Solar House 915 High Road. North Finchley, <br>London N12 8QJ</a></li>
                                <li><a href="tel:02085148703"><i class="bi bi-telephone-fill"></i>0208 514 8703</a></li>
                                <li><a href="mailto:info@vmdsolicitors.co.uk" class="light-teal"><i class="bi">@</i>info@vmdsolicitors.co.uk</a></li>
                            </ul>
                            <div class="social-media">
                                <a href="#" target="_blank" class="social-link"><i class="fa-brands fa-twitter"></i></a>
                                <a href="#" target="_blank" class="social-link"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#" target="_blank" class="social-link"><i class="fa-brands fa-instagram"></i></a>
                            </div>
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