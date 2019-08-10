<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('css/sqldetail.css')}}" rel="stylesheet" type="text/css" media="all"/>
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

<div class="navigation"><a href="{{route('dashboard.materisql')}}#five" class="prev">Prev</a><a href="#two" class="next">Next</a></div>

  <div class="content slide_from_left">
  <h1>Apa Itu Sql Server?</h1>
  <img width="400px" src="{{asset('images/bingunglagi.jpg')}}" alt="">
    <!-- <p>Handle navigation, transitions, design and layout all with CSS3</p> -->
  </div>

</div>

<div id="two" class="slide spin_180">

  <div class="navigation"><a href="#one" class="prev">Prev</a><a href="#three" class="next">Next</a></div>

  <div class="content flip">
  <h3>sebuah sistem manajemen basis data relasional (RDBMS) produk Microsoft. Bahasa kueri utamanya adalah Transact-SQL yang merupakan implementasi dari SQL standar ANSI/ISO yang digunakan oleh Microsoft dan Sybase.</h3>
  </div>

</div>

<div id="three" class="slide">

  <div class="navigation"><a href="#two" class="prev">Prev</a><a href="#four" class="next">Next</a></div>

  <div class="content slide_from_left">
        <h1>Laluu........</h1>
      <p>Bagaimana Cara Atau Langkah-langkah Untuk Menjalankan SQL SERVER?
    </p>
  </div>

</div>

<div id="four" class="slide">

  <div class="navigation"><a href="#three" class="prev">Prev</a><a href="#five" class="next">Next</a></div>

  <div class="content grow">
  <p>Langkah pertama adalah melakukan backup SQL Database dan Logs dari SQL Server
Cluster instance pada Data Center Site.<br>
Langkah kedua Setelah backup databases dan logs selesai, file-file tersebut kemudian di copy ke
external media dan media tersebut di bawa ke Disaster Recovery site, karena akan
memakan waktu jika dikopi ke Disaster Recovery site melalui jaringan.<br>
Langkah ketiga di dalam Database mirroring adalah melakukan restore database ke SQL
Server instance di Disaster Recovery Site.<br>
Langkah keempat di dalam melakukan database Mirroring adalah mengkonfigurasikan
security untuk Database Mirroring.</p>
  </div>

</div>

<div id="five" class="slide">

<div class="navigation"><a href="#four" class="prev">Prev</a></div>

<div class="content slide_from_left">
        <h1>TERIMAKASIH</h1>
        <img width="400px" src="{{asset('images/thanks2.jpg')}}" alt="">
      

</div>


<!-- gif from https://design.tutsplus.com/tutorials/create-a-daft-punk-gif-animation-using-illustrator-and-photoshop--vector-13506 -->
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{asset('js/bootstrap.min.js')}}"> 

</body>
</html>



