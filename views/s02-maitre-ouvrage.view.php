<section class="myContainer">
    <form action="" method="post">
        <!-- Collapsed form : "Maitre d'ouvrage = souscripteur ?"-->
        <div>
            <div class="text-gray-500 font-medium">
                <span>Le Maitre d'Ouvrage est-il le souscripteur ? &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;</span>
                <input type="radio" name="moa-sous" id="check-yes" onclick="radioFormClose('moa-form-sous')"/>
                <label for="moa-sous-yes"> Oui &ensp;</label>
                <input type="radio" name="moa-sous" id="check-no" onclick="radioFormOpen('moa-form-sous')"/>
                <label for="moa-sous-no"> Non</label>
            </div>  
            <div id="moa-form-sous" class="hidden px-8 py-4">
                <div class="mb-6 md:grid-cols-2">
                    <div class="flex flex-row py-4">
                        <span class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Civilité : &ensp;&ensp;
                        <input type="radio" id="" name="civilite" checked onclick="radioFormClose('siret-field'),radioFormClose('raison-field')">
                        <label for="civilite">&ensp; Particulier &ensp;&ensp;</label>
                        <input type="radio" id="" name="civilite" onclick="radioFormOpen('siret-field'),radioFormOpen('raison-field')">
                        <label for="civilite">&ensp; Entreprise</label></span>
                    </div>
                    <div class="py-4">
                        <label for="moa-nom" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nom, Prénom</label>
                        <input type="text" id="" name="moa-nom" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
                    </div>
                    <div class="py-4">
                        <label for="moa-adresse" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Adresse actuelle</label>
                        <input type="text" id="" nom="moa-adresse" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
                    </div>
                    <div id="raison-field" class="hidden py-4">
                        <label for="moa-nom" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Raison sociale</label>
                        <input type="text" id="" name="moa-nom" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
                    </div>
                    <div id="siret-field" class="hidden py-4">
                        <label for="moa-siret" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">SIRET n°</label>
                        <input type="text" id="" name="moa-siret" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                    </div>
                </div>
            </div>
        </div>


        <!-- Qualité du maitre d'ouvrage -->
        <div class="my-16">
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
                    <div id="mo-quality-other" class="hidden mt-2">
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
        </div>


        <!-- Collapsed form : "Maitre d'ouvrage participe t-il à la construction ?"-->
        <div>
            <div class="text-gray-500 font-medium">
                <span>Le Maitre d'Ouvrage participe à la construction ? &ensp;&ensp;</span>
                <input type="radio" name="mo-sous" id="check-yes" onclick="radioFormOpen('mo-form-const'),radioFormOpen('tableau')"/>
                <label for="mo-sous-yes"> Oui &ensp;</label>
                <input type="radio" name="mo-sous" id="check-no" onclick="radioFormClose('mo-form-const'),radioFormClose('tableau')"/>
                <label for="mo-sous-no"> Non</label>
            </div>
            <div id="mo-form-const" class="hidden py-4">
                <div class="flex flex-row p-2 mb-6">
                    <div class="flex items-center">
                        <svg class="w-6 h-6 text-blue-700 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11h2v5m-2 0h4m-2.592-8.5h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/></svg>
                    </div>
                    <p class="text-gray-900 text-sm block w-full p-4 dark:bg-gray-700 dark:border-gray-600 dark:text-white">La clause contrat n°001 des Conventions Spéciales n°811 "Intervention du maître d'ouvrage dans la conception, la direction, la surveillance ou la réalisation des travaux" est obligatoirement souscrite.</p>
                </div>
                <div class="mb-6">
                    <div>
                        <span class="text-gray-500 font-medium">Le Maitre d'Ouvrage est-il un professionnel de la construction ? &ensp;&ensp;<input type="radio" name="mo-pro" id="check-yes" onclick="radioFormOpen('mo-form-pro')"/><label> Oui &ensp;</label><input type="radio" name="mo-pro" id="check-no" onclick="radioFormClose('mo-form-pro')"/><label> Non</label></span>
                    </div>
                    <div id="mo-form-pro" class="py-4 hidden mx-6">
                        <label for="mo-pro-field" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Veuillez indiquer sa profession :</label>
                        <input type="text" id="" name="mo-pro-field" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
                    </div>
                </div>
                <div id="tableau" class="hidden mt-10">
                    <span class="text-gray-500 font-medium">Complétez le tableau ci-dessous en cochant les cases correspondantes :</span>
                    <table class="text-sm font-light w-4/5 ml-6 mt-2">
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
                            <td class="border-r-2 border-l-2 border-b border-gray-300 p-2 pl-4"><input type="checkbox"/><label>&ensp; Conception</label></td>
                            <td class="border-r-2 border-b border-gray-300 text-center p-2"><input type="checkbox"/></td>
                            <td class="border-r-2 border-b border-gray-300 text-center p-2"><input type="checkbox"/></td>
                            <td class="border-r-2 border-b border-gray-300 text-center p-2"><input type="checkbox"/></td>
                        </tr>
                        <tr>
                            <td class="border-r-2 border-b border-l-2 border-gray-300 p-2 pl-4"><input type="checkbox"/><label>&ensp; Direction</label></td>
                            <td class="border-r-2 border-b border-gray-300 text-center p-2"><input type="checkbox"/></td>
                            <td class="border-r-2 border-b border-gray-300 text-center p-2"><input type="checkbox"/></td>
                            <td class="border-r-2 border-b border-gray-300 text-center p-2"><input type="checkbox"/></td>
                        </tr>
                        <tr>
                            <td class="border-r-2 border-b border-l-2 border-gray-300 p-2 pl-4"><input type="checkbox"/><label>&ensp; Surveillance</label></td>
                            <td class="border-r-2 border-b border-gray-300 text-center p-2"><input type="checkbox"/></td>
                            <td class="border-r-2 border-b border-gray-300 text-center p-2"><input type="checkbox"/></td>
                            <td class="border-r-2 border-b border-gray-300 text-center p-2"><input type="checkbox"/></td>
                        </tr>
                        <tr>
                            <td class="border-r-2 border-l-2 border-b-2 border-gray-300 p-2 pl-4"><input type="checkbox"/><label>&ensp; Exécution</label></td>
                            <td class="border-b-2 border-r-2 border-gray-300 text-center p-2"><input type="checkbox"/></td>
                            <td class="border-b-2 border-r-2 border-gray-300 text-center p-2"><input type="checkbox"/></td>
                            <td class="border-b-2 border-r-2 border-gray-300 text-center p-2"><input type="checkbox"/></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>


        <!-- Send button -->
        <div class="myContainer text-center mt-16">
            <button type="submit" name="send-step2" value="step2" class="myContainer text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Suivant</button>
        </div>
    </form>
</section>

