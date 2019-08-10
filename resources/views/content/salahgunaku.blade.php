<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link href="{{asset('css/eer.css')}}" rel="stylesheet" type="text/css" media="all"/> -->
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
    <title>Document</title>
</head>
<body style="background-color: #b3ecff;">
 
        <h1 style="text-align: center;">Penyalahgunaan Database</h1><br><br><br><br>
    <div class="row">
        <div class="topic col-md-4" style="margin-left: 100px;border;border-style: solid;background-color: #ffffcc">
                
                Tidak Disengaja
                <ul>
                    <li> Kerusakan selama proses transaksi</li>
                    <li> Anomali yang disebabkan oleh akses database yang konkuren</li>
                    <li> Anomali yang disebabkan oleh pendistribuasian data pada beberapa komputer</li>
                    <li> Logika error yang mengancam kemampuan transaksi untuk mempertahankan konsistensi database.</li>
                </ul><br><br>
            </div>    
            <div class="topic col-md-4" style="margin-left: 100px;border;border-style: solid;background-color: #ffffcc">
                Disengaja

                <ul>
                    <li> Pengambilan data / pembacaan data oleh pihak yang tidak berwenang.</li>
                    <li>  Pengubahan data oleh pihak yang tidak berwenang.</li>
                    <li> Penghapusan data oleh pihak yang tidak berwenang.</li>
                </ul>
            </div>  <br>
    </div>

    <div class="row">
        <h1 style="text-align: center; margin-top: 100px;">Klik Tombol Next Dibawah Ini Untuk Kembali Ke Halaman Presentasi</h1><br>
        <center><img src="{{asset('images/bawah2.gif')}}" alt=""></center><br>
        <center><a class="btn btn-primary" href="{{route('dashboard.keamananmateridb')}}#five">Next</a></center><br><br><br><br>
   </div>       
   
    

</body>
</html>



