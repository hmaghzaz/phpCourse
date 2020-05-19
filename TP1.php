<html>

<head>
    <title>TP N°1 PHP</title>
</head>

<body>
    <a href="./index.php"> page d'accueil</a>
    <h2> Execice 1 </h2>
    <p> calculer la somme : S = 1 + 2 + 3 … + 100.</p>
    <?php
    $sum = 0;
    for ($i = 1; $i <= 100; $i++) {
        $sum = $sum + $i;
    }
    echo "la somme est :$sum";
    ?>
    <h2> Execice 1' </h2>
    <p> calculer la somme : S = 1 + 3 + 5 + 7 + 9 … + 101.</p>
    <?php
    $sum = 0;
    for ($i = 1; $i <= 50; $i++) {
        $sum = $sum + (2 * $i + 1);
    }
    echo "la somme est :$sum";
    ?>
    <h2> Execice 2 </h2>
    <p> calculer la somme : S = 2 + 4 + 6 + 8 + … +80.</p>
    <?php
    $sum = 0;
    for ($i = 1; $i <= 40; $i++) {
        $sum = $sum + ($i * 2);
    }
    echo "la somme est :$sum";
    ?>
    <h2> Execice 2' </h2>
    <p> calculer la somme : S = 1 - 2 - 3 ...-99.</p>
    <?php
    $sum = 1;
    for ($i = 2; $i <= 90; $i++) {
        $sum = $sum - $i;
    }
    echo "la somme est :$sum";
    ?>

    <h2> Execice 3 </h2>
    <p> calculer la somme : S = 3 + 6 + 9 + 12 + ….. + 30.</p>
    <?php
    $sum = 0;
    for ($i = 1; $i <= 10; $i++) {
        $sum = $sum + ($i * 3);
    }
    echo "la somme est :$sum";
    ?>

    <h2> Execice 3' </h2>
    <p> calculer la somme : S = 4 + 9 + 16 + 25 + ….. + 144.</p>
    <?php
    $sum = 0;
    for ($i = 2; $i <= 12; $i++) {
        $sum = $sum + ($i ** 2);
    }
    echo "la somme est :$sum";
    ?>


    <h2> Execice 4 </h2>
    <p> calculer la somme : S = 1 + 4 + 9 + 16 + … + 100.</p>
    <?php
    $sum = 0;
    for ($i = 1; $i <= 3; $i++) {
        $sum = $sum + ($i ** 2);
    }
    echo "la somme est :$sum";
    ?>

    <h2> Execice 5 </h2>
    <p> calculer la somme : S = 3 + 5 + 7 + 9 + … + 31.</p>
    <?php
    $sum = 0;
    for ($i = 1; $i <= 15; $i++) {
        $sum = $sum + (($i * 2) + 1);
    }
    echo "la somme est :$sum";
    ?>

    <h2> Execice 6 </h2>
    <p> calculer la somme : Ex6 S = 10 + 11 + 12 + 13 + … + N.</p>
    <div>
        <form action="TP1.php" method="get">
            <P>Veuillez entrer une valeur supérieur à 10 :</P>
            N: <input type="number" name="N1">
            <input type="submit">
        </form>
        <?php
        $N = isset($_GET["N1"]) ? $_GET["N1"] : null;
        $sum = 0;
        for ($i = 10; $i <= $N; $i++) {
            $sum = $sum + $i;
        }
        if ($N) {
            echo "la somme est :$sum";
        }

        ?>
    </div>

    <h2> Execice 7 </h2>
    <p> calculer la somme : S = Σ k= 1 -->60 (k/(k+1))</p>
    <?php
    $sum = 0;
    for ($i = 1; $i <= 60; $i++) {
        $sum = $sum + ($i / ($i + 1));
    }
    echo "la somme est :$sum";
    ?>

    <h2> Execice 8 </h2>
    <p> calculer la somme : S = 1 + ½ +⅓ +¼+.......+1/120</p>
    <?php
    $sum = 0;
    for ($i = 1; $i <= 120; $i++) {
        $sum = $sum + (1 / $i);
    }
    echo "la somme est :$sum";
    ?>

    <h2> Execice 9 </h2>
    <p> calculer le produit : S = N !</p>
    <form action="TP1.php" method="get">
        <P>Veuillez entrer une valeur supérieur à 0 :</P>
        N: <input type="number" name="N2">
        <input type="submit">
    </form>
    <?php
    $N = isset($_GET["N2"]) ? $_GET["N2"] : null;
    $sum = 1;
    if ($N > 0) {
        for ($i = 1; $i <= $N; $i++) {
            $sum = $sum * $i;
        }
        if ($N > 1) {
            echo "le produit est :$sum";
        }
    }
    ?>

    <h2> Execice 10 </h2>
    <p> calculer le produit : S = 1 *(1+2)* (1+2+3)*(1+2+3+4)*....*(1+2+3+...+60)</p>
    <?php
    $sum = 1;
    $x = 1;
    for ($i = 1; $i <= 59; $i++) {
        $x = ($x * ($i + 1));
        $sum = $sum * $x;
    }
    echo "le produit est : " . $sum;
    ?>

</body>


</html>