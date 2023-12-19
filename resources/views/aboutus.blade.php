@extends('layout')

@section('content')
<div class="container">

    <div class="slider-container light rev_slider_wrapper" >
        <div id="revolutionSlider" class="slider rev_slider" data-plugin-revolution-slider data-plugin-options='{"gridwidth": 1600, "gridheight": 500}'>
            <ul>
                <li data-transition="fade">
                    <img 
                        src="{{ asset('template/img/CAROUSEL-3.png') }}"
                        alt="Background Image" 
                        class="rs-background-image-layer" 
                    >
                </li>
            </ul>
        </div>
    </div>    

    <div class="row">
        <div class="col-md-12">
            <hr class="tall">
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <h3 class="heading-primary"><strong>About</strong> Us</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <p class="lead">
                

                        Pralon is a trademark of high-quality uPVC pipes manufactured by PT Pralon. Pralon has long been known since 1963 as a pioneer in the uPVC pipe industry in Indonesia. Many developments occurred both in terms of quality and technical services after the Joint Venture between PT Pralon and Japanese Companies, Marubeni and Sekisui in 1975, then, Aronkasei-Japan in 1995. Therefore, Pralon certainly could meet the development and market demand in Indonesia. By using the latest technology and high production standards, PT Pralon has succeeded in creating products of the highest quality, namely:



            </p>
        </div>
        {{-- <div class="col-md-2">
            <a href="#" class="btn btn-lg btn-primary mt-xl">Join Our Team!</a>
        </div> --}}
        <!-- <div class="col-md-3">
            <div class="featured-box featured-box-primary">
                <div class="box-content">
                    <h4 class="text-uppercase">Behind the scenes</h4>
                    <ul class="thumbnail-gallery" data-plugin-lightbox data-plugin-options='{"delegate": "a", "type": "image", "gallery": {"enabled": true}}'>
                        <li>
                            <a title="Benefits 1" href="img/gt/2001-milestone.jpg">
                                <span class="thumbnail mb-none">
                                    <img width="75" height="75" src="img/gt/2001-milestone.jpg" alt="Career Pralon">
                                </span>
                            </a>
                        </li>
                        <li>
                            <a title="Benefits 2" href="img/gt/2002-milestone.jpg">
                                <span class="thumbnail mb-none">
                                    <img width="75" height="75" src="img/gt/2002-milestone.jpg" alt="Career Pralon">
                                </span>
                            </a>
                        </li>
                        <li>
                            <a title="Benefits 3" href="img/gt/2006-milestone.jpg">
                                <span class="thumbnail mb-none">
                                    <img width="75" height="75" src="{{  asset('template/img/logos/logo.png') }}" alt="Career Pralon">
                                </span>
                            </a>
                        </li>
                        <li>
                            <a title="Benefits 4" href="img/gt/2009-milestone.jpeg">
                                <span class="thumbnail mb-none">
                                    <img width="75" height="75" src="img/gt/2009-milestone.jpeg" alt="Career Pralon">
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div> -->
    </div>

    <div class="row">
        <div class="col-md-12">
            <hr class="tall">
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <h3 class="heading-primary"><strong>VISION</strong> & <strong>MISSION</strong></h3>
            <div class=" col-md-12">
                <h4 class="heading-primary mb-none">VISION</h4>
                <p>PRALON is a leading company in providing quality building materials through continuous innovation and competent human resources and the latest technology to provide sustainable growth for stakeholders.</p>
            </div>
            <div class=" col-md-12">
                <h4 class="heading-primary mb-none">MISSION</h4>
                <ul>
                    <li>Producing quality products that are easily obtained and care for the environment at the right price (Value for money) so as to provide customer satisfaction.</li>
                    <li>Always innovating in process and technology in order to meet market needs (market oriented).</li>
                    <li>Being a proud place for competent employees to work and develop themselves optimally.</li>
                    <li>Provide sustainable growth to stakeholders.</li>
                </ul>
            </div>
        </div>
    </div>

    
    <div class="row">
        <div class="col-md-12">
            <hr class="tall">
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <h3 class="heading-primary"><strong>COMPANY VALUES</strong></h3>
            <div class=" col-md-12">
                <h4 class="heading-primary mb-none" style="font-size: 45px;font-family: revert-layer;">P</h4>
                <p>assion for Excellence</p>
            </div>

            <div class=" col-md-12">
                <h4 class="heading-primary mb-none" style="font-size: 45px;font-family: revert-layer;">R</h4>
                <p>espect to Others</p>
            </div>

            <div class=" col-md-12">
                <h4 class="heading-primary mb-none" style="font-size: 45px;font-family: revert-layer;">A</h4>
                <p>gent of Change</p>
            </div>

            <div class=" col-md-12">
                <h4 class="heading-primary mb-none" style="font-size: 45px;font-family: revert-layer;">L</h4>
                <p>earning & Growth</p>
            </div>

            <div class=" col-md-12">
                <h4 class="heading-primary mb-none" style="font-size: 45px;font-family: revert-layer;">O</h4>
                <p>pen Minded & Innovative</p>
            </div>

            <div class=" col-md-12">
                <h4 class="heading-primary mb-none" style="font-size: 45px;font-family: revert-layer;">N</h4>
                <p>ever forget Integrity</p>
            </div>
           
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <hr class="tall">
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <h3 class="heading-primary mt-xl">Our <strong>History</strong></h3>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">

            <ul class="history">
                <li class="appear-animation" data-appear-animation="fadeInUp">
                    <div class="thumb">
                        <img src="{{  asset('template/img/logos/logo.png') }}"  style="height: 57px;top: 10px;margin-top: 52px;margin-left: 12px;" alt="Career Pralon" />
                    </div>
                    <div class="featured-box">
                        <div class="box-content">
                            <h4 class="heading-primary"><strong>1963</strong></h4>
                            <p>Produksi pertama pipa PVC di Indonesia dengan menggunakan Standard JIS bermerek PRALON. Diproduksi oleh PT. PRAKARSA PLASTIC “Pra“ dari kata Prakarsa Plastic “lon“ dari kata Eslon Jepang.</p>
                        </div>
                    </div>
                </li>
                <li class="appear-animation" data-appear-animation="fadeInUp">
                    <div class="thumb">
                        <img src="{{  asset('template/img/logos/logo.png') }}" style="height: 57px;top: 10px;margin-top: 52px;margin-left: 12px;" alt="Career Pralon" />
                    </div>
                    <div class="featured-box">
                        <div class="box-content">
                            <h4 class="heading-primary"><strong>1974</strong></h4>
                            <p>Dimulai pembangunan pabrik baru di Cimanggis</p>
                        </div>
                    </div>
                </li>
                <li class="appear-animation" data-appear-animation="fadeInUp">
                    <div class="thumb">
                        <img src="{{  asset('template/img/logos/logo.png') }}" style="height: 57px;top: 10px;margin-top: 52px;margin-left: 12px;" alt="Career Pralon" />
                    </div>
                    <div class="featured-box">
                        <div class="box-content">
                            <h4 class="heading-primary"><strong>1975</strong></h4>
                            <p>Joint Venture Indonesia-Jepang kemudian terbentuk PT. PRALON CORPORATION</p>
                        </div>
                    </div>
                </li>
                <li class="appear-animation" data-appear-animation="fadeInUp">
                    <div class="thumb">
                        <img src="{{  asset('template/img/logos/logo.png') }}" style="height: 57px;top: 10px;margin-top: 52px;margin-left: 12px;" alt="Career Pralon" />
                    </div>
                    <div class="featured-box">
                        <div class="box-content">
                            <h4 class="heading-primary"><strong>1982</strong></h4>
                            <p>Dimulainya penggunaan Standard SII yang kemudian pada tahun 1987 menjadi Standard SNI</p>
                        </div>
                    </div>
                </li>
                <li class="appear-animation" data-appear-animation="fadeInUp">
                    <div class="thumb">
                        <img src="{{  asset('template/img/logos/logo.png') }}" style="height: 57px;top: 10px;margin-top: 52px;margin-left: 12px;" alt="Career Pralon" />
                    </div>
                    <div class="featured-box">
                        <div class="box-content">
                            <h4 class="heading-primary"><strong>1994</strong></h4>
                            <p>Pengembangan produk dengan dimulai produksi pipa Poliethylene menggunakan standard ISO</p>
                        </div>
                    </div>
                </li>
                <li class="appear-animation" data-appear-animation="fadeInUp">
                    <div class="thumb">
                        <img src="{{  asset('template/img/logos/logo.png') }}" style="height: 57px;top: 10px;margin-top: 52px;margin-left: 12px;" alt="Career Pralon" />
                    </div>
                    <div class="featured-box">
                        <div class="box-content">
                            <h4 class="heading-primary"><strong>1995</strong></h4>
                            <p>PRALON mempelopori produksi pertama pipa PVC terbesar di Indonesia berdiameter 630 mm dengan standard SNI</p>
                        </div>
                    </div>
                </li>
                <li class="appear-animation" data-appear-animation="fadeInUp">
                    <div class="thumb">
                        <img src="{{  asset('template/img/logos/logo.png') }}" style="height: 57px;top: 10px;margin-top: 52px;margin-left: 12px;" alt="Career Pralon" />
                    </div>
                    <div class="featured-box">
                        <div class="box-content">
                            <h4 class="heading-primary"><strong>2000</strong></h4>
                            <p>Sertifikasi ISO 9002</p>
                        </div>
                    </div>
                </li>
                <li class="appear-animation" data-appear-animation="fadeInUp">
                    <div class="thumb">
                        <img src="{{  asset('template/img/logos/logo.png') }}" style="height: 57px;top: 10px;margin-top: 52px;margin-left: 12px;" alt="Career Pralon" />
                    </div>
                    <div class="featured-box">
                        <div class="box-content">
                            <h4 class="heading-primary"><strong>2006</strong></h4>
                            <p>Dimulai Produksi Fitting Injection</p>
                        </div>
                    </div>
                </li>
                <li class="appear-animation" data-appear-animation="fadeInUp">
                    <div class="thumb">
                        <img src="{{  asset('template/img/logos/logo.png') }}" style="height: 57px;top: 10px;margin-top: 52px;margin-left: 12px;" alt="Career Pralon" />
                    </div>
                    <div class="featured-box">
                        <div class="box-content">
                            <h4 class="heading-primary"><strong>2012</strong></h4>
                            <p>Dimulai produksi di Pabrik II Karawang</p>
                        </div>
                    </div>
                </li>
                <li class="appear-animation" data-appear-animation="fadeInUp">
                    <div class="thumb">
                        <img src="{{  asset('template/img/logos/logo.png') }}" style="height: 57px;top: 10px;margin-top: 52px;margin-left: 12px;" alt="Career Pralon" />
                    </div>
                    <div class="featured-box">
                        <div class="box-content">
                            <h4 class="heading-primary"><strong>2013, 2014 dan tahun 2015</strong></h4>
                            <p style="margin-left: 226px;">Mendapatkan Top Brand Award dan Master Brand Award</p>
                        </div>
                    </div>
                </li>
                <li class="appear-animation" data-appear-animation="fadeInUp">
                    <div class="thumb">
                        <img src="{{  asset('template/img/logos/logo.png') }}" style="height: 57px;top: 10px;margin-top: 52px;margin-left: 12px;" alt="Career Pralon" />
                    </div>
                    <div class="featured-box">
                        <div class="box-content">
                            <h4 class="heading-primary"><strong>2014 dan tahun 2015</strong></h4>
                            <p style="margin-left: 226px;">Meraih Idea Rumah Award</p>
                        </div>
                    </div>
                </li>
                <li class="appear-animation" data-appear-animation="fadeInUp">
                    <div class="thumb">
                        <img src="{{  asset('template/img/logos/logo.png') }}" style="height: 57px;top: 10px;margin-top: 52px;margin-left: 12px;" alt="Career Pralon" />
                    </div>
                    <div class="featured-box">
                        <div class="box-content">
                            <h4 class="heading-primary"><strong>2015</strong></h4>
                            <p style="margin-left: 226px;">Mendapatkan Indonesia Original Brand</p>
                        </div>
                    </div>
                </li>
            </ul>

        </div>
    </div>
<!-- 
    <div class="row center">
        <div class="col-md-12">
            <h2 class="mb-sm word-rotator-title">
                Our
                <strong>
                   Client
                </strong>
            </h2>
        </div>
    </div> -->
<!-- 
    <div class="row center">
        <div class="owl-carousel owl-theme" data-plugin-options='{"items": 6, "autoplay": true, "autoplayTimeout": 3000}'>
            <div>
                <img class="img-responsive" src="{{asset('template/img/logos/logo-1.png')}}" alt="Career Pralon">
            </div>
            <div>
                <img class="img-responsive" src="{{asset('template/img/logos/logo-2.png')}}" alt="Career Pralon">
            </div>
            <div>
                <img class="img-responsive" src="{{asset('template/img/logos/logo-3.png')}}" alt="Career Pralon">
            </div>
            <div>
                <img class="img-responsive" src="{{asset('template/img/logos/logo-4.png')}}" alt="Career Pralon">
            </div>
            <div>
                <img class="img-responsive" src="{{asset('template/img/logos/logo-5.png')}}" alt="Career Pralon">
            </div>
            <div>
                <img class="img-responsive" src="{{asset('template/img/logos/logo-6.png')}}" alt="Career Pralon">
            </div>
            <div>
                <img class="img-responsive" src="{{asset('template/img/logos/logo-4.png')}}" alt="Career Pralon">
            </div>
            <div>
                <img class="img-responsive" src="{{asset('template/img/logos/logo-2.png')}}" alt="Career Pralon">
            </div>
        </div>
    </div> -->

</div>

@endsection