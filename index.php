<?php

    define('ROOT_PATH', dirname(__FILE__) );
    define('UPLOAD_FOLDER', "/public/uploads" );
    define('DEBUG', true );
    require 'controllers/page-erreur.controller.php';
   
    session_start();
    // Vide la superglobale $_SESSION
    //session_destroy();
    // $_SESSION = [];

    if (isset($_GET['page'])){
        $currentstep = $_GET['page'];
        switch($_GET['page']){
            case 'home':
                $_SESSION = [];
                require 'controllers/home.controller.php';
                homeDisplay($currentstep);
                break;
            case 'step1':
            case 'step2':
            case 'step3':
            case 'step4':
            case 'step4bis':
            case 'step5':                
            case 'step6':
                require 'controllers/do.controller.php';    
                stepDisplay($currentstep);
                break;               
            case 'validation':
                require 'controllers/validation.controller.php';
                validDisplay($currentstep);
                break;
            case 'step8':
                require 'controllers/lots-techniques.php';
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