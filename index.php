<html>
    <head>
        <title>Ma page d'accueil </title>
    </head>
    <body>
        <h1>Bienvenue sur le site de toto </h1>
        <p> Toto fait de l'anglais :</p>
        <?php
            $name='testo';
            $age = '27';
            $gars = true;
            $taille = 1.75;


            echo '<p>Hello ! What is the day today ? It is '.date("l").' !</p>';
            echo '<p>Bonjour à tous.</br>
            Mon vrai nom n\'est pas Toto.</br>
            Mon vrai nom est '.$name.'</br>
            J\'ai '.$age.' ans et je mesure '.$taille.'m</br>
            Et comme mon nom l\'indique, je suis';
            if ($gars==true){
                echo 'un garçon.</p>';
            }
            else{
                echo 'une fille.</p>';
            }

        ?>
        <ul>
    <li><a href="emploi.php">yeah de l'emmploi !!!</a></li>
    <li><a href="saisie.php">formulaire yeah</a></li>
    <li><a href="array.php">array manipulation</a></li>
        </ul>
    </body>
</html>
