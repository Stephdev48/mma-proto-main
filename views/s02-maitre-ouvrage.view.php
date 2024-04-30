<section class="">
    <form action="" method="post">
        <!-- Formulaire caché : "Maitre d'ouvrage est-il le souscripteur ?"-->
        <div>
            <div class="flex flex-col lg:flex-row text-gray-500 font-medium">
                <span>Le Maitre d'Ouvrage est-il le souscripteur ? &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;</span>
                <div class="ml-8">
                    <input type="radio" name="moa-souscripteur" value="oui" onclick="hideElement('moa-souscripteur-form')"/>
                    <label> Oui &ensp;</label>
                    <input type="radio" name="moa-souscripteur" value="non" onclick="showElement('moa-souscripteur-form')"/>
                    <label> Non</label>
                </div>
            </div>  
            <div id="moa-souscripteur-form" class="hidden px-8 py-4">
                <div class="mb-6 md:grid-cols-2">
                    <div class="flex flex-row py-4">
                        <span class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Civilité : &ensp;&ensp;
                        <input type="radio" name="moa-souscripteur-form-civilite" value="particulier" checked onclick="hideElement('siret-champ'),hideElement('raison-champ')">
                        <label>&ensp; Particulier &ensp;&ensp;</label>
                        <input type="radio" name="moa-souscripteur-form-civilite" value="entreprise" onclick="showElement('siret-champ'),showElement('raison-champ')">
                        <label>&ensp; Entreprise</label></span>
                    </div>
                    <div class="py-4">
                        <label for="moa-souscripteur-form-nom-prenom" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nom, Prénom</label>
                        <input type="text" name="moa-souscripteur-form-nom-prenom" value="<?= isset($_SESSION['info-moa']['moa-souscripteur-form-nom-prenom']) ? $_SESSION['info-moa']['moa-souscripteur-form-nom-prenom'] : ''?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
                    </div>
                    <div class="py-4">
                        <label for="moa-souscripteur-form-adresse" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Adresse actuelle</label>
                        <input type="text" name="moa-souscripteur-form-adresse" value="<?= isset($_SESSION['info-moa']['moa-souscripteur-form-adresse']) ? $_SESSION['info-moa']['moa-souscripteur-form-adresse'] : ''?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
                    </div>
                    <div id="raison-champ" class="hidden py-4">
                        <label for="moa-souscripteur-form-raison-sociale" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Raison sociale</label>
                        <input type="text" name="moa-souscripteur-form-raison-sociale" value="<?= isset($_SESSION['info-moa']['moa-souscripteur-form-raison-sociale']) ? $_SESSION['info-moa']['moa-souscripteur-form-raison-sociale'] : ''?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
                    </div>
                    <div id="siret-champ" class="hidden py-4">
                        <label for="moa-souscripteur-form-siret" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">SIRET n°</label>
                        <input type="text" name="moa-souscripteur-form-siret" value="<?= isset($_SESSION['info-moa']['moa-souscripteur-form-siret']) ? $_SESSION['info-moa']['moa-souscripteur-form-siret'] : ''?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                    </div>
                </div>
            </div>
        </div>


        <!-- Qualité du maitre d'ouvrage -->
        <div class="my-16">
            <h3 class="mb-2 text-gray-500 font-medium">Qualité du maitre d'ouvrage (choisissez l'option correspondante) :</h3>
            <div class="flex flex-col lg:flex-row mx-6 mb-2">
                <div class="flex flex-col ml-8">
                    <span><input type="radio" name="moa-qualite" value="etat"/> Etat (services publics)</span>
                    <span><input type="radio" name="moa-qualite" value="hlm-public"/> Organismes d'habitations à loyer modéré (secteur public)</span>
                    <span><input type="radio" name="moa-qualite" value="syndic"/> Syndicats de copropriétaires</span>
                    <span><input type="radio" name="moa-qualite" value="vendeur-prive"/> Vendeur privé après achèvement</span>
                    <span><input type="radio" name="moa-qualite" value="sci"/> Société Civile Immobilière</span>
                    <span><input type="radio" name="moa-qualite" value="entreprise"/> Enterprise</span>
                    <span><input type="radio" name="moa-qualite" value="moa-qualite-autre" id="moa-qualite-autre-radio" onclick="buttonActivate('moa-qualite-autre', 'moa-qualite-autre-radio')"/> Autre qualité</span>
                    <div id="moa-qualite-autre" class="hidden mt-2">
                        <label for="moa-qualite-champ" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Veuillez précisez :</label>
                        <input type="text" name="moa-qualite-champ" value="<?= isset($_SESSION['info-moa']['moa-qualite-champ']) ? $_SESSION['info-moa']['moa-qualite-champ'] : ''?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
                    </div>    
                </div>
                <div class="flex flex-col ml-8">
                    <span><input type="radio" name="moa-qualite" value="collectivites"/> Collectivités locales</span>
                    <span><input type="radio" name="moa-qualite" value="hlm-prive"/> Organismes d'habitations à loyer modéré (secteur privé)</span>
                    <span><input type="radio" name="moa-qualite" value="vendeur-prive-imm"/> Vendeur privé d'immeubles à construire</span>
                    <span><input type="radio" name="moa-qualite" value="particulier"/> Particulier</span>
                    <span><input type="radio" name="moa-qualite" value="prom-prive"/> Promoteur privé immobilier</span>
                    <span><input type="radio" name="moa-qualite" value="asso"/> Association</span>
                </div>
            </div>
        </div>


        <!-- Formulaire caché : "Maitre d'ouvrage participe t-il à la construction ?"-->
        <div>
            <div class="flex flex-col lg:flex-row text-gray-500 font-medium">
                <span>Le Maitre d'Ouvrage participe à la construction ? &ensp;&ensp;</span>
                <div class="ml-8">
                    <input type="radio" name="moa-construction" value="oui" onclick="showElement('moa-construction-form'),showElement('tableau')"/>
                    <label> Oui &ensp;</label>
                    <input type="radio" name="moa-construction" value="non" onclick="hideElement('moa-construction-form'),hideElement('tableau')"/>
                    <label> Non</label>
                </div>
            </div>
            <div id="moa-construction-form" class="hidden py-4">
                <div class="flex flex-row p-2 mb-6">
                    <div class="flex items-center">
                        <svg class="w-6 h-6 text-blue-700 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11h2v5m-2 0h4m-2.592-8.5h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/></svg>
                    </div>
                    <p class="text-gray-900 text-sm block w-full p-4 dark:bg-gray-700 dark:border-gray-600 dark:text-white">La clause contrat n°001 des Conventions Spéciales n°811 "Intervention du maître d'ouvrage dans la conception, la direction, la surveillance ou la réalisation des travaux" est obligatoirement souscrite.</p>
                </div>
                <div class="mb-6">
                    <div>
                        <span class="text-gray-500 font-medium">Le Maitre d'Ouvrage est-il un professionnel de la construction ? &ensp;&ensp; </span>
                        <div> <!-- Infobulle -->
                            <button data-popover-target="popover-description" data-popover-placement="bottom-end" type="button" class="mr-8"><svg class="w-4 h-4 ms-2 text-gray-400 hover:text-gray-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg><span class="sr-only">Show information</span></button>
                            <div data-popover id="popover-description" role="tooltip" class="absolute z-10 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-72 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-400">
                                <div class="p-3 space-y-2">
                                    <h3 class="font-semibold text-gray-900 dark:text-white">Conditions d'acceptation : </h3>
                                    <p>Si le maître d'ouvrage n'a pas la qualité de professionnel de la construction, seuls les travaux de papiers peints et/ou de peintures intérieures sont acceptés sans cotisation supplémentaire avec souscription de la CC 001. S'il intervient sur d'autres travaux, l'affaire doit être refusée.<br><br>Si le maître d'ouvrage a la qualité de professionnel de la construction, les travaux de papiers peints et/ou de peintures intérieures sont acceptés sans cotisation supplémentaire avec souscription de la CC 001. S'il intervient sur d'autres travaux, consulter votre interlocuteur société.</p>
                                </div>
                            </div>
                        </div>
                        <input type="radio" name="moa-construction-pro" value="oui" onclick="showElement('moa-construction-pro-form')"/>
                        <label class="text-gray-500 font-medium"> Oui &ensp;</label>
                        <input type="radio" name="moa-construction-pro" value="non" onclick="hideElement('moa-construction-pro-form')"/>
                        <label class="text-gray-500 font-medium"> Non</label>
                    </div>
                    <div id="moa-construction-pro-form" class="py-4 hidden mx-6">
                        <label for="moa-construction-pro-champ" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Veuillez indiquer sa profession :</label>
                        <input type="text" name="moa-construction-pro-champ" value="<?= isset($_SESSION['info-moa']['"moa-construction-pro-champ']) ? $_SESSION['info-moa']['"moa-construction-pro-champ'] : ''?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
                    </div>
                </div>
                <div id="tableau" class="hidden mt-10">
                    <span class="text-gray-500 font-medium">Complétez le tableau ci-dessous en cochant les cases correspondantes :</span>
                    <table class="text-sm font-light ml-6 mt-2">
                        <tr>
                            <td></td>
                            <td class="bg-gray-50 border-t-2 border-b-2 border-l-2 border-gray-300 p-2"></td>
                            <td class="bg-gray-50 border-t-2 border-b-2 border-gray-300 p-2">Nature des travaux</td>
                            <td class="bg-gray-50 border-t-2 border-b-2 border-r-2 border-gray-300 p-2"></td>
                        </tr>
                        <tr class="bg-gray-50 border-b-2 border-l-2 border-r-2 border-gray-300">
                            <td class="border-t-2 border-r-2 border-gray-300 text-center">Activité ou mission exercée</td>
                            <td class="border-r-2 border-gray-300 text-center">Papiers peints<br>et/ou Peintures intérieures</td>
                            <td class="border-r-2 border-gray-300 text-center">Gros oeuvre fondations,<br>Charpente - Couverture, Etanchéité</td>
                            <td>Autres travaux</td>
                        </tr>
                        <tr>
                            <td class="border-r-2 border-l-2 border-b border-gray-300 p-2 pl-4">
                                <input type="checkbox" name="moa-tab-conception"/>
                                <label>&ensp; Conception</label>
                            </td>
                            <td class="border-r-2 border-b border-gray-300 text-center p-2">
                                <input type="checkbox" name="moa-tab-conception-1"/></td>
                            <td class="border-r-2 border-b border-gray-300 text-center p-2">
                                <input type="checkbox" name="moa-tab-conception-2"/></td>
                            <td class="border-r-2 border-b border-gray-300 text-center p-2">
                                <input type="checkbox" name="moa-tab-conception-3"/></td>
                        </tr>
                        <tr>
                            <td class="border-r-2 border-b border-l-2 border-gray-300 p-2 pl-4">
                                <input type="checkbox" name="moa-direction"/>
                                <label>&ensp; Direction</label>
                            </td>
                            <td class="border-r-2 border-b border-gray-300 text-center p-2">
                                <input type="checkbox" name="moa-direction-1"/>
                            </td>
                            <td class="border-r-2 border-b border-gray-300 text-center p-2">
                                <input type="checkbox" name="moa-direction-2"/>
                            </td>
                            <td class="border-r-2 border-b border-gray-300 text-center p-2">
                                <input type="checkbox" name="moa-direction-3"/>
                            </td>
                        </tr>
                        <tr>
                            <td class="border-r-2 border-b border-l-2 border-gray-300 p-2 pl-4">
                                <input type="checkbox" name="moa-surveillance"/>
                                <label>&ensp; Surveillance</label>
                            </td>
                            <td class="border-r-2 border-b border-gray-300 text-center p-2">
                                <input type="checkbox" name="moa-surveillance-1"/>
                            </td>
                            <td class="border-r-2 border-b border-gray-300 text-center p-2">
                                <input type="checkbox" name="moa-surveillance-2"/>
                            </td>
                            <td class="border-r-2 border-b border-gray-300 text-center p-2">
                                <input type="checkbox" name="moa-surveillance-3"/>
                            </td>
                        </tr>
                        <tr>
                            <td class="border-r-2 border-l-2 border-b-2 border-gray-300 p-2 pl-4">
                                <input type="checkbox" name="moa-execution"/>
                                <label>&ensp; Exécution</label>
                            </td>
                            <td class="border-b-2 border-r-2 border-gray-300 text-center p-2">
                                <input type="checkbox" name="moa-execution-1"/>
                            </td>
                            <td class="border-b-2 border-r-2 border-gray-300 text-center p-2">
                                <input type="checkbox" name="moa-execution-2"/>
                            </td>
                            <td class="border-b-2 border-r-2 border-gray-300 text-center p-2">
                                <input type="checkbox" name="moa-execution-3"/>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <div class="flex flex-row justify-center mt-16">
            <!-- Bouton précédent -->                                          
            <div class="flex space-y-4 justify-center sm:space-y-0 mr-6">
                <a href="index.php?page=step1" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-32 px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Précédent
                </a>
            </div>
            <!-- Bouton suivant -->
            <div class="text-center ml-6">
                <button type="submit" name="send-step2" value="step2" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-32 px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Suivant</button>
            </div>
        </div>

        <input type="hidden" name="fields" value="moa">
    </form>
</section>

