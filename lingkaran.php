<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lingkaran</title>
</head>
<body>
<?php
    $pi=$_POST['pi'];
    $diameter=$_POST['diameter'];
    $jarijari=$_POST['jarijari'];
    $luas=$pi*$jarijari*$jarijari;
    $keliling=$pi*$diameter;

    ?>
    <a href="index.php">Home</a>
    <h1>Lingkaran</h1>
    <h4>luas=pi * jari jari * jari jari = <?php echo $luas;?></h4>
    <h4>keliling=pi * diameter = <?php echo $keliling;?></h4>
</body>
<img src="lingkaran.webp"widht="300" height="300" alt="">
</html>