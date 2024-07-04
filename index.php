<?php

    define('ROOT_PATH', dirname(__FILE__) );
    define('UPLOAD_FOLDER', "/public/uploads" );


    define('PASSWORD_ADMIN', "9%VBV!7zFkbH" );
    require 'controllers/page-erreur.controller.php';
   
    session_start();
    $_SESSION['env'] = 'dev'; //prod

    if($_SESSION['env'] == 'prod'){
        define('DEBUG', false );
    }else{
        define('DEBUG', true );
    }

    // Vide la superglobale $_SESSION
    // $_SESSION = [];
    if (isset($_GET['page'])){
        $currentstep = $_GET['page'];
        switch($_GET['page']){
            case 'home':
                $_SESSION = [];
                require 'controllers/home.controller.php';
                homeDisplay($currentstep);
                break;
            case 'step0':
            case 'step1':
            case 'step2':
            case 'step3':
            case 'step4':
            case 'step4bis':
            case 'step5':                
                require 'controllers/do.controller.php';    
                stepDisplay($currentstep);
                break;               
            case 'validation':
                require 'controllers/validation.controller.php';
                validDisplay($currentstep);
                break;
            case 'rcd':
                require 'controllers/rcd.controller.php';
                rcdDisplay($currentstep);
                break;                 
            case 'admin':
                require 'controllers/admin.controller.php';
                adminDisplay();
                break; 
            case 'fiche':
                require 'controllers/admin.controller.php';
                singleDoDisplay();
                break;  
            case 'edit':
                require 'controllers/admin.controller.php';
                editDo($_GET['doid']);
                break;       
            default:
                throw new Exception ('Paramètre invalide !');
                break;
        }
    }else{
        errorDisplay();
    }

?>