<?php

    function step1Display($currentstep){
        // Titre personnalisé
        $title = "Formulaire DO-01";

        // Envoi des champs du formulaire
        if (isset($_POST['fields'])) {
            foreach ($_POST as $key => $value)
            {
                $_SESSION['info-'.$_POST['fields']][$key] = $value;
            }
            $keys = array_keys($_SESSION['info-'.$_POST['fields']]);
            if (in_array('send-step1', $keys)) {
                unset($_SESSION['info-'.$_POST['fields']]['send-step1']);
            }  
            header("Location: index.php?page=step2");
        }


        // Remplissage de la variable $content
        ob_start();

        require('views/s01-coordonnees.view.php');

        $content = ob_get_clean();
        require("views/base.view.php");
    }