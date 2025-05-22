<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trapesium</title>
</head>
<body>
    <?php
    $sisia=$_POST['sisia'];
    $sisib=$_POST['sisib'];
    $tinggi=$_POST['tinggi'];
    $luas=1/2*($sisia + $sisib) * $tinggi;
?>
<a href="index.php">Home</a>
    <h1>Trapesium</h1>
    <h4>luas = 1/2 x (sisia + sisib) x tinggi = <?php echo $luas;?></h4>
</body>
<img src="trapesium_169.png" widht="300" height="300" alt="">
</html>
</html\