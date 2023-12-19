@extends('layout')

@section('content')
<div role="main" class="main" id="home">
    <div class="slider-container rev_slider_wrapper" style="height: 400px;">
        <div id="revolutionSlider" class="slider rev_slider" data-plugin-revolution-slider data-plugin-options='{"gridwidth": 1170, "sliderLayout":"fullscreen", "fullScreenOffset": "0"}'>
            <ul>
                <!-- <li data-transition="fade">
                    <img src="img/slides/slide-bg-full.jpg"  
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
                        data-transform_in="x:[-300%];opacity:0;s:500;"><img src="img/slides/slide-title-border.png" alt=""></div>
    
                    <div class="tp-caption top-label"
                        data-x="center" data-hoffset="0"
                        data-y="center" data-voffset="-95"
                        data-start="500"
                        style="z-index: 5"
                        data-transform_in="y:[-300%];opacity:0;s:500;">DO YOU NEED A NEW</div>
    
                    <div class="tp-caption"
                        data-x="center" data-hoffset="150"
                        data-y="center" data-voffset="-95"
                        data-start="1000"
                        style="z-index: 5"
                        data-transform_in="x:[300%];opacity:0;s:500;"><img src="img/slides/slide-title-border.png" alt=""></div>
    
                    <div class="tp-caption main-label"
                        data-x="center" data-hoffset="0"
                        data-y="center" data-voffset="-45"
                        data-start="1500"
                        data-whitespace="nowrap"						 
                        data-transform_in="y:[100%];s:500;"
                        data-transform_out="opacity:0;s:500;"
                        style="z-index: 5"
                        data-mask_in="x:0px;y:0px;">WEB DESIGN?</div>
    
                    <div class="tp-caption bottom-label"
                        data-x="center" data-hoffset="0"
                        data-y="center" data-voffset="5"
                        data-start="2000"
                        style="z-index: 5"
                        data-transform_in="y:[100%];opacity:0;s:500;">Check out our options and features.</div>
    
                    <a class="tp-caption btn btn-lg btn-primary btn-slider-action"
                        data-hash
                        data-hash-offset="85"
                        href="#home-intro"
                        data-x="center" data-hoffset="0"
                        data-y="center" data-voffset="80"
                        data-start="2200"
                        data-whitespace="nowrap"						 
                        data-transform_in="y:[100%];s:500;"
                        data-transform_out="opacity:0;s:500;"
                        style="z-index: 5"
                        data-mask_in="x:0px;y:0px;">Get Started Now!</a>
                    
                </li> -->

                <li data-transition="fade">
								<img src="{{  asset('template/img/slides/slide-bg.jpg') }}"  
									alt=""
									data-bgposition="center center" 
									data-bgfit="cover" 
									data-bgrepeat="no-repeat" 
									class="rev-slidebg">
				
								<div class="tp-caption"
									data-x="37"
									data-y="60"
									data-start="1000"
									data-transform_in="x:[-300%];opacity:0;s:500;"><img src="{{  asset('template/img/slides/slide-title-border.png') }}" alt=""></div>
				
								<div class="tp-caption top-label"
									data-x="85"
									data-y="60"
									data-start="500"
									data-transform_in="y:[-300%];opacity:0;s:800;">BEWARE OF RECRUITMENT FRAUD!</div>
				
								<div class="tp-caption"
									data-x="515"
									data-y="60"
									data-start="1000"
									data-transform_in="x:[300%];opacity:0;s:500;"><img src="{{ asset('template/img/slides/slide-title-border.png') }}" alt=""></div>
				
								<div class="tp-caption main-label"
									data-x="-115"
									data-y="100"
									data-start="1500"
									data-whitespace="nowrap"						 
									data-transform_in="y:[100%];s:500;"
									data-transform_out="opacity:0;s:500;"
									data-mask_in="x:0px;y:0px;"> FOR DIGITAL ACTIVITY</div>
				
								<div class="tp-caption bottom-label" style="font-size: 13px;"
									data-x="-10"
									data-y="180"
									data-start="2000"
									data-transform_in="y:[100%];opacity:0;s:500;">PT Pralon do not require applicants to make any forms of payment when seeking employment with our company </div>
				
							
				
								<div class="tp-caption"
									data-x="520"
									data-y="-30"
									data-start="2150"
									data-transform_in="y:[300%];opacity:0;s:300;"><img   src="{{ asset('template/img/slides/illustration-shape-security-compliance-FoW-1.png') }}" width="10%" style="width: 261px;" alt=""></div>
				
							
							</li>

            </ul>
        </div>
    </div>
</div>

<div class="container" style="margin-top: 50px;">
    <div class="row">
        <div class="col-md-12 center">
            <h2 class="heading-dark mb-none">Recruitment  <strong>Process</strong></h2>
            <p class="mb-xl"> Find a position that matches your skills and interests, and apply online. You need to sign up and create your employment application profile with the latest qualification and experiences to let our recruitment team decide the best opportunity that may available for you. Please sign up our fast and easily online with your active email address.</p>
            <br>
            <br>
        </div>
    </div>
    
    <!-- Section: Timeline -->
    <section class="py-5">
        <ul class="timeline-with-icons" style="border-left: 1px solid hsl(0, 0%, 90%); position: relative; list-style: none;">
            <li class="timeline-item mb-5" style="position: relative;">
            <span class="timeline-icon" style="position: absolute; left: -56px; background-color: hsl(217, 88.2%, 90%); color: hsl(217, 88.8%, 35.1%); border-radius: 50%; height: 31px; width: 31px; display: flex; align-items: center; justify-content: center;">
                <i class="fa fa-cc"></i>
            </span>

            <h5 class="fw-bold">1. Application Screening</h5>
            <p class="text-muted mb-2 fw-bold">Pralon recruiter will select the candidate by reviewing the qualifications which fit vacant positions and our recruiter will invite you for the selection process. </p>
            </li>

            <li class="timeline-item mb-5" style="position: relative;">
            <span class="timeline-icon" style="position: absolute; left: -56px; background-color: hsl(217, 88.2%, 90%); color: hsl(217, 88.8%, 35.1%); border-radius: 50%; height: 31px; width: 31px; display: flex; align-items: center; justify-content: center;">
                <i class="fa fa-cc"></i>
            </span>
            <h5 class="fw-bold">2. Psychotest & HR Interview</h5>
            <p class="text-muted mb-2 fw-bold">At this stage, our recruiter will examine applicant profiles, assessing your skills, adjusting education and experience with the requirements. </p>
            </li>

            <li class="timeline-item mb-5" style="position: relative;">
            <span class="timeline-icon" style="position: absolute; left: -56px; background-color: hsl(217, 88.2%, 90%); color: hsl(217, 88.8%, 35.1%); border-radius: 50%; height: 31px; width: 31px; display: flex; align-items: center; justify-content: center;">
                <i class="fa fa-cc"></i>
            </span>
            <h5 class="fw-bold">3. User Interview</h5>
            <p class="text-muted mb-2 fw-bold">Our recruiter will contact and invite you for the second interview after you have passed the previous selection stage. Your interview may take place in one or more stages. </p>
            </li>

            <li class="timeline-item mb-5" style="position: relative;">
            <span class="timeline-icon" style="position: absolute; left: -56px; background-color: hsl(217, 88.2%, 90%); color: hsl(217, 88.8%, 35.1%); border-radius: 50%; height: 31px; width: 31px; display: flex; align-items: center; justify-content: center;">
                <i class="fa fa-cc"></i>
            </span>
            <h5 class="fw-bold">4. Job Offer</h5>
            <p class="text-muted mb-2 fw-bold">We will send you a job offer letter to be reviewed and confirm.  </p>
            </li>

            <li class="timeline-item mb-5" style="position: relative;">
            <span class="timeline-icon" style="position: absolute; left: -56px; background-color: hsl(217, 88.2%, 90%); color: hsl(217, 88.8%, 35.1%); border-radius: 50%; height: 31px; width: 31px; display: flex; align-items: center; justify-content: center;">
                <i class="fa fa-cc"></i>
            </span>
            <h5 class="fw-bold">5. You're Hired!</h5>
            <p class="text-muted mb-2 fw-bold">Welcome on board.. All employees will welcome and support you as a member of PT. Pralon Team. We will provide you more information to ensure you are ready to arrive at work on your first day.  </p>
            </li>


            <!-- Add more timeline events as needed -->

        </ul>
    </section>
    <!-- Section: Timeline -->

</div>






@endsection