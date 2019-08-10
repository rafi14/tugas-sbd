<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('css/eer.css')}}" rel="stylesheet" type="text/css" media="all"/>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
    <title>Document</title>
</head>
<body style="background-color: #b3ecff;">
  <div class="row">
        <h1 style="text-align: center; margin-top: 100px;">Dibawah Ini Terdapat Table-Table Dari Database D'BANK</h1><br>
        <center><img src="{{asset('images/bawah2.gif')}}" alt=""></center><br><br><br><br>
   </div> 
   <div class="row">
        <div class="col-md-4">
            <h2 style="margin-left: 400px;">Table Nasabah</h2>
            <img style="margin-left: 100px;" src="{{asset('images/presentasi/1.PNG')}}" alt="">
        </div>
        <div class="col-md-4">
            <h2 style="margin-left: 500px;">Table Saldo Tabungan</h2>
            <img width="600px;" style="margin-left: 250px;" src="{{asset('images/presentasi/saldotabungan.PNG')}}" alt="">
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <h2 style="margin-top: 50px;margin-left: 400px;">Table CS</h2>
            <img style="margin-left: 100px;" src="{{asset('images/presentasi/cs.PNG')}}" alt="">
        </div>
        <div class="col-md-4">
            <h2 style="margin-left: 500px;margin-top: 50px;">Table Teller</h2>
            <img width="600px;" style="margin-left: 350px;" src="{{asset('images/presentasi/teller.PNG')}}" alt="">
        </div>
    </div>        
    <div class="row">
        <div class="col-md-4">
            <h2 style="margin-top: 50px;margin-left: 750px;">Table Direktur Bank</h2>
            <img style="margin-left: 450px;" src="{{asset('images/presentasi/direktur-bank.PNG')}}" alt="">
        </div>
    </div>  
    <div class="row">
        <h1 style="text-align: center; margin-top: 100px;">Klik Tombol Next Dibawah Ini Untuk Kembali Ke Presentasi</h1><br>
        <center><img src="{{asset('images/bawah2.gif')}}" alt=""></center><br>
        <center><a class="btn btn-primary" href="{{route('dashboard.detailpresentasi')}}">Next</a></center><br><br><br><br>
   </div>       
   
    

</body>
</html>



