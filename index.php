<html>

<body>
    <center>
        <h1>
            <?php
            echo "hello word <br>";
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
        </h1>
    </center>

</body>

</html>