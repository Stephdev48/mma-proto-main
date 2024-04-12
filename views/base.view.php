<?php
    require 'header.view.php';
    ?>

    <script>alertTest();</script>

    <section class="container">
        <!-- Retreiving requested page content -->
        <?= $content ?>
    </section>


<?php
    require 'footer.view.php';
    ?>