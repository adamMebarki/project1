<html>
    <head><title>Calcul IMC</title></head>
    <body>
        <h1>IMC</h1>
        <form name="calcul" method="post" action="imc.php">
            Entrez votre prénom : <input type="text" name="name"/> <br/>
            Entrez votre nom : <input type="text" name="lastname"/> <br/>
            Entrez votre taille (sous la forme 1.70) : <input type="text" name="taille"/><br/>
            Entrez votre poids (en kilos) : <input type="text" name="poids"/><br/>
            Entrez votre ville : <input type="text" name="ville"/> <br/>
            Entrez votre activité : <input type="text" name="activite"/> <br/>
            <input type="submit" name="valider" value="OK"/>
        </form>
            <?php
            if(isset($_POST['valider'])){
              /*  $name=$_POST['name'];
                $taille=$_POST['taille'];
                $poids=$_POST['poids'];
                $imc= $poids%($taille*$taille);
                echo '<p>Salut '. $name.'<br/>
                Votre IMC (indice de masse corporelle) est exactement : '.$imc.'</br>';
                */
                echo 'Vous venez de saisir : </br>';
                foreach ($_POST as $index=>$valeur){
                    if($valeur !='OK'){
                    echo '- '.$valeur.'</br>';
                    }
                }
              }
            ?>
        <a href="index.php">Come back</a>


    </body>
</html>
