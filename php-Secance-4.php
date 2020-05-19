<html>

<head>
    <title>Tableaux en PHP</title>
</head>
<bod>
    <centre>
        <h1>Tableaux en php </h1>
    </centre>
    <a href="./index.php"> page d'accueil</a>
    <br>
    <?php
    $N = 3;
    function addOne(&$a)
    {
        $a++;
    }
    addOne($N);
    echo  " le nombre est $N";

    ?>



</bod>

</html>