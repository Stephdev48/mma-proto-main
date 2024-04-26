<?php 
    function step8Display($currentstep){
        
        //Customized title
        $title = "Formulaire DO-08";
        
        $date = new DateTimeImmutable();
        $newfolder= hash('crc32', $date->getTimestamp());

        $array_natures = array
        (
            1   => "BET",
            2   => "Ingénieur conseil",
            3   => "Maçonnerie",
            4   => "Enduit",
            5   => "Charpente bois",
            6   => "Charpente métallique",
            7   => "Couverture / étanchéité",
            8   => "Plomberie",
            9   => "Carrelage",
            10  => "Menuiseries",
            11  => "Plaques de plâtres",
            12  => "Revêtements souples sols murs",
            13  => "Électricité",
            14  => "Fondation",
            15  => "Terrassement"
        );

        $array_fake_data = array
        (
            0 => array
                    (
                        'nom' => 'GEVAUBOIS',
                        'montant' => 5500,
                        'nature' => 5,
                        'nature-autre' => "",
                        'debut' => '20/02/2024',
                        'fin' => '20/02/2034',
                        'folder' => '94f52dfc',
                        'rcdfile' => 'urssaf-justificatif-declaration-2024-03-20240425-09h11.pdf',
                        'rcdfileremarque' => 'Yes !  trop bien',
                        'annexefile' => '',
                        'annexefileremarque' => '',
                        'status' => '1'
                    ),
            1 => array
                    (
                        'nom' => 'MACON 48',
                        'montant' => 35500,
                        'nature' => 3,
                        'nature-autre' => "",
                        'debut' => '20/02/2022',
                        'fin' => '20/02/2032',                        
                        'folder' => '82f52dfc',
                        'rcdfile' => '',
                        'rcdfileremarque' => '',     
                        'annexefile' => 'urssaf-justificatif-declaration-2024-03-20240425-09h11.pdf',
                        'annexefileremarque' => 'Yes !  trop bien',
                        'status' => '2'                                           
                    ),
            2 => array
                    (
                        'nom' => 'TTRAVO',
                        'montant' => 35500,
                        'nature' => 99,
                        'nature-autre' => "plaquiste",
                        'debut' => '20/02/2022',
                        'fin' => '20/02/2032',                        
                        'folder' => '82f52dfc',
                        'rcdfile' => '',
                        'rcdfileremarque' => '',     
                        'annexefile' => 'urssaf-justificatif-declaration-2024-03-20240425-09h11.pdf',
                        'annexefileremarque' => 'Encore mieux ☺️',
                        'status' => '2'                                           
                    ) ,
            3 => array
                    (
                        'nom' => 'Carreleur',
                        'montant' => 12500,
                        'nature' => 11,
                        'nature-autre' => "",
                        'debut' => '20/02/2022',
                        'fin' => '20/02/2032',                        
                        'folder' => '82f52dfc',
                        'rcdfile' => '',
                        'rcdfileremarque' => '',     
                        'annexefile' => '',
                        'annexefileremarque' => '',
                        'status' => '2'                                           
                    )                                       
        );
        
        $array_datas = $array_fake_data;

        //Send form fields
        if (isset($_POST['fields'])) {
            foreach ($_POST as $key => $value)
            {
                $_SESSION['info-'.$_POST['fields']][$key] = $value;
            }

            if(!empty($_FILES)){
                require "models/upload.php";
            }            
            $keys = array_keys($_SESSION['info-'.$_POST['fields']]);
            if (in_array('send-step8', $keys)) {
                unset($_SESSION['info-'.$_POST['fields']]['send-step8']);
            }  
            //header("Location: index.php?page=validation");
        }

        // Filling the $content variable
        ob_start();
        require 'views/step8.view.php';

        $content = ob_get_clean();
        require("views/base.view.php");
    }