<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Segitiga</title>
</head>
<body>
    <?php
    $alas=$_POST['alas'];
    $tinggi=$_POST['tinggi'];
    $sisia=$_POST['sisia'];
    $sisib=$_POST['sisib'];
    $sisic=$_POST['sisic'];
    $luas=2*($alas*$tinggi);
    $keliling=$sisia + $sisib + $sisic;

    ?>
    <a href="index.php">Home</a>
    <h1>Segitiga</h1>
    <h4>luas = 2 (alas x tinggi) = <?php echo $luas;?></h4>
    <h4>keliling = sisia + sisib + sisic = <?php echo $keliling;?></h4>
</body>
<img src="segitiga.jpg" widht="300" height="300" alt="">
</html>