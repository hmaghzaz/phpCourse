<html>

<head>
    <title>ex2</title>
</head>
<bod>
    <a href="./index.php"> page d'accueil</a>
    <br>
    <?php
    $s = 100000;
    $a = 0;
    for ($i = 0; $i <= 10; $i++) {
        $s = $s + $s * 0.05;
    }
    $s = round($s, 2);
    echo "salaire est $s <br>";
    $s = 100000;
    while ($s <= 130000) {
        $s = $s + $s * 0.05;
        $a++;
    }
    echo "nombre d'années $a"
    ?>
</bod>

</html>