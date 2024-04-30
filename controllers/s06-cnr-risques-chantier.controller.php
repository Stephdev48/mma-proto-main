<?php 

    require_once 'models/form-entreprises.model.php';

    function step6Display($currentstep){
        
        // Titre personnalisé
        $title = "Formulaire DO-07";
        
        // Envoi des champs du formulaire
        if (isset($_POST['fields'])) {
            foreach ($_POST as $key => $value)
            {
                $_SESSION['info-'.$_POST['fields']][$key] = $value;
            }
            $keys = array_keys($_SESSION['info-'.$_POST['fields']]);
            if (in_array('send-step6', $keys)) {
                unset($_SESSION['info-'.$_POST['fields']]['send-step6']);
            }  
            header("Location: index.php?page=validation");
        }

        // Remplissage de la variable $content
        ob_start();

        require 'views/s06-cnr-risques-chantier.view.php';

        $content = ob_get_clean();
        require("views/base.view.php");
    }