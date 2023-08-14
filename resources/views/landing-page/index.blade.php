
 @extends('landing-page.layout.master')
 @section('title','Azzahra.Net')
 @section('content')


  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Better Solution For your home internet</h1>
          <h2>Mari Bergabung Bersama Kami di AzZahra.net</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#about" class="btn-get-started scrollto">Buruan Daftar sekarang</a>
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="{{ asset('template-landing-page') }}/assets/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container">

        <div class="row" data-aos="zoom-in">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{ asset('template-landing-page') }}/assets/img/clients/client-1.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{ asset('template-landing-page') }}/assets/img/clients/client-2.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{ asset('template-landing-page') }}/assets/img/clients/client-3.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{ asset('template-landing-page') }}/assets/img/clients/client-4.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{ asset('template-landing-page') }}/assets/img/clients/client-5.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{ asset('template-landing-page') }}/assets/img/clients/client-6.png" class="img-fluid" alt="">
          </div>

        </div>

      </div>
    </section><!-- End Cliens Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About Us</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
              AzZahra.net menyediakan banyak penawaran peket internet yang berbagai variasi mulai dari hotspot sampai dengan
              internet rumahan kami sediakan untuk kebutuhan pelanggan kami. dengan kecepatan yang setabil pelanggan kami akan mendapatkan 
              kepuasan dalam berjelajah di internet.
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Internet dengan Speed 3Mb dapat di gunakan untuk 3-4 orang dan stabil</li>
              <li><i class="ri-check-double-line"></i> Internet dengan Speed 4Mb dapat di gunakan untuk 3-6 orang dan stabil</li>
              <li><i class="ri-check-double-line"></i> Internet dengan Speed 6Mb dapat di gunakan untuk 3-8 orang dan stabil</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              Jaringan kami telah tersebar di berbagi RT di desa Panjerejo mulai dari sekolah Sdi Azzahra dari barat sampai timur
              lalu keselatan sampai cakruk lombok dan ke timur dan kebarat. telah bergabung dengan kami. Ayo buruan daftar Internet untuk rumah anda.
            </p>
            <a href="#" class="btn-learn-more">Daftar</a>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
      <div class="container-fluid" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

            <div class="content">
              <h3>Kenapa memilih  <strong>Azzahra.net untuk Internet dirumah Anda ?</strong></h3>
              <p>
                Berikut ialah ualasan dari kami.
              </p>
            </div>

            <div class="accordion-list">
              <ul>
                <li>
                  <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span> Kenapa harus Memakai Azzahra.net? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                    <p>
                      AzZahra.net menyediakan banyak penawaran peket internet yang berbagai variasi mulai dari hotspot sampai dengan
                      internet rumahan kami sediakan untuk kebutuhan pelanggan kami.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span> Apa keunggulan dari Azzahra.net? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Azzahra.net memiliki keunggulan dalam jaringan yang Setabil dan memiliki kecepatan yang banyak dan terstruktur.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span> Bagaimana dengan internet lain? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Azzahra.net memiliki keunggulan internet yang murah dan stabil, Azzahranet tidak kalah dengan internet rumahan lainnya.
                    </p>
                  </div>
                </li>

              </ul>
            </div>

          </div>

          <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" 
          style='background-image: url("{{ asset("template-landing-page") }}/assets/img/why-us.png")' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
            <img src="{{ asset('template-landing-page') }}/assets/img/skills.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
            <h3>Berikut macam-macam kecepatan dalam menggukkan internet azzahranet.</h3>
            <p class="fst-italic">
              Data diambil dari random data dari pelanggan kami.
            </p>

            <div class="skills-content">

              <div class="progress">
                <span class="skill">whatsapp <i class="val">80%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">Instagram <i class="val">55%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">Facebook <i class="val">90%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">Youtube <i class="val">75%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">Mobilelegns <i class="val">50 %</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

            </div>

          </div>
        </div>

      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Paket</h2>
          <p>Berikut ini adalah berbagi macam paket internet yang ada di AzZahra.net</p>
        </div>

        <div class="row">

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="100">
            <div class="box shadow">
              <h3>Paket 1</h3>
              <h4><sup>Rp.</sup>70.000<span>per bulan</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> Gratis 1 bulan pertama</li>
                <li><i class="bx bx-check"></i> Internet stabil</li>
                <li><i class="bx bx-check"></i> Kecepatan 3 Mb untuk 3-4 perangkat</li>
              </ul>
              <a href="#" class="buy-btn">Daftar sekarang</a>
            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="box shadow">
              <h3>Paket 2</h3>
              <h4><sup>Rp.</sup>100.000<span>per bulan</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> Gratis 1 bulan pertama</li>
                <li><i class="bx bx-check"></i> Internet stabil</li>
                <li><i class="bx bx-check"></i> Kecepatan 4 Mb untuk 3-6 perangkat</li>
              </ul>
              <a href="#" class="buy-btn">Daftar sekarang</a>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="box shadow">
              <h3>Paket 3</h3>
              <h4><sup>Rp.</sup>170.000<span>per bulan</span></h4>
              <ul>
               <li><i class="bx bx-check"></i> Gratis 1 bulan pertama</li>
               <li><i class="bx bx-check"></i> Internet stabil</li>
               <li><i class="bx bx-check"></i> Kecepatan 6 Mb untuk 3-8 perangkat</li>
              </ul>
              <a href="#" class="buy-btn">Daftar sekarang</a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Hotspot Section ======= -->
    <section id="hotspot" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Paket Hotspot</h2>
          <p>Berikut ini adalah berbagi macam paket internet hotspot yang ada di AzZahra.net</p>
        </div>

        <div class="row">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="box shadow">
              <h3>Paket Social Media</h3>
              <h4><span>Mulai dari</span><sup>Rp.</sup>4.000</h4>
              <ul>
                <li><i class="bx bx-check"></i> Internet stabil</li>
                <li><i class="bx bx-check"></i> Kecepatan 2 Mb</li>
                <li><i class="bx bx-check"></i> Harga terjangkau</li>
              </ul>
              <a href="{{route('landing-page.form-sosmed')}}" class="buy-btn">Beli sekarang</a>
            </div>
          </div>

           <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="box shadow">
              <h3>Paket Streaming</h3>
              <h4><span>Mulai dari</span><sup>Rp.</sup>5.000</h4>
              <ul>
               <li><i class="bx bx-check"></i> Internet stabil</li>
               <li><i class="bx bx-check"></i> Kecepatan 3 Mb</li>
               <li><i class="bx bx-check"></i> Harga terjangkau</li>
              </ul>
              <a href="{{route('landing-page.form-streaming')}}" class="buy-btn">Beli sekarang</a>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="box shadow">
              <h3>Paket Game</h3>
              <h4><span>Mulai dari</span><sup>Rp.</sup>6.000</h4>
              <ul>
               <li><i class="bx bx-check"></i> Internet stabil</li>
               <li><i class="bx bx-check"></i> Kecepatan 3 Mb</li>
               <li><i class="bx bx-check"></i> Harga terjangkau</li>
              </ul>
              <a href="{{route('landing-page.form-game')}}" class="buy-btn">Beli sekarang</a>
            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- End Pricing Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Desa Panjerejo, RT. 001/03, Kec. Rejo Tangan, Baran II, Panjerejo, TulungAgung, Kabupaten Tulungagung, Jawa Timur 66292</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>chosyifairuz@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>085156330147</p>
              </div>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d246.85813303588512!2d112.01275687930915!3d-8.128934255161424!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78e5ced1cba5c1%3A0xa98f2ea08f9b6a12!2sSekolah%20Dasar%20Islam%20Az%20Zahra%20Panjer%20Raya!5e0!3m2!1sid!2sid!4v1680199786942!5m2!1sid!2sid"  frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

@include('landing-page.layout.footer')

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

 @endsection