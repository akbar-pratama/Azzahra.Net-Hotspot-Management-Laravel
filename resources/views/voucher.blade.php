 @extends('layout.master')
 @section('title','Azzahra.Net - Voucher')
 @section('content')

<div id="layoutSidenav_content">
 	<main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Voucher</h1>
             	<ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item">Hotspot</li>
                    <li class="breadcrumb-item active">Voucher</li>
                </ol>
                
                 <div class="card mb-4">
                    <div class="card-body"> 
                        @if(Auth::check() && Auth::user()->level == 'admin')
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addvoucher">
                            <i class="fa-solid fa-user-plus"></i> &nbsp; Voucher
                        </button>&nbsp;
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#generatevoucher">
                            <i class="fa-sharp fa-solid fa-circle-plus"></i> &nbsp; Generate
                        </button>
                        @endif

                        @if(Auth::check() && Auth::user()->level == 'mitra')
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#pemesanan">
                            <i class="fa-sharp fa-solid fa-circle-plus"></i> &nbsp; Pesan Voucher
                        </button>
                        @endif
                    </div>
                </div>
                

        <!-- Modal pemesanan mitra-->
                <div class="modal fade" id="pemesanan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Pemesanan Voucher</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">

                <!--  Form add -->

                        <form action="{{route('PesanVoucher.post')}}" method="POST" >
                        @csrf 
                            <div class="form-floating mb-3"> 
                                <input hidden type="text" class="form-control" name="status" value="Pending" required>
                                @foreach($datausers as $item)
                                    @if($item->username == auth()->user()->username)   
                                <input hidden type="text" class="form-control" name="user_id" placeholder="Masukkan user_id" 
                                value="{{ $item->id }}" >
                                    @endif
                                @endforeach
                                <label class="form-label">Mitra</label>
                            </div>
                            <div class="form-floating mb-3"> 
                                <select class="form-control" name="profile" placeholder="Masukkan profile" required>
                                    <option disabled selected>--Pilih Profile--</option>
                                    @foreach ($profile as $item)
                                    <option>{{ $item['name'] }}</option>
                                    @endforeach
                                </select>
                                <label class="form-label">Jenis Voucher</label>
                            </div>
                            <div class="form-floating mb-3"> 
                                 <select class="form-control" name="limit" placeholder="Masukkan timelimit" required>
                                    <option disabled selected required>--Pilih Waktu--</option>
                                    <option value="6h"> 6 Jam </option>   
                                    <option value="12h"> 12 Jam </option>
                                    <option value="1d"> 1 Hari </option>
                                </select>
                                <label class="form-label">Durasi</label>
                            </div>
                            <div class="form-floating mb-3"> 
                                <input type="text" class="form-control" name="jumlah" placeholder="Masukkan password" required>
                                <label class="form-label">Jumlah</label>
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
           <!--  close modal pemesanan-->


            <!-- Modal add-->
                <div class="modal fade" id="addvoucher" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Voucher</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">

                <!--  Form add -->

                        <form action="{{ route('addvoucher.post') }}" method="POST" >
                        @csrf 
                                 <input type="hidden" class="form-control" name="disabled" value="true">
                            <div class="form-floating mb-3">    
                                <input type="text" class="form-control" name="user" placeholder="Masukkan user" required >
                                <label class="form-label">User</label>
                            </div>
                            <div class="form-floating mb-3"> 
                                <input type="text" class="form-control" name="password" placeholder="Masukkan password" required>
                                <label class="form-label">Password</label>
                            </div>
                            <div class="form-floating mb-3"> 
                                <select class="form-control" name="profile" placeholder="Masukkan profile" required>
                                    <option disabled selected>--Pilih Profile--</option>
                                    @foreach ($profile as $item)
                                    <option>{{ $item['name'] }}</option>
                                    @endforeach
                                </select>
                                <label class="form-label">Profile</label>
                            </div>
                            <div class="form-floating mb-3"> 
                                 <select class="form-control" name="timelimit" placeholder="Masukkan timelimit" required>
                                    <option disabled selected required>--Pilih Waktu--</option>
                                    <option value="6h"> 6 Jam </option>   
                                    <option value="12h"> 12 Jam </option>
                                    <option value="1d"> 1 Hari </option>
                                </select>
                                <label class="form-label">Time Limit</label>
                                <div class="form-text">*Hari/Day(d) || Jam/Hours(h) || Unlimited(0)</div>
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


            <!-- Modal generate-->
                <div class="modal fade" id="generatevoucher" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Generate Voucher</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                <!--  Form add -->
                        <form action="{{ route('generatevoucher.post') }}" method="POST" >
                        @csrf
                            <div class="form-floating mb-3">
                                <input type="hidden" class="form-control" name="disabled" value="true">
                                <input type="text" class="form-control" maxlength="4" onkeypress="return event.charCode != 32" name="jum" value="100" placeholder="256 only recomended">
                                <label class="form-label">Qty User Hotspot</label>
                            </div>
                            <div class="form-floating mb-3"> 
                                <select class="form-control" name="profile" placeholder="Masukkan profile" required>
                                    <option disabled selected>--Pilih Profile--</option>
                                    @foreach ($profile as $item)
                                    <option>{{ $item['name'] }}</option>
                                    @endforeach
                                </select>
                                <label class="form-label">Profile</label>
                            </div>
                            <div class="form-floating mb-3"> 
                                 <select class="form-control" name="timelimit" placeholder="Masukkan timelimit" required>
                                    <option disabled selected>--Pilih Waktu--</option>
                                    <option value="6h"> 6 Jam </option>   
                                    <option value="12h"> 12 Jam </option>
                                    <option value="1d"> 1 Hari </option>
                                </select>
                                <label class="form-label">Time Limit</label>
                                <div class="form-text">*Hari/Day(d) || Jam/Hours(h) || Unlimited(0)</div>
                            </div>
                        </div>
                      <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Generate</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                      </div>
                    </form>
                    <!-- Akhir Form -->
                    </div>
                  </div>
                </div>
           <!--  close modal generate-->



               <!--  Data Voucher/user -->
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Data Voucher 
                         <b class="form-text" style="margin-left: 53%">Catatan : Hari/Day(d) || Jam/Hours(h) || Unlimited(0)</b>
                    </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
	                            <thead>
								    <tr align="center">
                                        <th style="width: 5%">No</th>
								        <th style="width: 5%">Username</th>
								        <th style="width: 8%">Password</th>
								        <th style="width: 7%">Profile</th>
                                        <th style="width: 7%">Uptime</th>
                                        <th style="width: 7%">Time Limit</th>
                                        <th style="width: 7%">Status</th>
								        <th style="width: 8%">Action</th>
								    </tr>
								</thead>
								<tbody>
                                    @php
                                        $kounter = 1;
                                    @endphp
									@foreach ($hotspotuser as $no => $data)
                                        @if ($data['comment'] == $item1)
                                           
								  	<tr align="center">
								  		<div hidden>{{ $id = str_replace('*', '', $data['.id']) }}</div>
                                        <td> {{ $kounter }} </td>
								  		<td> {{ $data['name'] }} </td>
								  		<td> {{ $data['password'] ?? '' }} </td>
										<td> {{ $data['profile'] ?? '' }} </td>
                                        <td> {{ $data['uptime'] }} </td>
                                        <td> {{ $data['limit-uptime'] ?? 'unlimited' }} </td>
                                        <td>
                                            <span class="badge text-light {{$data['disabled'] == 'false' ? 'bg-danger':'bg-success'}} ">
                                            {{ ($data['disabled'] == 'false') ? 'Terjual':'Tersedia'  }}
                                            </span>
                                        </td>
                                        <td>
                                            <div class="form-button-action">
                                        <!-- button edit -->
                                                <a class="btn btn-link btn-lg" data-bs-toggle="modal" data-bs-target="#edit{{$id}}">
                                                    <i class="fa fa-edit"></i>
                                                </a>

                                        <!--  button hapus -->
                                                <a href="{{ route('deletevoucher', $id) }}" class="btn btn-link btn-lg" id="delete" data-nama="{{$data['name']}}">
                                                    <i class="fa fa-times"></i>
                                                </a>

                                        <!--  button transaksi -->
                                                <button class="btn btn-link btn-lg" id="btnTransaksi{{$id}}" data-bs-toggle="modal" data-bs-target="#transaksi{{$id}}">
                                                    <i class="fa fa-cart-shopping"></i>
                                                </button>

                                        <!--   Disable Button -->
                                                <script type="text/javascript">
                                                    @if ($data['disabled'] == 'false')
                                                        document.getElementById('btnTransaksi{{$id}}').disabled = true;
                                                    @else
                                                        document.getElementById('btnTransaksi{{$id}}').disabled = false;
                                                    @endif
                                                </script>
                                        <!--   Disable Button -->
                                            </div>
                                        </td>
									</tr>


                    <!-- Modal transaksi-->

                        <div class="modal fade" id="transaksi{{$id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
                          <div class="modal-dialog" style="width: 21rem;">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Invoice {{ $data['name'] ?? '' }}</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>

                            <!--  INVOICE -->

                              <div class="modal-body">
                                <div class="card shadow" style="width: 19rem;">
                                    <div class="card-body">
                                        <h5 class="card-title" align="center">Voucher</h5>
                                        <form action="{{ route('save.post') }}" method="POST" >
                                         @csrf 
                                            <div class="save">
                                                <label for="save">Username &nbsp;: </label>
                                                    <input type="hidden" value="<?= $data['.id'] ?>" name="id">
                                                    <input type="hidden" name="disabled" value="{{ $data['disabled'] }}">
                                                    <input type="hidden" name="bukti_bayar" value="offline">
                                                    <input type="hidden" name="user_id" value="{{ $data['comment'] }}">
                                                    <input readonly type="text" id="save" name="user" value="{{ $data['name'] ?? '' }}" size="16">
                                                <label for="save">Password &nbsp; : </label>
                                                    <input readonly type="text" id="save" name="password" value="{{ $data['password'] ?? '' }}" size="16">
                                                <label for="save">Profile  &emsp; &nbsp; :</label>
                                                    <input readonly type="text" id="save" name="profile" value="{{ $data['profile'] ?? '' }}" size="16">
                                                <label for="save">Time Limit : </label>
                                                    <input readonly type="text" id="save" name="timelimit" value="{{ $data['limit-uptime'] ?? 'unlimited' }} " size="16">
                                            <hr>
                                                <b>
                                                    @if ($data['profile'] == 'Streaming') 
                                                        @if ($data['limit-uptime'] == '1d')
                                                            <label for="save">Total &emsp; &nbsp; &nbsp; : &nbsp;Rp</label>
                                                            <input readonly type="text" id="save" name="comment" 
                                                            value="6000" size="12" style="font-weight: bold;"> 
                                                        @elseif($data['limit-uptime'] == '6h')
                                                            <label for="save">Total &emsp; &nbsp; &nbsp; : &nbsp;Rp</label>
                                                            <input readonly type="text" id="save" name="comment" 
                                                            value="4000" size="12" style="font-weight: bold;"> 
                                                        @else
                                                            <label for="save">Total &emsp; &nbsp; &nbsp; : &nbsp;Rp</label>
                                                            <input readonly type="text" id="save" name="comment" 
                                                            value="5000" size="12" style="font-weight: bold;"> 
                                                        @endif

                                                    @elseif ($data['profile'] == 'Social Media')
                                                        @if ($data['limit-uptime'] == '1d')
                                                           <label for="save">Total &emsp; &nbsp; &nbsp; : &nbsp;Rp</label>
                                                            <input readonly type="text" id="save" name="comment" 
                                                            value="5000" size="12" style="font-weight: bold;"> 
                                                        @elseif($data['limit-uptime'] == '6h')
                                                           <label for="save">Total &emsp; &nbsp; &nbsp; : &nbsp;Rp</label>
                                                            <input readonly type="text" id="save" name="comment" 
                                                            value="3000" size="12" style="font-weight: bold;">  
                                                        @else
                                                            <label for="save">Total &emsp; &nbsp; &nbsp; : &nbsp;Rp</label>
                                                            <input readonly type="text" id="save" name="comment" 
                                                            value="4000" size="12" style="font-weight: bold;"> 
                                                        @endif

                                                    @else
                                                        @if ($data['limit-uptime'] == '1d')
                                                            <label for="save">Total &emsp; &nbsp; &nbsp; : &nbsp;Rp</label>
                                                            <input readonly type="text" id="save" name="comment" 
                                                            value="7000" size="12" style="font-weight: bold;"> 
                                                        @elseif($data['limit-uptime'] == '6h')
                                                            <label for="save">Total &emsp; &nbsp; &nbsp; : &nbsp;Rp</label>
                                                            <input readonly type="text" id="save" name="comment" 
                                                            value="5000" size="12" style="font-weight: bold;"> 
                                                        @else
                                                            <label for="save">Total &emsp; &nbsp; &nbsp; : &nbsp;Rp</label>
                                                            <input readonly type="text" id="save" name="comment" 
                                                            value="6000" size="12" style="font-weight: bold;"> 
                                                        @endif
                                                    @endif
                                                </b>
                                            </div>
                                        </div>
                                    </div><br>

                        <!--   Tata cara transaksi -->
                                    <b class="form-text">PERHATIAN !!
                                        <ul>
                                            <li>Cetak dulu voucher sebelum disimpan</li>
                                            <li>Pastikan uang sudah diterima</li>
                                            <li>Klik save untuk menyimpan pembayaran</li>
                                        </ul>
                                    </b>
                        <!--   Tata cara transaksi -->

                                </div>
                                    <div class="modal-footer">
                                <!--   Button simpan -->
                                        <button type="submit" class="btn btn-primary" name="save">
                                            <i class="fa fa-floppy-disk"></i>&nbsp;Save</button>
                                    </form>
                                <!--   Button cetak -->
                                        <a href="{{route('printvoucher', $id)}}" type="button" data-toggle="tooltip" target="_blank"   class="btn btn-secondary">
                                            <i class="fa fa-print"></i>&nbsp;Print
                                        </a>
                                    </div>
                            <!-- Akhir INVOICE -->
                            </div>
                          </div>
                        </div>
                   <!--  close modal transaksi --> 



                    <!-- Modal edit-->

                        <div class="modal fade" id="edit{{$id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Voucher</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>

                            <!--  Form Edit -->

                              <div class="modal-body">
                                <form action="{{ route('updatevoucher.post') }}" method="POST" >
                                @csrf 
                                    <div class="form-floating mb-3">
                                        <input type="hidden" value="<?= $data['.id'] ?>" name="id">
                                        <input type="text" class="form-control" name="user" value="{{ $data['name'] ?? '' }}" placeholder="Masukkan user" required>
                                        <label class="form-label" for="user">User</label>
                                    </div>
                                     <div class="form-floating mb-3"> 
                                        <input type="text" class="form-control" name="password" value="{{ $data['password'] ?? '' }}" placeholder="Masukkan password" required>
                                        <label class="form-label">Password</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <select name="profile" class="form-control" required>
                                            <option disabled selected>--Pilih Profile--</option>
                                                @if ($pilihan = $data['profile'] ?? '' )
                                            @foreach ($profile as $item)
                                            <option <?= ( $pilihan == $item['name'] ) ? "selected": "" ?> >{{ $item['name'] }}</option>
                                            @endforeach
                                                @endif
                                        </select>
                                        <label class="form-label" for="profile">Profile</label>
                                    </div>
                                    <div class="form-floating mb-3"> 
                                         <select class="form-control" name="timelimit" placeholder="Masukkan timelimit" required>
                                            <option disabled >--Pilih Waktu--</option>
                                            @if ($pilihan = $data['limit-uptime'] ?? 'unlimited' )
                                            <option value="6h" <?= ( $pilihan == '6h') ? "selected": "" ?>> 6 Jam </option>
                                            <option value="12h" <?= ( $pilihan == '12h') ? "selected": "" ?>> 12 Jam </option>
                                            <option value="1d" <?= ( $pilihan  == '1d') ? "selected": "" ?>> 1 Hari </option> 
                                            @endif 
                                        </select>
                                        <label class="form-label" for="timelimit">Time Limit</label>
                                        <div class="form-text">*Hari/Day(d) || Jam/Hours(h) || Unlimited(0)</div>
                                    </div>
                                    <div class="form-floating mb-3">
                                       <select name="disabled" id="disabled" class="form-control">
                                                <option disabled selected>--Pilih status voucher--</option>
                                                @if ($data['disabled'] == "false")
                                                    <option value="true">Disable</option>
                                                    <option value="false" selected>Enable</option>
                                                @elseif($data['disabled'] == "true")
                                                    <option value="true" selected>Disable</option>
                                                    <option value="false">Enable</option>
                                                @endif
                                            </select>
                                        <label for="status">Status Voucher</label>
                                        <div class="form-text">*Enable = aktif || Disable = Non Aktif</div>
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
                                @php
                                    $kounter++;
                                @endphp
                            @endif
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


<!--  Css Form Invoice -->

    <style type="text/css">
        .save, input{
            border: none;
            outline: none;
        }
    </style>
 
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


 