<?php 

$mahasiswa = [
    "001" => "Desy",
    "002" => "Jinan",
    "003" => "Celine",
    "004" => "Dewi",
    "005" => "Erwin"];
    // Untuk memasukan value, kita harus membuat key yang merepresentasikan valuenya
    // tanda "=>" dapat diartikan sebagai merujuk
    // "key" => "Value"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Associative</title>
</head>
<body>
    <?php foreach($mahasiswa as $nrp => $nama) : ?>
        <li><?php echo "$nrp: $nama" ?></li>
    <?php endforeach ?>    
</body>
</html>