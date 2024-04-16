<?php

    //Customized title
    $title = "Formulaire DO-04";
    
    //Send form fields
    if (isset($_POST['send-step4'])) {
        foreach ($_POST as $key => $value)
        {
            $_SESSION['info-'.$_POST['fields']][$key] = $value;
        }
        $keys = array_keys($_SESSION['info-'.$_POST['fields']]);
        if (in_array('send-step4', $keys)) {
            unset($_SESSION['info-'.$_POST['fields']]['send-step4']);
        }  
        // header("Location: index.php?page=step");
    }

    // Filling the $content variable
    ob_start();

    ?>

    <!-- Stepper -->
<section id="stepper" class="flex justify-center mb-24 m-8">
    <div class="flex justify-center mt-16">   
        <ol class="flex flex-wrap items-center w-full space-y-4 sm:flex sm:space-x-8 sm:space-y-0 rtl:space-x-reverse">
            <li class="flex items-center text-gray-500 dark:text-gray-400 space-x-2.5 rtl:space-x-reverse">
                <span class="flex items-center justify-center w-8 h-8 border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
                    1
                </span>
                <span>
                    <h3 class="font-medium leading-tight">Coordonnées souscripteur</h3>
                </span>
            </li>
            <li class="flex items-center text-gray-500 dark:text-gray-400 space-x-2.5 rtl:space-x-reverse">
                <span class="flex items-center justify-center w-8 h-8 border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
                    2
                </span>
                <span>
                    <h3 class="font-medium leading-tight">Le Maitre d'Ouvrage</h3>
                </span>
            </li>
            <li class="flex items-center text-gray-500 dark:text-gray-400 space-x-2.5 rtl:space-x-reverse">
                <span class="flex items-center justify-center w-8 h-8 border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
                    3
                </span>
                <span>
                    <h3 class="font-medium leading-tight">L'opération de construction : Description</h3>
                </span>
            </li>
            <li class="flex items-center text-blue-600 dark:text-blue-500 space-x-2.5 rtl:space-x-reverse">
                <span class="flex items-center justify-center w-8 h-8 border border-blue-600 rounded-full shrink-0 dark:border-blue-500">
                    4
                </span>
                <span>
                    <h3 class="font-medium leading-tight">L'opération de construction : Risques</h3>
                </span>
            </li>
            <li class="flex items-center text-gray-500 dark:text-gray-400 space-x-2.5 rtl:space-x-reverse">
                <span class="flex items-center justify-center w-8 h-8 border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
                    5
                </span>
                <span>
                    <h3 class="font-medium leading-tight">L'opération de construction : Panneaux photovoltaïques</h3>
                </span>
            </li>
            <li class="flex items-center text-gray-500 dark:text-gray-400 space-x-2.5 rtl:space-x-reverse">
                <span class="flex items-center justify-center w-8 h-8 border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
                    6
                </span>
                <span>
                    <h3 class="font-medium leading-tight">L'opération de construction : Géothermie</h3>
                </span>
            </li>
            <li class="flex items-center text-gray-500 dark:text-gray-400 space-x-2.5 rtl:space-x-reverse">
                <span class="flex items-center justify-center w-8 h-8 border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
                    7
                </span>
                <span>
                    <h3 class="font-medium leading-tight">L'opération de construction : Etude de sol</h3>
                </span>
            </li>
            <li class="flex items-center text-gray-500 dark:text-gray-400 space-x-2.5 rtl:space-x-reverse">
                <span class="flex items-center justify-center w-8 h-8 border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
                    8
                </span>
                <span>
                    <h3 class="font-medium leading-tight">L'opération de construction : Contrôleur technique</h3>
                </span>
            </li>
            <li class="flex items-center text-gray-500 dark:text-gray-400 space-x-2.5 rtl:space-x-reverse">
                <span class="flex items-center justify-center w-8 h-8 border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
                    9
                </span>
                <span>
                    <h3 class="font-medium leading-tight">L'opération de construction : Travaux sur existants</h3>
                </span>
            </li>
            <li class="flex items-center text-gray-500 dark:text-gray-400 space-x-2.5 rtl:space-x-reverse">
                <span class="flex items-center justify-center w-8 h-8 border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
                    10
                </span>
                <span>
                    <h3 class="font-medium leading-tight">L'opération de construction : Maitrise d'oeuvre</h3>
                </span>
            </li>
            <li class="flex items-center text-gray-500 dark:text-gray-400 space-x-2.5 rtl:space-x-reverse">
                <span class="flex items-center justify-center w-8 h-8 border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
                    11
                </span>
                <span>
                    <h3 class="font-medium leading-tight">Lots techniques</h3>
                </span>
            </li>
            <li class="flex items-center text-gray-500 dark:text-gray-400 space-x-2.5 rtl:space-x-reverse">
                <span class="flex items-center justify-center w-8 h-8 border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
                    12
                </span>
                <span>
                    <h3 class="font-medium leading-tight">Garanties demandées</h3>
                </span>
            </li>
            <li class="flex items-center text-gray-500 dark:text-gray-400 space-x-2.5 rtl:space-x-reverse">
                <span class="flex items-center justify-center w-8 h-8 border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
                    13
                </span>
                <span>
                    <h3 class="font-medium leading-tight">RCD Constructeur Non Réalisateur (CNR)</h3>
                </span>
            </li>
            <li class="flex items-center text-gray-500 dark:text-gray-400 space-x-2.5 rtl:space-x-reverse">
                <span class="flex items-center justify-center w-8 h-8 border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
                    14
                </span>
                <span>
                    <h3 class="font-medium leading-tight">Assurance tous risques chantier</h3>
                </span>
            </li>
            <li class="flex items-center text-gray-500 dark:text-gray-400 space-x-2.5 rtl:space-x-reverse">
                <span class="flex items-center justify-center w-8 h-8 border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
                    15
                </span>
                <span>
                    <h3 class="font-medium leading-tight">Justificatifs à fournir</h3>
                </span>
            </li>
            <li class="flex items-center text-gray-500 dark:text-gray-400 space-x-2.5 rtl:space-x-reverse">
                <span class="flex items-center justify-center w-8 h-8 border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
                    16
                </span>
                <span>
                    <h3 class="font-medium leading-tight">Validation</h3>
                </span>
            </li>
        </ol>
    </div>
</section>



<?php
    $content = ob_get_clean();
    require("base.view.php");
    ?>