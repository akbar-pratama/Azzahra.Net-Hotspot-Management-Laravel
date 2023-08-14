<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Azzahra.Net-Form.Sosmed</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('template-landing-page') }}/assets/img/favicon.png" rel="icon">
  <link href="{{ asset('template-landing-page') }}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('template-landing-page') }}/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{ asset('template-landing-page') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('template-landing-page') }}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{ asset('template-landing-page') }}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{ asset('template-landing-page') }}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{ asset('template-landing-page') }}/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="{{ asset('template-landing-page') }}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('template-landing-page') }}/assets/css/style.css" rel="stylesheet">
  <!-- modal -->
  <link rel="stylesheet" href="{{ asset('template-landing-page') }}/assets/modal/css/ionicons.min.css">
    <link rel="stylesheet" href="{{ asset('template-landing-page') }}/assets/modal/css/style.css">

  <!-- =======================================================
  * Template Name: Arsha
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<body>
 
<div class="container"> 
    <main> 
    <h1 class="mt-4">Form Pembelian Voucher</h1>
        <div class="card shadow" style="width: 70rem;">
            <div class="card-body">
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Voucher Social Media</li>
                </ol>

                <!-- form sosmed -->

                    <form action="{{ route('pesan') }}" method="get">
                        @csrf 
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <select class="form-control" name="address" placeholder="Masukkan address"  readonly>
                                        <option selected value="192.168.10.1">Azzahra Pusat</option>
                                    </select>
                                    <label class="form-label">Lokasi</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input class="form-control" type="text" name ="username"  placeholder="Enter your last name" required />
                                    <label class="form-label">Username</label>
                                </div>
                            </div>
                            </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" type="password" name="password"  placeholder="Enter your password" required />
                                    <label class="form-label">Password</label>
                                </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" name="profile" value="Social Media" readonly />
                                        <label fclass="form-label">Paket</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <select class="form-control" name="limit" placeholder="Masukkan timelimit" required>
                                            <option disabled selected>--Pilih Waktu--</option>
                                            <option value="6h"> 6 Jam </option>   
                                            <option value="12h"> 12 Jam </option>
                                            <option value="1d"> 1 Hari </option>
                                        </select>
                                        <label class="form-label">Time Limit</label>
                                    </div>
                                </div>
                            </div>
                                <div class="mt-4 mb-0">
                                    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                        <a href="/" class="btn btn-danger btn-lg mb-2">Keluar</a>
                                    <button type="submit" class="btn btn-primary btn-lg mb-2">Kirim</button>
                                </div>
                            </div>
                        </form>

                    <!--   Akhir Data Voucher -->
                      
                </div>
            </div>
        </main>
        </div>


        <!-- Vendor JS Files -->
      <script src="{{ asset('template-landing-page') }}/assets/vendor/aos/aos.js"></script>
      <script src="{{ asset('template-landing-page') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="{{ asset('template-landing-page') }}/assets/vendor/glightbox/js/glightbox.min.js"></script>
      <script src="{{ asset('template-landing-page') }}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
      <script src="{{ asset('template-landing-page') }}/assets/vendor/swiper/swiper-bundle.min.js"></script>
      <script src="{{ asset('template-landing-page') }}/assets/vendor/waypoints/noframework.waypoints.js"></script>
      <script src="{{ asset('template-landing-page') }}/assets/vendor/php-email-form/validate.js"></script>

      <!-- Template Main JS File -->
      <script src="{{ asset('template-landing-page') }}/assets/js/main.js"></script>

      <!-- modal -->
      <script src="{{ asset('template-landing-page') }}/assets/modal/js/jquery.min.js"></script>
      <script src="{{ asset('template-landing-page') }}/assets/modal/js/popper.js"></script>
      <script src="{{ asset('template-landing-page') }}/assets/modal/js/bootstrap.min.js"></script>
      <script src="{{ asset('template-landing-page') }}/assets/modal/js/main.js"></script>
    </body>
@include('landing-page.layout.footer')