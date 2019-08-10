@extends('layouts.master')

@section('content')
<div class="main-page-charts">
   <div class="main-page-chart-layer1">
		<div class="col-md-6 chart-layer1-right" style="margin-left:220px;"> 
			<div class="user-marorm">
			<div class="malorum-top">				
			</div>
			<div class="malorm-bottom">
				<span class="malorum-pro"> </span>
			     <h4>NPM : 55416949</h4>
				 <h2>RAFIF FAVIAN</h2>
				<p>Mahasiswa Jurusan Teknik Informatika, Fakultas Teknologi Industri, Kelas 3IA88</p>
				<ul class="malorum-icons">
					<li><a href="#"><i class="fa fa-facebook"> </i>
						<div class="tooltip"><span>Facebook</span></div>
					</a></li>
					<li><a href="#"><i class="fa fa-twitter"> </i>
						<div class="tooltip"><span>Twitter</span></div>
					</a></li>
					<li><a href="#"><i class="fa fa-google-plus"> </i>
						<div class="tooltip"><span>Google</span></div>
					</a></li>
				</ul>
			</div>
		   </div>
		</div>
	 <div class="clearfix"> </div>
  </div>
 </div><br><br><br>
 <hr style="border: 2px solid black;">
 <h2 style="text-align:center;">MY HOBBY</h2><br><br>
 <center><img src="{{asset('images/code.gif')}}" alt=""></center><br>
 <p>Semenjak saya masuk teknik informatika, walaupun awalnya saya benar-benar buta terhadap teknologi apalagi coding, saya mencoba untuk belajar dan mendalaminya, dan akhirnya lama-kelamaan saya menjadi gemar dan hobi untuk koding, dan membuat suatu aplikasi khususnya web.</p><br><br>
 <center><img style="width:500px;" src="images/swimming.gif" alt=""></center><br>
 <p>Selain Ngoding, Olahraga seperti berenang merupakan salah satu hobi saya, Mengapa? , Karena disamping akademik, kesehatan merupakan hal yang paling penting, karena "DIDALAM TUBUH YANG KUAT, TERDAPAT JIWA YANG SEHAT".</p>


 @endsection