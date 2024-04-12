<?php
    //Customized title
    $title = "Accueil DO";
    
    // Filling the content variable
    ob_start();
    ?>



<?php
    $content = ob_get_clean();
    require("base.view.php");
    ?>