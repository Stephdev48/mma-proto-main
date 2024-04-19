<?php

    function step1Display($currentstep){
        //Customized title
        $title = "Formulaire DO-01";

        //Send form fields
        if (isset($_POST['send-step1'])) {
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

        // Filling the $content variable
        ob_start();

        require('views/s01-coordonnees.view.php');

        $content = ob_get_clean();
        require("views/base.view.php");
    }