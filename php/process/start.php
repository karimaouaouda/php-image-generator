<?php
require_once(__DIR__.'/../classes/Generator.php');

$pic = new IMGGenerator;
$pic->width = $pic->height = 300;


$arr = array("first" => $_GET['first'] , "second" => $_GET['second']);


//header('Content-type: image/png');
header("Content-Type : image/png");
$clr = new Color();
$c = $clr->random();
$clr = imagecolorallocate($pic->image , $c["red"] , $c["green"] , $c["blue"]);

$string = $arr["first"].".".$arr["second"];

$size = 100;
$x = $pic->width / 2 - $size;
$y = ($pic->height / 2) +( $size / 2);

//imagestring($pic->image , 100 , 100,100,$string , $clr);
imagettftext($pic->image , $size , 0 , $x , $y , $clr , "elmesiri.ttf" , $string);
imagepng($pic->image);


