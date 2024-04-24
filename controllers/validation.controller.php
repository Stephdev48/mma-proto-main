<?php

    function validDisplay($currentstep){
            
            //Customized title
            $title = "Formulaire DO-validation";
            
            //Send form fields
            if (isset($_POST['send-validation'])) {
                foreach ($_POST as $key => $value)
                {
                    $_SESSION['info-'.$_POST['fields']][$key] = $value;
                }
                $keys = array_keys($_SESSION['info-'.$_POST['fields']]);
                if (in_array('send-validation', $keys)) {
                    unset($_SESSION['info-'.$_POST['fields']]['send-validation']);
                }  
                // header("Location: index.php?page=step");
            }
    
            // Filling the $content variable
            ob_start();

            require 'views/validation.view.php';
    
            $content = ob_get_clean();
            require("views/base.view.php");
        }