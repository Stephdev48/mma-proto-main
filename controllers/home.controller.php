<?php
    function homeDisplay($currentstep){

        // Titre personnalisé
        $title = "Accueil DO";

        // Envoi des champs du formulaire
        if (isset($_POST['send-home'])) {
            foreach ($_POST as $key => $value)
            {
                $_SESSION['info-'.$_POST['fields']][$key] = $value;
            }
            $keys = array_keys($_SESSION['info-'.$_POST['fields']]);
            if (in_array('send-home', $keys)) {
                unset($_SESSION['info-'.$_POST['fields']]['send-home']);
            }  
            header("Location: index.php?page=step1");
        }

        // Remplissage de la variable $content
        ob_start();

        require('views/home.view.php');

        $content = ob_get_clean();
        require("views/base.view.php");
    }

