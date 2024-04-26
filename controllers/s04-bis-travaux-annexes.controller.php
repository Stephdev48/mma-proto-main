<?php 

    require_once 'models/form-entreprises.model.php';

    function step4BisDisplay($currentstep){
        
        // Titre personnalisé
        $title = "Formulaire DO-04bis";
        
        // Envoi des champs du formulaire
        if (isset($_POST['fields'])) {
            foreach ($_POST as $key => $value)
            {
                $_SESSION['info-'.$_POST['fields']][$key] = $value;
            }
            $keys = array_keys($_SESSION['info-'.$_POST['fields']]);
            if (in_array('send-step4bis', $keys)) {
                unset($_SESSION['info-'.$_POST['fields']]['send-step4bis']);
            }  
            // header("Location: index.php?page=validation");
        }

        // Remplissage de la variable $content
        ob_start();

        function coordFormDisplay($type){
            $coordform = file_get_contents('views/templates/form-entreprises.view.html');

            //on ajoute la variable dans le résultat HTML généré
            $coordform = str_replace('##type##',$type, $coordform);
            return $coordform;
        }

        require 'views/s04-bis-travaux-annexes.view.php';

        $content = ob_get_clean();
        require("views/base.view.php");
    }