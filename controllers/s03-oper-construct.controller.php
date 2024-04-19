<?php

    function step3Display($currentstep){
        
        //Customized title
        $title = "Formulaire DO-03";
        
        //Send form fields
        if (isset($_POST['send-step3'])) {
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

        // Filling the $content variable
        ob_start();
        
        require('views/s03-oper-construct.view.php');

        $content = ob_get_clean();
        require("views/base.view.php");
    }