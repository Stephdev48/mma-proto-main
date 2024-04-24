<?php 
    function step4BisDisplay($currentstep){
        
        //Customized title
        $title = "Formulaire DO-04bis";
        
        //Send form fields
        if (isset($_POST['send-step4bis'])) {
            foreach ($_POST as $key => $value)
            {
                $_SESSION['info-'.$_POST['fields']][$key] = $value;
            }
            $keys = array_keys($_SESSION['info-'.$_POST['fields']]);
            if (in_array('send-step4bis', $keys)) {
                unset($_SESSION['info-'.$_POST['fields']]['send-step4bis']);
            }  
            // header("Location: index.php?page=validation");
        }

        // Filling the $content variable
        ob_start();

        function coordFormDisplay(){
            $coordform = require 'views/form-entreprises.view.php';
            return $coordform;
        }

        require 'views/s04-bis-travaux-annexes.view.php';

        $content = ob_get_clean();
        require("views/base.view.php");
    }