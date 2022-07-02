<footer style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.9)), url('{{url('images/footer/footer-bg.png')}}');">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="footer-description">
                    <div class="header">
                        <img src="{{url('images/logo/vmd-logo-footer.png')}}" alt="">
                        <div class="title">VMD Solicitors</div>
                    </div>
                </div>
                <ul class="contacts">
                    <li><a href=""><i class="bi bi-geo-alt-fill"></i>Solar House 915, <br>High Road. North Finchley, <br>London N12 8QJ, <br>United Kingdom</a></li>
                    <li><a href="tel:02085148703"><i class="bi bi-telephone-fill"></i>0208 514 8703</a></li>
                    <li><a href="mailto:info@vmdsolicitors.co.uk" class="light-teal"><i class="bi">@</i>info@vmdsolicitors.co.uk</a></li>
                </ul>
                <div class="social-media">
                    <a href="#" target="_blank" class="social-link"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#" target="_blank" class="social-link"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" target="_blank" class="social-link"><i class="fa-brands fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-2">
                <ul class="footer-nav">
                    <li><a href="" class="footer-link title">Practice Areas</a></li>
                    <li><a href="{{route('frontend.civil_litigation')}}" class="footer-link">Civil Litigation</a></li>
                    <li><a href="{{route('frontend.criminal_litigation')}}" class="footer-link">Criminal Litigation</a></li>
                    <li><a href="{{route('frontend.contract_disputes')}}" class="footer-link">Contract Disputes</a></li>
                    <li><a href="{{route('frontend.debt_recovery')}}" class="footer-link">Debt Recovery</a></li>
                    <li><a href="{{route('frontend.drafting')}}" class="footer-link">Drafting and Document Review</a></li>
                    <li><a href="{{route('frontend.employment')}}" class="footer-link">Employment</a></li>
                    <li><a href="{{route('frontend.immigration')}}" class="footer-link">Immigration</a></li>
                    <li><a href="{{route('frontend.landlord')}}" class="footer-link">Landlord and Tenant</a></li>
                </ul>
            </div>
            <div class="col-lg-2">
                <ul class="footer-nav">
                    <li><a href="#" class="footer-link title">About Us</a></li>
                    <li><a href="#" class="footer-link">How to instruct us?</a></li>
                    <li><a href="#" class="footer-link">Our Team</a></li>
                    <li><a href="#" class="footer-link">Our Fees & Payments</a></li>
                </ul>
            </div>
            <div class="col-lg-2">
                <ul class="footer-nav">
                    <li><a href="" class="footer-link title">Compliance</a></li>
                    <li><a href="{{route('frontend.money_laundering')}}" class="footer-link">Money Laundering</a></li>
                    <li><a href="{{route('frontend.complaints_procedure')}}" class="footer-link">Our complaints procedures</a></li>
                </ul>
            </div>
            <div class="col-lg-2">
                <ul class="footer-nav">
                    <li><a href="" class="footer-link title">Talk to us on</a></li>
                    <li><a href="{{route('frontend.immigration')}}" class="footer-link">Immigration</a></li>
                    <li><a href="{{route('frontend.employment')}}" class="footer-link">Employment</a></li>
                    <li><a href="{{route('frontend.contract_disputes')}}" class="footer-link">Contract disputes</a></li>
                </ul>
            </div>
        </div>
        <div class="copyright">
            <span>&copy; <a href="#" target="_blank" rel="noopener noreferrer">VMD Solicitors</a> {{date('Y')}} | All rights reserved</span>
            <span>Website developed by <a href="http://tallentordigital.com/" class="tallentor" target="_blank" rel="noopener noreferrer">Tallentor Digital</a></span>
        </div>
    </div>
</footer>