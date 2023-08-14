@extends('layout.master')
@section('title','Azzahra.Net - Dashboard')
@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Dashboard</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-primary text-white bg-gradient mb-4">
                            <div class="card-body"> <i class="fa-solid fa-ticket"></i> &nbsp; Total Voucher : <?= $totalhotspotuser ?></div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="{{ route('voucher') }}">Voucher</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                     @if(Auth::check() && Auth::user()->level == 'admin')
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-warning text-white bg-gradient mb-4">
                            <div class="card-body"><i class="fas fa-globe"></i> &nbsp; Total Voucher Profile : <?= $totalhotspotprofile ?></div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="{{ route('profile') }}">Voucher Profile</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                  @endif
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-danger text-white bg-gradient mb-4">
                            <div class="card-body"><i class="fas fa-desktop"></i> &nbsp; CPU Load</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <div class="small text-white" id="cpu"></div>
                                <!-- <div class="small text-white"><i class="fas fa-angle-right"></i></div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-success text-white bg-gradient mb-4">
                            <div class="card-body"><i class="fas fa-coins"></i> &nbsp; Rp {{ number_format($totalPrice, 0, ',' , '.') }}</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="{{ route('transaksi') }}">Penjualan Voucher</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-success text-white bg-gradient mb-4">
                            <div class="card-body"><i class="fas fa-coins"></i> &nbsp; Rp {{ number_format($total, 0, ',' , '.') }} </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="{{ route('keranjang') }}">Pembelian Mitra</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                </div>      
                    </div>
             </main>
        @include('layout.footer')
    </div>

     <script type="text/javascript">

    setInterval('cpu();', 1000);
    function cpu() {
        $('#cpu').load('{{ route('dashboard.cpu') }}')
     }
</script>
@endsection