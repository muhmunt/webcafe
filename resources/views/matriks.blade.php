<?php 

$panjang = 1000;

$waktu_amroji = date_create('08:00:00');
$waktu_beril = date_create('08:00:10');
$amroji_jarak = 2;
$amroji_cepat = 0.1;

$beril_detik = 5;

while ($amroji_jarak <= 5)  {
    
    $amroji_jarak = $amroji_jarak + 0.1;
    // echo $amroji_jarak;
    // echo "<br>";
    echo "<br>";
    // waktu amar ditambah
    $waktu_amar = date_add($waktu_amroji, date_interval_create_from_date_string('1 seconds'));    
    // waktu beril di tambah
    $waktu_sultan = date_add($waktu_beril,date_interval_create_from_date_string('1 seconds'));
        
    // dd($cek);
    // if($cek){
        // $cek = date_format($waktu_amar,'H:i:s') == date_format($waktu_sultan,'H:i:s');
        // if($cek){
            echo 'waktu amroji : ' . date_format($waktu_amar,'H:i:s');
            echo " ";   
            echo 'waktu beril :' . date_format($waktu_sultan,'H:i:s');
            echo "<br>";
        // }
    // }
}
$amroji_jarak++;



?>
@section('scripts')
    <script>
        
    </script>
@endsection