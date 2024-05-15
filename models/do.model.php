<?php
    require_once 'connect.db.php';

    //création du souscripteur et de la demande ouvrage + doid dans chaque table
    function insert($array_SESSION){

        $DOID = false;
        $souscripteur_id = false;
        //var_dump($array_SESSION);
        if (strlen($array_SESSION["souscripteur_nom_raison"]) > 0 ){

            // insertion des données du souscripteur
            extract($array_SESSION);
            $sql = "INSERT INTO souscripteur (souscripteur_nom_raison, souscripteur_siret, souscripteur_adresse, souscripteur_code_postal, souscripteur_commune, souscripteur_profession, souscripteur_telephone, souscripteur_email, souscripteur_ancien_client_date, souscripteur_ancien_client_num) 
            VALUES ('$souscripteur_nom_raison', '$souscripteur_siret', '$souscripteur_adresse', '$souscripteur_code_postal', '$souscripteur_commune', '$souscripteur_profession', '$souscripteur_telephone', '$souscripteur_email', '$souscripteur_ancien_client_date', '$souscripteur_ancien_client_num');";
            $query = mysqli_query($GLOBALS["conn"], $sql);

            // insertion de souscripteur_id dans dommage_ouvrage
            $souscripteur_id = mysqli_insert_id($GLOBALS["conn"]);
            $sql = "INSERT INTO dommage_ouvrage (souscripteur_id) VALUES ('$souscripteur_id')";
            $query = mysqli_query($GLOBALS["conn"], $sql);

            // récupération de DOID et ajout dans toutes les tables
            $DOID = mysqli_insert_id($GLOBALS["conn"]);
            $sql = "INSERT INTO moa (DOID) VALUES ('$DOID');";
            $query = mysqli_query($GLOBALS["conn"], $sql);
            $sql = "INSERT INTO operation_construction (DOID) VALUES ('$DOID');";
            $query = mysqli_query($GLOBALS["conn"], $sql);
            $sql = "INSERT INTO situation (DOID) VALUES ('$DOID');";
            $query = mysqli_query($GLOBALS["conn"], $sql);
            $sql = "INSERT INTO travaux_annexes (DOID) VALUES ('$DOID');";
            $query = mysqli_query($GLOBALS["conn"], $sql);
            $sql = "INSERT INTO moe (DOID) VALUES ('$DOID');";
            $query = mysqli_query($GLOBALS["conn"], $sql);
            $sql = "INSERT INTO cnr (DOID) VALUES ('$DOID')";
            $query = mysqli_query($GLOBALS["conn"], $sql);

        }

        return $DOID;
    }

    //mise à jour de la base à chaque étape
    function update($array_SESSION){
        var_dump($array_SESSION);
        return true;
    }
?>