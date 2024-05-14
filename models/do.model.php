<?php
    require_once 'connect.db.php';

    //création du souscripteur et de la demande ouvrage + doid dans chaque table
    function insert($array_SESSION){

        $DOID = false;
        $souscripteur_id = false;
        //var_dump($array_SESSION);
        if (strlen($array_SESSION["souscripteur_nom_raison"]) > 0 ){
            extract($array_SESSION);
            $sql = "INSERT INTO souscripteur (souscripteur_nom_raison, souscripteur_siret, souscripteur_adresse, souscripteur_code_postal, souscripteur_commune, souscripteur_profession, souscripteur_telephone, souscripteur_email, souscripteur_ancien_client_date, souscripteur_ancien_client_num) 
            VALUES ('$souscripteur_nom_raison', '$souscripteur_siret', '$souscripteur_adresse', '$souscripteur_code_postal', '$souscripteur_commune', '$souscripteur_profession', '$souscripteur_telephone', '$souscripteur_email', '$souscripteur_ancien_client_date', '$souscripteur_ancien_client_num');";
            $query = mysqli_query($GLOBALS["conn"], $sql);

            $souscripteur_id = mysqli_insert_id($GLOBALS["conn"]);
            $sql = "INSERT INTO dommage_ouvrage (souscripteur_id) VALUES ('$souscripteur_id')";
            $query = mysqli_query($GLOBALS["conn"], $sql);
            $DOID = mysqli_insert_id($GLOBALS["conn"]);

        }

        
        // INSERT INTO moa (avec last_insert_id ==> DOID )
        // exemple: INSERT INTO `moe` (`DOID`) VALUES ($doid);
        // INSERT INTO operation_construction (avec last_insert_id ==> DOID )
        // INSERT INTO situation (avec last_insert_id ==> DOID )
        // INSERT INTO travaux annexes (avec last_insert_id ==> DOID )
        // INSERT INTO cnr (avec last_insert_id ==> DOID )
        return $DOID;
    }

    //mise à jour de la base à chaque étape
    function update($array_SESSION){
        var_dump($array_SESSION);
        return true;
    }
?>