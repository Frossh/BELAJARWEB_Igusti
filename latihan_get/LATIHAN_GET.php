<?php
$mahasiswa = [
    [
        "nim" => "20510023", "20510025", "20510026", "20510022", "20510027", "20510022",
        "nama1" => "MUHAMMAD RAFI WAHYU PRADHANA","nama2" => "YOGA MAULUDIN PRASETIO","nama3" => "I GUSTI BAGUS AGUNG ALIF INDRA WARDHANA
        ", "nama4" => "MOH AFANDY","nama5" => "URIYANTI RINDA SARI","nama6" => "MUH FAUZAN MIRFAQOH"
    ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan GET</title>
</head>
<body>
    <h1><center>Daftar Mahasiswa</center></h1>
    <ul>
        <center><?php foreach ($mahasiswa as $ahs); ?></center>
        <center><li><a href="igusti.php"><?= $ahs["nama3"]; ?></a></center></li>
        <center> <li><a href="rafi.php"><?= $ahs["nama1"]; ?></a></center></li>
        <center><li><a href="yoga.php"><?= $ahs["nama2"]; ?></a></center></li>
        <center><li><a href="afandy.php"><?= $ahs["nama4"]; ?></a></center></li>
        <center><li><a href="rinda.php"><?= $ahs["nama5"]; ?></a></center></li>
        <center><li><a href="fauzan.php"><?= $ahs["nama6"]; ?></a></center></li>
    </ul>
</body>
</html>