<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jajar genjang</title>
</head>
<body>
    <?php
    $alas=$_POST['alas'];
    $tinggi=$_POST['tinggi'];
    $sisia=$_POST['sisia'];
    $sisib=$_POST['sisib'];
    $luas=$alas*$tinggi;
    $keliling=2*($sisia + $sisib);
    ?>
    <a href="index.php">Home</a>
    <h1>Jajar Genjang</h1>
    <h4>luas = alas * tinggi = <?php echo $luas;?></h4>
    <h4>keliling = 2 * (sisia + sisib) = <?php echo $keliling;?></h4>

</body>
    <img src="1236663_720.jpg" width="" height="300" alt="">
</html>