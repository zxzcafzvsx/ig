<?php  
$s = $_GET['s'];
$sumber = 'https://kbbi.web.id/'.$s.'/ajax_';
$konten = file_get_contents($sumber);
$data = json_decode($konten, true);
?>
<?php   
for($i=0; $i < 2; $i++) {
print $data[$i]['d']."</br></br>";
}
?>
