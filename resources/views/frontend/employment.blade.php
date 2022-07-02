@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')

<section class="pai-section">
    <div class="container">
        <div class="header">Employment</div>
        <div class="content-block">
            <div class="row">
                <div class="col-lg-8">
                    <div class="title-block">
                        <div class="title">Employment <span>(subtitle here)</span></div>
                        <div class="date">Last Updated: 25th February 2022</div>
                    </div>

                    <p>Employers have vested rights to take the decisions in line with the business needs, however, as an employee you deserve to be treated fairly.</p>
                    <p>We understand it’s difficult at times to maintain a smooth relationship at all the times. Employment law is extremely important to protect and enforce your rights as an employee or an employer.</p>

                    <h2 class="mb-3 mt-4">Our areas of employment work include:</h2>

                    <div class="subtitle">SERVICES FOR EMPLOYEES</div>

                    <ul>
                        <li><i class="bi bi-square-fill"></i>Discrimination at Work</li>
                        <li><i class="bi bi-square-fill"></i>Unfair and Constructive Dismissal</li>
                        <li><i class="bi bi-square-fill"></i>Restrictive Covenants</li>
                        <li><i class="bi bi-square-fill"></i>Redundancy</li>
                        <li><i class="bi bi-square-fill"></i>Bonus Disputes</li>
                        <li><i class="bi bi-square-fill"></i>Bullying and Harassment</li>
                        <li><i class="bi bi-square-fill"></i>Outsourcing</li>
                        <li><i class="bi bi-square-fill"></i>Wages Claims</li>
                        <li><i class="bi bi-square-fill"></i>Maternity Claims & Dismissals</li>
                    </ul>

                    <div class="subtitle">SERVICES FOR EMPLOYERS</div>

                    <ul>
                        <li><i class="bi bi-square-fill"></i>Breach of Contractual Obligations</li>
                        <li><i class="bi bi-square-fill"></i>Theft and Dishonesty</li>
                        <li><i class="bi bi-square-fill"></i>Gross Misconduct</li>
                        <li><i class="bi bi-square-fill"></i>Intellectual Property Theft</li>
                        <li><i class="bi bi-square-fill"></i>Employment Contracts</li>
                    </ul>

                    <p class="mb-4">Please <a href="{{route('frontend.contact')}}">click here</a> for more information on our Fees</p>

                    <div class="subtitle">PRICES</div>

                    <p class="mb-4">Our pricing for bringing and defending claims for unfair, constructive or wrongful dismissal.</p>

                    <ul>
                        <li><i class="bi bi-square-fill"></i><strong>Simple case:</strong> £4,500 -£7,500 (excluding VAT)</li>
                        <li><i class="bi bi-square-fill"></i><strong>Medium complexity case:</strong> £7,500 -£10,000 (excluding VAT)</li>
                        <li><i class="bi bi-square-fill"></i><strong>High complexity case:</strong> £10,000 -£15,000 (excluding VAT)</li>
                    </ul>

                    <p class="mb-4">Factors that could make a case more complex:</p>

                    <ul>
                        <li><i class="bi bi-square-fill"></i>If it is necessary to make or defend applications to amend claims or to provide further information about an existing claim</li>
                        <li><i class="bi bi-square-fill"></i>Defending claims that are brought by litigants in person</li>
                        <li><i class="bi bi-square-fill"></i>Complex preliminary issues such as whether the claimant is disabled (if this is not agreed by the parties)</li>
                        <li><i class="bi bi-square-fill"></i>The number of witnesses and documents</li>
                        <li><i class="bi bi-square-fill"></i>If it is an automatic unfair dismissal claim e.g. if you are dismissed after blowing the whistle on your employer</li>
                        <li><i class="bi bi-square-fill"></i>Allegations of discrimination which are linked to the dismissal</li>
                    </ul>

                    <p  class="mb-4">There will be an additional charge for attending a Tribunal Hearing from £750 to 2,000 per day (excluding VAT). Generally, we would allow 1-2 days depending on the complexity of your case.</p>

                    <div class="subtitle">DISBURSEMENTS</div>

                    <p>Disbursements are costs related to your matter that are payable to third parties, such as court fees. We handle the payment of the disbursements on your behalf to ensure a smoother process.</p>

                    <p  class="mb-4">Counsel’s fees estimated between £750  to 2000 per day (depending on experience of the advocate) for attending a Tribunal Hearing (including preparation)</p>

                    <div class="subtitle">KEY STAGES</div>

                    <p class="mb-4">The fees set out above cover all of the work in relation to the following key stages of a claim:</p>

                    <ul>
                        <li><i class="bi bi-square-fill"></i>Taking your initial instructions, reviewing the papers and advising you on merits and likely compensation (this is likely to be revisited throughout the matter and subject to change)</li>
                        <li><i class="bi bi-square-fill"></i>Entering into pre-claim conciliation where this is mandatory to explore whether a settlement can be reached;</li>
                        <li><i class="bi bi-square-fill"></i>Preparing claim or response</li>
                        <li><i class="bi bi-square-fill"></i>Reviewing and advising on claim or response from other party</li>
                        <li><i class="bi bi-square-fill"></i>Exploring settlement and negotiating settlement throughout the process</li>
                        <li><i class="bi bi-square-fill"></i>Preparing or considering a schedule of loss</li>
                        <li><i class="bi bi-square-fill"></i>Preparing for (and attending) a Preliminary Hearing</li>
                        <li><i class="bi bi-square-fill"></i>Exchanging documents with the other party and agreeing a bundle of documents</li>
                        <li><i class="bi bi-square-fill"></i>Taking witness statements, drafting statements and agreeing their content with witnesses</li>
                        <li><i class="bi bi-square-fill"></i>Preparing bundle of documents</li>
                        <li><i class="bi bi-square-fill"></i>Reviewing and advising on the other party’s witness statements</li>
                        <li><i class="bi bi-square-fill"></i>Agreeing a list of issues, a chronology and/or cast list</li>
                        <li><i class="bi bi-square-fill"></i>Preparation and attendance at Final Hearing, including instructions to Counsel</li>
                    </ul>

                    <p class="mb-4">The stages set out above are an indication and if some of stages above are not required, the fee will be reduced. You may wish to handle the claim yourself and only have our advice in relation to some of the stages. This can also be arranged on your individual needs.</p>

                    <div class="subtitle">HOW LONG WILL MY MATTER TAKE?</div>

                    <p class="mb-4">The time that it takes from taking your initial instructions to the final resolution of your matter depends largely on the stage at which your case is resolved. If a settlement is reached during pre-claim conciliation, your case is likely to take 4-6 weeks. If your claim proceeds to a Final Hearing, your case is likely to take 4-18 months. This is just an estimate and we will of course be able to give you a more accurate timescale once we have more information and as the matter progresses.</p>

                    <div class="subtitle">RESPONSIBILITY FOR THE WORK</div>

                    <p class="mb-4">Mr. Vajira Dhanapa the Principal Solicitor have the day to day responsibility and supervision of your matter. Mr. Devon Shaw and Mr Wuri Lamin will be your Case Workers in this matter and will be your first point of contact. Mr. Devon Shaw is a graduate at Birkbeck University of London with a honours degree in law and has completed the Bar Professional Training Course at City University Law school from 2017 to 2018. Mr Wuri Lamin is a graduate with a honours degree in law at Coventry University and has completed the Bar Professional Training Course at BPP University from 2017 -2018.</p>

                    <div class="subtitle">OUR TEAM</div>

                    <p>Mr Vajira Dhanapala became a qualified solicitor in 2008 and worked as the principal solicitor for more than 10 years. His qualifications extend to Engineering and Project Management. Mr Dhanapala spends about 5 % of his time with employment matters and have experience in simple to medium complex matters.</p>

                </div>
                <div class="col-lg-4">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link nav-header">Our Practice Areas</a></li>
                        <li class="nav-item"><a href="{{route('frontend.civil_litigation')}}" class="nav-link">Civil Litigation</a></li>
                        <li class="nav-item"><a href="{{route('frontend.criminal_litigation')}}" class="nav-link">Criminal Litigation</a></li>
                        <li class="nav-item"><a href="{{route('frontend.contract_disputes')}}" class="nav-link">Contract Disputes</a></li>
                        <li class="nav-item"><a href="{{route('frontend.debt_recovery')}}" class="nav-link">Debt Recovery</a></li>
                        <li class="nav-item"><a href="{{route('frontend.drafting')}}" class="nav-link">Drafting and Document Review</a></li>
                        <li class="nav-item"><a href="{{route('frontend.employment')}}" class="nav-link active">Employment</a></li>
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
