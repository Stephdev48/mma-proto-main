<?php

    function stepDisplay($currentstep){
        //Customized title
        $title = "Formulaire DO-'.$currentstep'";

        //Send form fields
        if (isset($_POST['send-'.$currentstep.''])) {
            foreach ($_POST as $key => $value)
            {
                $_SESSION['info-'.$_POST['fields']][$key] = $value;
            }
            $keys = array_keys($_SESSION['info-'.$_POST['fields']]);
            if (in_array('send-'.$currentstep.'', $keys)) {
                unset($_SESSION['info-'.$_POST['fields']]['send-'.$currentstep.'']);
            }  
            header("Location: index.php?page=step2");
        }

        // Filling the $content variable
        ob_start();

        switch($currentstep){
            case 'home':
                require 'views/home.view.php';
                break;
            case 'step1':
                require('views/s01-coordonnees.view.php');
                break;
            case'step2':
                require('views/s02-maiter-ouvrage.view.php');
                break;
            case 'step3':
                require('views/s03-oper-contruct.view.php');
                break;
            case 'step4':
                require('views/s04-informations-diverses.view.php');
                break;
            case 'step5':
                require('views/s05-a_definir.view.php');
                break;
            case 'partners':
                require 'views/partner-companies.view.php';
                break;
            case 'validation':
                require('views/validation.view.php');
                break;
            default:
                throw new Exception ('Paramètre invalide !');
                break;
        } 

        $content = ob_get_clean();
        require("views/base.view.php");
    }