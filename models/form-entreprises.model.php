<?php
        function coordFormDisplay($type){
            $coordform = file_get_contents('views/templates/form-entreprises.view.html');

            //on ajoute la variable dans le résultat HTML généré
            $coordform = str_replace('##type##',$type, $coordform);
            return $coordform;
        }
        