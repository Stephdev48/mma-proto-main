<?php

    //Customized title
    $title = "Formulaire DO-3";
    
    //Send form fields
    if (isset($_POST['send-step3'])) {
        foreach ($_POST as $key => $value)
        {
            $_SESSION['info-'.$_POST['fields']][$key] = $value;
        }
        $keys = array_keys($_SESSION['info-'.$_POST['fields']]);
        if (in_array('send-step3', $keys)) {
            unset($_SESSION['info-'.$_POST['fields']]['send-step3']);
        }  
        header("Location: index.php?page=step4");
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
            <li class="flex items-center text-blue-600 dark:text-blue-500 space-x-2.5 rtl:space-x-reverse">
                <span class="flex items-center justify-center w-8 h-8 border border-blue-600 rounded-full shrink-0 dark:border-blue-500">
                    3
                </span>
                <span>
                    <h3 class="font-medium leading-tight">L'opération de construction : Description</h3>
                </span>
            </li>
            <li class="flex items-center text-gray-500 dark:text-gray-400 space-x-2.5 rtl:space-x-reverse">
                <span class="flex items-center justify-center w-8 h-8 border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
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

    <!-- Collapsed form : "Nature opération : neuf ou existant"-->
<section class="myContainer">
    <div id="accordion-collapse" data-accordion="collapse">
        <h2 id="accordion-collapse-heading-nature">
            <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-gray-500 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-collapse-body-nature" aria-expanded="false" aria-controls="accordion-collapse-body-nature">
                <span class="ml-6">Nature de l'opération : <input type="checkbox" name="mo-sous"/><label for="mo-sous"> Construction neuve </label><input type="checkbox" name=""/><label for="mo-sous"> Travaux sur une construction existante</label></span>
                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                </svg>
            </button>
        </h2>
        <div id="accordion-collapse-body-nature" class="hidden" aria-labelledby="accordion-collapse-heading-nature">    
            <form>
                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <div>
                        <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First name</label>
                        <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="John" required />
                    </div>
                    <div>
                        <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last name</label>
                        <input type="text" id="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Doe" required />
                    </div>
                    <div>
                        <label for="company" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Company</label>
                        <input type="text" id="company" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Flowbite" required />
                    </div>  
                    <div>
                        <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone number</label>
                        <input type="tel" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required />
                    </div>
                    <div>
                        <label for="website" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Website URL</label>
                        <input type="url" id="website" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="flowbite.com" required />
                    </div>
                    <div>
                        <label for="visitors" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Unique visitors (per month)</label>
                        <input type="number" id="visitors" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required />
                    </div>
                </div>
                <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email address</label>
                    <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="john.doe@company.com" required />
                </div> 
                <div class="mb-6">
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                    <input type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="•••••••••" required />
                </div> 
                <div class="mb-6">
                    <label for="confirm_password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm password</label>
                    <input type="password" id="confirm_password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="•••••••••" required />
                </div> 
            </form>
        </div>
    </div>
</section>

    <!-- Collapsed form : "Type d'ouvrage"-->
<section class="myContainer">
    <fieldset class="flex flex-row mx-10 mb-2">
        <legend class="mb-2 text-gray-500 font-medium">Type de l'ouvrage (cochez la ou les cases correspondantes) :</legend>
        <div class="flex flex-col ml-8">
            <span><input type="checkbox" name="serv-pub"/> Maison individuelle</span>
            <span><input type="checkbox" name="hlm-pub"/> Opération pavillonnaire</span>
            <span><input type="checkbox" name="syndic"/> Collectif d'habitation</span>
            <span><input type="checkbox" name="vend-priv"/> Bâtiment à usage industriel ou agricole</span>
            <span><input type="checkbox" name="sci"/> Centre commercial, bâtiment à usage de vente</span>
        </div>
        <div class="flex flex-col ml-8">
            <span><input type="checkbox" name="coll"/> Bâtiment à usage de bureau</span>
            <span><input type="checkbox" name="hlm-priv"/> Bâtiment d'établissement Hospitalier, de Maison de retraite, Clinique.</span>
            <span><input type="checkbox" name="vend-imm-const"/> Voirie réseaux Divers (VRD) à usage privatif d'un bâtiment</span>
            <span><input type="checkbox" name="part"/> Autre construction</span>
        </div>
    </fieldset>
</section>


<?php
    $content = ob_get_clean();
    require("base.view.php");
    ?>