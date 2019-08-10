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

<div class="navigation"><a href="{{route('dashboard.keamananmateridb')}}#five" class="prev">Prev</a><a href="#two" class="next">Next</a></div>

  <div class="content slide_from_left">
  <h1>Setelah Melihat Penjelasan-penjelasan Tadi..........</h1>
  <p>Kira-kira Bagaimana Ya Kesimpulannya....????</p>
  <img width="200px" src="{{asset('images/kesimpulan.jpg')}}" alt="">
    <!-- <p>Handle navigation, transitions, design and layout all with CSS3</p> -->
  </div>

</div>

<div id="two" class="slide spin_180">

  <div class="navigation"><a href="#one" class="prev">Prev</a><a href="#five" class="next">Next</a></div>

  <div class="content flip">
  <h1>Jadi Dapat Disimpulkan....</h1>
  <p>Database adalah kumpulan data yang disimpan secara sistematis di dalam komputer dan dapat diolah atau dimanipulasi menggunakan perangkat lunak (program aplikasi) untuk menghasilkan informasi. Dari pengertian diatas untuk informasi atau databasenya dicuri atau diambil dll, maka kita harus melindungi database dari ancaman tersebut, baik dalam bentuk kesengajaan atau pun bukan.</p>
  </div>

</div>


<div id="five" class="slide">

<div class="navigation"><a href="#two" class="prev">Prev</a></div>

<div class="content slide_from_left">
        <h1>TERIMAKASIH</h1>
        <img width="300px" src="{{asset('images/thanks4.jpg')}}" alt="">
      

</div>


<!-- gif from https://design.tutsplus.com/tutorials/create-a-daft-punk-gif-animation-using-illustrator-and-photoshop--vector-13506 -->
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{asset('js/bootstrap.min.js')}}"> 

</body>
</html>



