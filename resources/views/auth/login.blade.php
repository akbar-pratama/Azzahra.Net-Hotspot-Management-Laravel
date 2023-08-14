<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Azzahra.net - Login</title>
        <link rel="shortcut icon" type="image/jpeg" href="{{ asset('template-dashboard') }}/assets/img/logo.png">
        <link href="{{ asset('template-dashboard') }}/css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-dark bg-gradient">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main> 
                    <div class="container mb-4">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-4">

                                 <!--  Alert Session -->

                                     @if(Session::has('alert'))
                                          <script type="text/javascript">
                                            alert("Tidak Dapat Terhubung");
                                          </script>
                                        @endif

                                    <!--  Alert Session --> 

                                    <div class="card-header bg-info bg-gradient">
                                        <img src="{{ asset('template-dashboard') }}/assets/img/logo.png" class="mx-auto d-block" width="210px">
                                    </div>
                                    <div class="card-body">
                                        <form action="{{ route('login.post') }}" method="POST" >
                                          @csrf
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" name="address" placeholder="Masukkan IP Address" required autofocus>
                                                <label class="form-label">IP Address</label>
                                            </div>
                                            <div class="form-floating mb-3"> 
                                                <input type="text" class="form-control" name="username" placeholder="Masukkan Username" required>
                                                <label class="form-label">Username</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input type="password" class="form-control" name="password" placeholder="Password ">
                                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                                <div class="form-text">*Masukkan username dan password dengan benar</div>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a href="/" class="btn btn-link btn-lg"><i class="fa-sharp fa-solid fa-arrow-left"></i></a>
                                                <button type="submit" class="btn btn-primary mb-2">Masuk</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
          @include('layout.footer')
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('template-dashboard') }}/js/scripts.js"></script>
    </body>
</html>



<!-- <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body class="container col-md-5">
      @if(Session::has('light'))
      <div class="alert-light">
        <i class="fas-solid fa-triangle-exclamation"></i>{{Session::get('light')}}
       </div>
      @endif 
        <form class="form-control mt-5" action="{{ route('login.post') }}" method="POST" >
          @csrf
        <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4 mt-2">Welcome Azzahra.Net</h1>
        </div>
         <div class="mb-3">
            <label class="form-label">IP Address</label>
            <input type="text" class="form-control" name="ip" required="Masukkan IP Address">
          </div>
          <div class="mb-3">
            <label class="form-label">Username</label>
            <input type="text" class="form-control" name="user" required="Masukkan Username">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" name="pass" >
            <div class="form-text">*Masukkan username dan password dengan benar</div>
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
          </div>
          <button type="submit" class="btn btn-primary mb-3">
          Login</button>
        </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
 -->