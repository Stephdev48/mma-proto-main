<?php

    $currentstep1 = "text-gray-500 dark:text-gray-400";
    $currentstep1circle = "border-gray-500 dark:border-gray-400";
    $currentstep2 = "text-gray-500 dark:text-gray-400";
    $currentstep2circle = "border-gray-500 dark:border-gray-400";
    $currentstep3 = "text-gray-500 dark:text-gray-400";
    $currentstep3circle = "border-gray-500 dark:border-gray-400";
    $currentstep4 = "text-gray-500 dark:text-gray-400";
    $currentstep4circle = "border-gray-500 dark:border-gray-400";
    $currentstep5 = "text-gray-500 dark:text-gray-500";
    $currentstep5circle = "border-gray-500 dark:border-gray-400";
    $validation = "text-gray-500 dark:text-gray-500";
    $validationcircle = "border-gray-500 dark:border-gray-400";

    switch ($currentstep){
        case'step1':
            $currentstep1 = "text-blue-600 dark:text-blue-500 font-bold";
            $currentstep1circle = "border-blue-600 border-2";
            break;
        case'step2':
            $currentstep2 = "text-blue-600 dark:text-blue-500 font-bold";
            $currentstep2circle = "border-blue-600 border-2";
            break;
        case'step3':
            $currentstep3 = "text-blue-600 dark:text-blue-500 font-bold";
            $currentstep3circle = "border-blue-600 border-2";
            break;
        case'step4':
            $currentstep4 = "text-blue-600 dark:text-blue-500 font-bold";
            $currentstep4circle = "border-blue-600 border-2";
            break;
        case'step5':
            $currentstep5 = "text-blue-600 dark:text-blue-500 font-bold";
            $currentstep5circle = "border-blue-600 border-2";
            break;
        case 'validation':
            $validation = "text-blue-600 dark:text-blue-500 font-bold";
            $validationcircle = "border-blue-600 border-2";
        default:
            throw new Exception ('Paramètre invalide !');
            break;
    }
?>


<section id="stepper" class="flex justify-center mb-24 m-8">
    <div class="flex justify-center mt-16">   
        <ol class="flex flex-wrap items-center w-full space-y-4 sm:flex sm:space-x-8 sm:space-y-0">
            <li id="step1" class="flex items-center space-x-2.5 <?= $currentstep1 ?>">
                <a href="index.php?page=step1" class="flex flex-row">
                    <span id="step1-circle" class="flex items-center justify-center w-8 h-8 border rounded-full shrink-0 <?= $currentstep1circle ?>">
                        1
                    </span>
                    <span>
                        <h3 class="ml-2">Coordonnées souscripteur</h3>
                    </span>
                </a>
            </li>
            <li id="step2" class="flex items-center space-x-2.5 <?= $currentstep2 ?>">
                <a href="index.php?page=step2" class="flex flex-row">
                    <span id="step2-circle" class="flex items-center justify-center w-8 h-8 border rounded-full shrink-0 <?= $currentstep2circle ?>">
                        2
                    </span>
                    <span>
                        <h3 class="ml-2">Le Maitre d'Ouvrage</h3>
                    </span>
                </a>
            </li>
            <li id="step3" class="flex items-center space-x-2.5 <?= $currentstep3 ?>">
                <a href="index.php?page=step3" class="flex flex-row">
                    <span id="step3-circle" class="flex items-center justify-center w-8 h-8 border rounded-full shrink-0 <?= $currentstep3circle ?>">
                        3
                    </span>
                    <span>
                        <h3 class="ml-2">L'opération de construction</h3>
                        <p id="step3-p" class="text-xs text-gray-500 font-normal ml-2">Nature et type de l'ouvrage</p>
                    </span>
                </a>
            </li>
            <li id="step4" class="flex items-center space-x-2.5 <?= $currentstep4 ?>">
                <a href="index.php?page=step4" class="flex flex-row">
                    <span id="step4-circle" class="flex items-center justify-center w-8 h-8 border rounded-full shrink-0 <?= $currentstep4circle ?>">
                        4
                    </span>
                    <span>
                        <h3 class="ml-2">L'opération de construction</h3>
                        <p id="step4-p" class="text-xs text-gray-500 font-normal ml-2">Informations générales</p>
                    </span>
                </a>
            </li>
            <li id="step5" class="flex items-center space-x-2.5 <?= $currentstep5 ?>">
                <a href="index.php?page=step5" class="flex flex-row">
                    <span id="step5-circle" class="flex items-center justify-center w-8 h-8 border rounded-full shrink-0 <?= $currentstep5circle ?>">
                        5
                    </span>
                    <span>
                        <h3 class="ml-2">L'opération de construction</h3>
                    </span>
                </a>
            </li>
            <li id="step6" class="flex items-center space-x-2.5 <?= $validation ?>">
                <a href="index.php?page=validation" class="flex flex-row">
                    <span id="step6-circle" class="flex items-center justify-center w-8 h-8 border rounded-full shrink-0 <?= $validationcircle ?>">
                        6
                    </span>
                    <span>
                        <h3 class="ml-2">Validation</h3>
                    </span>
                </a>
            </li>
        </ol>
    </div>
</section>