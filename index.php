<?php
    require 'controllers/home.controller.php';
    require 'controllers/step1.controller.php';
    require 'controllers/step2.controller.php';
    require 'controllers/step3.controller.php';
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