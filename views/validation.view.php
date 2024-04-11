<?php
    require_once("session.req.php");
    require("header.req.php");
    require("connect.php");
?>


<p class="validate">Validé !</p>


<?php

    require("footer.req.php");
    extract($_SESSION['info-souscripteur']);
    extract($_SESSION['info-enterprise']);
    $sql = mysqli_query($conn, 
        "INSERT INTO souscripteurs (nom, prenom, telephone, email, num_siret, metier) 
        VALUES ('$nom', '$prenom', '$phone', '$email', '$siret', '$job')"
    );

    if ($sql){
        unset($_SESSION['info-souscripteur'], $_SESSION['info-enterprise']);
    }
?>

<a href="step1.php">Nouveau souscripteur</a>



<?php
    if(DEBUG == true){
        echo "<pre>";
        var_dump($_SESSION);
        echo "</pre>";

        // unset($_SESSION['info']['siret']);

        // echo "<pre>";
        // var_dump($_SESSION);
        // echo "</pre>";

        // echo "<pre>";
        // var_dump($id_session);
        // echo "</pre>";

        // echo "<pre>";
        // var_dump($_COOKIE['PHPSESSID']);
        // echo "</pre>";

        // session_unset();

        // echo "<pre>";
        // var_dump($_SESSION);
        // echo "</pre>";

        // echo "<pre>";
        // var_dump($id_session);
        // echo "</pre>";
    }

?>