<!DOCTYPE html>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
 
form {
  border: 3px solid #f1f1f1;
  font-family: Arial;
}
 
.container {
  padding: 20px;
  background-color: #f1f1f1;
}
 

 
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  border: none;
}
 
input[type=submit]:hover {
  opacity: 0.8;
}
</style>
<body>
 
  <div class="container">
    <img src="{{$foto}}" style="background-size:cover; width:100%; height:20vh; background-position:center" alt="">
    
    <div class="main">
        <h3 class="text-center text-secondary">Uncle Jo Workshop</h3>
        <br>
        <p>Halo {{$nama}}, Anda sudah terdaftar di workshop bersama Uncle Jo. Silahkan lakukan pembayaran melalui REK BNI. NO.REK 03420239821389892</p>
        <p class="text-muted">Setelah membayar silahkan kirim bukti transaksi ke whatsapp dibawah ini.</p>
        <p class="text-muted">Terimakasih</p>
        <a href=" https://wa.me/6282217376369?text=Halo%20Admin,%20Saya%20ingin%20mengirim%20bukti%20transfer%20untuk%20Workshop%20hari%20ini"><i class="fab fa-whatsapp"></i>klik disini untuk ke Whatsapp</a>
    </div>

  </div> 


</body>
</html>