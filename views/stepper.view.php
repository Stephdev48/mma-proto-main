<?php
    $home='';
    $currentstep1 = "text-gray-500 dark:text-gray-400";
    $currentstep1circle = "border-gray-500 dark:border-gray-400";
    $currentstep2 = $currentstep1;
    $currentstep2circle = $currentstep1circle;
    $currentstep3 = $currentstep1;
    $currentstep3circle = $currentstep1circle;
    $currentstep4 = $currentstep1;
    $currentstep4circle = $currentstep1circle;
    $currentstep4bis = $currentstep1;
    $currentstep4biscircle = $currentstep1circle;
    $currentstep5 = $currentstep1;
    $currentstep5circle = $currentstep1circle;
    $currentstep7 = $currentstep1;
    $currentstep7circle = $currentstep1circle;
    $validation = $currentstep1;
    $validationcircle = $currentstep1circle;
    $currentstep8 =  $currentstep1;
    $currentstep8circle =  $currentstep1circle;

    switch ($currentstep){
        case'home':
            $home = 'hidden';
            break;
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
        case'step4bis':
            $currentstep4bis = "text-blue-600 dark:text-blue-500 font-bold";
            $currentstep4biscircle = "border-blue-600 border-2";
            break;
        case'step5':
            $currentstep5 = "text-blue-600 dark:text-blue-500 font-bold";
            $currentstep5circle = "border-blue-600 border-2";
            break;
        case'step7':
            $currentstep7 = "text-blue-600 dark:text-blue-500 font-bold";
            $currentstep7circle = "border-blue-600 border-2";
            break;
        case 'validation':
            $validation = "text-blue-600 dark:text-blue-500 font-bold";
            $validationcircle = "border-blue-600 border-2";
            break;
        default:
            throw new Exception ('Paramètre invalide !');
            break;
    }

    // if($_SESSION["info-situation"]['situation-construction-bois']=="oui"
    // || $_SESSION["info-situation"]['situation-pann-photo'] =="oui" 
    // || $_SESSION["info-situation"]['situation-geothermie'] =="oui" 
    // || $_SESSION["info-situation"]['situation-controle-tech'] =="oui") {
    //     showElement('step4bis');
    // }else{
    //     hideElement('step4bis');
    // }

    if(DEBUG==true){
        echo '<section id="stepper" class="flex justify-center mb-24 m-8 '.$home.'">
                <div class="flex justify-center mt-16">   
                    <ol class="flex flex-wrap items-center w-full space-y-4 sm:flex sm:space-x-8 sm:space-y-0">
                        <li id="step1" class="flex items-center space-x-2.5 '.$currentstep1.'">
                            <a href="index.php?page=step1" class="flex flex-row">
                                <span id="step1-circle" class="flex items-center justify-center w-8 h-8 border rounded-full shrink-0 '.$currentstep1circle.'">
                                    1
                                </span>
                                <span>
                                    <h3 class="ml-2">Coordonnées souscripteur</h3>
                                </span>
                            </a>
                        </li>
                        <li id="step2" class="flex items-center space-x-2.5 '.$currentstep2.'">
                            <a href="index.php?page=step2" class="flex flex-row">
                                <span id="step2-circle" class="flex items-center justify-center w-8 h-8 border rounded-full shrink-0 '.$currentstep2circle.'">
                                    2
                                </span>
                                <span>
                                    <h3 class="ml-2">Le Maitre d\'Ouvrage</h3>
                                </span>
                            </a>
                        </li>
                        <li id="step3" class="flex items-center space-x-2.5 '.$currentstep3.'">
                            <a href="index.php?page=step3" class="flex flex-row">
                                <span id="step3-circle" class="flex items-center justify-center w-8 h-8 border rounded-full shrink-0 '.$currentstep3circle.'">
                                    3
                                </span>
                                <span>
                                    <h3 class="ml-2">L\'opération de construction</h3>
                                    <p id="step3-p" class="text-xs font-normal ml-2 $currentstep3">Nature et type de l\'ouvrage</p>
                                </span>
                            </a>
                        </li>
                        <li id="step4" class="flex items-center space-x-2.5 '.$currentstep4.'">
                            <a href="index.php?page=step4" class="flex flex-row">
                                <span id="step4-circle" class="flex items-center justify-center w-8 h-8 border rounded-full shrink-0 '.$currentstep4circle.'">
                                    4
                                </span>
                                <span>
                                    <h3 class="ml-2">L\'opération de construction</h3>
                                    <p id="step4-p" class="text-xs font-normal ml-2 $currentstep4">Situation de l\'ouvrage et Travaux annexes</p>
                                </span>
                            </a>
                        </li>
                        <li id="step4bis" class="hidden flex items-center space-x-2.5 '.$currentstep4bis.'">
                            <a href="index.php?page=step4bis" class="flex flex-row">
                                <span id="step5-circle" class="flex items-center justify-center w-8 h-8 border rounded-full shrink-0 '.$currentstep4biscircle.'">
                                    4b
                                </span>
                                <span>
                                    <h3 class="ml-2">L\'opération de construction</h3>
                                    <p id="step4bis-p" class="text-xs font-normal ml-2 $currentstep4bis">Travaux annexes</p>
                                </span>
                            </a>
                        </li>
                        <li id="step5" class="flex items-center space-x-2.5 '.$currentstep5.'">
                            <a href="index.php?page=step5" class="flex flex-row">
                                <span id="step5-circle" class="flex items-center justify-center w-8 h-8 border rounded-full shrink-0 '.$currentstep5circle.'">
                                    5
                                </span>
                                <span>
                                    <h3 class="ml-2">Maîtrise d\'oeuvre</h3>
                                </span>
                            </a>
                        </li>
                        <li id="step6" class="flex items-center space-x-2.5 '.$validation.'">
                            <a href="index.php?page=validation" class="flex flex-row">
                                <span id="step6-circle" class="flex items-center justify-center w-8 h-8 border rounded-full shrink-0 '.$validationcircle.'">
                                    6
                                </span>
                                <span>
                                    <h3 class="ml-2">A définir</h3>
                                </span>
                            </a>
                        </li>
                        <li id="step7" class="flex items-center space-x-2.7 '.$currentstep7.'">
                            <a href="index.php?page=step7" class="flex flex-row">
                                <span id="step7-circle" class="flex items-center justify-center w-8 h-8 border rounded-full shrink-0 '.$currentstep7circle.'">
                                    7
                                </span>
                                <span>
                                    <h3 class="ml-2">CNR et Risques chantier</h3>
                                </span>
                            </a>
                        </li>
                    </ol>
                </div>
            </section>';
    }else{
       echo '<section id="stepper" class="flex justify-center mb-24 m-8 '.$home.'">
       <div class="flex justify-center mt-16">   
           <ol class="flex flex-wrap items-center w-full space-y-4 sm:flex sm:space-x-8 sm:space-y-0">
               <li id="step1" class="flex items-center space-x-2.5 '.$currentstep1.'">
                       <span id="step1-circle" class="flex items-center justify-center w-8 h-8 border rounded-full shrink-0 '.$currentstep1circle.'">
                           1
                       </span>
                       <span>
                           <h3 class="ml-2">Coordonnées souscripteur</h3>
                       </span>
               </li>
               <li id="step2" class="flex items-center space-x-2.5 '.$currentstep2.'">
                       <span id="step2-circle" class="flex items-center justify-center w-8 h-8 border rounded-full shrink-0 '.$currentstep2circle.'">
                           2
                       </span>
                       <span>
                           <h3 class="ml-2">Le Maitre d\'Ouvrage</h3>
                       </span>
               </li>
               <li id="step3" class="flex items-center space-x-2.5 '.$currentstep3.'">
                       <span id="step3-circle" class="flex items-center justify-center w-8 h-8 border rounded-full shrink-0 '.$currentstep3circle.'">
                           3
                       </span>
                       <span>
                           <h3 class="ml-2">L\'opération de construction</h3>
                           <p id="step3-p" class="text-xs font-normal ml-2 $currentstep3">Nature et type de l\'ouvrage</p>
                       </span>
               </li>
               <li id="step4" class="flex items-center space-x-2.5 '.$currentstep4.'">
                       <span id="step4-circle" class="flex items-center justify-center w-8 h-8 border rounded-full shrink-0 '.$currentstep4circle.'">
                           4
                       </span>
                       <span>
                           <h3 class="ml-2">L\'opération de construction</h3>
                           <p id="step4-p" class="text-xs font-normal ml-2 $currentstep4">Situation de l\'ouvrage et Travaux annexes</p>
                       </span>
               </li>
               <li id="step4bis" class=" hidden flex items-center space-x-2.5 '.$currentstep4bis.'">
                       <span id="step5-circle" class="flex items-center justify-center w-8 h-8 border rounded-full shrink-0 '.$currentstep4biscircle.'">
                           4b
                       </span>
                       <span>
                           <h3 class="ml-2">L\'opération de construction</h3>
                           <p id="step4bis-p" class="text-xs font-normal ml-2 $currentstep4bis">Travaux annexes</p>
                       </span>
               </li>
               <li id="step5" class="flex items-center space-x-2.5 '.$currentstep5.'">
                       <span id="step5-circle" class="flex items-center justify-center w-8 h-8 border rounded-full shrink-0 '.$currentstep5circle.'">
                           5
                       </span>
                       <span>
                           <h3 class="ml-2">Maîtrise d\'oeuvre</h3>
                       </span>
               </li>
               <li id="step6" class="flex items-center space-x-2.5 '.$validation.'">
                       <span id="step6-circle" class="flex items-center justify-center w-8 h-8 border rounded-full shrink-0 '.$validationcircle.'">
                           6
                       </span>
                       <span>
                           <h3 class="ml-2">A définir</h3>
                       </span>
               </li>
               <li id="step7" class="flex items-center space-x-2.7 '.$currentstep7.'">
                                <span id="step7-circle" class="flex items-center justify-center w-8 h-8 border rounded-full shrink-0 '.$currentstep7circle.'">
                                    7
                                </span>
                                <span>
                                    <h3 class="ml-2">CNR et Risques chantier</h3>
                                </span>
                        </li>
           </ol>
       </div>
   </section>';
    }