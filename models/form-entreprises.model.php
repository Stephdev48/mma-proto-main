<?php
        function coordFormDisplay($type){
            $coordform = file_get_contents('views/templates/form-entreprises.template.html');

            //on ajoute la variable dans le résultat HTML généré
            $coordform = str_replace('##type##',$type, $coordform);
            return $coordform;
        }
        

        function insertEntreprise(){
            
            $entreprise_id = mysqli_insert_id($GLOBALS["conn"]);
            return $entreprise_id;
        };