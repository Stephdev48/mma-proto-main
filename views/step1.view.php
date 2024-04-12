<?php

    //Customized title
    $title = "Formulaire DO-1";
    
    // Filling the content variable
    ob_start();

    ?>



<?php
    $content = ob_get_clean();
    require("base.view.php");
    ?>