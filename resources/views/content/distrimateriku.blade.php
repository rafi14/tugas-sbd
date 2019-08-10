<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('css/distrik.css')}}" rel="stylesheet" type="text/css" media="all"/>
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
    <h1>Jadi, Apasih Tujuan Topic Kita Kali Ini?</h1>
    <img width="400px" src="{{asset('images/bingung3.jpg')}}" alt="">
  </div>

</div>

<div id="two" class="slide spin_180">

  <div class="navigation"><a href="#one" class="prev">Prev</a><a href="#three" class="next">Next</a></div>

  <div class="content flip">
  <h1>Tujuan Topic Kita Kali Ini adalah</h1>
  <p>- Membandingkan 2 Jurnal:<br>
  Implementasi Sistem Informasi Akademik Universitas Surakarta Abdillah Baraja Universitas Surakarta<br>
  VS<br>
  Sistem Informasi Sekolah Menengah Kejuruan (SMK) Teknologi
Informasi Dan BisnisIndosains Palembang Berbasis Web<br>
Dan........<br>
- Menganalisis tingkatan dan
kompleksitas perancangan basis data
    </p>
  </div>

</div>

<div id="three" class="slide">

  <div class="navigation"><a href="#two" class="prev">Prev</a><a href="{{route('dashboard.tableone')}}" class="next">Next</a></div>

  <div class="content slide_from_left">
        <h1>First Step.....Kita Harus Lihat Dulu database dari masing-masing jurnal.....</h1>
      
  </div>

</div>

<div id="four" class="slide">

  <div class="navigation"><a href="#three" class="prev">Prev</a><a href="#five" class="next">Next</a></div>

  <div class="content slide_from_left">
    <h1>Berdasarkan Table-Table Dari Kedua Jurnal Tersebut, Kita Mendapatkan Beberapa Data:</h1><br>
    <p>- jurnal 1 Memiliki Jumlah Table Sebanyak 13, Mempunyai Skala Universitas, dan Menggunakan DBMS MYSQL</p>
    <p>- jurnal 2 Memiliki Jumlah Table Sebanyak 6, Mempunyai Skala Sekolah Menengah Kejuruan, dan Menggunakan DBMS MYSQL</p>
  </div>
  </div>

</div>

<div id="five" class="slide">

<div class="navigation"><a href="#four" class="prev">Prev</a><a href="{{route('dashboard.distribusidetail')}}" class="next">Next</a></div>

<div class="content slide_from_left">
        <h1>Jadiii............</h1>
      <p>Jurnal Mana Yang Memiliki Tingkatan Dan Kompleksitas Yang Tinggi Dalam Perancangan Basis Data????????<br>
    </p>

</div>


<!-- gif from https://design.tutsplus.com/tutorials/create-a-daft-punk-gif-animation-using-illustrator-and-photoshop--vector-13506 -->
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{asset('js/bootstrap.min.js')}}"> 

</body>
</html>



