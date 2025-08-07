@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css')}}">
    <!--================= [ Hero section Start ] =================-->
    <div class="hero" id="hero">
        <div class="container">
            @include('includes.header')
            <div class="main-hero-services-portfolio animate-section">
                <div class="portfolio">
                    <h2 class="section-heading-text-services title-portfolio">
                        Explore <span>My Latest Work</span> and Discover the Craftsmanship Behind Each Project
                    </h2>
                    <p class="section-heading-text-service">
                        Dive into my real-world Laravel projects — from HRM to SEO CRM — reflecting practical, scalable
                        applications crafted with efficiency and clean code.
                    </p>
                    <div class="portfolio-main">
                        <div class="portfolios-group-main">
                            <div class="meta">
                                <div class="meta-ander">
                                    <!-- HRM System -->
                                    <a href="#services-popup-content">
                                        <div class="image-container popup-btn zoom_in">
                                            <img src="{{ asset('assets/images/portfolio/hrms.webp')}}"
                                                style=" width: 366px; height: 297px; " alt="HRM System">
                                            {{-- <div class="overlay">
                                                <img src="{{ asset('assets/images/portfolio/content-svg.svg')}}" alt="icon"
                                                    class="vimeo-icon">
                                            </div> --}}
                                            <p class="meni-images">HRM</p>
                                        </div>
                                    </a>
                                    <p class="Corporate zoom_in">HRM System with Attendance & Live Tracking</p>
                                    <p class="Corporate-sub zoom_in">
                                        Laravel-based employee management with roster attendance, break panel, live
                                        tracking, chat system, asset & leave management.
                                    </p>

                                    <!-- CMS + LMS -->
                                    <div class="second-row-portfolio youtube zoom_in">
                                        <div class="image-container">
                                            <img src="{{ asset('assets/images/portfolio/lead-managment.jpg')}}"
                                                style=" width: 366px; height: 366px; " alt="CMS LMS">
                                            {{-- <div class="overlay">
                                                <img src="{{ asset('assets/images/portfolio/vimeo-svg.svg')}}" alt="icon"
                                                    class="vimeo-icon">
                                            </div> --}}
                                        <p class="meni-images">Lead Managment</p>
                                        </div>
                                        <p class="Corporate">Learning & Content Management Platform</p>
                                        <p class="Corporate-sub">
                                            Combined system for online courses, content control, video uploads, quizzes,
                                            progress tracking, and admin moderation.
                                        </p>
                                    </div>
                                </div>

                                <div class="meta-ander">
                                    <!-- Job Portal -->
                                    <div class="image-container zoom_in">
                                        <img src="{{ asset('assets/images/portfolio/job-portal.jpg')}}"
                                            style=" width: 366px; height: 366px; " alt="Job Portal">
                                        {{-- <div class="overlay">
                                            <img src="{{ asset('assets/images/portfolio/youtube-svg.svg')}}" alt="icon"
                                                class="vimeo-icon">
                                        </div> --}}
                                        <p class="meni-images">Job Portal</p>
                                    </div>
                                    <p class="Corporate zoom_in">Job Portal for HR & Recruitment</p>
                                    <p class="Corporate-sub zoom_in">
                                        Laravel-powered job posting, resume upload, application tracking, and HR pipeline
                                        flow with filters and candidate status.
                                    </p>

                                    <!-- Task Panel -->
                                    <div class="second-row-portfolio">
                                        <div class="image-container">
                                            <img src="{{ asset('assets/images/portfolio/task-management-system.png')}}"
                                                style=" width: 366px; height: 297px; " alt="Task Management">
                                            {{-- <div class="overlay">
                                                <img src="{{ asset('assets/images/portfolio/content-svg.svg')}}" alt="icon"
                                                    class="vimeo-icon">
                                            </div> --}}
                                        <p class="meni-images">Task System</p>
                                        </div>
                                        <p class="Corporate">Task Assignment & Notification Panel</p>
                                        <p class="Corporate-sub">
                                            Admin/Manager can assign tasks to employees with live updates, email/WhatsApp
                                            notifications, and real-time tracking.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- SEO CRM -->
                            <div class="gallery-bank-section">
                                <div class="zoom_in">
                                    <div class="image-container">
                                        <img src="{{ asset('assets/images/portfolio/Content-Management-System.png')}}"
                                            style=" width: 366px; height: 297x; "alt="SEO CRM" class="overlay-image">
                                        {{-- <div class="overlay">
                                            <img src="{{ asset('assets/images/portfolio/gallery-svg.svg')}}" alt="gallery-svg"
                                                class="vimeo-icon">
                                        </div> --}}
                                    <p class="meni-images">SEO CRM</p>
                                    </div>
                                    <p class="Corporate">SEO & Content Feedback Panel</p>
                                    <p class="Corporate-sub">
                                        Workflow system for SEO teams & content writers to manage content requests, reviews,
                                        and track feedback via point system.
                                    </p>
                                </div>

                                <!-- Placeholder Project -->
                                <div class="second-row-portfolio">
                                    <div class="image-container">
                                        <img src="{{ asset('assets/images/portfolio/Lms.jpeg')}}" style=" width: 366px; height: 366px; "
                                            alt="Coming Soon">
                                        {{-- <div class="overlay">
                                            <img src="{{ asset('assets/images/portfolio/sound-svg.svg')}}" alt="content-svg"
                                                class="vimeo-icon">
                                        </div> --}}
                                    <p class="meni-images">Learning Managment</p>
                                    </div>
                                    <p class="Corporate">Learning Management System </p>
                                    <p class="Corporate-sub">This is a powerful platform designed to simplify course management, student tracking, and online learning..</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="menu-port">
                        <a href="javascript:void(0)" class="load-port" id="loadMore">
                            <div class="load-main">
                                <div class="load-down">
                                    <img src="{{ asset('assets/images/portfolio/loader.svg')}}" alt="download" class="icon-down">
                                </div>
                                <p>Load More</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!--=================== [ portfolio popup start ] ===================-->
        {{-- <div class="container">
            <div id="services-popup-content" class="popup-container">
                <div class="popup-content popup-content2">
                    <a href="#" class="close"><i class="ri-close-line"></i></a>
                    <img class="blog-popup-img1" src="{{ asset('assets/images/portfolio/content.png')}}" alt="gallery-img8">
                    <h2 class="simple-steps">Corporate Branding</h2>
                    <p class="blog-sit-text">European languages are members of the same family. The languages only
                        differ in their grammar, their pronu nciation and
                        their most could refuse to pay common words. pronunciation and more common words. If several
                        languages coalesce, the
                        grammar of the resulting. Languages realizes why a new common language would be one could
                        refuse
                        to pay expensive
                        translators.
                    </p>
                    <div class="row align-items-center justify-content-between">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 images-pot">
                            <img src="{{ asset('assets/images/portfolio/corporat-2.png')}}" alt="content-img2">
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 images-pot">
                            <img src="{{ asset('assets/images/portfolio/corporate-3.png')}}" alt="content-img2">
                        </div>
                    </div>
                    <p class="blog-sit-text">European languages are members of the same family. The languages only
                        differ in their grammar, their pronu nciation and
                        their most could refuse to pay common words. pronunciation and more common words. If several
                        languages coalesce, the
                        grammar of the resulting. Languages realizes why a new common language would be one could
                        refuse
                        to pay expensive
                        translators.
                    </p>
                    <div class="row align-items-center justify-content-between">
                        <div class="col-xl-6 col-lg-6 col-md-6 images-pot">
                            <p class="blog-sit-text">treets empty that are usually busy are remarkable and can evoke
                                the
                                sense of historical pictures from before the invention of the motorcar. Other things
                                that are different at the moment will be queues to get into stores and the lines
                                marked
                                out on the floor to show how far apart we should be.
                            </p>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 images-pot">
                            <img src="{{ asset('assets/images/portfolio/corporat-2.png')}}" alt="content-img2">
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        {{-- <div class="container">
            <div class="vimeo-shadowbox vimeo-shadowbox--hidden">
                <div class="vimeo-shadowbox__video-wrapper">
                    <div class="vimeo-shadowbox__video">
                        <iframe src="{{ asset('https://player.vimeo.com/video/76979871" width="640" height="360"></iframe>
                    </div>
                    <a class="vimeo-shadowbox__close-button" href="#">X</a>
                </div>
            </div>
        </div>
        <div class="container">
            <div id="services-popup-managenebt" class="popup-container">
                <div class="popup-content popup-content2">
                    <a href="#" class="close"><i class="ri-close-line"></i></a>
                    <img class="blog-popup-img1" src="{{ asset('assets/images/portfolio/Dashbord.png')}}" alt="gallery-img8">
                    <h2 class="simple-steps">Management Dashboard</h2>
                    <p class="blog-sit-text">European languages are members of the same family. The languages only
                        differ in their grammar, their pronu nciation and
                        their most could refuse to pay common words. pronunciation and more common words. If several
                        languages coalesce, the
                        grammar of the resulting. Languages realizes why a new common language would be one could
                        refuse
                        to pay expensive
                        translators.
                    </p>
                    <div class="row align-items-center justify-content-between">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 images-pot">
                            <img src="{{ asset('assets/images/portfolio/dhashboerd.png')}}" alt="content-img2">
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 images-pot">
                            <img src="{{ asset('assets/images/portfolio/dhashbord.png')}}" alt="content-img2">
                        </div>
                    </div>
                    <p class="blog-sit-text">European languages are members of the same family. The languages only
                        differ in their grammar, their pronu nciation and
                        their most could refuse to pay common words. pronunciation and more common words. If several
                        languages coalesce, the
                        grammar of the resulting. Languages realizes why a new common language would be one could
                        refuse
                        to pay expensive
                        translators.
                    </p>
                    <div class="row align-items-center justify-content-between">
                        <div class="col-xl-6 col-lg-6 col-md-6 images-pot">
                            <p class="blog-sit-text">treets empty that are usually busy are remarkable and can evoke
                                the
                                sense of historical pictures from before the invention of the motorcar. Other things
                                that are different at the moment will be queues to get into stores and the lines
                                marked
                                out on the floor to show how far apart we should be.
                            </p>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 images-pot">
                            <img src="{{ asset('assets/images/portfolio/Dashbord.png')}}" alt="content-img2">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div id="gallery-1" class="popup-container gallery_container">
                <div class="popup-content popup-content2">
                    <a href="#" class="close"><i class="ri-close-line"></i></a>
                    <h2 class="simple-steps">Gallary</h2>
                    <div class="row align-items-center justify-content-between mt-5">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 images-pot">
                            <img src="{{ asset('assets/images/portfolio/images-1.png')}}" alt="content-img2">
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 images-pot">
                            <img src="{{ asset('assets/images/portfolio/images-2.png')}}" alt="content-img2">
                        </div>
                    </div>
                    <div class="row align-items-center justify-content-between">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 images-pot">
                            <img src="{{ asset('assets/images/portfolio/images-3.png')}}" alt="content-img2">
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 images-pot">
                            <img src="{{ asset('assets/images/portfolio/images-4.png')}}" alt="content-img2">
                        </div>
                    </div>
                    <div class="row align-items-center justify-content-between">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 images-pot">
                            <img src="{{ asset('assets/images/portfolio/images-5.png')}}" alt="content-img2">
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 images-pot">
                            <img src="{{ asset('assets/images/portfolio/images-6.png')}}" alt="content-img2">
                        </div>
                    </div>
                    <div class="row align-items-center justify-content-between">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 images-pot">
                            <img src="{{ asset('assets/images/portfolio/images-7.png')}}" alt="content-img2">
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 images-pot">
                            <img src="{{ asset('assets/images/portfolio/images-8.png')}}" alt="content-img2">
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
    <!--================= [ Hero section Exit ] =================-->
    <script>
        /*------------------------------------- vomio Videos -------------------------------------*/
        // document.addEventListener("DOMContentLoaded", function() {
        //     const iframe = document.querySelector("iframe");
        //     const player = new Vimeo.Player(iframe);
        //     const link = document.querySelector(".open-popup-link");
        //     const shadowbox = document.querySelector(".vimeo-shadowbox");
        //     const closeButton = document.querySelector(".vimeo-shadowbox__close-button");
        //     link.addEventListener("click", function(e) {
        //         e.preventDefault();
        //         shadowbox.classList.remove("vimeo-shadowbox--hidden");
        //         player.play().catch(function(error) {
        //             console.log("Playback failed:", error.name);
        //         });
        //     });
        //     shadowbox.addEventListener("click", hidePopup);
        //     closeButton.addEventListener("click", hidePopup);
        //     player.on("ended", hidePopup);

        //     function hidePopup() {
        //         player.pause();
        //         shadowbox.classList.add("vimeo-shadowbox--hidden");
        //     }
        // });
    </script>
@endsection
