@extends('layouts.app')
@section('content')
    {{-- <section class="flex flex-col md:flex-row items-center justify-between p-8 bg-white">
    <div class="max-w-xl">
        <h1 class="text-4xl font-bold text-gray-800 mb-4">Hi, I'm Gautam Gupta</h1>
        <p class="text-gray-600 mb-6">Laravel Developer with 4+ years of experience. I build modern HRMS, LMS & CMS apps.</p>
        <a href="{{ asset('assets/resume.pdf') }}" class="bg-blue-600 text-white px-6 py-3 rounded shadow hover:bg-blue-700 transition">Download Resume</a>
    </div>
    <div class="mt-8 md:mt-0">
        <img src="{{ asset('assets/profile.png') }}" class="w-72 rounded-xl shadow-xl" alt="Gautam photo">
    </div>
</section> --}}
    <!--================ [ Hero section Start ] ================-->
    <div class="hero" id="hero">
        <div class="container ">
           @include('includes.header')
            <div class="main-hero animate-section">
                <div class="row align-items-center justify-content-between ">
                    <div class="col-xl-6 col-lg-6 left-desc ">
                        <h1 class="first"><span>I’m</span> Gautam Gupta</h1>
                        <div class="type">
                            <p class="hybrid">I am, </p><span id="typed"></span>
                        </div>
                        <p class="desc"> I’m a Laravel Developer with 4+ years of experience. I specialize in building
                            powerful CMS, LMS, and HRMS applications using Laravel, PHP, and MySQL. Passionate about clean
                            code, scalable systems, and continuous learning.
                        </p>
                    </div>
                    <div class="col-xl-6 col-lg-6 right-desc">
                        <img src="{{ asset('assets/images/hero/imag-down.svg')}}" alt="image-up" class="images-hero">
                        <img src="{{ asset('assets/images/hero/gk-devimg.png')}}" alt="right" class="main-image">
                        <img src="{{ asset('assets/images/hero/Image-up.svg')}}" alt="Image-up" class="images-up">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================ [ Hero section Exit ] ================-->
@endsection
