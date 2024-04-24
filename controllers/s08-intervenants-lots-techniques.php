<?php 
    function step8Display($currentstep){
        
        //Customized title
        $title = "Formulaire DO-04";
        
        //Send form fields
        if (isset($_POST['send-step8'])) {
            foreach ($_POST as $key => $value)
            {
                $_SESSION['info-'.$_POST['fields']][$key] = $value;
            }
            $keys = array_keys($_SESSION['info-'.$_POST['fields']]);
            if (in_array('send-step8', $keys)) {
                unset($_SESSION['info-'.$_POST['fields']]['send-step4']);
            }  
            // header("Location: index.php?page=step");
        }

        // Filling the $content variable
        ob_start();
        require 'views/step8.view.php';

        $content = ob_get_clean();
        require("views/base.view.php");
    }