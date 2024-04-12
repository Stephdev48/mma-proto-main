<?php
    require 'controllers/home-controller.php';
    require 'controllers/step1-controller.php';
    require 'controllers/step2-controller.php';
    require 'controllers/step3-controller.php';
    require 'controllers/validation-controller.php';

    session_start();

    if (isset($_GET['page'])){
        switch($_GET['page']){
            case 'home':
                require('views/home.view.php');
                break;
            case 'step1':
                require('views/step1.view.php');
                break;
            case'step2':
                require('views/step2.view.php');
                break;
            case 'step3':
                require('views/step3.view.php');
                break;
            case 'validation':
                require('views/validation.view.php');
                break;
            default:
                throw new Exception ('Paramètre invalide !');
                break;
        }
    }else{
        require('views/home.view.php');
    }

?>