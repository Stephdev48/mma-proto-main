<?php

    define('ROOT_PATH', dirname(__FILE__) );
    define('UPLOAD_FOLDER', "/public/uploads" );
    define('DEBUG', true );

    require 'controllers/home.controller.php';
    require 'controllers/do.controller.php';
    /*require 'controllers/s01-coordonnees.controller.php';
    require 'controllers/s02-maitre-ouvrage.controller.php';
    require 'controllers/s03-oper-construct.controller.php';
    require 'controllers/s04-informations-diverses.controller.php';
    require 'controllers/s04-bis-travaux-annexes.controller.php';
    require 'controllers/s05-maitrise-oeuvre.controller.php';
    require 'controllers/s06-cnr-risques-chantier.controller.php';*/
    
    require 'controllers/validation.controller.php';
    require 'controllers/page-erreur.controller.php';
   
    // Vide la superglobale $_SESSION
    // $_SESSION = [];

    session_start();

    if (isset($_GET['page'])){
        $currentstep = $_GET['page'];
        switch($_GET['page']){
            case 'home':
                $_SESSION = [];
                homeDisplay($currentstep);
                break;
            case 'step1':
            case 'step2':
            case 'step3':
            case 'step4':
            case 'step4bis':
            case 'step5':                
            case 'step6':
                stepDisplay($currentstep);
                break;               
            case 'validation':
                validDisplay($currentstep);
                break;
            case 'step8':
                require 'controllers/s08-intervenants-lots-techniques.php';
                step8Display($currentstep);
                break;                 
            default:
                throw new Exception ('Paramètre invalide !');
                break;
        }
    }else{
        errorDisplay();
    }

?>