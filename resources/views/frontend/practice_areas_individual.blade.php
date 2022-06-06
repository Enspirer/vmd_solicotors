@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')

<section class="pai-section">
    <div class="container">
        <div class="header">Contract Disputes</div>
        <div class="content-block">
            <div class="row">
                <div class="col-lg-8">
                    <div class="title-block">
                        <div class="title">Contract Disputes <span>(subtitle here)</span></div>
                        <div class="date">Last Updated: 25th February 2022</div>
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
                    <p>Our hourly rate is based on grade 3 billings and starts at £121.00 per hour to £229.00 per hour. Our rates are based on seniority and experience; however, we do provide some services on a fix fee basis. Please contact us to find out more…</p>
                    <p>If you have a dispute against a person or a business, contact us to find out what VMD can do for you!</p>
                </div>
                <div class="col-lg-4">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link nav-header">Our Practice Areas</a></li>
                        <li class="nav-item"><a href="" class="nav-link">Civil Litigation</a></li>
                        <li class="nav-item"><a href="" class="nav-link active">Contract Disputes</a></li>
                        <li class="nav-item"><a href="" class="nav-link">Debt Recovery</a></li>
                        <li class="nav-item"><a href="" class="nav-link">Drafting and Document Review</a></li>
                        <li class="nav-item"><a href="" class="nav-link">Employment</a></li>
                        <li class="nav-item"><a href="" class="nav-link">Immigration</a></li>
                        <li class="nav-item"><a href="" class="nav-link">Landlord and Tenant</a></li>
                    </ul>
                </div>
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
            <div class="row">
                <div class="col-lg-6">
                    <div class="row g-3">
                        <div class="col-12">
                            <input type="text" name="name" class="form-control" placeholder="Your Name*">
                        </div>
                        <div class="col-md-6">
                            <input type="email" name="email" class="form-control" placeholder="Your Email*">
                        </div>
                        <div class="col-md-6">
                            <input type="tel" name="phone" class="form-control" placeholder="Your Phone Number*">
                        </div>
                        <div class="col-12">
                            <textarea name="message" rows="8" class="form-control" placeholder="Your Message"></textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn-fill cta-btn">Send Message</button>
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
        </div>
    </div>
</section>

@endsection

@push('after-scripts')

@endpush
