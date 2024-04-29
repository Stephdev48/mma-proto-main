<section>
    <form action="" method="post">
        <!-- Formulaire caché : "Nature opération : neuf ou existant"-->
        <div class="flex flex-col lg:flex-row">
            <span class="text-gray-500 font-medium">Nature de l'opération : </span>
            <span class="ml-6 text-gray-500 font-medium">
                <input type="radio" name="neuf-exist" value="neuve" onclick="radioFormClose('operation-nature')"/>
                <label> Construction neuve &ensp;</label>
                <p class="text-xs text-gray-500 font-normal">(indépendante de tout bâtiment existant)</p>
            </span>
            <span class="ml-6 mt-2 lg:mt-0 text-gray-500 font-medium">
                <input type="radio" name="neuf-exist" value="existante" onclick="radioFormOpen('operation-nature')"/>
                <label> Travaux sur construction existante</label>
            </span>
        </div>
        <div id="operation-nature" class="hidden mt-8">
            <h3 class="text-gray-500 font-medium mb-6">De quoi s'agit-il ?</h3>
            <div class="ml-12">
                <!-- Surélévation -->
                <div class="my-4">
                    <span class="text-gray-500 font-medium">D'une surélévation &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
                        <input type="radio" name="operation-nature-surelev" value="oui" onclick="radioFormOpen('operation-nature-surelev-form')"/>
                        <label for="surelev"> Oui &ensp;</label>
                        <input type="radio" name="operation-nature-surelev"value="non" onclick="radioFormClose('operation-nature-surelev-form')"/>
                        <label for="surelev"> Non</label>
                    </span>  
                    <div id="operation-nature-surelev-form" class="hidden px-8 py-4">
                        <div class="mb-2 md:grid-cols-2">
                            <div class="flex flex-row py-2">
                                <span class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Reprise en sous-oeuvre / Travaux sur fondation ? : &ensp;&ensp;
                                    <input type="radio" name="operation-nature-surelev-sous-oeuvre" value="oui">
                                    <label>&ensp; Oui &ensp;&ensp;</label>
                                    <input type="radio" name="operation-nature-surelev-sous-oeuvre" value="non">
                                    <label>&ensp; Non</label>
                                </span>
                            </div>
                            <div class="flex flex-row py-2">
                                <span class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Intervention sur la structure existante (hors fondation) ? : &ensp;&ensp;
                                    <input type="radio" name="operation-nature-surelev-hors-fond" value="oui">
                                    <label>&ensp; Oui &ensp;&ensp;</label>
                                    <input type="radio" name="operation-nature-surelev-hors-fond" value="non">
                                    <label>&ensp; Non</label>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Extension horizontale -->
                <div class="my-4">
                    <span class="text-gray-500 font-medium">D'une extension horizontale ? &ensp;&ensp;
                        <input type="radio" name="operation-nature-ext-horizont" value="oui" onclick="radioFormOpen('operation-nature-ext-horizont')"/>
                        <label> Oui &ensp;</label>
                        <input type="radio" name="operation-nature-ext-horizont" value="non" onclick="radioFormClose('operation-nature-ext-horizont')"/>
                        <label> Non</label>
                    </span>  
                    <div id="operation-nature-ext-horizont" class="hidden px-8 py-4">
                        <div class="mb-2 md:grid-cols-2">
                            <div class="flex flex-row py-2">
                                <span class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Intervention sur la structure existante y compris la fondation ? : &ensp;&ensp;
                                <input type="radio" name="operation-nature-ext-horizont-exist" value="oui">
                                <label>&ensp; Oui &ensp;&ensp;</label>
                                <input type="radio" name="operation-nature-ext-horizont-exist" value="non">
                                <label>&ensp; Non</label></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Rénovation -->
                <div class="my-4">
                    <span class="text-gray-500 font-medium">D'une rénovation ?&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
                        <input type="radio" name="operation-nature-renovation" value="oui" onclick="radioFormOpen('operation-nature-renovation')"/>
                        <label> Oui &ensp; </label>
                        <input type="radio" name="operation-nature-renovation" value="non" onclick="radioFormClose('operation-nature-renovation')"/>
                        <label> Non</label>
                    </span>  
                    <div id="operation-nature-renovation" class="hidden px-8 py-4">
                        <div class="mb-2 md:grid-cols-2">
                            <div class="flex flex-row py-2">
                                <span class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Intervention sur la structure existante y compris la fondation ? : &ensp;&ensp;
                                    <input type="radio" name="operation-nature-renovation-fond" value="oui">
                                    <label>&ensp; Oui &ensp;&ensp;</label>
                                    <input type="radio" name="operation-nature-renovation-fond" value="non">
                                    <label>&ensp; Non</label>
                                </span>
                            </div>
                            <div class="flex flex-row py-2">
                                <span class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Isolation thermique extérieure ? : &ensp;&ensp;
                                    <input type="radio" name="operation-nature-renovation-iso-therm" value="oui">
                                    <label >&ensp; Oui &ensp;&ensp;</label>
                                    <input type="radio" name="operation-nature-renovation-iso-therm" value="non">
                                    <label >&ensp; Non</label>
                                </span>
                            </div>
                            <div class="flex flex-row py-2">
                                <span class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Réfection de toiture ? : &ensp;&ensp;
                                    <input type="radio" name="operation-nature-renovation-refect-toit" value="oui">
                                    <label>&ensp; Oui &ensp;&ensp;</label>
                                    <input type="radio" name="operation-nature-renovation-refect-toit" value="non">
                                    <label>&ensp; Non</label>
                                </span>
                            </div>
                            <div class="flex flex-row py-2">
                                <span class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Travaux d'étanchéité ? : &ensp;&ensp;
                                    <input type="radio" name="operation-nature-renovation-etancheite" value="oui">
                                    <label>&ensp; Oui &ensp;&ensp;</label>
                                    <input type="radio" name="operation-nature-renovation-etancheite" value="non">
                                    <label>&ensp; Non</label>
                                </span>
                            </div>
                            <div class="flex flex-row py-2">
                                <span class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ravalement de façade ? : &ensp;&ensp;
                                    <input type="radio" name="operation-nature-renovation-ravalement" value="oui">
                                    <label>&ensp; Oui &ensp;&ensp;</label>
                                    <input type="radio" name="operation-nature-renovation-ravalement" value="non">
                                    <label>&ensp; Non</label>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Réhabilitation -->
                <div class="my-4">
                    <span class="text-gray-500 font-medium">D'une réhabilitation ? &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
                        <input type="radio" name="operation-nature-rehabilitation" value ="oui" onclick="radioFormOpen('operation-nature-rehabilitation')"/>
                        <label> Oui &ensp;</label>
                        <input type="radio" name="operation-nature-rehabilitation" value="non" onclick="radioFormClose('operation-nature-rehabilitation')"/>
                        <label> Non</label>
                    </span>  
                    <div id="operation-nature-rehabilitation" class="hidden px-8 py-4">
                        <div class="mb-2 md:grid-cols-2">
                            <div class="flex flex-row py-2">
                                <span class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Intervention sur la structure existante y compris la fondation ? : &ensp;&ensp;
                                    <input type="radio" name="operation-nature-rehabilitation-fond" value="oui">
                                    <label>&ensp; Oui &ensp;&ensp;</label>
                                    <input type="radio" name="operation-nature-rehabilitation-fond" value="non">
                                    <label>&ensp; Non</label>
                                </span>
                            </div>
                            <div class="flex flex-row py-2">
                                <span class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Isolation thermique extérieure ? : &ensp;&ensp;
                                    <input type="radio" name="operation-nature-rehabilitation-iso-therm" value="oui">
                                    <label >&ensp; Oui &ensp;&ensp;</label>
                                    <input type="radio" name="operation-nature-rehabilitation-iso-therm" value="non">
                                    <label >&ensp; Non</label>
                                </span>
                            </div>
                            <div class="flex flex-row py-2">
                                <span class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Réfection de toiture ? : &ensp;&ensp;
                                    <input type="radio" name="operation-nature-rehabilitation-refect-toit" value="oui">
                                    <label>&ensp; Oui &ensp;&ensp;</label>
                                    <input type="radio" name="operation-nature-rehabilitation-refect-toit" value="non">
                                    <label>&ensp; Non</label>
                                </span>
                            </div>
                            <div class="flex flex-row py-2">
                                <span class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Travaux d'étanchéité ? : &ensp;&ensp;
                                    <input type="radio" name="operation-nature-rehabilitation-etancheite" value="oui">
                                    <label>&ensp; Oui &ensp;&ensp;</label>
                                    <input type="radio" name="operation-nature-rehabilitation-etancheite" value="non">
                                    <label>&ensp; Non</label>
                                </span>
                            </div>
                            <div class="flex flex-row py-2">
                                <span class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ravalement de façade ? : &ensp;&ensp;
                                    <input type="radio" name="operation-nature-rehabilitation-ravalement" value="oui">
                                    <label>&ensp; Oui &ensp;&ensp;</label>
                                    <input type="radio" name="operation-nature-rehabilitation-ravalement" value="non">
                                    <label>&ensp; Non</label>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="my-10">
                <span class="text-gray-500 font-medium">S'agit-il d'une réparation suite à sinistre ? &ensp;&ensp;
                    <input type="radio" name="sinistre" value="oui" onclick="radioFormOpen('sinistre-champ-descr')"/>
                    <label for="sinistre"> Oui &ensp;</label>
                    <input type="radio" name="sinistre" value="non" onclick="radioFormClose('sinistre-champ-descr')"/>
                    <label for="sinistre"> Non</label>
                </span>
                <div id="sinistre-champ-descr" class="hidden ml-10 mt-4 ">
                    <label for="sinistre-descr" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Veuillez décrire le sinistre :&ensp;&ensp;</label>
                    <input type="text" name="sinistre-descr" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
                </div>
            </div>
        </div>

        <!-- Checkboxes "Type d'ouvrage"-->
        <fieldset class="flex flex-col lg:flex-row mb-2 mt-10">
            <legend class="mb-2 text-gray-500 font-medium">Type de l'ouvrage (cochez la ou les cases correspondantes) :</legend>
            <div class="flex flex-col ml-8">
                <div>
                    <span><input type="checkbox" name="ouvrage-type-mais-indiv"/> Maison individuelle</span>
                </div>
                <div>
                    <span><input type="checkbox" name="ouvrage-type-ope-pav"/> Opération pavillonnaire :</span><br />
                    <span class="text-xs">(nombre de maisons : 
                        <input type="text" name="ouvrage-type-mais-indiv-nombre" style="height:10px; width: 60px; border-radius:6px;" class="bg-gray-50"/> )
                    </span>
                </div>
                <div>
                    <span><input type="checkbox" name="ouvrage-type-coll-habit"/> Collectif d'habitation :</span><br />
                    <span class="text-xs">(nombre d'appartements : 
                        <input type="text" name="ouvrage-type-coll-habit-nombre" style="height:10px; width: 60px; border-radius:6px;" class="bg-gray-50"/> )
                    </span>
                </div>
                <span>
                    <input type="checkbox" name="ouvrage-type-bat-indus"/> Bâtiment à usage industriel ou agricole
                </span>
                <div>
                    <span>
                        <input type="checkbox" name="ouvrage-type-centre-com"/> Centre commercial, bâtiment à usage de vente :
                    </span><br />
                    <span class="text-xs">(superficie hors oeuvre nette (SHON) : 
                        <input type="text" name="ouvrage-type-centre-com-surf" style="height:10px; width:60px; border-radius:6px;" class="bg-gray-50"/> m²)
                    </span>
                </div>
            </div>
            <div class="flex flex-col ml-8">
                <span><input type="checkbox" name="ouvrage-type-bat-bur"/> Bâtiment à usage de bureau</span>
                <span><input type="checkbox" name="ouvrage-type-hopital"/> Bâtiment d'établissement Hospitalier, de Maison de retraite, Clinique</span>
                <span><input type="checkbox" name="ouvrage-type-vrd-privatif"/> Voirie réseaux Divers (VRD) à usage privatif d'un bâtiment</span>
                <div>
                    <span>
                        <input type="checkbox" name="ouvrage-type-autre-const"/> Autre construction :
                    </span><br />
                    <span class="text-xs">(son usage : 
                        <input type="text" name="ouvrage-type-autre-const-usage" style="height:10px; width:200px; border-radius:6px;" class="bg-gray-50"/> )
                    </span>
                </div>
            </div>
        </fieldset>

        <!-- Adresse de la construction -->
        <div class="mt-10">
            <span class="text-gray-500 font-medium">Adresse de la construction</span>
            <div class="mx-8 my-2">
                <label for="construction-adresse-esc-res-bat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Escalier, résidence, bâtiment</label>
                <input type="text" name="construction-adresse-esc-res-bat" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
            </div>
            <div class="mx-8 my-2">
                <label for="construction-adresse-num-nom-rue" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Numéro et nom de la rue</label>
                <input type="text" name="construction-adresse-num-nom-rue" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
            </div>
            <div class="grid gap-6 mb-2 mx-8 md:grid-cols-2">
                <div>
                    <label for="construction-adresse-lieu-dit" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Lieu-dit</label>
                    <input type="text" name="construction-adresse-lieu-dit" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
                </div>
                <div>
                    <label for="construction-adresse-arrond" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Arrondissement</label>
                    <input type="text" name="construction-adresse-arrond" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
                </div>
            </div>
            <div class="grid gap-6 mb-2 mx-8 md:grid-cols-2">
                <div>
                    <label for="construction-adresse-code-postal" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Code postal</label>
                    <input type="text" name="construction-adresse-code-postal" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
                </div>
                <div>
                    <label for="construction-adresse-commune" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Commune</label>
                    <input type="text" name="construction-adresse-commune" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
                </div>
            </div>
        </div>

        <!-- Dates de l'opération de construction -->
        <div class="mt-10">
            <span class="text-gray-500 font-medium">Dates de l'opération de construction</span>
            <div class="mx-8 my-2">
                <label for="date-debut" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date d'ouverture de chantier</label>
                <input type="date" name="date-debut" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
            </div>
            <div class="mx-8 mt-4">
                <label for="date-debut-prevue" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">A défaut, date prévue de début</label>
                <input type="date" name="date-debut-prevue" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
            </div>
            <div class="mx-8 mt-4">
                <label for="date-reception" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date de réception</label>
                <input type="date" name="date-reception" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
            </div>
        </div>

        <!-- Coût de l'opération de construction -->
        <div class="mt-10">
            <span class="text-gray-500 font-medium">Coût de l'opération de construction</span>
            <div class="mx-8 my-2">
                <label for="cout-operation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Coût en €</label>
                <input type="text" name="cout-operation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
            </div>
            <div class="mx-8 mt-4">
                <span class="text-sm font-medium text-gray-900">Comprend la TVA ? &ensp;&ensp;
                    <input type="radio" name="cout-operation-tva" value="oui"/>
                    <label class="text-gray-500 font-medium"> Oui &ensp;</label>
                    <input type="radio" name="cout-operation-tva" value="non"/>
                    <label class="text-gray-500 font-medium"> Non</label>
                </span>  
            </div>
        </div>


        <div class="flex flex-row justify-center mt-16">
            <!-- Bouton précédent -->                                          
            <div class="flex space-y-4 justify-center sm:space-y-0 mr-6">
                <a href="index.php?page=step2" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-32 px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Précédent
                </a>
            </div>
            <!-- Bouton suivant -->
            <div class="text-center ml-6">
                <button type="submit" name="send-step3" value="step3" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-32 px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Suivant</button>
            </div>
        </div>


        <input type="hidden" name="fields" value="ope-constr">
    </form>
</section>