<?php

    function step2Display($currentstep){
        // Titre personnalisé
        $title = "Formulaire DO-02";

        // Envoi des champs du formulaire
        if (isset($_POST['fields'])) {
            foreach ($_POST as $key => $value)
            {
                $_SESSION['info-'.$_POST['fields']][$key] = $value;
            }
            $keys = array_keys($_SESSION['info-'.$_POST['fields']]);
            if (in_array('send-step2', $keys)) {
                unset($_SESSION['info-'.$_POST['fields']]['send-step2']);
            }  
            header("Location: index.php?page=step3");
        }
        
        // Remplissage de la variable $content
        ob_start();


        //chargement des données à afficher
        $moa_construction       = 1;
        $moa_construction_pro   = 0;

        require('views/s02-maitre-ouvrage.view.php');

        $content = ob_get_clean();

        

        require("views/base.view.php");

    }

    