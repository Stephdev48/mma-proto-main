<?php

    //Customized title
    $title = "Formulaire DO-2";
    
    // Filling the content variable
    ob_start();

    ?>

<p>step2 fonctionne</p>

<?php
    $content = ob_get_clean();
    require("base.view.php");
    ?>