<?php

    //Customized title
    $title = "Formulaire DO-03";
    
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

<?php
    // Stepper
    require 'views/stepper.view.php';
    ?>
<script>stepColor('step3');</script>


    <!-- Collapsed form : "Nature opération : neuf ou existant"-->
<section class="myContainer">
    <span class="text-gray-500 font-medium">Nature de l'opération : &ensp;&ensp;<input type="radio" name="mo-sous" id="check-yes" onclick="radioFormClose('nat-operation')"/><label for="mo-sous-yes"> Construction neuve &ensp;</label><input type="radio" name="mo-sous" id="check-no" onclick="radioFormOpen('nat-operation')"/><label for="mo-sous-no"> Travaux sur construction existante</label></span>  
    <form id="nat-operation" class="hidden">
        <div class="grid gap-6 mb-6 md:grid-cols-2">
            <div>
                <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First name</label>
                <input type="text" id="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="John" required />
            </div>
            <div>
                <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last name</label>
                <input type="text" id="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Doe" required />
            </div>
            <div>
                <label for="company" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Company</label>
                <input type="text" id="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Flowbite" required />
            </div>  
            <div>
                <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone number</label>
                <input type="tel" id="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required />
            </div>
            <div>
                <label for="website" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Website URL</label>
                <input type="url" id="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="flowbite.com" required />
            </div>
            <div>
                <label for="visitors" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Unique visitors (per month)</label>
                <input type="number" id="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required />
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
</section>

    <!-- Collapsed form : "Type d'ouvrage"-->
<section class="myContainer mt-20">
    <fieldset class="flex flex-row mb-2">
        <legend class="mb-2 text-gray-500 font-medium">Type de l'ouvrage (cochez la ou les cases correspondantes) :</legend>
        <div class="flex flex-col ml-8">
            <div>
                <span><input type="checkbox" name="serv-pub"/> Maison individuelle</span>
            </div>
            <div>
                <span><input type="checkbox" name="hlm-pub"/> Opération pavillonnaire :</span><br />
                <span class="text-xs">(nombre de maisons : <input type="text" name="" style="height:10px; width: 30px; border-radius:6px;"/> )</span>
            </div>
            <div>
                <span><input type="checkbox" name="syndic"/> Collectif d'habitation :</span><br />
                <span class="text-xs">(nombre d'appartements : <input type="text" name="" style="height:10px; width: 30px; border-radius:6px;"/> )</span>
            </div>
            <span><input type="checkbox" name="vend-priv"/> Bâtiment à usage industriel ou agricole</span>
            <div>
                <span><input type="checkbox" name="sci"/> Centre commercial, bâtiment à usage de vente :</span><br />
                <span class="text-xs">(superficie hors oeuvre nette (SHON) : <input type="text" name="" style="height:10px; width:30px; border-radius:6px;"/> m²)</span>
            </div>
        </div>
        <div class="flex flex-col ml-8">
            <span><input type="checkbox" name="coll"/> Bâtiment à usage de bureau</span>
            <span><input type="checkbox" name="hlm-priv"/> Bâtiment d'établissement Hospitalier, de Maison de retraite, Clinique.</span>
            <span><input type="checkbox" name="vend-imm-const"/> Voirie réseaux Divers (VRD) à usage privatif d'un bâtiment</span>
            <div>
                <span><input type="checkbox" name="part"/> Autre construction :</span><br />
                <span class="text-xs">(son usage : <input type="text" name="" style="height:10px; width:200px; border-radius:6px;"/> )</span>
            </div>
        </div>
    </fieldset>
</section>


    <!-- Send button -->
<div class="myContainer text-center mt-16">
    <button type="submit" name="send-step3" value="step3" class="myContainer text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Suivant</button>
</div>


<?php
    $content = ob_get_clean();
    require("base.view.php");
    ?>