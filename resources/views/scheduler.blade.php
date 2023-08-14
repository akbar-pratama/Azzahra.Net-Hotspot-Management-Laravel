 @extends('layout.master')
 @section('title','Azzahra.Net - Active Scheduler')
 @section('content')

<div id="layoutSidenav_content">
 	<main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Voucher Scheduler</h1>
             	<ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item">Hotspot</li>
                    <li class="breadcrumb-item active">Scheduler</li>
                </ol>

               <!--  Data Scheduler -->

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Voucher Scheduler
                    </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
	                            <thead>
								    <tr align="center">
								        <th>No</th>
								        <th>Name</th>
								        <th>Start Date</th>
								        <th>Start Time</th>
                                        <th>Interval</th>
                                        <th>Run</th>
								    </tr>
								</thead>
								<tbody >
									@foreach ($scheduler as $no => $data)
                                    <tr align="center">
                                        <div hidden>{{ $id = str_replace('*', '', $data['.id']) }}</div>
                                        <td>{{ $no + 1 }}</td>
                                        <td>{{ $data['name'] }}</td>
                                        <td>{{ $data['start-date'] }}</td>
                                        <td>{{ $data['start-time'] }}</td>
                                        <td>{{ $data['interval'] }}</td>
                                        <td>{{ $data['next-run'] }}</td>
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
