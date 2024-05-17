<?php
        function coordFormDisplay($type, $array_session){
            $coordform = file_get_contents('views/templates/form-entreprises.template.html');

            //on ajoute la variable dans le résultat HTML généré
            
            $coordform = str_replace('##type##',$type, $coordform);
            
            $raison_social = "";
            $nom = "";
            $prenom ="";
            $code_postal ="";
            $adresse ="";
            $commune ="";
            $numero_siret ="";
            
            if(!empty($array_session[$type.'_entreprise_raison_social'])){$raison_social = $array_session[$type.'_entreprise_raison_social'];}
            if(!empty($array_session[$type.'_entreprise_nom'])){$nom = $array_session[$type.'_entreprise_nom'];}
            if(!empty($array_session[$type.'_entreprise_prenom'])){$prenom = $array_session[$type.'_entreprise_prenom'];}
            if(!empty($array_session[$type.'_entreprise_code_postal'])){$code_postal = $array_session[$type.'_entreprise_code_postal'];}
            if(!empty($array_session[$type.'_entreprise_adresse'])){$adresse = $array_session[$type.'_entreprise_adresse'];}
            if(!empty($array_session[$type.'_entreprise_commune'])){$commune = $array_session[$type.'_entreprise_commune'];}
            if(!empty($array_session[$type.'_entreprise_numero_siret'])){$numero_siret = $array_session[$type.'_entreprise_numero_siret'];}
    
            $coordform = str_replace('##valeur_entreprise_raison_sociale##', $raison_social,$coordform);
            $coordform = str_replace('##valeur_entreprise_nom##', $nom,$coordform);
            $coordform = str_replace('##valeur_entreprise_prenom##', $prenom,$coordform);
            $coordform = str_replace('##valeur_entreprise_code_postal##', $code_postal,$coordform);
            $coordform = str_replace('##valeur_entreprise_adresse##', $adresse,$coordform);
            $coordform = str_replace('##valeur_entreprise_commune##', $commune,$coordform);            
            $coordform = str_replace('##valeur_entreprise_numero_siret##', $numero_siret,$coordform);

            return $coordform;
        }
        

        function insertEntreprise(){
            
            $entreprise_id = mysqli_insert_id($GLOBALS["conn"]);
            return $entreprise_id;
        };