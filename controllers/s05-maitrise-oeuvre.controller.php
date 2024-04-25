<?php 
    function step5Display($currentstep){
        
        //Customized title
        $title = "Formulaire DO-05";
        
        //Send form fields
        if (isset($_POST['send-step5'])) {
            foreach ($_POST as $key => $value)
            {
                $_SESSION['info-'.$_POST['fields']][$key] = $value;
            }
            $keys = array_keys($_SESSION['info-'.$_POST['fields']]);
            if (in_array('send-step5', $keys)) {
                unset($_SESSION['info-'.$_POST['fields']]['send-step5']);
            }  
            // header("Location: index.php?page=step");
        }

        // Filling the $content variable
        ob_start();
   
        function coordFormDisplay($type){
            $coordform = file_get_contents('views/templates/form-entreprises.view.html');

            //on ajoute la variable dans le résultat HTML généré
            $coordform = str_replace('##type##',$type, $coordform);
            return $coordform;
        }
        
        require 'views/s05-maitrise-oeuvre.view.php';

        $content = ob_get_clean();
        require("views/base.view.php");
    }