@extends('layout')

@section('content')
<div role="main" class="main">

    <div class="slider-container rev_slider_wrapper" style="height: 500px"> <!-- Correct the height to 500px -->
        <div id="revolutionSlider" class="slider rev_slider" data-plugin-revolution-slider data-plugin-options='{"gridwidth": 1170, "gridheight": 500}' style="height: 500px"> <!-- Correct the height to 500px -->
            <ul>
                <li data-transition="fade">
                    <img src="{{ asset('template/img/CAROUSEL-2.png') }}"  
                        alt=""
                        data-bgposition="center center" 
                        data-bgfit="cover" 
                        data-bgrepeat="no-repeat" 
                        class="rev-slidebg">

                    <div class="tp-caption"
                        data-x="center" data-hoffset="-150"
                        data-y="center" data-voffset="-95"
                        data-start="1000"
                        style="z-index: 5"
                        data-transform_in="x:[-300%];opacity:0;s:500;"><img src="{{ asset('template/img/slides/slide-title-border.png') }}" alt=""></div>

                    <div class="tp-caption top-label"
                        data-x="center" data-hoffset="0"
                        data-y="center" data-voffset="-95"
                        data-start="500"
                        style="z-index: 5; color: #FFFFFF; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);"
                        data-transform_in="y:[-300%];opacity:0;s:500;">DO YOU NEED A NEW</div>

                    <div class="tp-caption"
                        data-x="center" data-hoffset="150"
                        data-y="center" data-voffset="-95"
                        data-start="1000"
                        style="z-index: 5"
                        data-transform_in="x:[300%];opacity:0;s:500;"><img src="{{ asset('template/img/slides/slide-title-border.png') }}" alt=""></div>

                    <div class="tp-caption main-label"
                        data-x="center" data-hoffset="0"
                        data-y="center" data-voffset="-45"
                        data-start="1500"
                        data-whitespace="nowrap"						 
                        data-transform_in="y:[100%];s:500;"
                        data-transform_out="opacity:0;s:500;"
                        style="z-index: 5; color: #FFFFFF; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);"
                        data-mask_in="x:0px;y:0px;">CAREER?</div>

                    <div class="tp-caption bottom-label"
                        data-x="center" data-hoffset="0"
                        data-y="center" data-voffset="5"
                        data-start="2000"
                        style="z-index: 5; color: #FFFFFF; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);"
                        data-transform_in="y:[100%];opacity:0;s:500;">Check out our available position.</div>

                    <a href="{{ route('job') }}" class="tp-caption btn btn-lg btn-primary btn-slider-action"
                        data-hash
                        data-hash-offset="85"
                        href="#home-intro"
                        data-x="center" data-hoffset="0"
                        data-y="center" data-voffset="80"
                        data-start="2200"
                        data-whitespace="nowrap"						 
                        data-transform_in="y:[100%];s:500;"
                        data-transform_out="opacity:0;s:500;"
                        style="z-index: 5; color: #FFFFFF; "
                        data-mask_in="x:0px;y:0px;">Find new opportunity</a>
                    
                </li>
                <li data-transition="fade">
                    <img src="{{ asset('template/img/CAROUSEL-1.png') }}"  
                        alt=""
                        data-bgposition="center center" 
                        data-bgfit="cover" 
                        data-bgrepeat="no-repeat" 
                        class="rev-slidebg" data-no-retina>
                </li>
                <!-- <li data-transition="fade">
                    <img src="{{ asset('template/img/CAROUSEL-3.png') }}"  
                        alt=""
                        data-bgposition="center center" 
                        data-bgfit="cover" 
                        data-bgrepeat="no-repeat" 
                        class="rev-slidebg" data-no-retina>
                </li> -->
            </ul>
        </div>
    </div>

    <div class="home-intro" id="home-intro">
        <div class="container">
    
            <div class="row">
                <div class="col-md-8">
                    <p>
                        Pralon people are the driver that propels the company to achieve its vision and goals.
                        <span>Search for what awaits you in the next step of your career path with us.</span>
                    </p>
                </div>
            </div>
    
        </div>
    </div>

    
    
    <div class="container">
    
        <div class="row center">
            <div class="col-md-12">
                <h2 class="mb-sm word-rotator-title">

                    
                
                    

                    Grow your
                    <strong class="inverted">
                        <span class="word-rotate" data-plugin-options='{"delay": 2000, "animDelay": 300}'>
                            <span class="word-rotate-items">
                                <span>Career</span>
                                <span>Experience</span>
                                <span>Skill</span>
                            </span>
                        </span>
                    </strong>
                    with the leading brand company in Pipes Industry
                </h2>
                <p class="lead" style="font-size: 17px;"> 
                Pralon believes that through its human resources, success of the organization can be achieved. People who show high commitment and explore their optimal competencies and reaching the advance level will drive the company to prosperity and success. </p>
            </div>
        </div>
    
    </div>

    
    
    <div class="home-concept">
        <div class="container">
    
            <div class="row center">
                <span class="sun"></span>
                <span class="cloud"></span>
                <div class="col-md-2 col-md-offset-1">
                    
                    @foreach ($imgPeoples as $imgPeople)
                    <div class="process-image appear-animation" data-appear-animation="bounceIn">
                        <img src="{{  asset('template/img/'.$imgPeople->image ) }}" alt="" />
                        <strong>People</strong>
                    </div>
                    @endforeach
                   
                </div>
                <div class="col-md-2">

                    @foreach ($imgProcesses as $imgProcess)
                    <div class="process-image appear-animation" data-appear-animation="bounceIn" data-appear-animation-delay="200">
                        <img src="{{  asset('template/img/'.$imgProcess->image ) }}" alt="" />
                        <strong>Process</strong>
                    </div>
                    @endforeach
                    
                </div>
                <div class="col-md-2">
                    @foreach ($imgTechnologies as $imgTechnology)
                    <div class="process-image appear-animation" data-appear-animation="bounceIn" data-appear-animation-delay="400">
                        <img src="{{  asset('template/img/'.$imgTechnology->image) }}" alt="" />
                        <strong>Technology</strong>
                    </div>    
                    @endforeach
                    
                </div>
                <div class="col-md-4 col-md-offset-1">
                    <div class="project-image">
                        <div id="fcSlideshow" class="fc-slideshow">
                            
                            <ul class="fc-slides">
                                @foreach ($imgWorks as $imgWork)
                                <li><a><img class="img-responsive" src="{{  asset('template/img/'.$imgWork->image ) }}" alt="" /></a></li>
                                @endforeach
                            </ul>
                        </div>
                        <strong class="our-work">Our Focuses</strong>
                    </div>
                </div>
            </div>
    
        </div>
    </div>
    
    <div class="container">
    
        <div class="row">
            <hr class="tall">
        </div>
    
    </div>
    
    <div class="container">
    
        <div class="row center">
            <div class="col-md-12">
                <h2>Our <strong>Excess</strong></h2>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="feature-box">
                            <div class="feature-box-icon">
                                <i class="fa fa-group"></i>
                            </div>
                            <div class="feature-box-info" style="text-align: justify;">
                                <h4 class="heading-primary mb-none">Professional Team</h4>
                                <p class="tall">With a team of professionals and experts in their fields, we provide the best service for our customers.</p>
                            </div>
                        </div>
                        <div class="feature-box">
                            <div class="feature-box-icon">
                                <i class="fa fa-file"></i>
                            </div>
                            <div class="feature-box-info" style="text-align: justify;">
                                <h4 class="heading-primary mb-none">High Quality</h4>
                                <p class="tall">As a pioneer of uPVC pipes, we provide the best-in-class pipes with guaranteed quality.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="feature-box">
                            <div class="feature-box-icon">
                                <i class="fa fa-film"></i>
                            </div>
                            <div class="feature-box-info" style="text-align: justify;">
                                <h4 class="heading-primary mb-none">Advance Technology</h4>
                                <p class="tall">Our pipe manufacturing is supported by sophisticated technology and the latest in its class so that it can provide high-quality products in its class.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    
        {{-- <hr class="tall"> --}}
        
        {{-- <div class="row row center">
                <div class="col-md-12">
                    <h2>Our <strong>Clients</strong></h2>
                </div>
        </div>

        <div class="row center">
            
            <div class="owl-carousel owl-theme" data-plugin-options='{"items": 5, "autoplay": true, "autoplayTimeout": 3000}'>
                @foreach ($imgClients as $imgClient)
                <div>
                    <img class="img-responsive" src="{{ asset('template/img/logos/'.$imgClient->image ) }}" alt="">
                </div>    
                @endforeach
            </div>
        </div> --}}
    
        

        

        {{-- <div class="row center">
            <div class="col-md-12">
                <h2 class="mb-sm word-rotator-title">
                    Kami percaya bahwa investasi Sumber Daya Manusia adalah investasi yang berharga
                    <strong>
                        <span class="word-rotate" data-plugin-options='{"delay": 3500, "animDelay": 400}'>
                            <span class="word-rotate-items">
                                <span>small</span>
                                <span>large</span>
                                <span>operating locally</span>
                                <span>internationally</span>
                            </span>
                        </span>
                    </strong>
                </h2>
                <h4 class="heading-primary lead tall">It takes courage to move forward, to implement changes or lead into a new direction. <br> We support you to take the next step.</h4>
            </div>
        </div> --}}
    
    </div>

    <hr class="tall">
    <div id="our-culture"></div>

   
    
        <div class="row center">
            <div class="col-md-12">
                <h2 class="mb-none word-rotator-title mt-xl">
                    Our <strong>Culture</strong>
                </h2>
                <p class="lead mb-xl">
                    Check out what our culture looks like
                </p>
            </div>
        </div>
    
    

    <ul class="image-gallery sort-destination full-width mb-none">
        <li class="isotope-item">
            <div class="image-gallery-item mb-none">
                    <span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
                            <img src="{{ asset('template/img/photos/cube-2.png') }}" class="img-responsive" alt="">
                            <span class="thumb-info-title">
                            </span>
                            <span class="thumb-info-action">
                            </span>
                    </span>
            </div>
        </li>
        <li class="isotope-item">
            <div class="image-gallery-item mb-none">
                    <span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
                            <img src="{{ asset('template/img/photos/cube-1.png') }}" class="img-responsive" alt="">
                            <span class="thumb-info-title">
                            </span>
                            <span class="thumb-info-action">
                            </span>
                    </span>
            </div>
        </li>
        <li class="isotope-item">
            <div class="image-gallery-item mb-none">
                    <span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
                            <img src="{{ asset('template/img/photos/cube-8.png') }}" class="img-responsive" alt="">
                            <span class="thumb-info-title">
                            </span>
                            <span class="thumb-info-action">
                            </span>
                    </span>
            </div>
        </li>
        <li class="isotope-item">
            <div class="image-gallery-item mb-none">
                    <span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
                            <img src="{{ asset('template/img/photos/cube-3.png') }}" class="img-responsive" alt="">
                            <span class="thumb-info-title">
                            </span>
                            <span class="thumb-info-action">
                            </span>
                    </span>
            </div>
        </li>
        <li class="isotope-item">
            <div class="image-gallery-item mb-none">
                    <span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
                            <img src="{{ asset('template/img/photos/cube-5.png') }}" class="img-responsive" alt="">
                            <span class="thumb-info-title">
                            </span>
                            <span class="thumb-info-action">
                            </span>
                    </span>
            </div>
        </li>
    </ul>

    <section class="parallax section section-text-light section-parallax section-center mt-none" data-stellar-background-ratio="0.5" style="background-image: url({{ asset('template/img/PAK-VINCENT-QUOTES.png') }}); background-size: cover; height: 500px; width: 100%;">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="row">
                        <div class="col-md-6 col-md-push-6">
                            <div class="owl-carousel owl-theme nav-bottom rounded-nav" data-plugin-options='{"items": 1, "loop": false}'>
                                <div>
                                    <div class="col-md-12">
                                        <div class="testimonial testimonial-style-2 testimonial-with-quotes mb-none">
                                            <!-- <div class="testimonial-author">
                                                <img src="{{ asset('template/img/lorempixel/business-2-120x120.jpg') }}" class="img-responsive img-circle" alt="">
                                            </div> -->
                                            <blockquote>
                                                <p>
                                                    At Pralon, we build a business with talented people and together we shape the future. Our journey is one of innovation, determination and a commitment to excellence that resides in every aspect of our organization.
    We are committed to upholding the principles of People, Process and Technology. To be able to compete and win the market, we invest in the growth of our people, ensuring they have access to continuous learning and development. We refine our processes to eliminate inefficiencies and optimize results. We leverage technology to propel us into the future.
    Together, we can forge a remarkable future.
                                                </p>
                                            </blockquote>
                                            <div class="testimonial-author">
                                                <p><strong>Director of PT. Pralon</strong></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row center">
            <div class="col-md-12">
                <h2 class="mb-none word-rotator-title mt-lg" style="font-size: 17px;">
                Pralon human resources system has its upstream from the recruitment process, where we seek for the best candidates with solid work experience and educational background, 
                who appear to appreciate values similar to Corporate Values.
                </h2><br>
                <p class="lead">Our Achievements</p>
            </div>
        </div>
        <div class="row center mt-xl custom-img">
            <div class="owl-carousel owl-theme" data-plugin-options='{"items": 5, "autoplay": true, "autoplayTimeout": 3000}'>
                @foreach ($imgClients as $imgClient)
                <div>
                    <img class="img-responsive" src="{{ asset('template/img/logos/'.$imgClient->image ) }}" alt="">
                </div>    
                @endforeach
            </div>
        </div>
    </div>

    <section class="call-to-action call-to-action-default with-button-arrow call-to-action-in-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="call-to-action-content">
                        <h3>Pralon is <strong>everything</strong> you need to grow an <strong>awesome</strong> career!</h3>
                        <p>the <strong>#1 Top Brands</strong> Pipe Company on South East Asia</p>
                    </div>
                    <div class="call-to-action-btn">
                        <a href="{{ route('job') }}" class="btn btn-lg btn-primary">Apply Now!</a><span class="arrow hlb hidden-xs hidden-sm hidden-md" data-appear-animation="rotateInUpLeft" style="top: -12px;"></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection