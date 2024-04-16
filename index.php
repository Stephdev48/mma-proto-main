<?php
    require 'controllers/home.controller.php';
    require 'controllers/s01-coordonnees.controller.php';
    require 'controllers/s02-maitre-ouvrage.controller.php';
    require 'controllers/s03-oper-construct.controller.php';
    require 'controllers/s04-informations-diverses.controller.php';
    require 'controllers/validation.controller.php';

    session_start();

    if (isset($_GET['page'])){
        switch($_GET['page']){
            case 'home':
                homeDisplay();
                break;
            case 'step1':
                step1Display();
                break;
            case'step2':
                step2Display();
                break;
            case 'step3':
                step3Display();
                break;
            case 'step4':
                step4Display();
                break;
            case 'validation':
                validDisplay();
                break;
            default:
                throw new Exception ('Paramètre invalide !');
                break;
        }
    }else{
        require('views/home.view.php');
    }

?>