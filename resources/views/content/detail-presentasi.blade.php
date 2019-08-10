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

<div class="navigation"><a href="{{route('dashboard.materipresentasi')}}#five" class="prev">Prev</a><a href="#two" class="next">Next</a></div>

  <div class="content slide_from_left">
    <h1>Tadi Kita Udah Lihat Bagaimana Workflow,ERD, dan Juga Tablenya</h1>
    <p>By the Way...DBMS Apa Sih Yang Digunakan Oleh D'BANK????</p>
    <img width=300px" src="{{asset('images/btw.jpg')}}" alt="">
  </div>

</div>

<div id="two" class="slide spin_180">

  <div class="navigation"><a href="#one" class="prev">Prev</a><a href="#three" class="next">Next</a></div>

  <div class="content flip">
    <p>Kita Menggunakan.............. </p>
    <img src="{{asset('images/bawah2.gif')}}" alt=""><br>
    <img src="{{asset('images/presentasi/oracle.PNG')}}" alt="">

  </div>

</div>

<div id="three" class="slide">

  <div class="navigation"><a href="#two" class="prev">Prev</a><a href="#four" class="next">Next</a></div>

  <div class="content slide_from_left">
        <h1>why???????</h1>
        <img src="{{asset('images/whyme.jpg')}}" alt="">

      
  </div>

</div>

<div id="four" class="slide">

  <div class="navigation"><a href="#three" class="prev">Prev</a><a href="#five" class="next">Next</a></div>

  <div class="content slide_from_left">
  <h1>Karenaa...</h1>
    <p>
        - Memiliki kemampuan handling dan memanajemen data dengan sangat baik.<br>
    - Menghindari keleletan mengolah data karena oracle memiliki kemampuan mengolah data dengan cepat dan akurasi yang tinggi.<br>
    - Memiliki kemampuan manajemen user yaitu bisa memberikan hak akses dan mencabut hak akses penggunaan database terhadap user.<br>
    - Memiliki kemampuan flashback yang tidak dimiliki oleh database manapun. Yakni bisa me restore data yang pernah terhapus.



</p>
  </div>
  </div>

</div>

<div id="five" class="slide">

<div class="navigation"><a href="#four" class="prev">Prev</a></div>

<div class="content slide_from_left">
        <h1>Terimakasih</h1>
        <img src="{{asset('images/thanks.gif')}}" alt="">

</div>


<!-- gif from https://design.tutsplus.com/tutorials/create-a-daft-punk-gif-animation-using-illustrator-and-photoshop--vector-13506 -->
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{asset('js/bootstrap.min.js')}}"> 

</body>
</html>



