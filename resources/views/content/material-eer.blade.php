<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('css/materialdetail.css')}}" rel="stylesheet" type="text/css" media="all"/>
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

  <div class="navigation"><a href="{{route('dashboard.materi')}}#five" class="prev">Prev</a><a href="#two" class="next">Next</a></div>

  <div class="content slide_from_left">
    <h1>Apa Peran EER Terhadap Sistem Informasi Stok Obat Pada Apotek Arjowinangun</h1>
    <img width="300px" src="{{asset('images/how.jpg')}}" alt="">
    <!-- <p>Handle navigation, transitions, design and layout all with CSS3</p> -->
  </div>

</div>

<div id="two" class="slide spin_180">

  <div class="navigation"><a href="#one" class="prev">Prev</a><a href="#three" class="next">Next</a></div>

  <div class="content flip">
  <p>Jadi peran dari EER tersebut adalah untuk memodelkan skema basis data ,
untuk merancang skema dapat mempresentasikan sifat-sifat dan batasan data dengan lebih tepat.</p>
  </div>

</div>

<div id="three" class="slide">

  <div class="navigation"><a href="#two" class="prev">Prev</a><a href="#four" class="next">Next</a></div>

  <div class="content slide_from_left">
      <p>EER vs ERD?</p>
      <img width="300px" src="{{asset('images/bingung1.png')}}" alt="">
  </div>

</div>

<div id="four" class="slide">

  <div class="navigation"><a href="#three" class="prev">Prev</a><a href="#five" class="next">Next</a></div>

  <div class="content grow">
    <h1>Perbedaanya adalah........</h1><br>
   
    <p style="text-align: right;">1. EER lebih detail dibandingkan dengan ERD.</p>
    <p>2. Model EER berisikan seluruh konsep model ER ditambah konsep-konsep dari subclass dan superclass.</p>
    <p>3. ERD adalah model normal yang digunakan untuk menggambarkan entity relationship model.</p>
    <p>4. EER adalah ERD yang diberikan kemampuan untuk memiliki supertype , subtype dan instance.</p>
  </div>

</div>

<div id="five" class="slide">

<div class="navigation"><a href="#four" class="prev">Prev</a></div>

  <div class="content flip">
    
    <h1>TERIMAKASIH</h1><br>
    <img width="300px" src="{{asset('images/thanks1.jpg')}}" alt="">
    
    
  </div>

</div>


<!-- gif from https://design.tutsplus.com/tutorials/create-a-daft-punk-gif-animation-using-illustrator-and-photoshop--vector-13506 -->
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{asset('js/bootstrap.min.js')}}"> 

</body>
</html>



