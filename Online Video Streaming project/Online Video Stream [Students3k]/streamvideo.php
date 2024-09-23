<?php
header('Content-type: application/x-shockwave-flash');

$mp3file = "sample.mp3";

$mp3Stream = fopen($mp3file,'rb');
$mp3Content = fread($mp3Stream,filesize($mp3file));
fclose($mp3Stream);

$mp3length = 8.5;

$rate = 12.0;

$mp3 = new SWFMovie();
$mp3->setRate($rate);

$mp3->streamMp3($mp3Content);
$mp3->setFrames($mp3length * $rate);

$mp3->output();
?>