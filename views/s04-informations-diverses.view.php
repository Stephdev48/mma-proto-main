<?php

    //Customized title
    $title = "Formulaire DO-04";
    
    //Send form fields
    if (isset($_POST['send-step4'])) {
        foreach ($_POST as $key => $value)
        {
            $_SESSION['info-'.$_POST['fields']][$key] = $value;
        }
        $keys = array_keys($_SESSION['info-'.$_POST['fields']]);
        if (in_array('send-step4', $keys)) {
            unset($_SESSION['info-'.$_POST['fields']]['send-step4']);
        }  
        // header("Location: index.php?page=step");
    }

    // Filling the $content variable
    ob_start();

    ?>

<?php
    // Stepper
    require 'views/stepper.view.php';
    ?>



<?php
    $content = ob_get_clean();
    require("base.view.php");
    ?>