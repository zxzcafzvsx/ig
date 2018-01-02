<?php
require "./mycurl.php";
$tsnow = time();
$get_ = $tsnow++;
$search = urlencode(strip_tags($_GET['s']));
$ref = "http://www.joox.com/searchResult?q=$search&lang=id_id";
$u_agent = "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/52.0.2743.116 Safari/537.36";
$callback = "jQuery1100006428111118025859_$tsnow";
$pn = isset($_GET['pn']) ? strip_tags($_GET['pn']) : 1;
$sin = isset($_GET['sin']) ? strip_tags($_GET['sin']) : 0;
$ein = isset($_GET['ein']) ? strip_tags($_GET['ein']) : 29;
$curlnya = new mycurl("http://api.joox.com/web-fcgi-bin//web_search?callback=$callback&lang=id&country=id&type=0&search_input=$search&pn=$pn&sin=$sin&ein=$ein&_=$get_");
$curlnya->createCurl();
$response = $curlnya->__tostring();
$data = json_decode(str_replace(")","",(str_replace("$callback(","",$curlnya->__tostring()))),true);
$jml = $data['sum'];
$pages = ceil($jml/30);

foreach($data['itemlist'] as $rs) {
$artist = base64_decode($rs['info2']);
$title = base64_decode($rs['info1']);
$album = base64_decode($rs['info3']);
$sname = $artist . " - " . $title;
}

?>