<?php
$karyawan	=[
                ['nama'=>'Toni','alamat'=>'Bandung'],
                ['nama'=>'Naufal','alamat'=>'Bandung'],
                ['nama'=>'Davi','alamat'=>'Jakarta']
			];
$data = json_encode($karyawan);
file_put_contents('data1.txt',$data);

$hasil = json_decode(file_get_contents('data1.txt'));
print_r($hasil);
?>
