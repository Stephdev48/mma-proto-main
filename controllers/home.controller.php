<?php
    function homeDisplay($currentstep){

        //Customized title
        $title = "Accueil DO";

        //Send form fields
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

        // Filling the $content variable
        ob_start();

        require('views/home.view.php');

        $content = ob_get_clean();
        require("views/base.view.php");
    }

