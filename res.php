
<html>
<head><title>Mon agenda</title></head>
<body>
<h1>Resultat nombre premier</h1>
<?php

include('function.php');
/**
 * Created by PhpStorm.
 * User: Adam
 * Date: 15/11/2016
 * Time: 11:10
 */

        $nombre = $_GET['number'];
        echo ''.$nombre;
        calcNP($nombre);

?>

<a href="saisieNP.php">Come back</a>

</body>
</html>
