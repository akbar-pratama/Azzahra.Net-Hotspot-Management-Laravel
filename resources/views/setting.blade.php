 @extends('layout.master')
 @section('title','Azzahra.Net - Settings')
 @section('content')

 <div id="layoutSidenav_content">
 	<main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Pengaturan Akun</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Pengaturan</li>
                </ol>

               <!--  Data Mitra -->

 					<form>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" />
                                    <label for="inputFirstName">Address</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" />
                                    <label for="inputLastName">Username</label>
                                </div>
                            </div>
                            </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="inputEmail" type="email" placeholder="name@example.com" />
                                    <label for="inputEmail">Password</label>
                                </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputPassword" type="password" placeholder="Create a password" />
                                        <label for="inputPassword">Password</label>
                                    </div>
                                </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" id="inputPasswordConfirm" type="password" placeholder="Confirm password" />
                                    <label for="inputPasswordConfirm">Confirm Password</label>
                                </div>
                            </div>
                            </div>
                                <div class="mt-4 mb-0">
                                    <div class="d-grid"><a class="btn btn-primary btn-block" href="login.html">Connect Router</a></div>
                                </div>
                        	</form>

	              <!--   Akhir Data Voucher -->
	              
	        	</div>
	    	</main>
	    @include('layout.footer')
	</div>
 @endsection