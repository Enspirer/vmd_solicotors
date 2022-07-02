@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')

<section class="compliance-2 hero-section" style="background: linear-gradient(to top, rgba(0, 0, 0, 1), rgba(0, 0, 0, 0.25)), url('{{url('images/compliance/hero-banner-2.png')}}');">
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

                    <p>We want to give you the best possible service. However, if at any point you become unhappy or concerned about the service we provided, then you should inform us immediately, so that we can do our best to resolve the problem.</p>
                    <p>In the first instance, please contact the person who is working on your case to discuss your concerns and we will do our best to resolve any issues at this stage.</p>
                    <p>If you are not happy with the outcome, please submit a formal written complaint which would be handled by the Office Manager for the Practice. All remedial action about the complaint will be documented and maintained on the client file.</p>
                    <p>If you feel the need to take your complaint further, the final stage will be handled by the Managing Director of VMD Solicitors hoping to resolve your issue as soon as possible. Making a complaint will not affect how we handle your case.</p>
                    <p>The Solicitors Regulation Authority can help you if you are concerned about our behaviour. This could be for things like dishonesty, taking or losing your money or treating you unfairly because of your age, a disability or other characteristic.</p>
                    <p class="mb-5">You can raise your concerns with the <a href="https://www.sra.org.uk/consumers/problems/report-solicitor" target="_blank" rel="noopener noreferrer">Solicitors Regulation Authority</a>.</p>

                    <h5 class="mb-4">What do to if we cannot resolve your complaint</h5>

                    <p>The Legal Ombudsman can help you if we are unable to resolve your complaint ourselves. They will look at your complaint independently and it will not affect how we handle your case.</p>
                    <p class="mb-4">Before accepting a complaint for investigation, the Legal Ombudsman will check that you have tried to resolve your complaint with us first. If you have, then you must take your complaint to the Legal Ombudsman:</p>

                    <ul>
                        <li><i class="bi bi-square-fill"></i>Within six months of receiving a final response to your complaint;</li>
                        <li><i class="bi bi-square-fill"></i>No more than six years from the date of act/omission; or</li>
                        <li><i class="bi bi-square-fill"></i>No more than three years from when you should reasonably have known there was cause for complaint.</li>
                    </ul>

                    <p class="mb-5">If you would like more information about the Legal Ombudsman, please contact them.</p>

                    <ul>
                        <li><i class="bi bi-globe2"></i><a href="https://www.legalombudsman.org.uk/" target="_blank" rel="noopener noreferrer">www.legalombudsman.org.uk</a></li>
                        <li><i class="bi bi-telephone"></i><a href="tel:+443005550333">0300 555 0333</a> between 9am to 5pm</li>
                        <li><i class="bi bi-envelope"></i><a href="mailto:enquiries@legalombudsman.org.uk">enquiries@legalombudsman.org.uk</a></li>
                        <li><i class="bi bi-geo-alt"></i>Legal Ombudsman PO Box 6806, Wolverhampton, WV1 9WJ</li>
                    </ul>
                </div>
            </div>
            <div class="image-block">
                <img src="{{url('images/compliance/scroll-img-2.png')}}" alt="">
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
