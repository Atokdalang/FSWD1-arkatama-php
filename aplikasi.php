<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../FSWD1-arkatama-php/CSS/style.css">
    <title>Biodara Diri PHP</title>
</head>
<body>
<div class="container">
        <div class="profil">
            <h1>Biodata Diri</h1>
</body>
</html>
<?php
        echo "<table width='1000'>";
        echo "<tr>";
                echo "<th width='150'>";
                echo "<b>";
                echo "Nama";
                echo "</b>";
                echo "</th>";
                echo "<td width='750'>";
                echo "Fadly Indra Agustin";
                echo "</td>";
        echo "</tr>";

        echo "<tr>";
                echo "<th width='150'>";
                echo "<b>";
                echo "TTL";
                echo "</b>";
                echo "</th>";
                echo "<td width='750'>";
                echo "Batusangkar, 06 Agustus 2001";
                echo "</td>";
        echo "</tr>";

        echo "<tr>";
                echo "<th width='150'>";
                echo "<b>";
                echo "Jenis Kelamin";
                echo "</b>";
                echo "</th>";
                echo "<td width='750'>";
                echo "Laki-laki";
                echo "</td>";
        echo "</tr>";

        echo "<tr>";
                echo "<th width='150'>";
                echo "<b>";
                echo "Alamat";
                echo "</b>";
                echo "</th>";
                echo "<td width='750'>";
                echo "Riau, Kota Pekanbaru, Kecamatan Tuah Madani, Kelurahan Sialangmunggu, Jl. Pendidikan, Gang Tauhid II.";
                echo "</td>";
        echo "</tr>";
        
        echo "<tr>";
                echo "<th width='150'>";
                echo "<b>";
                echo "Foto";
                echo "</th>";
                echo "</b>";
                echo "<td width='750'>";
                echo '<img src="../FSWD1-arkatama-php/assets/Foto.jpg" alt="">';
                echo "</td>";
        echo "</tr>";
        
        echo "<tr>";
                echo "<th width='100'>";
                echo "<b>";
                echo "Riwayat Pendidikan";
                echo "</b>";
                echo "</th>";
                echo "<td width='717'>";
                echo "<ul>";
                echo "<li>SDN 21 Tanjung Bonai (2008-2014)</li>";
                echo "<li>SMPN 03 Lintau Buo Utara (2014-2017)</li>";
                echo "<li>SMAN 01 Lintau Buo Utara (2017-2020)</li>";
                echo "<li>STMIK AMIK RIAU, Fakultas Teknik Informatika (2020-sekarang)</li>";
                echo "</ul>";
                echo "</td>";
        echo "</tr>";
        
        echo "<tr>";
                echo "<th width='100'>";
                echo "<b>";
                echo "Hobi";
                echo "</b>";
                echo "</th>";
                echo "<td width='254'>";
                echo "Ngoding, Bermain Basket, Mendaki Gunung, Bermain Game, Membaca Buku";
                echo "</td>";
        echo "</tr>";
        echo "</table>";
        ?>

    </div>
</body>
</html>