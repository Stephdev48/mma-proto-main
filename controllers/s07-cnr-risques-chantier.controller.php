<?php 

    require_once 'models/form-entreprises.model.php';

    function step7Display($currentstep){
        
        // Titre personnalisé
        $title = "Formulaire DO-07";
        
        // Envoi des champs du formulaire
        if (isset($_POST['fields'])) {
            foreach ($_POST as $key => $value)
            {
                $_SESSION['info-'.$_POST['fields']][$key] = $value;
            }
            $keys = array_keys($_SESSION['info-'.$_POST['fields']]);
            if (in_array('send-step7', $keys)) {
                unset($_SESSION['info-'.$_POST['fields']]['send-step7']);
            }  
            header("Location: index.php?page=step7");
        }

        // Remplissage de la variable $content
        ob_start();

        require 'views/s07-cnr-risques-chantier.view.php';

        $content = ob_get_clean();
        require("views/base.view.php");
    }