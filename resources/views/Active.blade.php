 @extends('layout.master')
 @section('title','Azzahra.Net - Active Voucher')
 @section('content')

<div id="layoutSidenav_content">
 	<main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Voucher Active</h1>
             	<ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item">Hotspot</li>
                    <li class="breadcrumb-item active">Status</li>
                </ol>
                <!--  <div class="card mb-4">
                    <div class="card-body">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addvoucher">
                            <i class="fa-solid fa-user-plus"></i> &nbsp; Voucher
                        </button>&nbsp;
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addvoucher">
                            <i class="fa-sharp fa-solid fa-circle-plus"></i> &nbsp; Generate
                        </button> 
                    </div>
                </div> -->

               <!--  Data Voucher/user -->

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Voucher Active
                    </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
	                            <thead>
								    <tr align="center">
								        <th>No</th>
								        <th>Server</th>
								        <th>Voucher</th>
								        <th>Address</th>
                                        <th>Session Time</th>
								    </tr>
								</thead>
								<tbody >
									@foreach ($hotspotactive as $no => $data)
                                    <tr align="center">
                                        <div hidden>{{ $id = str_replace('*', '', $data['.id']) }}</div>
                                        <td>{{ $no + 1 }}</td>
                                        <td>{{ $data['server'] }}</td>
                                        <td>{{ $data['user'] }}</td>
                                        <td>{{ $data['address'] }}</td>
                                        <td>{{ $data['session-time-left'] ?? 'unlimited'}}</td>
                                    </tr>
                                    @endforeach
	                        	</tbody>
                            </table>
	                     </div>
	                </div>

	              <!--   Akhir Data Voucher -->
	              
	        	</div>
	    	</main>


<!-- <script>

            setInterval(function() {
                $.ajax({
                    url: '{{ route('active') }}',
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        $('#mikrotik-data').empty();
                        $.each(data, function(active, active) {
                            $('#mikrotik-data').append('<tr><td>'+ (no++) + active['server'] + '</td><td>' + address['user'] + '</td><td>' + address['address'] + '</td><td>'+ address['session-time-left'] +'</td></tr>');
                        });
                    }
                });
            }, 1000);
    </script> -->

    <!-- <script type="text/javascript">
    $(document).ready(function(){
        setTimeout(function() {
            location.reload();
        }, 1000);
    })
</script> -->




	    @include('layout.footer')
	</div>

 @endsection
