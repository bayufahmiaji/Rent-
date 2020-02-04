<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Isi Pesan</title>
</head>
<body>
   <h3> JB Rent</h3>
    <p>Selamat Anda Telah Berhasil Melakukan Rental Mobil Di JB Rent dengan Info</p>

    <p>Nama  		 : {{$nama}}</p>
    <p>Email 		 : {{$email}}</p>
    <p>Mobil 		 : {{$mobil}}</p>
    <p>Harga 		 : @currency($harga)</p>
    <p>lama  		 : {{$lama}}</p>
    <p>untuk tanggal : {{$tgl}}</p>
    <p>Total 		 : @currency($total)</p>

    <p>Pembayaran dilakukan paling lambat 2x 24jam Setelah Pemesanan dengan cara datang langsung ke toko kami</p>
    <p>Terima Kasih</p>
    
    
    
    
    
</body>
</html>