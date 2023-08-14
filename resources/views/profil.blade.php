 @extends('layout.master')
 @section('title','Azzahra.Net - Profile')
 @section('content')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Voucher Profile</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Profile</li>
                </ol>
                 <div class="card mb-4">
                    <div class="card-body">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addprofile" >
                            <i class="fa-solid fa-square-plus"></i> &nbsp; Profile
                        </button>&nbsp;
                    </div>
                </div>

                <!-- Modal add-->

                <div class="modal fade" id="addprofile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Profile</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                <!--  Form add -->
                        <form action="{{ route('addprofile.post') }}" method="POST" >
                        @csrf
                            <div class="form-floating mb-3">
                                <input type="hidden" name="id">
                                <input type="text" class="form-control" name="name" required placeholder="name">
                                <label class="form-label">Name</label>
                            </div>
                            <div class="form-floating mb-3"> 
                                <input type="text" class="form-control" name="sharedusers" placeholder="sharedusers" required>
                                <label class="form-label">Shared Users</label>
                            </div>
                            <div class="form-floating mb-3"> 
                                <select class="form-control" name="ratelimit" placeholder="Masukkan ratelimit" required>
                                    <option disabled selected>--Pilih rate-limit--</option>
                                    <option value= " "> unlimited </option>           
<!--                                     <option value="512k/512k"> 512k/512k </option>
                                    <option value="512k/1M"> 512k/1M </option> -->
                                    <option value="1M/1M"> 1M/1M </option>
                                    <option value= "2M/1M"> 2M/1M </option>
                                    <option value= "2M/2M"> 2M/2M </option>
                                    <option value= "3M/3M"> 3M/3M </option>
                                </select>
                                <label class="form-label">Rate Limit (up/down)</label>
                                <div class="form-text">*Descriptions : Kb(k) /Mb(M)</div>
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


               <!--  Data profile -->

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Data Profile
                    </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr align="center">
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Shared Users</th>
                                        <th>Speed Limit</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($hotspotprofile as $no => $data)
                                    <tr align="center">
                                        <div hidden>{{ $id = str_replace('*', '', $data['.id']) }}</div>
                                        <td>{{ $no + 1 }}</td>
                                        <td>{{ $data['name'] }}</td>
                                        <td>{{ $data['shared-users'] ?? '' }}</td>
                                        <td>{{ $data['rate-limit'] ?? 'unlimited' }}</td>
                                        <td>
                                            <div class="form-button-action">
                                                <a  class="btn btn-link btn-lg" data-original-title="Edit Task" data-bs-toggle="modal" data-bs-target="#edit{{$id}}">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                               <!--  button hapus -->
                                                <a href="{{ route('deleteprofile', $id) }}" class="btn btn-link btn-lg" 
                                                    id="deleteprofile" data-nama="{{$data['name']}}">
                                                    <i class="fa fa-times"></i>
                                                </a>

                                            </div>
                                        </td>
                                    </tr>


                            <!-- Modal edit-->

                                <div class="modal fade" id="edit{{$id}}" tabindex="-1" aria-labelledby="exampleModalLabel" 
                                    aria-hidden="true">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Profile</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                      </div>
                                      <div class="modal-body">
                                <!--  Form add -->
                                        <form action="{{ route('updateprofile.post') }}" method="POST" >
                                        @csrf
                                            <div class="form-floating mb-3">
                                                <input type="hidden" value="<?= $data['.id'] ?>" name="id">
                                                <input type="text" class="form-control" name="name" value="{{ $data['name'] }}" required placeholder="name">
                                                <label class="form-label">Name</label>
                                            </div>
                                            <div class="form-floating mb-3"> 
                                                <input type="text" class="form-control" name="sharedusers" 
                                                       value="{{ $data['shared-users'] ?? '' }}" placeholder="shared-users" required>
                                                <label class="form-label">Shared Users</label>
                                            </div>
                                            <div class="form-floating mb-3"> 
                                                <select class="form-control" name="ratelimit" placeholder="Masukkan ratelimit" required>
                                                    <option disabled selected>--Pilih rate-limit--</option>
                                                    @if ($pilihan = $data['rate-limit'] ?? 'unlimited' )
                                                    <option value=" " <?= ( $pilihan == 'unlimited') ? "selected": "" ?>> unlimited </option> 
<!--                                                     <option value="512k/512k" <?= ( $pilihan == '512k/512k') ? "selected": "" ?>> 
                                                    512k/512k </option>
                                                    <option value="512k/1M" <?= ( $pilihan == '512k/1M') ? "selected": "" ?>> 512k/1M </option> -->
                                                    <option value="1M/1M" <?= ( $pilihan == '1M/1M') ? "selected": "" ?>> 1M/1M </option>
                                                    <option value="2M/1M" <?= ( $pilihan == '2M/1M') ? "selected": "" ?>> 2M/1M </option>
                                                    <option value="2M/2M" <?= ( $pilihan == '2M/2M') ? "selected": "" ?>> 2M/2M </option>
                                                    <option value="2M/2M" <?= ( $pilihan == '3M/3M') ? "selected": "" ?>> 3M/3M </option>
                                                    @endif
                                                </select>
                                                <label class="form-label">Rate Limit (up/down)</label>
                                                <div class="form-text">*Descriptions : Kb(k) /Mb(M)</div>
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
                           <!--  close modal edit-->

                                    @endforeach
                                </tbody>
                            </table>
                         </div>
                    </div>

                  <!--   Akhir Data profile -->
                  
                </div>
            </main>
        @include('layout.footer')
    </div>
 @endsection