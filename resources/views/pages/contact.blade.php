@extends('layouts.app')
@section('content')
  <!--================= [ Hero section Start ] =================-->
    <div class="hero" id="hero">
        <div class="container">
            @include('includes.header')
           <div class="main-hero-services-portfolio animate-section">
    <div class="portfolio">
        <h1 class="section-heading-text-services title-portfolio">Get In Touch</h1>
        <p class="section-heading-text-service">
            I'm always excited to take on new projects and collaborate with innovative minds.
            If you have a project in mind or just want to chat about Laravel, feel free to reach out!
        </p>
        <div class="contact-detail row">
            <div class="col-lg-4 col-md-6 col-12 text-center">
                <a href="https://maps.app.goo.gl/JCMQzpySYHrh3Ubx8" target="_blank" class="main-box text-center">
                    <div class="box-call">
                        <img src="{{ asset('assets/images/contact/location.svg')}}" alt="location">
                    </div>
                    <div class="center-main">ADDRESS</div>
                    <p>Noida, India</p>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 col-12 text-center">
                <a href="mailto:gautamgupta.dev@gmail.com" class="main-box text-center">
                    <div class="box-call">
                        <img src="{{ asset('assets/images/contact/mail.svg')}}" alt="mail">
                    </div>
                    <div class="center-main">Email</div>
                    <p>gautamgupta.dev@gmail.com</p>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 col-12 text-center">
                <a href="tel:+918115812727" class="main-box text-center">
                    <div class="box-call">
                        <img src="{{ asset('assets/images/contact/phone.svg')}}" alt="phone">
                    </div>
                    <div class="center-main">PHONE</div>
                    <p>+91 81158 12727</p>
                </a>
            </div>
        </div>

        <div class="portfolio">
            <h1 class="section-heading-text-services title-portfolio">Let's Work Together!</h1>
            <div class="contact-info row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="main-in">
                        <p>NAME*</p>
                        <input type="text" name="name" placeholder="Your Name" autocomplete="off">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="main-in">
                        <p>EMAIL*</p>
                        <input type="email" name="email" placeholder="Your Email" autocomplete="off">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="main-in">
                        <p>PHONE*</p>
                        <input type="text" name="phone" placeholder="Your Phone Number" autocomplete="off">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="main-in">
                        <p>SUBJECT</p>
                        <input type="text" name="subject" placeholder="Subject" autocomplete="off">
                    </div>
                </div>
                <div class="col-12">
                    <div class="main-in">
                        <p>MESSAGE</p>
                        <input type="text" name="message" placeholder="Write here..." autocomplete="off">
                    </div>
                </div>
            </div>
            <div class="menu-port contact-main">
                <a href="javascript:void(0)" class="load-port" id="submitContactForm">
                    <div class="load-main">
                        <div class="load-down">
                            <img src="{{ asset('assets/images/contact/submit.svg')}}" alt="submit" class="icon-down">
                        </div>
                        <p>Submit Now</p>
                    </div>
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-12 main-location">
               <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=1158&amp;height=450&amp;hl=en&amp;q=noida, india&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://embed-googlemap.com">embed google map</a></div><style>.mapouter{position:relative;text-align:right;width:1158px;height:450px;}.gmap_canvas {overflow:hidden;background:none!important;width:1158px;height:450px;}.gmap_iframe {width:1158px!important;height:450px!important;}</style></div>
            </div>
        </div>
    </div>
</div>

    </div>
    <!--================= [ Hero section Exit ] =================-->
@endsection
