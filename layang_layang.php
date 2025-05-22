<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layang-layang</title>
</head>
<body>
    <?php
    $diagonal1=$_POST['diagonal1'];
    $diagonal2=$_POST['diagonal2'];
    $sisipendek=$_POST['sisipendek'];
    $sisipanjang=$_POST['sisipanjang'];
    $luas=1/2*$diagonal1*$diagonal2;
    $keliling=2*($sisipendek + $sisipanjang);
    ?>
    <a href="index.php">Home</a>
    <h1>Layang-layang</h1>
    <h4>luas = 1/2 * diagonal1 * diagonal2 = <?php echo $luas;?></h4>
    <h4>keliling = 2 * (sisipendek + sisipanjang) = <?php echo $keliling;?></h4>
</body>
<img src="layang layang.jpg" widht="300" height="300" alt="">
</html>