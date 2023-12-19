<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>


</head>
<body>
    <div class="body">
        <header id="header" data-plugin-options='{"stickyEnabled": true, "stickyEnableOnBoxed": true, "stickyEnableOnMobile": true, "stickyStartAt": 57, "stickySetTop": "-57px", "stickyChangeLogo": true}' style="min-height: 125px">
            <div class="header-body">
                <div class="header-container container">
                    <div class="header-row">
                        <div class="header-column">
                            <div class="header-logo">
                                <a href="{{ route('welcome') }}">
                                    <img alt="Porto" width="140" height="54" data-sticky-width="92" data-sticky-height="40" data-sticky-top="43" src="{{  asset('template/img/logos/logo.png?v=1') }}">
                                </a>
                            </div>
                        </div>
                        <div class="header-column">
                            <div class="header-row">
                                <nav class="header-nav-top">
                                    @if (Session::has('loginId'))
                                        <ul class="nav nav-pills">
                                            <li class="nav-item">
                                                <a class="nav-link profile-link" href="{{ route('profile') }}" style="color: #333; font-weight: bold; text-decoration: none;">
                                                    <img width="32px" height="32px" style="margin-top: -4px; margin-left: -5px; border-radius: 50%; object-fit: cover;" src="{{ asset('storage/' . $data->photo) }}?v=1" alt="Profile Image" class="profile-image">
                                                    {{ $data->full_name }}
                                                </a>
                                            </li>
                                        </ul>                               
                                    @else
                                        <ul class="nav nav-pills">
                                            <li class="hidden-xs">
                                                <a href="{{ route('login') }}">Login</a>
                                            </li>
                                            <li class="hidden-xs">
                                                <a href="{{ route('register') }}">Register</a>
                                            </li>
                                        </ul>
                                    @endif
                                </nav>
                                <div class="header-search hidden-xs">
                                    <form id="searchForm" action="page-search-results.html" method="get">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="q" id="q" placeholder="Search..." required>
                                            <span class="input-group-btn">
                                                <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        
                            <div class="header-row">
                                <div class="header-nav">
                                    <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
                                        <i class="fa fa-bars"></i>
                                    </button>
                                    <div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse">
                                        <nav>
                                            <ul class="nav nav-pills" id="mainNav">
                                                <li class="dropdown {{ Request::is('/') ? 'active' : '' }}">
                                                    <a class="button" href="{{ route('welcome') }}">
                                                        HOME
                                                    </a>
                                                </li>
                                                <li class="dropdown dropdown-mega {{ Request::is('services/PresentHR', 'services/TrainingDevelopment', 'Company-Profile/Testimony') ? 'active' : '' }}">
                                                    <a class="button" href="#">
                                                        COMPANY PROFILE
                                                        <i class="fa fa-caret-down" aria-hidden="true"></i>
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <div class="dropdown-mega-content">
                                                                <div class="row">
                                                                    <div class="col-md-6"> 
                                                                        <span class="dropdown-mega-sub-title">HUMAN RESOURCES</span>
                                                                        <ul class="dropdown-mega-sub-nav">
                                                                            <li><a href="{{ route('aboutus') }}">Why Join Us</a></li>
                                                                        </ul>
                                                                        <ul class="dropdown-mega-sub-nav">
                                                                            <li><a href="{{ route('testimony') }}">Employee Testimony</a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <span class="dropdown-mega-sub-title">BENEFIT</span>
                                                                        <ul class="dropdown-mega-sub-nav">
                                                                            <li><a href="{{ route('TrainingDevelopment') }}">What We Offer</a></li>
                                                                        </ul>
                                                                    </div>
                                                                    
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown {{ Request::is('JobVacancy') ? 'active' : '' }}">
                                                    <a class="button" href="{{ route('job') }}">
                                                        Job Vacancies
                                                    </a>
                                                </li>
                                                <!-- <li class="dropdown {{ Request::is('AboutUs') ? 'active' : '' }}">
                                                    <a class="button" href="{{ route('aboutus') }}">
                                                        About Us
                                                    </a>
                                                </li> -->
                                                <li class="dropdown {{ Request::is('HowToJoin') ? 'active' : '' }}">
                                                    <a class="button" href="{{ route('join') }}">
                                                        How To Join
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>
</body>
</html>