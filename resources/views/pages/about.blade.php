@extends('layouts.app')
@section('content')
    <!--================= [ Hero section Start ] =================-->
    <div class="hero" id="hero">
        <div class="container">
            @include('includes.header')
            <div class="main-hero animate-section">
                <div class="row align-items-center justify-content-between ">
                    <div class="col-xl-6 col-lg-6 left-desc">
                        <h2 class="second">“Code is crafted when purpose meets <span>passion.</span>”</h2>
                        <div class="type-about">
                            I'm a Laravel Developer with 4+ years of experience building CMS, LMS, and HRMS solutions. With
                            a strong foundation in PHP, MySQL, and Laravel architecture, I focus on building scalable and
                            efficient web applications. I'm always curious, self-driven, and focused on writing clean,
                            maintainable code that solves real problems.
                        </div>
                        <div class="about-exper row align-items-center justify-content-between">
                            <div class="col-lg-6 col-md-6">
                                <ul class="about-ul">
                                    <li>
                                        <span>Name:</span>
                                        <p>Gautam Gupta</p>
                                    </li>
                                    <li>
                                        <span>Nationality:</span>
                                        <p>Indian</p>
                                    </li>
                                    <li>
                                        <span>Phone:</span>
                                        <p>+91 8115812727</p>
                                    </li>
                                    <li>
                                        <span>Email:</span>
                                        <p>gautamgupta.dev@gmail.com</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <ul class="about-ul position-relative meni-left">
                                    <li>
                                        <span>Experience:</span>
                                        <p>4+ years</p>
                                    </li>
                                    <li>
                                        <span>Freelance:</span>
                                        <p>Available</p>
                                    </li>
                                    <li>
                                        <span>Github:</span>
                                        <p>gautamgupta05</p>
                                    </li>
                                    <li>
                                        <span>Language:</span>
                                        <p>English, Hindi</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 right-desc">
                        <img src="assets/images/about/body-bottom.png" alt="image-up" class="images-about">
                        <img src="assets/images/hero/gk-devimg.png" alt="body-image" class="main-image-about">
                        <img src="assets/images/about/body-top.png" alt="Image-up" class="images-up-about">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================= [ Hero section Exit ] =================-->
@endsection
