<?php

if($_SESSION['env'] == 'dev'){
    define("SERVER",    "localhost");
    define("USER",      "favoris_user");
    define("PASSWORD",  "YNJuzTq/(WqE5lVR");
    define("BDD",       "mma-proto-main");
}else{
    define("SERVER",    "localhost");
    define("USER",      "favoris_user");
    define("PASSWORD",  "YNJuzTq/(WqE5lVR");
    define("BDD",       "mma-proto-main");

}
    


    $GLOBALS["conn"] = mysqli_connect(SERVER, USER, PASSWORD, BDD, "3306");
    if (mysqli_connect_errno()){
        echo "Erreur de connexion à MySQL: (". mysqli_connect_errno(). ") ". mysqli_connect_error();
        exit();
    }
    
    