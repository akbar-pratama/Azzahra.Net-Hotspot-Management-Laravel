<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Azzahra.Net-voucher</title>
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
   <style>

   img {
      /* Sesuaikan properti gambar sesuai kebutuhan */
        display: flex;
        align-content: center;
    }
  </style>

<div class="container"> 
        <div class="card" style="width: 20rem;">
            <div class="card-body">
                <img src="{{ asset('template-dashboard') }}/assets/img/logo.png" alt="Logo" width="80px"><br>

                <!-- check out -->
                  <table>
                    <tr>
                      <td>Username</td>
                      <td> &nbsp : &nbsp {{$data->username}}</td>
                    </tr>
                    <tr>
                      <td>Password</td>
                      <td>&nbsp  : &nbsp {{$data->password}}</td>
                    </tr>
                    <tr>
                      <td>Paket</td>
                      <td> &nbsp : &nbsp {{$data->profile}}</td>
                    </tr>
                    <tr>
                      <td>Durasi</td>
                      <td> &nbsp : &nbsp {{$data->limit}}</td>
                    </tr>
                  </table>
                 <b class="form-text">PERHATIAN !!
                      <ul>
                          <li>Kumpulkan 10 voucher Gratis 1 hari</li>
                          <li>Whatsapp Admin 085712058763</li>
                      </ul>
                    </b>
                <script type="text/javascript">
        window.print();
    </script>

  <!-- Payment gateway -->

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
</html>