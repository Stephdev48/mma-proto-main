<?php
    require 'header.view.php';
    require 'stepper.view.php';
    ?>

<section class="w-[460px] lg:w-[780px] xl:w-[960px] m-auto">
    <!-- Récupération du contenu de la page à afficher -->
    <?= $content ?>
</section>

<?php
    require 'footer.view.php';
    ?>