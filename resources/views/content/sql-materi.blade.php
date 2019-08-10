<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('css/sql.css')}}" rel="stylesheet" type="text/css" media="all"/>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
    <title>Document</title>
</head>
<body style="background-color: #b3ecff;">
  
<div id="one" class="slideswitch"></div>
<div id="two" class="slideswitch"></div>
<div id="three" class="slideswitch"></div>
<div id="four" class="slideswitch"></div>
<div id="five" class="slideswitch"></div>

<div id="one" class="slide">

  <div class="navigation"><a href="#two" class="next">Next</a></div>

  <div class="content slide_from_left">
  <h1>PENGGUNAAN METODE REPLIKASI PADA SISTEM BASIS DATA TERDISTRIBUSI DALAM MEMBANGUN SISTEM INFORMASI TERKOMPUTERISASI PADA BENGKEL MAJU JAYA TRANSPORT
  <br><br>Vs
  <br><br>REPLIKASI DATA SQL SERVER CLUSTER MENGGUNAKAN MIRRORING SQL SERVER VIRTUAL UNTUK DISASTER RECOVERY SITE</h1>
    <!-- <p>Handle navigation, transitions, design and layout all with CSS3</p> -->
  </div>

</div>

<div id="two" class="slide spin_180">

  <div class="navigation"><a href="#one" class="prev">Prev</a><a href="#three" class="next">Next</a></div>

  <div class="content flip">
  <h4>Apa Sih Keuntungan Dari Kedua Metode Yang Digunakan Pada Jurnal Tersebut?</h4>
  <img width="200px" src="{{asset('images/bingung2.jpg')}}" alt="">
  </div>

</div>

<div id="three" class="slide">

  <div class="navigation"><a href="#two" class="prev">Prev</a><a href="#four" class="next">Next</a></div>

  <div class="content slide_from_left">
        <h1>Keuntungan:</h1>
      <p>1. mempercepat pencarian data<br>
         2. meningkatkan performance sistem pendistribusian informasi pada setiap bagian dengan penerapan replikasi database pada sql server<br>
         3. menyediakan high availability untuk SQL Server database<br>
         4. Meningkatkan kertersediaan production database selama upgrades<br>
         5. Meningkatkan perlindungan data            
    </p>
  </div>

</div>

<div id="four" class="slide">

  <div class="navigation"><a href="#three" class="prev">Prev</a><a href="#five" class="next">Next</a></div>

  <div class="content grow">
  <h4>Apa Sih Kerugian Dari Kedua Metode Yang Digunakan Pada Jurnal Tersebut?</h4>
  <img width="100px" src="{{asset('images/bingung2.jpg')}}" alt="">
  </div>

</div>

<div id="five" class="slide">

<div class="navigation"><a href="#four" class="prev">Prev</a><a href="{{route('dashboard.sqldetail')}}" class="next">Next</a></div>

<div class="content slide_from_left">
        <h1>Kerugian:</h1>
      <p>1. Membutuhkan tambahan hardware sehingga biaya hardware menungkat
terutama jika dilakukan replikasi<br>
         2. Jika terjadi perubahan data di pusat yang tidak di barengi dengan data yang ada
dicabang. Maka saat replikasi terebut berjalan, data tersebut tidak akan berubah
atau sama persis dengan data yang ada di cabang.         
    </p>

</div>


<!-- gif from https://design.tutsplus.com/tutorials/create-a-daft-punk-gif-animation-using-illustrator-and-photoshop--vector-13506 -->
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{asset('js/bootstrap.min.js')}}"> 

</body>
</html>



