<?php
    require_once 'models/form-entreprises.model.php'; 
    require_once 'models/do.model.php';

    function stepDisplay($currentstep){        

        //var_dump($_SESSION);
        // Remplissage de la variable $content
        ob_start();
        switch ($currentstep) {
            case 'step1':
                $title = "Formulaire DO-01";
                require('views/s01-coordonnees.view.php');
                $nextstep="step2";
                break;
            case 'step2':
                $title = "Formulaire DO-02";
                require('views/s02-maitre-ouvrage.view.php');
                $nextstep="step3";
                break;           
            case 'step3':
                $title = "Formulaire DO-03";
                require('views/s03-oper-construct.view.php');
                $nextstep="step4";
                break;
            case 'step4':
                $title = "Formulaire DO-04";
                require('views/s04-informations-diverses.view.php');
                $nextstep="step4bis";  
                break; 
            case 'step4bis':
                $title = "Formulaire DO-04bis";         
                if($_SESSION["info-situation"]['situation-construction-bois']=="non"
                && $_SESSION["info-situation"]['situation-pann-photo'] =="non" 
                && $_SESSION["info-situation"]['situation-geothermie'] =="non" 
                && $_SESSION["info-situation"]['situation-controle-tech'] =="non") {
                    header("Location: index.php?page=step5");
                }                         
                $nextstep="step5";
                require('views/s04-bis-travaux-annexes.view.php');     
                break;                
            case 'step5':
                $title = "Formulaire DO-05";
                require('views/s05-maitrise-oeuvre.view.php');
                $nextstep="step6";
                break;    
            case 'step6':
                $title = "Formulaire DO-06";
                require('views/s06-cnr-risques-chantier.view.php');
                $nextstep="validation";
                break;                                             
            default:
                # code...
                break;
        }
        
        // Envoi des champs du formulaire
        if (isset($_POST['fields'])) {
            foreach ($_POST as $key => $value)
            {
                $_SESSION['info-'.$_POST['fields']][$key] = $value;
            }
            $keys = array_keys($_SESSION['info-'.$_POST['fields']]);

            if($currentstep == "step1"){

            }
            if($currentstep == "step2"){
                $res = insert($_SESSION['info-'.$_POST['fields']]);
            }else{
                $res = update($_SESSION['info-'.$_POST['fields']]);
            }
        
            header("Location: index.php?page=".$nextstep);            
        }
        $content = ob_get_clean();
        require("views/base.view.php");
    }

