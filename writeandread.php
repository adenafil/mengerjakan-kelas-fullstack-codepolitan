<?php
$pesan = "Ini Hasil Membuat file melalui php";
file_put_contents("file.txt", $pesan);
echo file_get_contents("file.txt");
?>