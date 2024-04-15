<?php

    //Customized title
    $title = "Formulaire DO-3";
    
    // Filling the $content variable
    ob_start();

    ?>

<p class="text-center text-3xl">step3 fonctionne</p>

<?php
    $content = ob_get_clean();
    require("base.view.php");
    ?>