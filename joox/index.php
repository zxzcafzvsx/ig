<?php require ('./curl.php'); ?>
<?php
echo json_encode(array(
'request'	=> 'berhasil',
'id'	=> $sname,
'url'	=> 'https://jangheadd.herokuapp.com/joox/jooxplay.php?id='.$rs['songid'].'&fname='.urlencode($sname).'&artist='.urlencode($artist).'&title='.urlencode($title).'&album='.urlencode($album)
));
?>