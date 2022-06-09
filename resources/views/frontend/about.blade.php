@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')

<section class="about hero-section">
    <div class="container">
        <div class="content-block">
            <div class="title-block">
                <div class="title">About the <br> Firm</div>
                <a href="#" class="cta-btn btn-fill">Contact us</a>
            </div>
            <div class="text-block">We provide legal advice, tailored for each client, and their business. We involve in regulatory and private legal advice specialized for United Kingdom</div>
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

<section class="about-section">
    <div class="container">
        <div class="inner-wrapper">
            <div class="subtitle">Lorem Ipsum is simply</div>
            <div class="title">Who are we?</div>
            <p>VMD Solicitors are a well-established, vibrant and friendly law practice in North London. We advise clients on a wide range of practice areas from Immigration to Civil Disputes.</p>
            <p>Our multidisciplinary team-based approach guarantees the best solution for your case. We pride ourselves on our commitment to results, quality in delivery and most of all “dedication to all our clients across the world”.</p>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="feature-block">
                    <div class="title">Trusted</div>
                    <p>Every client is treated special and with utmost care, we are your friends</p>
                    <a href="#" class="nav-link">Explore about us page</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-block">
                    <div class="title">Experienced</div>
                    <p>Our team specializes in providing nothing but the best of services, our team compromises of well exposed lawyers and case workers</p>
                    <a href="#" class="nav-link">Explore about us page</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-block">
                    <div class="title">Legal</div>
                    <p>Our specialization is across many practice areas, and across different countries. Our legal reach is vast</p>
                    <a href="#" class="nav-link">Explore about us page</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="scroll-section">
    <div class="container">
        <div class="inner-wrapper">
            <div class="content-block">
                <div class="title">How to instruct us?</div>
                <p>We take instructions across the practice areas in which we serve.</p>
                <p>If you know the member of our team that you would like to instruct, you can get in touch with the member by visiting our team page and get in touch with them via phone or email.</p>
                <p>Upon instructing us, you will be required to sign a letter of authority in order for us to act on your behalf. You will also be required to present 2 forms of identification so we know who you are. You will then be required to sign a client care letter and our terms and conditions of business.</p>
                <p>Upon instructing us, you will be required to sign a letter of authority in order for us to act on your behalf. You will also be required to present 2 forms of identification so we know who you are. You will then be required to sign a client care letter and our terms and conditions of business.</p>
                <p>Upon instructing us, you will be required to sign a letter of authority in order for us to act on your behalf. You will also be required to present 2 forms of identification so we know who you are. You will then be required to sign a client care letter and our terms and conditions of business.</p>
                <p>Upon instructing us, you will be required to sign a letter of authority in order for us to act on your behalf. You will also be required to present 2 forms of identification so we know who you are. You will then be required to sign a client care letter and our terms and conditions of business.</p>
                <p>Upon instructing us, you will be required to sign a letter of authority in order for us to act on your behalf. You will also be required to present 2 forms of identification so we know who you are. You will then be required to sign a client care letter and our terms and conditions of business.</p>
                <p>Upon instructing us, you will be required to sign a letter of authority in order for us to act on your behalf. You will also be required to present 2 forms of identification so we know who you are. You will then be required to sign a client care letter and our terms and conditions of business.</p>
            </div>
            <div class="image-block">
                <img src="{{url('images/about/scroll-img.png')}}" alt="">
                <div class="square"></div>
            </div>
        </div>
    </div>
</section>

<section class="team-section">
    <div class="container">
        <div class="header">
            <div class="title">Meet the<br><span>Team</span></div>
            <p>We provide the best solution for each client, they get tailor-made legal advice and we stand with them till everything is sorted.</p>
        </div>
        <div class="team-block">
            <div class="team-card">
                <div class="image-block">
                    <img src="{{url('images/about/team-img.png')}}" alt="">
                    <div class="social">
                        <a href="#" class="social-link"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#" class="social-link"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#" class="social-link"><i class="fa-brands fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="body">
                    <div class="name">Chaminda<br>Prasad</div>
                    <div class="designation">Registered Foreign Lawyer</div>
                </div>
            </div>
            <div class="team-card mid-card">
                <div class="image-block">
                    <img src="{{url('images/about/team-img.png')}}" alt="">
                    <div class="social">
                        <a href="#" class="social-link"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#" class="social-link"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#" class="social-link"><i class="fa-brands fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="body">
                    <div class="name">Chaminda<br>Prasad</div>
                    <div class="designation">Registered Foreign Lawyer</div>
                </div>
            </div>
            <div class="team-card">
                <div class="image-block">
                    <img src="{{url('images/about/team-img.png')}}" alt="">
                    <div class="social">
                        <a href="#" class="social-link"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#" class="social-link"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#" class="social-link"><i class="fa-brands fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="body">
                    <div class="name">Chaminda<br>Prasad</div>
                    <div class="designation">Registered Foreign Lawyer</div>
                </div>
            </div>
            <div class="team-card">
                <div class="image-block">
                    <img src="{{url('images/about/team-img.png')}}" alt="">
                    <div class="social">
                        <a href="#" class="social-link"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#" class="social-link"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#" class="social-link"><i class="fa-brands fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="body">
                    <div class="name">Chaminda<br>Prasad</div>
                    <div class="designation">Registered Foreign Lawyer</div>
                </div>
            </div>
            <div class="team-card  mid-card">
                <div class="image-block">
                    <img src="{{url('images/about/team-img.png')}}" alt="">
                    <div class="social">
                        <a href="#" class="social-link"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#" class="social-link"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#" class="social-link"><i class="fa-brands fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="body">
                    <div class="name">Chaminda<br>Prasad</div>
                    <div class="designation">Registered Foreign Lawyer</div>
                </div>
            </div>
            <div class="team-card">
                <div class="image-block">
                    <img src="{{url('images/about/team-img.png')}}" alt="">
                    <div class="social">
                        <a href="#" class="social-link"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#" class="social-link"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#" class="social-link"><i class="fa-brands fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="body">
                    <div class="name">Chaminda<br>Prasad</div>
                    <div class="designation">Registered Foreign Lawyer</div>
                </div>
            </div>
            <div class="team-card">
                <div class="image-block">
                    <img src="{{url('images/about/team-img.png')}}" alt="">
                    <div class="social">
                        <a href="#" class="social-link"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#" class="social-link"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#" class="social-link"><i class="fa-brands fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="body">
                    <div class="name">Chaminda<br>Prasad</div>
                    <div class="designation">Registered Foreign Lawyer</div>
                </div>
            </div>
            <div class="team-card   mid-card">
                <div class="image-block">
                    <img src="{{url('images/about/team-img.png')}}" alt="">
                    <div class="social">
                        <a href="#" class="social-link"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#" class="social-link"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#" class="social-link"><i class="fa-brands fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="body">
                    <div class="name">Chaminda<br>Prasad</div>
                    <div class="designation">Registered Foreign Lawyer</div>
                </div>
            </div>
            <div class="team-card">
                <div class="image-block">
                    <img src="{{url('images/about/team-img.png')}}" alt="">
                    <div class="social">
                        <a href="#" class="social-link"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#" class="social-link"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#" class="social-link"><i class="fa-brands fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="body">
                    <div class="name">Chaminda<br>Prasad</div>
                    <div class="designation">Registered Foreign Lawyer</div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="scroll-section">
    <div class="container">
        <div class="inner-wrapper">
            <div class="content-block">
                <div class="title">How to instruct us?</div>
                <p>We take instructions across the practice areas in which we serve.</p>
                <p>If you know the member of our team that you would like to instruct, you can get in touch with the member by visiting our team page and get in touch with them via phone or email.</p>
                <p>Upon instructing us, you will be required to sign a letter of authority in order for us to act on your behalf. You will also be required to present 2 forms of identification so we know who you are. You will then be required to sign a client care letter and our terms and conditions of business.</p>
                <p>Upon instructing us, you will be required to sign a letter of authority in order for us to act on your behalf. You will also be required to present 2 forms of identification so we know who you are. You will then be required to sign a client care letter and our terms and conditions of business.</p>
                <p>Upon instructing us, you will be required to sign a letter of authority in order for us to act on your behalf. You will also be required to present 2 forms of identification so we know who you are. You will then be required to sign a client care letter and our terms and conditions of business.</p>
                <p>Upon instructing us, you will be required to sign a letter of authority in order for us to act on your behalf. You will also be required to present 2 forms of identification so we know who you are. You will then be required to sign a client care letter and our terms and conditions of business.</p>
                <p>Upon instructing us, you will be required to sign a letter of authority in order for us to act on your behalf. You will also be required to present 2 forms of identification so we know who you are. You will then be required to sign a client care letter and our terms and conditions of business.</p>
                <p>Upon instructing us, you will be required to sign a letter of authority in order for us to act on your behalf. You will also be required to present 2 forms of identification so we know who you are. You will then be required to sign a client care letter and our terms and conditions of business.</p>
            </div>
            <div class="image-block">
                <img src="{{url('images/about/scroll-img-2.png')}}" alt="">
                <div class="square"></div>
            </div>
        </div>
    </div>
</section>

<section class="policy-section">
    <div class="container">
        <div class="inner-wrapper">
            <div class="header">The policy’s purpose is to:</div>
            <ul>
                <li><i class="bi bi-square-fill"></i>provide equality, fairness and respect for all in our employment, whether temporary, part-time or full-time Not unlawfully discriminate because of the Equality Act 2010 protected characteristics of age, disability, gender</li>
                <li><i class="bi bi-square-fill"></i>reassignment, marriage and civil partnership, pregnancy and maternity, race (including color, nationality, and ethnic or national origin), religion or belief, sex and sexual orientatio oppose and avoid all forms of unlawful discrimination. This includes in pay and benefits, terms and conditions of employment, dealing with grievances and discipline, dismissal, redundancy, leave for parents, requests for flexible</li>
                <li><i class="bi bi-square-fill"></i>working, and selection for employment, promotion, training or other developmental opportunities</li>
            </ul>
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

@endsection

@push('after-scripts')

@endpush
