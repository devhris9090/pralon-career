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
        <footer id="footer">
            <div class="container">
                <div class="row">
                    <div class="footer-ribbon">
                        <span>Get in Touch</span>
                    </div>
                    <div class="col-md-4">
                        <div class="newsletter">
                            <h4>Newsletter</h4>
                            <p>Keep up on our always evolving product features and technology. Enter your e-mail and subscribe to our newsletter.</p>
        
                            <div class="alert alert-success hidden" id="newsletterSuccess">
                                <strong>Success!</strong> You've been added to our email list.
                            </div>
        
                            <div class="alert alert-danger hidden" id="newsletterError"></div>
        
                            <form id="newsletterForm" action="php/newsletter-subscribe.php" method="POST">
                                <div class="input-group">
                                    <input class="form-control" placeholder="Email Address" name="newsletterEmail" id="newsletterEmail" type="text">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="submit">Go!</button>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contact-details">
                            <h4>Contact Us</h4>
                            <ul class="contact">
                                @if ($contactInfo)
                                    <li><p><i class="fa fa-map-marker"></i> <strong>Address:</strong> {{ $contactInfo->address }}</p></li>
                                    <li><p><i class="fa fa-phone"></i> <strong>Phone:</strong> {{ $contactInfo->phone }}</p></li>
                                    <li><p><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto:{{ $contactInfo->email }}">{{ $contactInfo->email }}</a></p></li> 
                                @endif
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <h4>Follow Us</h4>
                        <ul class="social-icons">
                            @if ($contactInfo)
                                <li class="social-icons-instagram"><a href={{ $contactInfo->instagram }} target="_blank" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                                <li class="social-icons-facebook"><a href={{ $contactInfo->facebook }} target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                <li class="social-icons-youtube"><a href={{ $contactInfo->youtube }} target="_blank" title="Youtube"><i class="fa fa-youtube"></i></a></li>
                                <li class="social-icons-linkedin"><a href={{ $contactInfo->linkedin }} target="_blank" title="LinkedIn"><i class="fa fa-linkedin"></i></a></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-1">
                            <a href="index.html" class="logo">
                                <img alt="Porto Website Template" class="img-responsive" src="{{  asset('template/img/logos/logo2.png') }}">
                            </a>
                        </div>
                        <div class="col-md-7">
                            <p>{{ $contactInfo->copyright}}</p>
                        </div>
                        <div class="col-md-4">
                            <nav id="sub-menu">
                                <ul>
                                    <!-- <li><a href="page-faq.html">FAQ's</a></li>
                                    <li><a href="sitemap.html">Sitemap</a></li> -->
                                    <li><a href="https://pralon.co.id/">Company Profile</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    
</body>
</html>