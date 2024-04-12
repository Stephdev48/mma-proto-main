<?php

    //Customized titles
    $title = "Long live MVC !";
    $title_header = "Gestionnaire d'avis";
    
    // Filling the content variable
    ob_start();

    ?>



<?php
    $content = ob_get_clean();
    require("base.view.php");
    ?>