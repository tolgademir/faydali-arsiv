<?php

$host       = "localhost";
$dbname     = "";
$charset    = "utf8";
$username   = "";
$password   = "";

try {
    
  $db = new PDO("mysql:host=$host;dbname=$dbname;charset=$charset;", $username, $password);
  //echo "Bağlantı başarılı.";

} catch(PDOExeption $error) {

  echo $error->getMessage();
  //echo "Bağlantı başarısız.";

}

$sorgu=$db->prepare("SELECT * FROM navbar");
$sorgu->execute();
$navbar=$sorgu->fetch(PDO::FETCH_ASSOC);

$sorgu=$db->prepare("SELECT * FROM slider");
$sorgu->execute();
$slider=$sorgu->fetch(PDO::FETCH_ASSOC);

header('Content-type: text/css; charset:UTF-8');

?>

.sub-header {
	background-color: <?= $navbar['navbar_arka_plan_renk'] ?>;
	height: 46px;
	line-height: 46px;
}

.Modern-Slider .item-1 .img-fill {
	background-image: url(../../panel/resimler/slider/<?= $slider['slider_resim_1'] ?>)
}