<?php
    require_once 'models/form-entreprises.model.php'; 
    require_once 'models/do.model.php';
    
    function stepDisplay($currentstep){  
        
        // Remplissage de la variable $content
        ob_start();
        switch ($currentstep) {
            case 'step0':
                $title = "Formulaire Dommage Ouvrage";
                require('views/templates/form/s00-debuter.view.php');
                break;            
            case 'step1':
                $title = "Formulaire DO-01";
                require('views/templates/form/s01-coordonnees.view.php');
                break;
            case 'step2':
                $title = "Formulaire DO-02";
                require('views/templates/form/s02-maitre-ouvrage.view.php');
                break;           
            case 'step3':
                $title = "Formulaire DO-03";
                require('views/templates/form/s03-oper-construct.view.php');
                break;
            case 'step4':
                $title = "Formulaire DO-04";
                require('views/templates/form/s04-informations-diverses.view.php');
                break; 
            case 'step4bis':
                $title = "Formulaire DO-04bis";                                
                require('views/templates/form/s04-bis-travaux-annexes.view.php');     
                break;                
            case 'step5':
                $title = "Formulaire DO-05";
                require('views/templates/form/s05-maitrise-oeuvre.view.php');
                break;                                               
            default:
                # code...
                break;
        }

         // Envoi des champs du formulaire
         if (isset($_POST['fields'])) {
            //var_dump($_POST);
            foreach ($_POST as $key => $value)
            {
                $_SESSION['info_'.$_POST['fields']][$key] = $value;                
            }
            $keys = array_keys($_SESSION['info_'.$_POST['fields']]);
            $res = false;
            //var_dump($_SESSION['info_'.$_POST['fields']]);
            if($currentstep == "step0"){
                if(isset($_POST['checkbox-approuve'])){
                    if($_POST['checkbox-approuve'] == 1){
                        $res=true;  
                    }
                }else{
                    $res=false;
                    $message = "Vous devez cocher la case pour accepter les conditions générales du contrat Dommage Ouvrage et les Mentions légales RGPD";
                }
            }elseif($currentstep == "step1"){
                $res = insert($_SESSION["info_souscripteur"]);
                $_SESSION["DOID"] = $res;
            }else{
                $res = update($_SESSION['info_'.$_POST['fields']], $_POST['fields'], $_SESSION["DOID"] );
                $doid = $_SESSION["DOID"];
            }
            
            if($res == false){
                // echo ERREUR LORS DE L'AJOUT OU MODIFICATION EN BDD
            }else{                
                if(!empty($_POST['page_next'])){
                    $nextstep = $_POST['page_next'];
                }                    
                header("Location: index.php?page=".$nextstep."&doid=$doid"); 
            }
            
        }

        if($currentstep == 'step4bis'){
            if($_SESSION["info_situation"]['situation_construction_bois']=="0"
            && $_SESSION["info_situation"]['situation_pann_photo'] =="0" 
            && $_SESSION["info_situation"]['situation_geothermie'] =="0" 
            && $_SESSION["info_situation"]['situation_controle_tech'] =="0"
            && $_SESSION["info_situation"]['situation_cnr'] =="0") {
                header("Location: index.php?page=step5");
            }  
        }

 
        $content = ob_get_clean();
        require("views/base.view.php");
    }

