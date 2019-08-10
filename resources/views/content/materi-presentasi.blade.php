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
    <p>BANK di Indonesia telah banyak dibangun dan berkembang, berdirinya BANK merupakan salah satu tujuan dari pembukan UUD 1945 “Kesejahteraan Umum” yang direalisasikan.
Tujuan didirikannya BANK sendiri yaitu untuk menyimpan, menyalurkan dan alat transaksi yang efesien guna melaksanakan pembangunan nasional.<br>
Berdirinya BANK tidak semata-mata terjadi begitu saja melainkan ada pasal-pasal yang mengaturnya.
Sedangkan sistem dalam masing-masing BANK itu bervariasi.

</p>
  </div>

</div>

<div id="two" class="slide spin_180">

  <div class="navigation"><a href="#one" class="prev">Prev</a><a href="#three" class="next">Next</a></div>

  <div class="content flip">
    <p>Banyak masyarakat yang mengeluhkan kerepotan dengan persyaratan yang ditetapkan oleh BANK, biaya administrasi maupun Saldo Awal yang cukup besar dalam pembukaan rekening baru.
</p>
<img width="200px" src="{{asset('images/miki.jpg')}}" alt="">
  </div>

</div>

<div id="three" class="slide">

  <div class="navigation"><a href="#two" class="prev">Prev</a><a href="#four" class="next">Next</a></div>

  <div class="content slide_from_left">
        <h1>Tenang saja D’BANK SOLUSINYA</h1>
        <img width="200px" src="{{asset('images/aha.jpg')}}" alt="">
      
  </div>

</div>

<div id="four" class="slide">

  <div class="navigation"><a href="#three" class="prev">Prev</a><a href="#five" class="next">Next</a></div>

  <div class="content slide_from_left">
    <p>Bebas biaya Pembukaan rekening.
Bebas biaya kartu debit/ATM.
Bebas biaya transfer melalui teller.
Bebas tarik tunai di banyak ATM.
Tersedia e-banking di platform manapun.
</p>
<img width="400px" src="{{asset('images/aha2.jpg')}}" alt="">
  </div>
  </div>

</div>

<div id="five" class="slide">

<div class="navigation"><a href="#four" class="prev">Prev</a><a href="{{route('dashboard.workflow')}}" class="next">Next</a></div>

<div class="content slide_from_left">
        <h1>Menarik Bukan???? &nbsp;&nbsp;&nbsp;:)))))</h1>
      <p>Trus...Gimana Workflow, ERD, Dan Database Nya?<br>
    </p>
    <p>Kalo Pengen Tau Gimana.....Klik Tombol Next Sekarang Juga</p>

</div>


<!-- gif from https://design.tutsplus.com/tutorials/create-a-daft-punk-gif-animation-using-illustrator-and-photoshop--vector-13506 -->
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{asset('js/bootstrap.min.js')}}"> 

</body>
</html>



