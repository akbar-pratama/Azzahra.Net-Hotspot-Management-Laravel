 @extends('layout.master')
 @section('title','Azzahra.Net - Pemesanan')
 @section('content')

<div id="layoutSidenav_content">
 	<main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Pemesanan Voucher</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Pemesanan</li>
                </ol>
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-floating mb-0">
                                    <input class="form-control" name="tglawal" id="tglawal" type="date" />
                                    <label for="tglawal">Tanggal Awal</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-floating">
                                    <input class="form-control" name="tglakhir" id="tglakhir" type="date" />
                                    <label for="tglakhir">tanggal Akhir</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <a onclick="this.href='/pemesananPDF/'+document.getElementById('tglawal').value+'/'+document.getElementById('tglakhir').value" data-toggle="tooltip" target="_blank" class="btn btn-secondary">
                                    <i class="fa-regular fa-file-pdf"></i>&nbsp; Cetak PDF
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

               <!--  Data Mitra -->

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Data Pemesanan
                    </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
	                            <thead>
								    <tr align="center">
								        <th>No</th>
								        <th>Mitra</th>
                                        <th>Paket</th>
                                        <th>Limit</th>
                                        <th>Qty</th>
                                        <th>Total</th>
                                        <th>Bukti Bayar</th>
                                        <th>Status</th>
                                        <th>Action</th>
								    </tr>
								</thead>
    							<tbody>
                                    @php
                                        $kounter = 1;
                                    @endphp
                                     @foreach ($pemesanan as $no => $item)
                                     @if(Auth::check() && Auth::user()->level == 'admin')
                                        <tr>
                                            <div hidden> {{ $item->id }} </div>
                                            <td> {{ $kounter }} </td>  
                                            <td> {{ $item->User->username }} </td>                     
                                            <td> {{ $item->profile }} </td>
                                            <td> {{ $item->limit }} </td>
                                            <td> {{ $item->jumlah }} </td>
                                            <td> Rp {{ number_format($item->total, 0, ',' , '.') }} </td>
                                            @if($item->bukti_bayar == '')
                                                <td>
                                                    <span class="badge text-dark bg-warning">Dalam Proses</span>
                                                </td>
                                            @else
                                                <td>
                                                    <a href="" data-bs-toggle="modal" data-bs-target="#image{{$item->id}}">
                                                        {{ $item->bukti_bayar }}
                                                    </a>

                                                <!-- Modal Image -->
                                                    <div class="modal fade" id="image{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
                                                      <div class="modal-dialog" style="width: 20rem;">
                                                        <div class="modal-content">
                                                          <div class="modal-header">
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                          </div>
                                                          <img src="{{ asset('Upload/bukti_bayar/'. $item->bukti_bayar) }}">
                                                        </div>
                                                      </div>
                                                    </div>
                                                <!-- close Modal Image -->
                                                </td>
                                            @endif
                                            <td>
                                                @if( $item->status == 'Pending' )
                                                <span class="badge text-light bg-danger"> {{ $item-> status}} </span>
                                                @else
                                                <span class="badge text-light bg-success"> {{ $item-> status}} </span>
                                                @endif
                                            </td>
                                            <td>
                                                <button id="get_pes{{$item->id}}" class="btn btn-link btn-lg" >
                                                    <a href="{{ route('getpemesanan', $item->id) }}">
                                                        <i class="fa-sharp fa-solid fa-circle-plus"></i>
                                                    </a>
                                                </button>
                                   
                                                <a href="{{route('destroy_', $item->id)}}" class="btn btn-link btn-lg" id="del_pemesanan" 
                                                    data-nama="{{$item->User->username}}">
                                                    <i class="fa fa-times"></i>
                                                </a>

                                                 <!--   Disable Button -->
                                                <script type="text/javascript">
                                                    @if ($item->status == 'Selesai')
                                                        document.getElementById('get_pes{{$item->id}}').disabled = true;
                                                    @else
                                                        document.getElementById('get_pes{{$item->id}}').disabled = false;
                                                    @endif
                                                </script>
                                                <!--   Disable Button -->
                                            </td>
                                        </tr>
                                        @php
                                            $kounter++;
                                        @endphp
                                        @endif

                                        @if($item->User->username == auth()->user()->username)
                                        <tr>
                                            <div hidden> {{ $item->id }} </div>
                                            <td> {{ $kounter }} </td>  
                                            <td> {{ $item->User->username }} </td>                     
                                            <td> {{ $item->profile }} </td>
                                            <td> {{ $item->limit }} </td>
                                            <td> {{ $item->jumlah }} </td>
                                            <td> Rp {{ number_format($item->total, 0, ',' , '.') }} </td>
                                            @if($item->bukti_bayar == '')
                                                <td>
                                                    <a class="btn btn-link btn-lg" data-bs-toggle="modal" data-bs-target="#test{{$item->id}}">
                                                        <i class="fa-solid fa-cloud-arrow-up"></i>
                                                    </a>

                                                <!--  close modal upload-->
                                                     <div class="modal fade" id="test{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" 
                                                        aria-hidden="true">
                                                          <div class="modal-dialog">
                                                            <div class="modal-content">
                                                              <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Upload Bukti</h1>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                              </div>
                                                              <div class="modal-body">

                                                        <!--  Form add -->

                                                                <form action="{{ route('upload', $item->id) }}" method="POST" enctype="multipart/form-data">
                                                                @csrf 
                                                                    <div class="form-floating mb-3">
                                                                        <input class="form-control" type="file" name="bukti" required>
                                                                        <label class="form-label">Upload File</label>
                                                                    </div><br>

                                                                    <!-- Warning ---->
                                                                    <b class="form-text">PERHATIAN !!
                                                                      <ul>
                                                                          <li>Pembayaran Ovo/Dana Ke (085712058763)</li>
                                                                          <li>No.Rekening 764585649 (BCA)</li>
                                                                      </ul>
                                                                    </b>
                                                                    <!-- Warning ---->

                                                                  <div class="modal-footer">
                                                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                                  </div>
                                                                </form>
                                                            <!-- Akhir Form -->
                                                            </div>
                                                          </div>
                                                        </div>
                                                <!--  close modal upload-->
                                                </td>
                                            @else
                                                <td>
                                                    <a href="" data-bs-toggle="modal" data-bs-target="#image{{$item->id}}">
                                                        {{ $item->bukti_bayar }}
                                                    </a>

                                                <!-- Modal Image -->
                                                    <div class="modal fade" id="image{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
                                                      <div class="modal-dialog" style="width: 21rem;">
                                                        <div class="modal-content">
                                                          <div class="modal-header">
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                          </div>
                                                          <img src="{{ asset('Upload/bukti_bayar/'. $item->bukti_bayar) }}">
                                                        </div>
                                                      </div>
                                                    </div>
                                                <!-- close Modal Image -->
                                                </td>
                                            @endif
                                            <td>
                                                @if( $item->status == 'Pending' )
                                                <span class="badge text-light bg-danger"> {{ $item-> status}} </span>
                                                @else
                                                <span class="badge text-light bg-success"> {{ $item-> status}} </span>
                                                @endif
                                            </td>
                                            <td>
                                                <a class="btn btn-link btn-lg" data-bs-toggle="modal" data-bs-target="#edit{{$item->id}}">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                   
                                                <a href="{{route('destroy_', $item->id)}}" class="btn btn-link btn-lg" id="del_pemesanan" 
                                                    data-nama="{{$item->User->username}}">
                                                    <i class="fa fa-times"></i>
                                                </a>

                                                 <!--   Disable Button -->
                                                <script type="text/javascript">
                                                    @if ($item->status == 'Selesai')
                                                        document.getElementById('get_pes{{$item->id}}').disabled = true;
                                                    @else
                                                        document.getElementById('get_pes{{$item->id}}').disabled = false;
                                                    @endif
                                                </script>
                                                <!--   Disable Button -->
                                            </td>
                                        </tr> 
                                    @php
                                        $kounter++;
                                    @endphp

                                   @endif
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
 @endsection


 