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

<script>stepperColor('step4');</script>







<button type="submit" name="send-step4" value="step4" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Envoyer</button>


<?php
    $content = ob_get_clean();
    require("base.view.php");
    ?>
