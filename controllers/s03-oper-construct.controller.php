<?php
    function step3Display($currentstep){
        
        // Titre personnalisé
        $title = "Formulaire DO-03";
        
        // Envoi des champs du formulaire
        if (isset($_POST['fields'])) {
            foreach ($_POST as $key => $value)
            {
                $_SESSION['info-'.$_POST['fields']][$key] = $value;
            }
            $keys = array_keys($_SESSION['info-'.$_POST['fields']]);
            if (in_array('send-step3', $keys)) {
                unset($_SESSION['info-'.$_POST['fields']]['send-step3']);
            }  
            header("Location: index.php?page=step4");
        }


        // Remplissage de la variable $content
        ob_start();

        require('views/s03-oper-construct.view.php');

        $content = ob_get_clean();
        require("views/base.view.php");
    }