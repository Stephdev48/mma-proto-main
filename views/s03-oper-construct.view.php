<section class="">
    <form action="" method="post">
        <!-- Collapsed form : "Nature opération : neuf ou existant"-->
        <div class="flex flex-col lg:flex-row">
            <span class="text-gray-500 font-medium">Nature de l'opération : </span>
            <span class="ml-6 text-gray-500 font-medium">
                <input type="radio" name="neuf-exist" id="check-yes" onclick="radioFormClose('nat-operation')"/>
                <label for="neuf-exist"> Construction neuve &ensp;</label>
                <p class="text-xs text-gray-500 font-normal">(indépendante de tout bâtiment existant)</p>
            </span>
            <span class="ml-6 mt-2 lg:mt-0 text-gray-500 font-medium">
                <input type="radio" name="neuf-exist" id="check-no" onclick="radioFormOpen('nat-operation')"/>
                <label for="neuf-exist"> Travaux sur construction existante</label>
            </span>
        </div>
        <div id="nat-operation" class="hidden mt-8">
            <h3 class="text-gray-500 font-medium mb-6">De quoi s'agit-il ?</h3>
            <div class="ml-12">
                <!-- Surélévation -->
                <div class="my-4">
                    <span class="text-gray-500 font-medium">D'une surélévation &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
                        <input type="radio" name="surelev" id="check-yes" onclick="radioFormOpen('surelevation')"/>
                        <label for="surelev"> Oui &ensp;</label>
                        <input type="radio" name="surelev" id="check-no" onclick="radioFormClose('surelevation')"/>
                        <label for="surelev"> Non</label>
                    </span>  
                    <div id="surelevation" class="hidden px-8 py-4">
                        <div class="mb-2 md:grid-cols-2">
                            <div class="flex flex-row py-2">
                                <span class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Reprise en sous-oeuvre / Travaux sur fondation ? : &ensp;&ensp;
                                    <input type="radio" id="" name="sous-oeuvre"><label for="sous-oeuvre">&ensp; Oui &ensp;&ensp;</label>
                                    <input type="radio" id="" name="sous-oeuvre"><label for="sous-oeuvre">&ensp; Non</label>
                                </span>
                            </div>
                            <div class="flex flex-row py-2">
                                <span class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Intervention sur la structure existante (hors fondation) ? : &ensp;&ensp;
                                    <input type="radio" id="" name="hors-fond"><label for="hors-fond">&ensp; Oui &ensp;&ensp;</label>
                                    <input type="radio" id="" name="hors-fond"><label for="hors-fond">&ensp; Non</label>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Extension horizontale -->
                <div class="my-4">
                    <span class="text-gray-500 font-medium">D'une extension horizontale ? &ensp;&ensp;
                        <input type="radio" name="ext-horizont" id="check-yes" onclick="radioFormOpen('extension-horizontale')"/>
                        <label for="ext-horizont"> Oui &ensp;</label>
                        <input type="radio" name="ext-horizont" id="check-no" onclick="radioFormClose('extension-horizontale')"/>
                        <label for="ext-horizont"> Non</label>
                    </span>  
                    <div id="extension-horizontale" class="hidden px-8 py-4">
                        <div class="mb-2 md:grid-cols-2">
                            <div class="flex flex-row py-2">
                                <span class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Intervention sur la structure existante y compris la fondation ? : &ensp;&ensp;
                                <input type="radio" id="" name="sous-oeuvre"><label for="sous-oeuvre">&ensp; Oui &ensp;&ensp;</label>
                                <input type="radio" id="" name="sous-oeuvre"><label for="sous-oeuvre">&ensp; Non</label></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Rénovation -->
                <div class="my-4">
                    <span class="text-gray-500 font-medium">D'une rénovation ?&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
                        <input type="radio" name="renovation" id="check-yes" onclick="radioFormOpen('renovation-inter')"/>
                        <label for="renovation"> Oui &ensp; </label>
                        <input type="radio" name="renovation" id="check-no" onclick="radioFormClose('renovation-inter')"/>
                        <label for="renovation"> Non</label>
                    </span>  
                    <div id="renovation-inter" class="hidden px-8 py-4">
                        <div class="mb-2 md:grid-cols-2">
                            <div class="flex flex-row py-2">
                                <span class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Intervention sur la structure existante y compris la fondation ? : &ensp;&ensp;
                                <input type="radio" id="" name="renov-inter"><label for="renov-inter">&ensp; Oui &ensp;&ensp;</label>
                                <input type="radio" id="" name="renov-inter"><label for="renov-inter">&ensp; Non</label></span>
                            </div>
                            <div class="flex flex-row py-2">
                                <span class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Isolation thermique extérieure ? : &ensp;&ensp;
                                <input type="radio" id="" name="renov-iso-therm"><label for="renov-iso-therm">&ensp; Oui &ensp;&ensp;</label>
                                <input type="radio" id="" name="renov-iso-therm"><label for="renov-iso-therm">&ensp; Non</label></span>
                            </div>
                            <div class="flex flex-row py-2">
                                <span class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Réfection de toiture ? : &ensp;&ensp;
                                <input type="radio" id="" name="renov-refect-toit"><label for="renov-refect-toit">&ensp; Oui &ensp;&ensp;</label>
                                <input type="radio" id="" name="renov-refect-toit"><label for="renov-refect-toit">&ensp; Non</label></span>
                            </div>
                            <div class="flex flex-row py-2">
                                <span class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Travaux d'étanchéité ? : &ensp;&ensp;
                                <input type="radio" id="" name="renov-etancheite"><label for="renov-etancheite">&ensp; Oui &ensp;&ensp;</label>
                                <input type="radio" id="" name="renov-etancheite"><label for="renov-etancheite">&ensp; Non</label></span>
                            </div>
                            <div class="flex flex-row py-2">
                                <span class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ravalement de façade ? : &ensp;&ensp;
                                <input type="radio" id="" name="renov-ravalement"><label for="renov-ravalement">&ensp; Oui &ensp;&ensp;</label>
                                <input type="radio" id="" name="renov-ravalement"><label for="renov-ravalement">&ensp; Non</label></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Réhabilitation -->
                <div class="my-4">
                    <span class="text-gray-500 font-medium">D'une réhabilitation ? &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
                        <input type="radio" name="rehabilitation" id="check-yes" onclick="radioFormOpen('rehabilitation-inter')"/>
                        <label for="rehabilitation"> Oui &ensp;</label>
                        <input type="radio" name="rehabilitation" id="check-no" onclick="radioFormClose('rehabilitation-inter')"/>
                        <label for="rehabilitation"> Non</label>
                    </span>  
                    <div id="rehabilitation-inter" class="hidden px-8 py-4">
                        <div class="mb-2 md:grid-cols-2">
                            <div class="flex flex-row py-2">
                                <span class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Intervention sur la structure existante y compris la fondation ? : &ensp;&ensp;
                                <input type="radio" id="" name="rehab-inter"><label for="rehab-inter">&ensp; Oui &ensp;&ensp;</label>
                                <input type="radio" id="" name="rehab-inter"><label for="rehab-inter">&ensp; Non</label></span>
                            </div>
                            <div class="flex flex-row py-2">
                                <span class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Isolation thermique extérieure ? : &ensp;&ensp;
                                <input type="radio" id="" name="rehab-iso-therm"><label for="rehab-iso-therm">&ensp; Oui &ensp;&ensp;</label>
                                <input type="radio" id="" name="rehab-iso-therm"><label for="rehab-iso-therm">&ensp; Non</label></span>
                            </div>
                            <div class="flex flex-row py-2">
                                <span class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Réfection de toiture ? : &ensp;&ensp;
                                <input type="radio" id="" name="rehab-refect-toit"><label for="rehab-refect-toit">&ensp; Oui &ensp;&ensp;</label>
                                <input type="radio" id="" name="rehab-refect-toit"><label for="rehab-refect-toit">&ensp; Non</label></span>
                            </div>
                            <div class="flex flex-row py-2">
                                <span class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Travaux d'étanchéité ? : &ensp;&ensp;
                                <input type="radio" id="" name="rehab-etancheite"><label for="rehab-etancheite">&ensp; Oui &ensp;&ensp;</label>
                                <input type="radio" id="" name="rehab-etancheite"><label for="rehab-etancheite">&ensp; Non</label></span>
                            </div>
                            <div class="flex flex-row py-2">
                                <span class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ravalement de façade ? : &ensp;&ensp;
                                <input type="radio" id="" name="rehab-ravalement"><label for="rehab-ravalement">&ensp; Oui &ensp;&ensp;</label>
                                <input type="radio" id="" name="rehab-ravalement"><label for="rehab-ravalement">&ensp; Non</label></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="my-10">
                <span class="text-gray-500 font-medium">S'agit-il d'une réparation suite à sinistre ? &ensp;&ensp;
                    <input type="radio" name="sinistre" id="check-yes" onclick="radioFormOpen('sinistre-champ-descr')"/><label for="sinistre"> Oui &ensp;</label><input type="radio" name="sinistre" id="check-no" onclick="radioFormClose('sinistre-champ-descr')"/><label for="sinistre"> Non</label>
                </span>
                <div id="sinistre-champ-descr" class="hidden ml-10 mt-4 ">
                    <label for="sinistre-descr" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Veuillez décrire le sinistre :&ensp;&ensp;</label>
                    <input type="text" id="" name="sinistre-descr" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
                </div>
            </div>
        </div>

        <!-- Collapsed form : "Type d'ouvrage"-->
        <fieldset class="flex flex-col lg:flex-row mb-2 mt-10">
            <legend class="mb-2 text-gray-500 font-medium">Type de l'ouvrage (cochez la ou les cases correspondantes) :</legend>
            <div class="flex flex-col ml-8">
                <div>
                    <span><input type="checkbox" name="mais-indiv"/> Maison individuelle</span>
                </div>
                <div>
                    <span><input type="checkbox" name="ope-pav"/> Opération pavillonnaire :</span><br />
                    <span class="text-xs">(nombre de maisons : <input type="text" name="" style="height:10px; width: 60px; border-radius:6px;" class="bg-gray-50"/> )</span>
                </div>
                <div>
                    <span><input type="checkbox" name="coll-habit"/> Collectif d'habitation :</span><br />
                    <span class="text-xs">(nombre d'appartements : <input type="text" name="" style="height:10px; width: 60px; border-radius:6px;" class="bg-gray-50"/> )</span>
                </div>
                <span><input type="checkbox" name="bat-indus"/> Bâtiment à usage industriel ou agricole</span>
                <div>
                    <span><input type="checkbox" name="centre-com"/> Centre commercial, bâtiment à usage de vente :</span><br />
                    <span class="text-xs">(superficie hors oeuvre nette (SHON) : <input type="text" name="centre-com-surf" style="height:10px; width:60px; border-radius:6px;" class="bg-gray-50"/> m²)</span>
                </div>
            </div>
            <div class="flex flex-col ml-8">
                <span><input type="checkbox" name="bat-bur"/> Bâtiment à usage de bureau</span>
                <span><input type="checkbox" name="hopital"/> Bâtiment d'établissement Hospitalier, de Maison de retraite, Clinique</span>
                <span><input type="checkbox" name="vrd-privatif"/> Voirie réseaux Divers (VRD) à usage privatif d'un bâtiment</span>
                <div>
                    <span>
                        <input type="checkbox" name="autre-const"/> Autre construction :
                    </span><br />
                    <span class="text-xs">(son usage : 
                        <input type="text" name="autre-const-usage" style="height:10px; width:200px; border-radius:6px;" class="bg-gray-50"/> )
                    </span>
                </div>
            </div>
        </fieldset>

        <!-- Adresse de la construction -->
        <div class="mt-10">
            <span class="text-gray-500 font-medium">Adresse de la construction</span>
            <div class="mx-8 my-2">
                <label for="esc-res-bat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Escalier, résidence, bâtiment</label>
                <input type="text" name="esc-res-bat" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
            </div>
            <div class="mx-8 my-2">
                <label for="num-nom-rue" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Numéro et nom de la rue</label>
                <input type="text" name="num-nom-rue" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
            </div>
            <div class="grid gap-6 mb-2 mx-8 md:grid-cols-2">
                <div>
                    <label for="lieu-dit" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Lieu-dit</label>
                    <input type="text" name="lieu-dit" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                </div>
                <div>
                    <label for="arrond" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Arrondissement</label>
                    <input type="text" id="arrond" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                </div>
            </div>
            <div class="grid gap-6 mb-2 mx-8 md:grid-cols-2">
                <div>
                    <label for="zipcode" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Code postal</label>
                    <input type="text" name="zipcode" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                </div>
                <div>
                    <label for="commune" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Commune</label>
                    <input type="text" id="commune" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                </div>
            </div>
        </div>

        <!-- Dates de l'opération de construction -->
        <div class="mt-10">
            <span class="text-gray-500 font-medium">Dates de l'opération de construction</span>
            <div class="mx-8 my-2">
                <label for="date-debut" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date d'ouverture de chantier</label>
                <input type="date" name="date-debut" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
            </div>
            <div class="mx-8 mt-4">
                <label for="date-debut-prevue" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">A défaut, date prévue de début</label>
                <input type="date" name="date-debut-prevue" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
            </div>
            <div class="mx-8 mt-4">
                <label for="date-reception" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date de réception</label>
                <input type="date" name="date-reception" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
            </div>
        </div>

        <!-- Coût de l'opération de construction -->
        <div class="mt-10">
            <span class="text-gray-500 font-medium">Coût de l'opération de construction</span>
            <div class="mx-8 my-2">
                <label for="cout-operation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Coût en €</label>
                <input type="text" name="cout-operation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
            </div>
            <div class="mx-8 mt-4">
                <span class="text-sm font-medium text-gray-900">Comprend la TVA ? &ensp;&ensp;
                    <input type="radio" name="tva"/>
                    <label for="tva" class="text-gray-500 font-medium"> Oui &ensp;</label>
                    <input type="radio" name="tva"/>
                    <label for="tva" class="text-gray-500 font-medium"> Non</label>
                </span>  
            </div>
        </div>

        <!-- Send button -->
        <div class="text-center mt-16">
            <button type="submit" name="send-step3" value="step3" class="myContainer text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-2/5 lg:w-1/5 px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Suivant</button>
        </div>
    </form>
</section>