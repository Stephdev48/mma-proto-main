<?php 

    require_once 'models/form-entreprises.model.php';

    function step5Display($currentstep){
        
        //Customized title
        $title = "Formulaire DO-05";
        
        //Send form fields
        if (isset($_POST['fields'])) {
            foreach ($_POST as $key => $value)
            {
                $_SESSION['info-'.$_POST['fields']][$key] = $value;
            }
            $keys = array_keys($_SESSION['info-'.$_POST['fields']]);
            if (in_array('send-step5', $keys)) {
                unset($_SESSION['info-'.$_POST['fields']]['send-step5']);
            }  
            header("Location: index.php?page=step8");
        }

        // Filling the $content variable
        ob_start();

        require 'views/s05-maitrise-oeuvre.view.php';

        $content = ob_get_clean();
        require("views/base.view.php");
    }