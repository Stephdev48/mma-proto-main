<?php

    function step2Display($currentstep){
        //Customized title
        $title = "Formulaire DO-02";

        //Send form fields
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
        
        // Filling the $content variable
        ob_start();

        require('views/s02-maitre-ouvrage.view.php');

        $content = ob_get_clean();
        require("views/base.view.php");

    }

    