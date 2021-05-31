<?php 
$musim = ["gugur", "kemarau", "hujan"];
$angka = ["2", "4", "5", "9", "0"];
echo "Array awal : ";
print_r($musim);
echo "<hr>";

echo "Array setelah di Pop : ";
$hasil = array_pop($musim); //Menghapus atau mengambil elemen terkahir dari array
print_r($musim);
echo "<br>Element yang di pop  : $hasil <hr>";

echo "Array setelah di Push : ";
$hasil = array_push($musim, "gugur", "kemarau", "hujan"); //Menambahkan beberapa elemen pada akhir array
print_r($musim);
echo "<hr>";

echo "Hasil array setelah di Shift : ";
$hasil = array_shift($musim); //Menghapus atau mengambil elemen pertama dari array
print_r($musim); 
echo "Element yang di Shift : $hasil <hr>";

echo "Hasil array setelah di Unshift : ";
$hasil = array_unshift($musim, "Elemen", "Ditambahkan"); //Menambahkan satu atau lebih elemen array di awal
print_r($musim); echo "<hr>";

echo "Mengurutkan array secara menaik : ";
$hasil = rsort($angka);
print_r($angka); echo "<hr>";

echo "Mengurutkan array secara menurun : ";
$hasil = sort($angka);
print_r($angka); echo "<hr>";
?>