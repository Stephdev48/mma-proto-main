<?php
    require 'header.view.php';
    
    // Stepper
    require 'stepper.view.php';
    ?>

    <section class="">
        <!-- Retreiving requested page content -->
        <?= $content ?>
    </section>

<?php
    require 'footer.view.php';
    ?>