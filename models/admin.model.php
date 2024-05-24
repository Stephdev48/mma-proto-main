<?php

    function getListDO(){
        $boardsql = "SELECT DOID, date_creation FROM dommage_ouvrage;
                    SELECT souscripteur_nom_raison FROM souscripteur INNER JOIN dommage_ouvrage WHERE dommage_ouvrage.souscripteur_id = souscripteur.souscripteur_id;
                    SELECT construction_adresse_num_nom_rue, construction_adresse_code_postal, construction_adresse_commune, construction_cout_operation FROM operation_construction INNER JOIN dommage_ouvrage WHERE dommage_ouvrage.DOID = operation_construction.DOID;";

                    $resquery = mysqli_query($GLOBALS["conn"], $boardsql);
                    $boardata = mysqli_fetch_array($resquery, MYSQLI_ASSOC);

        return array( 1 => "DO156415", 2 => "DO564456");
    }

?>
