<?php

    function validDisplay($currentstep){
            
            // Titre personnalisé
            $title = "Formulaire DO-validation";
            
            // Envoi des champs du formulaire
            if (isset($_POST['fields'])) {
                foreach ($_POST as $key => $value)
                {
                    $_SESSION['info_'.$_POST['fields']][$key] = $value;
                }
                $keys = array_keys($_SESSION['info_'.$_POST['fields']]);
                if (in_array('send_validation', $keys)) {
                    unset($_SESSION['info_'.$_POST['fields']]['send_validation']);
                }  
                // header("Location: index.php?page=step");
            }
    
            // Remplissage de la variable $content
            ob_start();

            require 'views/validation.view.php';
    
            $content = ob_get_clean();
            require("views/base.view.php");
        }