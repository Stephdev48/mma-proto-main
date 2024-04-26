<section class="">
    <form action="" method="post">
        <!-- Formulaire caché : "Maitre d'ouvrage est-il le souscripteur ?"-->
        <div>
            <div class="flex flex-col lg:flex-row text-gray-500 font-medium">
                <span>Le Maitre d'Ouvrage est-il le souscripteur ? &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;</span>
                <div class="ml-8">
                    <input type="radio" name="moa-sous-yes" value="oui" onclick="radioFormClose('moa-sous-form')"/>
                    <label> Oui &ensp;</label>
                    <input type="radio" name="moa-sous-no" value="non" onclick="radioFormOpen('moa-sous-form')"/>
                    <label> Non</label>
                </div>
            </div>  
            <div id="moa-sous-form" class="hidden px-8 py-4">
                <div class="mb-6 md:grid-cols-2">
                    <div class="flex flex-row py-4">
                        <span class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Civilité : &ensp;&ensp;
                        <input type="radio" name="civilite-particulier" value="particulier" checked onclick="radioFormClose('siret-champ'),radioFormClose('raison-champ')">
                        <label>&ensp; Particulier &ensp;&ensp;</label>
                        <input type="radio" name="civilite-entreprise" value="entreprise" onclick="radioFormOpen('siret-champ'),radioFormOpen('raison-champ')">
                        <label>&ensp; Entreprise</label></span>
                    </div>
                    <div class="py-4">
                        <label for="moa-nom-prenom" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nom, Prénom</label>
                        <input type="text" name="moa-nom-prenom" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
                    </div>
                    <div class="py-4">
                        <label for="moa-adresse" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Adresse actuelle</label>
                        <input type="text" nom="moa-adresse" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
                    </div>
                    <div id="raison-champ" class="hidden py-4">
                        <label for="moa-raison-sociale" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Raison sociale</label>
                        <input type="text" name="moa-raison-sociale" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
                    </div>
                    <div id="siret-champ" class="hidden py-4">
                        <label for="moa-siret" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">SIRET n°</label>
                        <input type="text" name="moa-siret" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                    </div>
                </div>
            </div>
        </div>


        <!-- Qualité du maitre d'ouvrage -->
        <div class="my-16">
            <h3 class="mb-2 text-gray-500 font-medium">Qualité du maitre d'ouvrage (choisissez l'option correspondante) :</h3>
            <div class="flex flex-col lg:flex-row mx-6 mb-2">
                <div class="flex flex-col ml-8">
                    <span><input type="radio" name="moa-qualite"/> Etat (services publics)</span>
                    <span><input type="radio" name="moa-qualite"/> Organismes d'habitations à loyer modéré (secteur public)</span>
                    <span><input type="radio" name="moa-qualite"/> Syndicats de copropriétaires</span>
                    <span><input type="radio" name="moa-qualite"/> Vendeur privé après achèvement</span>
                    <span><input type="radio" name="moa-qualite"/> Société Civile Immobilière</span>
                    <span><input type="radio" name="moa-qualite"/> Enterprise</span>
                    <span><input type="radio" name="moa-qualite" onclick="radioFormOpen('moa-qualite-autre')"/> Autre qualité</span>
                    <div id="moa-qualite-autre" class="hidden mt-2">
                        <label for="moa-qualite-champ" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Veuillez précisez :</label>
                        <input type="text" id="moa-qualite-champ" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
                    </div>    
                </div>
                <div class="flex flex-col ml-8">
                    <span><input type="radio" name="moa-qualite"/> Collectivités locales</span>
                    <span><input type="radio" name="moa-qualite"/> Organismes d'habitations à loyer modéré (secteur privé)</span>
                    <span><input type="radio" name="moa-qualite"/> Vendeur privé d'immeubles à construire</span>
                    <span><input type="radio" name="moa-qualite"/> Particulier</span>
                    <span><input type="radio" name="moa-qualite"/> Promoteur privé immobilier</span>
                    <span><input type="radio" name="moa-qualite"/> Association</span>
                </div>
            </div>
        </div>


        <!-- Formulaire caché : "Maitre d'ouvrage participe t-il à la construction ?"-->
        <div>
            <div class="flex flex-col lg:flex-row text-gray-500 font-medium">
                <span>Le Maitre d'Ouvrage participe à la construction ? &ensp;&ensp;</span>
                <div class="ml-8">
                    <input type="radio" name="moa-construction" value="oui" onclick="radioFormOpen('moa-construction-form'),radioFormOpen('tableau')"/>
                    <label> Oui &ensp;</label>
                    <input type="radio" name="moa-construction" value="non" onclick="radioFormClose('moa-construction-form'),radioFormClose('tableau')"/>
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
                        <span class="text-gray-500 font-medium">Le Maitre d'Ouvrage est-il un professionnel de la construction ? &ensp;&ensp;
                            <input type="radio" name="moa-construction-pro" value="oui" onclick="radioFormOpen('moa-construction-pro-form')"/>
                            <label> Oui &ensp;</label>
                            <input type="radio" name="moa-construction-pro" value="non" onclick="radioFormClose('moa-construction-pro-form')"/>
                            <label> Non</label>
                        </span>
                    </div>
                    <div id="moa-construction-pro-form" class="py-4 hidden mx-6">
                        <label for="moa-construction-pro-champ" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Veuillez indiquer sa profession :</label>
                        <input type="text" name="moa-construction-pro-champ" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
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


        <!-- Bouton suivant -->
        <div class="text-center mt-16">
            <button type="submit" name="send-step2" value="step2" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-2/5 lg:w-1/5 px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Suivant</button>
        </div>

        <input type="hidden" name="fields" value="moa">
    </form>
</section>

