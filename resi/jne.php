<?php  
$awb = $_GET['awb'];
$jasa = $_GET['jasa'];
$sumber = 'http://wahidganteng.ga/process/api/b967d83eed40cf9e17958b1dc85b1db7/cek-resi?jasa='.$jasa.'&resi='.$awb;
$konten = file_get_contents($sumber);
$data = json_decode($konten, true);

 echo "Cek Resi JNE, fitur ini masih BETA dan masih dalam tahap pengembangan";
 echo "</br></br></br>";
?>
<?php   
for($i=0; $i < count($data['manifest']); $i++) {
print $data['manifest'][$i]['manifest_date']."</br>";
print $data['manifest'][$i]['manifest_desc']."</br></br>";
}
?>
