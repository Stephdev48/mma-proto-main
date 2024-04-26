<?php 

    require_once 'models/form-entreprises.model.php';

    function step5Display($currentstep){
        
        // Titre personnalisé
        $title = "Formulaire DO-05";
        
        // Envoi des champs du formulaire
        if (isset($_POST['fields'])) {
            foreach ($_POST as $key => $value)
            {
                $_SESSION['info-'.$_POST['fields']][$key] = $value;
            }
            $keys = array_keys($_SESSION['info-'.$_POST['fields']]);
            if (in_array('send-step5', $keys)) {
                unset($_SESSION['info-'.$_POST['fields']]['send-step5']);
            }  
            header("Location: index.php?page=step8");
        }

        // Remplissage de la variable $content
        ob_start();

        require 'views/s05-maitrise-oeuvre.view.php';

        $content = ob_get_clean();
        require("views/base.view.php");
    }