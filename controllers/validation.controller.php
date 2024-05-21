<?php

    require_once 'models/do.model.php';

    function validDisplay($currentstep){
            
            // Titre personnalisé
            $title = "Formulaire DO-validation";
            
            read();
            // Remplissage de la variable $content
            ob_start();

            require 'views/validation.view.php';
    
            $content = ob_get_clean();
            require("views/base.view.php");
        }