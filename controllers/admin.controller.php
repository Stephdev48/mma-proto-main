<?php
    require "models/admin.model.php";
    require_once "models/do.model.php";

    function adminDisplay(){
        $title = "Administration des demandes Dommage Ouvrage";
        require 'views/header.view.php';

        $dos = getListDO();
        if(!empty($_SESSION['admin'])){
            require 'views/admin.view.php';
        }else{
            if(!empty($_POST['password'])){
                if($_POST['password'] == PASSWORD_ADMIN){
                    $_SESSION['admin']="ok";
                    header("Location: index.php?page=admin"); 
                }
            }
            require 'views/login.view.php';
        }        
        require 'views/footer.view.php';
    }

    function singleDoDisplay(){
        $DATA = read($_GET['doid']);
        echo "<div class='mx-auto max-w-screen-xl'>";
        require 'views/header.view.php';
        echo "<div class='my-12'>
            <h3 class='text-center text-2xl font-medium m'>Fiche individuelle Dommage Ouvrage</h3>";
        require 'views/templates/fiche/s01-coordonnees.view.php';
        require 'views/templates/fiche/s02-maitre-ouvrage.view.php';
        require 'views/templates/fiche/s03-oper-construct.view.php';
        require 'views/templates/fiche/s04-informations-diverses.view.php';
        require 'views/templates/fiche/s04-bis-travaux-annexes.view.php';
        require 'views/templates/fiche/s05-maitrise-oeuvre.view.php';
        require 'views/templates/fiche/s06-cnr-risques-chantier.view.php';
        require 'views/footer.view.php';
        echo "</div>
        </div>";
    }
