<?php
$id = $_GET['id'];

function bacaHTML($url){
     // inisialisasi CURL
     $data = curl_init();
     // setting CURL
     curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
     curl_setopt($data, CURLOPT_URL, $url);
     // menjalankan CURL untuk membaca isi file
     $hasil = curl_exec($data);
     curl_close($data);
     return $hasil;
}

$kodeHTML =  bacaHTML('http://www.jadwaltv.net/channel/'.$id);
$pecah = explode('<span class="dp1">Maaf, aplikasi ini akan dihentikan sebentar lagi. Segera uninstall aplikasi ini dan harap segera unduh aplikasi aslinya yang mempunyai fitur lebih lengkap di http://play.google.com/store/apps/details?id=com.sagayaweb.jdwltv atau cari aplikasi "Jadwal TV" buatan SagayaWeb di Google Playstore</span>', $kodeHTML);

$pecahLagi = explode('<div class="col-lg-6" id="channellistads" style="margin:0;padding:5px 0 0;">', $pecah[2]);

echo str_replace(array('<strong class="dp">', '</strong>', '<span class="dp">', '</span><span class="dp1">JadwalTV.Net</span>', '</div>'),"",$pecahLagi[0]); 
?>