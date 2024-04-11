<?php
    if (isset($_SESSION['info-souscripteur']) || isset($_SESSION['info-enterprise'])) {
        $conn = mysqli_connect("localhost", "favoris_user", "YNJuzTq/(WqE5lVR", "mma-proto", "3306");
        if (mysqli_connect_errno()){
            echo "Erreur de connexion à MySQL: (". mysqli_connect_errno(). ") ". mysqli_connect_error();
            exit();
        }
    }
    