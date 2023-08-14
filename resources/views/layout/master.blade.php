<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!--     <meta http-equiv="refresh" content=""> -->
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>@yield('title')</title>
        <link rel="shortcut icon" type="image/jpeg" href="{{ asset('template-dashboard') }}/assets/img/logo.png">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="{{ asset('template-dashboard') }}/css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- toast -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body class="sb-nav-fixed bg-light">
        @include('layout.navbar')
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('template-dashboard') }}/js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('template-dashboard') }}/assets/demo/chart-area-demo.js"></script>
        <script src="{{ asset('template-dashboard') }}/assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="{{ asset('template-dashboard') }}/js/datatables-simple-demo.js"></script>

       <!--  Toast -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <!-- Sweetalert -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        @stack('scripts')

    </body>

<!-- Script Session -->

    <script type="text/javascript">
        @if (Session::has('success'))
            toastr.success("{{ Session::get('success') }}")
        @endif
    </script>

<!-- SweetAlert Voucher -->

    <script type="text/javascript">
       $(function(deletevoucher){
          $(document).on('click', '#delete', function(e){
             e.preventDefault();
              var deleted = $(this).attr('href');
              var nama = $(this).attr('data-nama');
          Swal.fire({
              title: 'Konfirmasi?',
              text: "Apakah Anda yakin ingin menghapus "+nama+" ?",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Hapus',
              cancelButtonText: 'Batal'
            }).then((result) => {
              if (result.isConfirmed) {
                  $.ajax({
                    url: deleted,
                    type: 'GET',
                    data: {
                        "_token": "{{ csrf_token() }}",
                      },
                      success: function(response) {
                          // Tampilkan pesan sukses jika item berhasil dihapus
                          Swal.fire("Sukses", "Item berhasil dihapus.", "success");
                           
                          // Lakukan refresh atau manipulasi tampilan sesuai kebutuhan 
                          window.location="/hotspot/voucher"
                      },
                      error: function(xhr) {
                          // Tampilkan pesan error jika terjadi kesalahan
                          Swal.fire("Error", "Terjadi kesalahan saat menghapus item.", "error");
                      }
                    });
                  } 
                })                                      
              });
            }); 
    </script>

<!-- SweetAlert Profile -->

    <script type="text/javascript">
       $(function(deleteprofile){
          $(document).on('click', '#deleteprofile', function(e){
             e.preventDefault();
              var deleteprofile = $(this).attr('href');
              var nama = $(this).attr('data-nama');
          Swal.fire({
              title: 'Konfirmasi?',
              text: "Apakah Anda yakin ingin menghapus "+nama+" ?",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Hapus',
              cancelButtonText: 'Batal'
            }).then((result) => {
              if (result.isConfirmed) {
                  $.ajax({
                    url: destroy_,
                    type: 'GET',
                    data: {
                        "_token": "{{ csrf_token() }}",
                      },
                      success: function(response) {
                          // Tampilkan pesan sukses jika item berhasil dihapus
                          Swal.fire("Sukses", "Item berhasil dihapus.", "success");
                           
                          // Lakukan refresh atau manipulasi tampilan sesuai kebutuhan 
                          window.location="/hotspot/profile"
                      },
                      error: function(xhr) {
                          // Tampilkan pesan error jika terjadi kesalahan
                          Swal.fire("Error", "Terjadi kesalahan saat menghapus item.", "error");
                      }
                    });
                  } 
                })                                      
              });
            }); 
    </script>

    <!-- SweetAlert Transaksi -->

    <script type="text/javascript">
       $(function(deletetransaksi){
          $(document).on('click', '#deletetransaksi', function(e){
             e.preventDefault();
              var deletedtransaksi = $(this).attr('href');
              var nama = $(this).attr('data-nama');
          Swal.fire({
              title: 'Konfirmasi?',
              text: "Apakah Anda yakin ingin menghapus "+nama+" ?",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Hapus',
              cancelButtonText: 'Batal'
            }).then((result) => {
              if (result.isConfirmed) {
                  $.ajax({
                    url: deletedtransaksi,
                    type: 'GET',
                    data: {
                        "_token": "{{ csrf_token() }}",
                      },
                      success: function(response) {
                          // Tampilkan pesan sukses jika item berhasil dihapus
                          Swal.fire("Sukses", "Item berhasil dihapus.", "success");
                           
                          // Lakukan refresh atau manipulasi tampilan sesuai kebutuhan 
                          window.location="/transaksi"
                      },
                      error: function(xhr) {
                          // Tampilkan pesan error jika terjadi kesalahan
                          Swal.fire("Error", "Terjadi kesalahan saat menghapus item.", "error");
                      }
                    });
                  } 
                })                                      
              });
            }); 
    </script>

 <!-- SweetAlert Mitra-->

    <script type="text/javascript">
       $(function(deletemitra){
          $(document).on('click', '#deletemitra', function(e){
             e.preventDefault();
              var deletedmitra = $(this).attr('href');
              var nama = $(this).attr('data-nama');
          Swal.fire({
              title: 'Konfirmasi?',
              text: "Apakah Anda yakin ingin menghapus "+nama+" ?",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Hapus',
              cancelButtonText: 'Batal'
            }).then((result) => {
              if (result.isConfirmed) {
                  $.ajax({
                    url: deletedmitra,
                    type: 'GET',
                    data: {
                        "_token": "{{ csrf_token() }}",
                      },
                      success: function(response) {
                          // Tampilkan pesan sukses jika item berhasil dihapus
                          Swal.fire("Sukses", "Item berhasil dihapus.", "success");
                           
                          // Lakukan refresh atau manipulasi tampilan sesuai kebutuhan 
                          window.location="/mitra"
                      },
                      error: function(xhr) {
                          // Tampilkan pesan error jika terjadi kesalahan
                          Swal.fire("Error", "Terjadi kesalahan saat menghapus item.", "error");
                      }
                    });
                  } 
                })                                      
              });
            }); 
    </script>

    <!-- SweetAlert Pemesanan -->

    <script type="text/javascript">
       $(function(del_pemesanan){
          $(document).on('click', '#del_pemesanan', function(e){
             e.preventDefault();
              var del_pemesanan = $(this).attr('href');
              var nama = $(this).attr('data-nama');
          Swal.fire({
              title: 'Konfirmasi?',
              text: "Apakah Anda yakin ingin menghapus "+nama+" ?",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Hapus',
              cancelButtonText: 'Batal'
            }).then((result) => {
              if (result.isConfirmed) {
                  $.ajax({
                    url: del_pemesanan,
                    type: 'GET',
                    data: {
                        "_token": "{{ csrf_token() }}",
                      },
                      success: function(response) {
                          // Tampilkan pesan sukses jika item berhasil dihapus
                          Swal.fire("Sukses", "Item berhasil dihapus.", "success");
                           
                          // Lakukan refresh atau manipulasi tampilan sesuai kebutuhan 
                          window.location="/pemesanan"
                      },
                      error: function(xhr) {
                          // Tampilkan pesan error jika terjadi kesalahan
                          Swal.fire("Error", "Terjadi kesalahan saat menghapus item.", "error");
                      }
                    });
                  } 
                })                                      
              });
            }); 
    </script>
</html>