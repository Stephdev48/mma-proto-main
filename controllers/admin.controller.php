<?php
    require "models/admin.model.php";

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
