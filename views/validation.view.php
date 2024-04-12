<?php
   
    //Customized title
    $title = "Formulaire DO-valid";

    // Filling the content variable
    ob_start();

?>


<p class="validate">Validé !</p>


<?php
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

    }

    $content = ob_get_clean();
    require("base.view.php");
    ?>