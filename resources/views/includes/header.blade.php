 <nav class="main-menu">
     <div class="container">
         <ul class="tabs-ul animate-section-very">
             <li class="tabs-li" data-tab="About">
                 <a href="{{ route('about') }}" class="list-link">
                     <div class="imag-list">
                         <img src="{{ asset('assets/images/hero/about.svg')}}" alt="about" class="list-img">
                     </div>
                     <p class="name-tab">About</p>
                 </a>
             </li>
             <li class="tabs-li" data-tab="Resume">
                 <a href="{{ route('resume') }}" class="list-link">
                     <div class="imag-list">
                         <img src="{{ asset('assets/images/hero/resume.svg')}}" alt="about" class="list-img">
                     </div>
                     <p class="name-tab">Resume</p>
                 </a>
             </li>
             {{-- <li class="tabs-li" data-tab="Services">
                 <a href="services.html" class="list-link">
                     <div class="imag-list">
                         <img src="{{ asset('assets/images/hero/services.svg')}}" alt="about" class="list-img">
                     </div>
                     <p class="name-tab">Services</p>
                 </a>
             </li> --}}
             <li class="tabs-li" data-tab="Portfolio">
                 <a href="{{ route('portfolio') }}" class="list-link">
                     <div class="imag-list">
                         <img src="{{ asset('assets/images/hero/portfolio.svg')}}" alt="about" class="list-img">
                     </div>
                     <p class="name-tab">Portfolio</p>
                 </a>
             </li>
             {{-- <li class="tabs-li" data-tab="Pricing">
                 <a href="pricing.html" class="list-link">
                     <div class="imag-list">
                         <img src="{{ asset('assets/images/hero/princing.svg')}}" alt="about" class="list-img">
                     </div>
                     <p class="name-tab">Pricing</p>
                 </a>
             </li>
             <li class="tabs-li" data-tab="Blogs">
                 <a href="blogs.html" class="list-link">
                     <div class="imag-list">
                         <img src="{{ asset('assets/images/hero/blogs.svg')}}" alt="about" class="list-img">
                     </div>
                     <p class="name-tab">Blogs</p>
                 </a>
             </li> --}}
             {{-- <li class="tabs-li" data-tab="Contact">
                 <a href="{{ route('contact') }}" class="list-link">
                     <div class="imag-list">
                         <img src="{{ asset('assets/images/hero/contact.svg')}}" alt="about" class="list-img">
                     </div>
                     <p class="name-tab">Contact</p>
                 </a>
             </li> --}}
         </ul>
     </div>
 </nav>
