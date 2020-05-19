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
    $Myarray = array('username' => 'karim', 'age' => 25);

    // fonction foreach
    foreach ($Myarray as $user) {

        echo '<pre>';
        print_r($user);
        echo '</pre>';
    }

    echo '<pre>';
    print_r($Myarray);
    echo '</pre>';

    //count() pour conter le nombre d'element ds tableau
    $prenoms = array('ali', 'jamali', 'kamali', 'salim', 'khalil', 'ali');
    $count = count($prenoms);
    echo $count . '<br />';

    //array key exist return boolean
    if (array_key_exists('age', $Myarray)) {
        echo 'yes <br />';
    }

    //in array return boolean
    if (in_array('jamali', $prenoms)) {
        echo 'is exist <br />';
    } else echo 'not exist <br /> ';

    //array search
    $position = array_search('salim', $prenoms);
    echo $position + 1;
    
    //include file require once include once

    //fonction
    require_once("function_file.php");
    $x = 5;
    $y = 10;

    $sum = add($x, $y);
    $prod = multiplay($x, $y);
    $div = divide($x, $y);
    echo '<br/>fonction appeler depuit un fichier externe';
    echo "<br/> la somme :$sum le production: $prod la division $div";

    $newPrenons = triTableau($prenoms);
    foreach ($newPrenons as $n) {
        echo 'the name is ' . $n . '<br/>';
    }


    ?>



</bod>

</html>