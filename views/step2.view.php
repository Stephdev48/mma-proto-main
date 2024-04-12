<?php

    //Customized title
    $title = "Formulaire DO-2";
    
    // Filling the content variable
    ob_start();

    ?>



<?php
    $content = ob_get_clean();
    require("base.view.php");
    ?>