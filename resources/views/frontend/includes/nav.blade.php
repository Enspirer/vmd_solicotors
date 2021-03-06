<nav class="navbar vmd-topNav fixed-top navbar-expand-xl">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{url('images/logo/vmd-logo.svg')}}" class="brand-img">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#vmdTopNav"
            aria-controls="vmdTopNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa-solid fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="vmdTopNav">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ Request::segment(1) == '' ? 'active' : null }}" href="{{route('frontend.index')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::segment(1) == 'about-us' ? 'active' : null }}" href="{{route('frontend.about')}}">About Us</a>
                </li>
                <li class="nav-item btn-group">
                    <a class="nav-link {{ Request::segment(1) == 'practice-areas' ? 'active' : null }}" href="{{route('frontend.practice_areas')}}">Practice Areas</a>
                    <button type="button" class="dropdown-toggle dropdown-toggle-split"
                        data-bs-toggle="dropdown">
                        <i class="bi bi-chevron-down"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="{{route('frontend.civil_litigation')}}">Civil Litigation</a></li>
                        <li><a class="dropdown-item" href="{{route('frontend.criminal_litigation')}}">Criminal Litigation</a></li>
                        <li><a class="dropdown-item" href="{{route('frontend.contract_disputes')}}">Contract Disputes</a></li>
                        <li><a class="dropdown-item" href="{{route('frontend.debt_recovery')}}">Debt Recovery</a></li>
                        <li><a class="dropdown-item" href="{{route('frontend.drafting')}}">Drafting and Document Review</a></li>
                        <li><a class="dropdown-item" href="{{route('frontend.employment')}}">Employment</a></li>
                        <li><a class="dropdown-item" href="{{route('frontend.immigration')}}">Immigration</a></li>
                        <li><a class="dropdown-item" href="{{route('frontend.landlord')}}">Landlord and Tenant</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link {{ Request::segment(1) == 'compliance' ? 'active' : null }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Compliance 
                        <i class="bi bi-chevron-down"></i>                       
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="{{route('frontend.money_laundering')}}">Money Laundering</a></li>
                        <li><a class="dropdown-item" href="{{route('frontend.complaints_procedure')}}">Our complaints Procedures</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::segment(1) == 'fees-and-payments' ? 'active' : null }}" href="{{route('frontend.fees')}}">Our fee &amp; Payments</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::segment(1) == 'contact' ? 'active' : null }}" href="{{route('frontend.contact')}}">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>