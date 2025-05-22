<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Persegi panjang</title>
</head>
<body>
    <?php
    $panjang=$_POST['Panjang'];
    $lebar=$_POST['Lebar'];
    $luas=$panjang*$lebar;
    $keliling=2*($panjang+$lebar);

    ?>
    <a href="index.php">Home</a>
    <h1>Persegi panjang</h1>
    <h4>Luas = Panjang x Lebar =<?php echo $luas;?></h4>
    <h4>Keliling = 2x(panjang+lebar) =<?php echo $keliling;?></h4>

    <img src="persegipanjang.jpg" width="" height="300" alt="">
</body>
</html>