<?php

    require_once 'models/do.model.php';

    function validDisplay($currentstep){
            
            // Titre personnalisé
            $title = "Formulaire DO-validation";
            
            $DATA = read($_SESSION['DOID']);

            // Remplissage de la variable $content
            ob_start();
            require 'views/templates/fiche/do.header.view.php';
            require 'views/templates/fiche/s01-coordonnees.view.php';
            require 'views/templates/fiche/s02-maitre-ouvrage.view.php';
            require 'views/templates/fiche/s03-oper-construct.view.php';
            require 'views/templates/fiche/s04-informations-diverses.view.php';

            if ((isset($_DATA['situation_construction_bois']) && ($_DATA['situation_construction_bois'])==1) || (isset($_DATA['situation_pann_photo']) && ($_DATA['situation_pann_photo'])==1) || (isset($_DATA['situation_geothermie']) && ($_DATA['situation_geothermie'])==1) || (isset($_DATA['situation_controle_tech']) && ($_DATA['situation_controle_tech'])==1)){
                require 'views/templates/fiche/s04-bis-travaux-annexes.view.php';
            };

            require 'views/validation.view.php';
            $content = ob_get_clean();
            require("views/base.view.php");
        }