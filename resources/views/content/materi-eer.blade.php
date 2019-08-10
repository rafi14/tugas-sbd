<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('css/eerdetail.css')}}" rel="stylesheet" type="text/css" media="all"/>
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

  <div class="navigation"><a class="prev disabled">Prev</a><a href="#two" class="next">Next</a></div>

  <div class="content">
    <h1>Apa Sih EER Itu?</h1>
    <img src="{{asset('images/what1.png')}}" alt="">
    <!-- <p>Handle navigation, transitions, design and layout all with CSS3</p> -->
  </div>

</div>


<div id="three" class="slide">

<div class="navigation"><a href="#two" class="prev">Prev</a><a href="#four" class="next">Next</a></div>

  <div class="content flip">
  <p>mengapa Sistem Informasi
Stok Obat Pada Apotek Arjowinangun membutuhkan EER pada system informasi nya?</p>
<img width="300px" src="{{asset('images/how.jpg')}}" alt="">
  
  </div>

</div>


<div id="two" class="slide spin_180">

  <div class="navigation"><a href="#one" class="prev">Prev</a><a href="#three" class="next">Next</a></div>

  <div class="content flip">
  <h4>model konseptual (atau semantik) model data, mampu menjelaskan persyaratan data untuk sistem informasi baru dalam notasi grafis langsung dan mudah dipahami.</h4>
  </div>

</div>

<div id="four" class="slide">

  <div class="navigation"><a href="#three" class="prev">Prev</a><a href="#five" class="next">Next</a></div>

  <div class="content grow">
    <h1>Karena.......</h1>
   
    <p>1. persediaan obat yang terjadi di Apotek Arjowinangun masih mengalami kesulitan.</p>
    <p>2. dalam proses pengecekan persediaan obat yang melalui banyak tahap agar data yang diperoleh akurat.</p>
    <p>3. Pencatatan yang masih menggunakan sistem pembukuan secara konvensional..</p>
  </div>

</div>

<div id="five" class="slide">

<div class="navigation"><a href="#four" class="prev">Prev</a><a href="{{route('dashboard.material')}}" class="next">Next</a></div>

  <div class="content flip">
    
    <h1>Jadi..........</h1><br>
    <p>EER itu dapat membantu permasalahan yang ada dalam perancangan arus data di perusahaan
apotek arjowinangun tersebut ,</p>
    
  </div>

</div>

<!-- gif from https://design.tutsplus.com/tutorials/create-a-daft-punk-gif-animation-using-illustrator-and-photoshop--vector-13506 -->
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{asset('js/bootstrap.min.js')}}"> 

</body>
</html>



