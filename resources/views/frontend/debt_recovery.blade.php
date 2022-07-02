@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')

<section class="pai-section">
    <div class="container">
        <div class="header">Debt Recovery</div>
        <div class="content-block">
            <div class="row">
                <div class="col-lg-8">
                    <div class="title-block">
                        <div class="title">Debt Recovery</div>
                        <!-- <div class="date">Last Updated: 25th February 2022</div> -->
                    </div>

                    <p>At VMD our Debt Recovery Charges are published in line and in accordance with the price transparency rules laid out by the Solicitors Regulation Authority. This page sets out the cost for engaging VMD Solicitors to recover debts.</p>
                    <p class="mb-4">These costs apply where your claim is in relation to an unpaid invoice(s) which is not disputed, and enforcement action is not needed. If the other party disputes your claim at any point, we will discuss any further work required and provide you with revised advice about costs, if necessary, which could be on a fixed fee (e.g. if a one-off letter is required), or an hourly rate if more extensive work is needed.</p>

                    <div class="subtitle">STEP 1 : PRE-ACTION STAGE</div>

                    <p class="mb-4">Letter Before Action (LBA)</p>
                    <ul>
                        <li><i class="bi bi-square-fill"></i>This is a simple letter sent to the debtor requesting payment</li>
                        <li><i class="bi bi-square-fill"></i>Requiring the debtor to pay within 3 -14 days</li>
                        <li><i class="bi bi-square-fill"></i>We charge a fee of £75.00 plus VAT</li>
                    </ul>
                    <p class="mb-4">Fully Compliant Pre-Action Protocol Letter</p>
                    <ul>
                        <li><i class="bi bi-square-fill"></i>This is a fully compliant Pre-Action Letter in accordance with CPR 1998</li>
                        <li><i class="bi bi-square-fill"></i>The debtor has 30 days minimum to respond and up to 90 days in complex cases</li>
                        <li><i class="bi bi-square-fill"></i>We charge a fee of £250.00 plus VAT</li>
                    </ul>

                    <div class="subtitle">STEP 2 : COMMENCING LEGAL PROCEEDINGS</div>

                    <p>We issue all debt recovery claims for Claimant(s) and Defendant(s) online up to £100,000 via the Money Claim Online. This online court service offers our client a cheaper way of paying court fees than issuing a claim at the County Court.</p>
                    <p>The pricing below shows MCOL fees and our fees which is recoverable if the debtor pays the claim without dispute. The cost includes us submitting the claim form and drafting of the particulars of claim.</p>
                    <p>The VAT element of our fee cannot be reclaimed from your debtor.</p>

                    <div class="subtitle">STEP 3 : REQUESTING JUDGEMENT</div>

                    <p>If the debtor does not respond to the claim on time, we will request that the courts makes an order for them to pay and enter a default judgment against the defendant. We will charge the following fees for this action.</p>

                    <div class="subtitle">STEP 4 : ENFORCING THE JUDGEMENT</div>

                    <table class="table table-dark table-hover mb-4 table-bordered">
                        <thead>
                            <tr>
                                <th scope="col" class="align-middle">Our fee to instruct HCEO</th>
                                <th scope="col" class="align-middle">Court fee for judgement to be transferred to High Court</th>
                                <th scope="col" class="align-middle">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="align-middle">£100 plus VAT</td>
                                <td class="align-middle">£66</td>
                                <td class="align-middle">£166 + VAT for solicitors’ costs</td>
                            </tr>
                        </tbody>
                    </table>

                    <p class="mb-4">If VMD is successful in obtaining a judgment against the debtor, we will write to the debtor giving them an opportunity to settle the debit. If the debtor fails to settle the debt within the prescribed time period, we will instruct High Court Enforcement Officers (the HCEO) to enforce the judgment and recover payment.</p>

                    <h5 class="mb-4">Additional costs</h5>

                    <p>You will be required to pay an abortive fee of £75.00 Plus VAT if the debtor is unable to pay the fee or the HCEO cannot enforce the judgment.</p>
                    <p>If the debtor is unable to pay the judgment and the HCEO cannot enforce, you will be required to pay the HCEO an abortive fee of £75 + VAT.</p>
                    <p class="mb-4">If VMD is required to correspond or liaise with the HCEO regarding the instructions, additional charges may apply which will be based on the hourly billable rate of the solicitor. Case Worker, Paralegal or Associate conducting your matter.</p>

                    <h5 class="mb-4">Timescale</h5>

                    <p class="mb-4">Once the HCEO has been instructed, they will apply to transfer the judgment to the High Court. This can take 4-8 weeks subject to the court’s availability. The HCEO will then send a notice of enforcement to the debtor giving them seven days to pay. If the debtor fails to pay within this timeframe, an enforcement officer will be sent to attend their premises to try and make a recovery.</p>

                    <div class="subtitle">ADDITIONAL SERVICES</div>

                    <h5 class="mb-4">(A) Statutory demand against companies or individuals</h5>

                    <p>A statutory demand is not in itself a court process but is a formal demand for payment which must be taken seriously and can be used as a precursor to insolvency-based proceedings, such as a winding up petition against a company or bankruptcy proceedings against an individual / sole trader.</p>
                    <p>A statutory demand should only be used in circumstances where the underlying debt is not genuinely disputed, for example, if the debt is admitted or if there is a judgment for it.</p>
                    <p class="mb-4">Solicitors’ costs:</p>

                    <table class="table table-dark table-hover mb-4 table-bordered">
                        <thead>
                            <tr>
                                <th scope="col" class="align-middle">Solicitors’ costs for preparation of a fully bespoke statutory demand</th>
                                <th scope="col" class="align-middle">Process server’s fee (cost depends on location of debtor)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="align-middle">£500 plus VAT</td>
                                <td class="align-middle">£100 – £150</td>
                            </tr>
                        </tbody>
                    </table>

                    <h6 class="mb-4">Timescales</h6>

                    <p class="mb-4">Statutory demands are normally served within 48 hours against companies and partnerships. They can take longer to serve against individuals as it can be harder to locate individuals. However, we act with trusted process servers who are very good at locating their subjects.</p>

                    <h5 class="mb-4">(B) Winding-up petition against companies</h5>

                    <p class="mb-4">Provided the debt is not subject to a genuine dispute or can be extinguished by a valid crossclaim by the debtor, it may be appropriate to present a winding-up petition against the company owing the debt. Winding-up petitions can also be used where the debt is based on a court judgment which has not been set aside, appealed or based on an expired statutory demand.</p>

                    <table class="table table-dark table-hover mb-4 table-bordered">
                        <thead>
                            <tr>
                                <th scope="col" class="align-middle">Solicitors’ costs for drafting petition and  arranging for issuing and service</th>
                                <th scope="col" class="align-middle">Disbursements (mandatory costs)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="align-middle">£750 plus VAT</td>
                                <td class="align-middle lh-lg">Court fee £280 <br>Official Receiver’s deposit* £1,600 <br>Process Server’s fee £150</td>
                            </tr>
                        </tbody>
                    </table>

                    <p class="mb-4 red">*If the debtor pays the debt and the petition is withdrawn or dismissed, the Insolvency Service will provide a refund of £1550 for this fee after a period of time.</p>

                    <h6 class="mb-4">Timescales</h6>

                    <h5 class="mb-4">(C) Bankruptcy petition against individuals</h5>

                    <p class="mb-4">If you have received a court judgment that has not been set aside or appealed; or if a statutory demand has been validly served and not set aside, a bankruptcy petition can be presented against an individual or sole trader debtor.</p>

                    <table class="table table-dark table-hover mb-4 table-bordered">
                        <thead>
                            <tr>
                                <th scope="col" class="align-middle">Solicitors’ costs for drafting and issuing bankruptcy petition</th>
                                <th scope="col" class="align-middle">Disbursements (mandatory costs)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="align-middle">£750 plus VAT</td>
                                <td class="align-middle lh-lg">Court fee £280 <br>Official Receiver’s deposit* £990 <br>Process Server’s fee £150</td>
                            </tr>
                        </tbody>
                    </table>

                    <h6 class="mb-4">Timescales</h6>

                    <p class="mb-4">It typically takes us 1-2 days from the date of instruction to draft and issue a petition and send it out to a process server for service.</p>

                    <div class="subtitle">RESPONSIBILITY FOR THE WORK</div>

                    <p class="mb-4">Mr. Vajira Dhanapa the Principal Solicitor have the day to day responsibility and supervision of  your matter. Mr. Devon Shaw and Mr Wuri Lamin will be your Case Workers in this matter and will be your first point of contact. Mr. Devon Shaw is a graduate at Birkbeck  University of London with a honours degree in law and has completed the Bar Professional Training Course at City University Law school from 2017 to 2018. Mr. Wuri Lamin is a graduate with a honours degree in law at Coventry University and has completed the Bar Professional Training Course at BPP University from 2017 -2018.</p>

                    <div class="subtitle">OUR TEAM</div>

                    <p>Mr Vajira Dhanapala became a qualified solicitor In 2008 and  worked as the principal solicitor for more than 10 years. His qualifications extends to Engineering and Project Management. Mr Dhanapala spends about 5 % of his time with debt matters and have experience in simple to medium complex matters.</p>
                </div>
                <div class="col-lg-4">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link nav-header">Our Practice Areas</a></li>
                        <li class="nav-item"><a href="{{route('frontend.civil_litigation')}}" class="nav-link">Civil Litigation</a></li>
                        <li class="nav-item"><a href="{{route('frontend.criminal_litigation')}}" class="nav-link">Criminal Litigation</a></li>
                        <li class="nav-item"><a href="{{route('frontend.contract_disputes')}}" class="nav-link">Contract Disputes</a></li>
                        <li class="nav-item"><a href="{{route('frontend.debt_recovery')}}" class="nav-link active">Debt Recovery</a></li>
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
