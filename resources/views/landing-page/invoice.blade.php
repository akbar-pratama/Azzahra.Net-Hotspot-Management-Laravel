<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Azzahra.Net-Invoice</title>
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
  <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

  <!-- Template Main CSS File -->
  <link href="{{ asset('template-landing-page') }}/assets/css/style.css" rel="stylesheet">
  <!-- modal -->
  <link rel="stylesheet" href="{{ asset('template-landing-page') }}/assets/modal/css/ionicons.min.css">
  <link rel="stylesheet" href="{{ asset('template-landing-page') }}/assets/modal/css/style.css">

  <!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
  <script type="text/javascript"
    src="https://app.sandbox.midtrans.com/snap/snap.js"
    data-client-key="{{config('midtrans.client_key')}}">
  </script>
  <!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->

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
    <h1 class="mt-4">Invoice</h1>
      <a href="/" class="btn btn-light btn-sm">
        <i class="fas fa-circle-chevron-left"></i>&nbsp;Kembali</a>
        <br><br>
        <div class="card shadow" style="width: 23rem;">
            <div class="card-body">
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active"> {{$data->profile}}</li>
                </ol>
              <div class="save">
                  <label for="save">Username &nbsp; : </label>
                      <input readonly type="text" id="save" name="username" value="{{$data->username}}" size="16">
                  <label for="save">Password &nbsp; &nbsp;: </label>
                        <input readonly type="text" id="save" name="password" value="{{$data->password}}" size="16">
                  <label for="save">Profile  &emsp; &emsp; :</label>
                        <input readonly type="text" id="save" name="profile" value="{{$data->profile}}" size="16">
                  <label for="save">Time Limit &nbsp; : </label>
                        <input readonly type="text" id="save" name="limit" value="{{$data->limit}}" size="16">
                  <label for="save">Total &emsp; &emsp; &nbsp; : &nbsp;Rp</label>
                        <input readonly type="text" id="save" name="price" value="{{$data->price}}" size="12" > 
                  <label for="save">Status &emsp; &nbsp;  &nbsp; : &nbsp;</label>
                       <input readonly type="text" id="save" value="{{$data->status}}" name="status" size="16" >
                </div>
                 <!--  Cara transaksi --> 

                      <a href="{{route('pdf', $data->id)}}" class="btn btn-success btn-lg mb-2 float-right" target="_download">
                        <i class="fa-regular fa-file-pdf"></i>&nbsp; voucher </a>                      
                    <!--   Akhir check out -->                      
                </div>
            </div>
        </div>

     <style type="text/css">
        .save, input{
            border: none;
            outline: none;
        }
    </style>

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