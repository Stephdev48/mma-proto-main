<?php 

    require_once 'models/form-entreprises.model.php';
    
    function step4Display($currentstep){
        
        // Titre personnalisé
        $title = "Formulaire DO-04";
        
        // Envoi des champs du formulaire
        if (isset($_POST['fields'])) {
            foreach ($_POST as $key => $value)
            {
               $_SESSION['info-'.$_POST['fields']][$key] = $value;
            }
            $keys = array_keys($_SESSION['info-'.$_POST['fields']]);
            if (in_array('send-step4', $keys)) {
                unset($_SESSION['info-'.$_POST['fields']]['send-step4']);
            }  

            if($_SESSION["info-situation"]['situation-construction-bois']=="oui"
                || $_SESSION["info-situation"]['situation-pann-photo'] =="oui" 
                || $_SESSION["info-situation"]['situation-geothermie'] =="oui" 
                || $_SESSION["info-situation"]['situation-controle-tech'] =="oui") {
                    header("Location: index.php?page=step4bis");
                }else{
                    header("Location: index.php?page=step5");
                }
            
                    
        }


        // Remplissage de la variable $content
        ob_start();
     
        require 'views/s04-informations-diverses.view.php';

        $content = ob_get_clean();
        require("views/base.view.php");

        
        // if(isset($_SESSION['info-situation']) && ($_SESSION["info-situation"]['situation-construction-bois']=="oui"
        //         || $_SESSION["info-situation"]['situation-pann-photo'] =="oui" 
        //         || $_SESSION["info-situation"]['situation-geothermie'] =="oui" 
        //         || $_SESSION["info-situation"]['situation-controle-tech'] =="oui")) {
        //             showElement('step4bis');
        //         }else{
        //             hideElement('step4bis');
        //         }
    }

    