<?php

    define('ROOT_PATH', dirname(__FILE__) );
    define('UPLOAD_FOLDER', "/public/uploads" );
    define('DEBUG', true );

    require 'controllers/home.controller.php';
    require 'controllers/s01-coordonnees.controller.php';
    require 'controllers/s02-maitre-ouvrage.controller.php';
    require 'controllers/s03-oper-construct.controller.php';
    require 'controllers/s04-informations-diverses.controller.php';
    require 'controllers/s04-bis-travaux-annexes.controller.php';
    require 'controllers/s05-maitrise-oeuvre.controller.php';
    require 'controllers/s06-cnr-risques-chantier.controller.php';
    require 'controllers/s08-intervenants-lots-techniques.php';
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
                step1Display($currentstep);
                break;
            case'step2':
                step2Display($currentstep);
                break;
            case 'step3':
                step3Display($currentstep);
                break;
            case 'step4':
                step4Display($currentstep);
                break;
            case 'step4bis':
                step4BisDisplay($currentstep);
                break;
            case 'step5':
                step5Display($currentstep);
                break;
            case 'step6':
                step6Display($currentstep);
                break;
            case 'validation':
                validDisplay($currentstep);
                break;
            default:
                throw new Exception ('Paramètre invalide !');
                break;
        }
    }else{
        errorDisplay();
    }

?>