<?php 

$musim = ["gugur", "Semi"];

print_r($musim);
echo "</br>";
$musim[] = "dingin"; //Menambahkan elemen pada urutan terakhir array
print_r($musim);
echo "</br>";
$musim[3] = "kemarau"; //Menambahkan elemen pada index yang kita atentukan.
                    //Jika Index sudah terisi, maka elemen lama akan
                    //di ganti dengan element baru
print_r($musim)
?>