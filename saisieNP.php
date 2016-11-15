<html>
<head><title>Ma page d'accueil</title></head>
<body>
<h1>Bienvenue sur le site de toto </h1>
<h2>Entrée un nombre entre 1 et 10 000</h2>
<form name="nombre premier" method="post" action="saisieNP.php">
    Entrez votre nombre : <input type="number" name="premier"/> <br/>
    <input type="submit" name="valider" value="OK"/>
</form>


<?php
    if(isset($_POST['valider'])) {
        header('Location: res.php?number=\'.$_POST["premier"]');
    }
?>

<a href="index.php">Come back</a>


</body>
</html>