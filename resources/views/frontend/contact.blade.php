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

<section class="map-section">
    <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2477.1870810545156!2d-0.17922288422587374!3d51.61978207965373!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487619e7fc5b0b95%3A0xa9abe0e4eade4fdf!2sSolar%20House%2C%20915%20High%20Rd%2C%20London%20N12%208QJ%2C%20UK!5e0!3m2!1sen!2slk!4v1654788359492!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="content-block">
        <div class="title">WE ASSURE YOU THAT WE'LL DO OUR BEST FOR YOU</div>
        <p>VMD Solicitors is a well-established, vibrant and friendly law practice in North London. We advise clients on a wide range of practice areas from Immigration to Civil Disputes.</p>
        <p>Our multidisciplinary team-based approach guarantees the best solution for your case. We pride ourselves on our commitment to results, quality in delivery and most of all … “dedication to all our clients”.</p>
    </div>
</section>

@endsection

@push('after-scripts')
    <!-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCAIwTPctnSM2PWcbK6cMdlZaSgEYIKp5U&callback&callback=initMap"></script> -->
    <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCAIwTPctnSM2PWcbK6cMdlZaSgEYIKp5U&callback=initMap" async defer></script>

    <script>
    function initMap() {
        var mapOptions = {
            center: new google.maps.Latlng(51.5, -0.12),
            zoom: 6,
        }
    }

    var map = new google.maps.Map(document.getElementById("gMap"), mapOptions)
    </script> -->
@endpush