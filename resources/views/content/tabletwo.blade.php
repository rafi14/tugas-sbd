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
        <h1 style="text-align: center; margin-top: 100px;">Jadi Dibawah Ini Terdapat Table-Table Dari Jurnal 2</h1><br>
        <center><img src="{{asset('images/bawah2.gif')}}" alt=""></center><br> 
   </div> 
   <div class="row">
        <div class="col-md-4">
            <img style="margin-left: 100px;margin-top: 100px;" src="{{asset('images/jurnal2/21.PNG')}}" alt="">
        </div>
        <div class="col-md-4">
            <img width="600px;" style="margin-left: 200px;margin-top: 100px;" src="{{asset('images/jurnal2/22.PNG')}}" alt="">
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <img style="margin-top: 100px;margin-left: 100px;" src="{{asset('images/jurnal2/23.PNG')}}" alt="">
        </div>
        <div class="col-md-4">
            <img width="400px;" style="margin-left: 100px;margin-top: 100px;" src="{{asset('images/jurnal2/24.PNG')}}" alt="">
        </div>
        <div class="col-md-4">
            <img style="margin-top: 100px;margin-left: 100px;" src="{{asset('images/jurnal2/25.PNG')}}" alt=""><br><br><br>
        </div>
    </div>        
    <div class="row">
        <h1 style="text-align: center; margin-top: 100px;">Klik Tombol Next Untuk Lanjut Ke Slide Presentasi Atau Klik Tombol Prev Untuk Melihat Table-Table Dari Jurnal 1</h1><br>
        <center><img src="{{asset('images/bawah2.gif')}}" alt=""></center><br>
        <center><a class="btn btn-primary" href="{{route('dashboard.distribusimateri')}}#four">Next</a></center><br>
        <center><a class="btn btn-primary" href="{{route('dashboard.tableone')}}">Prev</a></center><br><br><br><br>
   </div>       
   
    

</body>
</html>



