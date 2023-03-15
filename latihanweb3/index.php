<?php

$film = array("Shrek ", "Puss in Boots ", "Star Wars ", "Avenger ", "Transformers ");

$skor = array("Shrek "=>"8/10", "Puss in Boots "=>"11/10", "Star Wars "=>"9/10", "Avenger "=>"7/10", "Transformers "=>"8/10");
echo "<br><H3> Mengakses Judul Fil via array numerik </H3>";

echo $film[2] ;

echo "<br><H3> Mengakses Skor Film via array Associative </H3>";

echo $skor["Star Wars "];
