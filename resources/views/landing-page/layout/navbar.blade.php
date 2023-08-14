<!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="" class="logo me-auto"><img src="{{ asset('template-landing-page') }}/assets/img/logo.png" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#why-us">Alasan</a></li>
          <li><a class="nav-link scrollto" href="#skills">Performa</a></li>
          <li><a class="nav-link scrollto" href="#pricing">Harga</a></li>
          <li><a class="nav-link scrollto" href="#hotspot">Hotspot</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="getstarted scrollto" href="/login" >Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  @yield('content')