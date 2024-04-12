<?php
    //Customized title
    $title = "Accueil DO";
    
    // Filling the content variable
    ob_start();
    ?>

<p>homepage fonctionne</p>

<?php
    $content = ob_get_clean();
    require("base.view.php");
    ?>