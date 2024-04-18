<?php

    //Customized title
    $title = "Formulaire DO-02";
    
    //Send form fields
    if (isset($_POST['send-step2'])) {
        foreach ($_POST as $key => $value)
        {
            $_SESSION['info-'.$_POST['fields']][$key] = $value;
        }
        $keys = array_keys($_SESSION['info-'.$_POST['fields']]);
        if (in_array('send-step2', $keys)) {
            unset($_SESSION['info-'.$_POST['fields']]['send-step2']);
        }  
        header("Location: index.php?page=step3");
    }
    
    // Filling the $content variable
    ob_start();

?>

<?php
    // Stepper
    require 'views/stepper.view.php';
?>
<script>stepColor('step2');</script>


    <!-- Collapsed form : "Maitre d'ouvrage = souscripteur ?"-->
<section class="myContainer">
    <span class="text-gray-500 font-medium">Le Maitre d'Ouvrage est-il le souscripteur ? &ensp;&ensp;<input type="radio" name="mo-sous" id="check-yes" onclick="radioFormClose('mo-form-sous')"/><label for="mo-sous-yes"> Oui &ensp;</label><input type="radio" name="mo-sous" id="check-no" onclick="radioFormOpen('mo-form-sous')"/><label for="mo-sous-no"> Non</label></span>  
    <form id="mo-form-sous" class="hidden px-8 py-4">
        <div class="mb-6 md:grid-cols-2">
            <div class="flex flex-row py-4">
                <span class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Civilité : &ensp;&ensp;
                <input type="radio" id="" name="civilite" onclick="radioFormClose('siret-field')"><label for="civilite"> Particulier &ensp;</label>
                <input type="radio" id="" name="civilite" onclick="radioFormOpen('siret-field')"><label for="civilite"> Entreprise</label></span>
            </div>
            <div class="py-4">
                <label for="mo-nom" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nom, Prénom ou Raison sociale</label>
                <input type="text" id="" name="mo-nom" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
            </div>
            <div class="py-4">
                <label for="mo-adresse" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Adresse actuelle</label>
                <input type="text" id="" nom="mo-adresse" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
            </div>  
            <div id="siret-field" class="hidden py-4">
                <label for="mo-siret" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">SIRET n°</label>
                <input type="text" id="" name="mo-siret" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
            </div>
        </div>
    </form>
</section>


    <!-- Qualité du maitre d'ouvrage -->
<section class="my-16 myContainer">
        <h3 class="mb-2 text-gray-500 font-medium">Qualité du maitre d'ouvrage (cochez la case correspondante) :</h3>
        <div class="flex flex-row mx-6 mb-2">
            <div class="flex flex-col ml-8">
                <span><input type="radio" name="mo-quality"/> Etat (services publics)</span>
                <span><input type="radio" name="mo-quality"/> Organismes d'habitations à loyer modéré (secteur public)</span>
                <span><input type="radio" name="mo-quality"/> Syndicats de copropriétaires</span>
                <span><input type="radio" name="mo-quality"/> Vendeur privé après achèvement</span>
                <span><input type="radio" name="mo-quality"/> Société Civile Immobilière</span>
                <span><input type="radio" name="mo-quality"/> Enterprise</span>
                <span><input type="radio" name="mo-quality" onclick="radioFormOpen('mo-quality-other')"/> Autre qualité</span>
                <div id="mo-quality-other" class="hidden">
                    <label for="mo-quality-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Veuillez précisez :</label>
                    <input type="text-area" id="mo-quality-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
                </div>    
            </div>
            <div class="flex flex-col ml-8">
                <span><input type="radio" name="mo-quality"/> Collectivités locales</span>
                <span><input type="radio" name="mo-quality"/> Organismes d'habitations à loyer modéré (secteur privé)</span>
                <span><input type="radio" name="mo-quality"/> Vendeur privé d'immeubles à construire</span>
                <span><input type="radio" name="mo-quality"/> Particulier</span>
                <span><input type="radio" name="mo-quality"/> Promoteur privé immobilier</span>
                <span><input type="radio" name="mo-quality"/> Association</span>
            </div>
        </div>
</section>

    <!-- Collapsed form : "Maitre d'ouvrage participe t-il à la construction ?"-->
<section class="myContainer">
    <span class="text-gray-500 font-medium">Le Maitre d'Ouvrage participe à la construction ? &ensp;&ensp;<input type="radio" name="mo-sous" id="check-yes" onclick="radioFormOpen('mo-form-const'),radioFormOpen('tableau')"/><label for="mo-sous-yes"> Oui &ensp;</label><input type="radio" name="mo-sous" id="check-no" onclick="radioFormClose('mo-form-const'),radioFormClose('tableau')"/><label for="mo-sous-no"> Non</label></span>  
    <form id="mo-form-const" class="hidden px-8 py-4">
        <div class="flex flex-row py-4">
            <div class="flex items-center">
                <svg class="w-6 h-6 text-blue-700 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11h2v5m-2 0h4m-2.592-8.5h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/></svg>
            </div>
            <p class="text-gray-900 text-sm block w-full p-4 dark:bg-gray-700 dark:border-gray-600 dark:text-white">La clause contrat n°001 des Conventions Spéciales n°811 "Intervention du maître d'ouvrage dans la conception, la direction, la surveillance ou la réalisation des travaux" est obligatoirement souscrite.</p>
        </div>
        <span class="text-black font-sm">Le Maitre d'Ouvrage est-il un professionnel de la construction ? &ensp;&ensp;<input type="radio" name="mo-pro" id="check-yes" onclick="radioFormOpen('mo-form-pro')"/><label> Oui &ensp;</label><input type="radio" name="mo-pro" id="check-no" onclick="radioFormClose('mo-form-pro')"/><label> Non</label></span>
        <form>
            <div id="mo-form-pro" class="py-4 hidden mx-6">
                <label for="mo-pro-field" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Veuillez indiquer sa profession</label>
                <input type="text" id="" name="mo-pro-field" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
            </div>
        </form>
        <table id="tableau" class="hidden text-sm font-light border border-1 border-gray-300">
            <caption>Complétez le tableau ci-dessous en cochant les cases correspondantes :</caption>
            <tr>
                <td>Activité ou mission exercée</td>
                <td>
                    <table>
                        <tr>Nature des travaux</tr>
                        <tr>
                            <td>Papiers peints et/ou Peintures intérieures</td>
                            <td>Gros oeuvre fondations, Charpente - Couverture, Etancdéité</td>
                            <td>Autres travaux</td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td><input type="checkbox"/><label>Conception</label></td>
                <td><input type="checkbox"/></td>
                <td><input type="checkbox"/></td>
                <td><input type="checkbox"/></td>
            </tr>
            <tr>
                <td><input type="checkbox"/><label>Direction</label></td>
                <td><input type="checkbox"/></td>
                <td><input type="checkbox"/></td>
                <td><input type="checkbox"/></td>
            </tr>
            <tr>
                <td><input type="checkbox"/><label>Surveillance</label></td>
                <td><input type="checkbox"/></td>
                <td><input type="checkbox"/></td>
                <td><input type="checkbox"/></td>
            </tr>
            <tr>
                <td><input type="checkbox"/><label>Exécution</label></td>
                <td><input type="checkbox"/></td>
                <td><input type="checkbox"/></td>
                <td><input type="checkbox"/></td>
            </tr>
        </table>
    </form>
</section>

    <!-- Send button -->
<div class="myContainer text-center mt-16">
    <button type="submit" name="send-step2" value="step2" class="myContainer text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Suivant</button>
</div>

<?php
    $content = ob_get_clean();
    require("base.view.php");
    ?>