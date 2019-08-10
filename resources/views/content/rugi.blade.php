@extends('layouts.master-untung')

@section('content')
<div class="main-page-charts">
   <div class="main-page-chart-layer1">
		<div class="col-md-6 chart-layer1-right" style="margin-left:220px;"> 
			<h3>Emang ada ya RUGI nya kita belajar Sistem Basis Data?????</h3><br>
            <img src="{{asset('images/kocak.gif')}}" alt="">
		</div>
	 <div class="clearfix"> </div>
  </div>
 </div><br><br><br>
 
 <h2>Mau Tau Jawaban nya???? Klik Link Dibawah ini!!!</h2><br><br>
 <center><img src="{{asset('images/bawah2.gif')}}" alt=""></center><br>
 <center><a target="_blank" href="{{route('dashboard.kerugian')}}">www.KerugianBlajarSBD.com</a></center>


 @endsection