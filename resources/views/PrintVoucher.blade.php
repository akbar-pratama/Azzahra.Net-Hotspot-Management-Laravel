<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Print Voucher</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-5 col-md-3">
    <div class="card">
      <div class="card-header">
        <h5 class="text-center">Azzahra Hotspot</h5>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-md-5">
            <h6>Username : {{ $user['name']  ?? ''}}</h6>
            <h6>Password : {{ $user['password'] ?? '' }}</h6>
          </div>
          <div class="col-md-5">
            <h6 class="text-right">{{ $user['profile'] ?? '' }} || {{ $user['limit-uptime'] ?? 'unlimited' }}</h6>
            <h6 class="text-right">Rp 2000</h6>
          </div>
        </div>
        <hr>
            <h5>Deskripsi:</h5>
                <p>[Deskripsi Voucher]</p>
                    <h5>Nilai Voucher: [Nilai Voucher]</h5>
                    <img src="{{ asset('template-dashboard') }}/assets/img/logo.png" class="mx-auto d-block" width="140px">
                <hr>
            <h6>Syarat dan Ketentuan:</h6>
        <ul>
          <li>Voucher berlaku dalam 1 perangkat</li>
          <li>Voucher tidak dapat digabungkan dengan promosi lainnya.</li>
          <li>Voucher hanya dapat digunakan sekali.</li>
        </ul>
      </div>
    </div>
  </div>
 
</body>
</html> -->

<!DOCTYPE html>
<html>
<head>
    <title>Cetak Voucher Hotspot</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        
        .voucher {
            width: 80mm;
            padding: 10px;
            border: 1px solid #000;
            text-align: center;
        }
        
        .logo {
            margin-bottom: 10px;
        }
        
        .title {
            font-size: 18px;
            margin-bottom: 10px;
        }
        
        .code {
            font-size: 18px;
            margin-bottom: 10px;
        }
        
        .expiry {
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="voucher">
        <div class="logo">
            <img src="{{ asset('template-dashboard') }}/assets/img/logo.png" alt="Logo" width="80">
        </div>
        <div class="title">Username : {{ $user['name']  ?? ''}}</div>
        <div class="code">Password : {{ $user['password'] ?? '' }}</div>
        <div class="expiry">{{ $user['profile'] ?? '' }} || {{ $user['limit-uptime'] ?? 'unlimited' }} || Rp {{ $user['comment'] }}</div>
    </div>
     <script type="text/javascript">
        window.print();
    </script>
</body>
</html>





