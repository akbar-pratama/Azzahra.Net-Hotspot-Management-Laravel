 @extends('layout.master')
 @section('title','Azzahra.Net - Mitra')
 @section('content')

<div id="layoutSidenav_content">
 	<main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Mitra</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Mitra</li>
                </ol>
                <div class="card mb-4">
                    <div class="card-body">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addmitra">
                            <i class="fa-solid fa-user-plus"></i> &nbsp; Mitra
                        </button>
                    </div>
                </div>

        <!-- Modal add-->

                <div class="modal fade" id="addmitra" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Mitra</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">

                <!--  Form add -->
                        <form action="{{ route('addmitra.post') }}" method="POST" >
                            @csrf 
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="address" placeholder="Masukkan ip_address" required >
                                <label class="form-label">Address</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="username" placeholder="Masukkan user" required >
                                <label class="form-label">Username</label>
                            </div>
                            <div class="form-floating mb-3"> 
                                <input type="text" class="form-control" name="password" placeholder="Masukkan password" required>
                                <label class="form-label">Password</label>
                            </div>
                            <div class="form-floating mb-3">
                                 <select class="form-control" name="level" placeholder="level" required>
                                    <option disabled selected required>--Pilih Level Mitra--</option>
                                    <option value="admin"> Admin </option>   
                                    <option value="mitra"> Mitra </option>
                                </select>
                                <label class="form-label">Level</label>
                            </div>
                        </div>
                      <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Tambah</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                      </div>
                    </form>
                    <!-- Akhir Form -->
                    </div>
                  </div>
                </div>
           <!--  close modal add-->

               <!--  Data Mitra -->

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Data Mitra
                    </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
	                            <thead>
								    <tr align="center">
								        <th>No</th>
								        <th>IP Address</th>
								        <th>Username</th>
                                        <th>Level</th>
								        <th>Action</th>
								    </tr>
								</thead>
							    <tbody>
                                    @foreach ($datausers as $no => $item)
                                        <tr>
                                            <div hidden> {{ $item->id }} </div>
                                            <td> {{ $no + 1 }} </td> 
                                            <td> {{ $item->address }} </td>                     
                                            <td> {{ $item->username }} </td>
                                            <td> {{ $item->level}} </td>
                                            <td>
                                                <div class="form-button-action">
                                        <!-- button edit -->
                                                <a class="btn btn-link btn-lg" data-bs-toggle="modal" data-bs-target="#edit{{$item->id}}">
                                                    <i class="fa fa-edit"></i>
                                                </a>

                                        <!--  button hapus -->
                                                <a href="{{route('deleteMitra', $item->id)}}" class="btn btn-link btn-lg" id="deletemitra" data-nama="{{$item->username}}">
                                                    <i class="fa fa-times"></i>
                                                </a>
                                            </td>
                                        </tr>

                        <!-- Modal edit-->

                        <div class="modal fade" id="edit{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Mitra</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>

                            <!--  Form Edit -->

                              <div class="modal-body">
                                <form action="{{ route('ubah',  $item->id) }}" method="POST" >
                                @csrf 
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" name="address" value="{{ $item -> address }}" placeholder="Masukkan user" required>
                                        <label class="form-label" for="user">Address</label>
                                    </div>
                                    <div class="form-floating mb-3"> 
                                        <input type="text" class="form-control" name="username" value="{{ $item -> username }}" placeholder="Masukkan username" required>
                                        <label class="form-label">Username</label>
                                    </div>
                                    <div class="form-floating mb-3"> 
                                        <select class="form-control" name="level" placeholder="level" required>
                                            <option disabled selected required>--Pilih Level Mitra--</option>
                                                @if ( $item -> level == "admin")
                                                    <option value="admin" selected>Admin</option>
                                                    <option value="mitra">Mitra</option>
                                                @elseif($item -> level == "mitra")
                                                    <option value="admin">Admin</option>
                                                    <option value="mitra" selected>Mitra</option>
                                                @endif
                                        </select>
                                        <label class="form-label">Level</label>
                                    </div>
                                </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Ubah</button>
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                    </div>
                            </form>
                            <!-- Akhir Form -->

                            </div>
                          </div>
                        </div>
                   <!--  close modal edit --> 

                                    @endforeach
                                </tbody>
                            </table>
	                     </div>
	                </div>

	              <!--   Akhir Data Voucher -->
	              
	        	</div>
	    	</main>
	    @include('layout.footer')
	</div>
<!-- 
 <script src="https://cdn.jsdelivr.net/npm/laravel-echo@^1.11.4/dist/echo.min.js"></script>
<script>
    window.Echo = new Echo({
        broadcaster: 'pusher',
        key: '{{ env('PUSHER_APP_KEY') }}',
        cluster: '{{ env('PUSHER_APP_CLUSTER') }}',
        forceTLS: true
    });
</script> -->
 @endsection


 