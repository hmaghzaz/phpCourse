<htm>

    <head>
        <title> Exercice pratique de compréhension</title>
    </head>

    <body>
        <a href="./index.php"> page d'accueil</a>
        <h2>
            Structure Alternatives (conditinos)
        </h2>
        <p>calculer le salaire nette</p>

        <p>
            <?php

            $nh = 30;
            $th = 200;
            $nenf = 5;

            $sb = $nh * $th;
            if ($nenf >= 5) {
                $p1 = 1500;
            } elseif ($nenf >= 2) {
                $p1 = 600;
            } else {
                $p1 = 0;
            }
            $sn = $sb + $p1;
            echo "Prime1 ............$p1 <br>";
            echo "salaire bruete.....$sb <br>";
            echo "salaire nette .....$sn <br>";

            ?>
        </p>

    </body>

</htm>