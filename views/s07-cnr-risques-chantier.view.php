<section>
    <form action="" method="post">

        <!-- CNR -->
        <div>
            <div class="mt-20">
                <h3 class="text-gray-500 font-medium">Désignation du constructeur non réalisateur</h3>
                <div>
                    <?php echo coordFormDisplay($currentstep.'-cnr'); ?>
                </div>
                <div class="mx-24 my-2">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Intervenant en qualité de ?</label>
                    <input type="text" name="cnr-qualite" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
                </div>
            </div>
            <div class="mt-10 mx-24">
                <span class="font-medium">Garanties demandées</span>
                <div class="mx-8 mt-4">
                    <span class="text-sm font-medium text-gray-900">RC Décennale - Garanties complètes (CS n°812) 
                        <span class="font-normal"> &ensp;&ensp;(RC décennale obligatoire + facultatives) &ensp;&ensp;</span>
                        <input type="radio" name="cnr-rc-decennale" value="oui"/>
                        <label class="text-gray-500 font-medium"> Oui &ensp;</label>
                        <input type="radio" name="cnr-rc-decennale" value="non"/>
                        <label class="text-gray-500 font-medium"> Non</label>
                    </span>  
                </div>
                <div class="mx-8 mt-4">
                    <span class="text-sm font-medium text-gray-900">RC hors décennale (CS n°883) &ensp;&ensp;
                        <input type="radio" name="cnr-rc-hors-decennale" value="oui"/>
                        <label class="text-gray-500 font-medium"> Oui &ensp;</label>
                        <input type="radio" name="cnr-rc-hors-decennale" value="non"/>
                        <label class="text-gray-500 font-medium"> Non</label>
                    </span>  
                </div>
                <div class="mx-8 mt-4">
                    <span class="text-sm font-medium text-gray-900">Recours et défense pénale (CS n°886) &ensp;&ensp;
                        <input type="radio" name="cnr-rc-recours" value="oui"/>
                        <label class="text-gray-500 font-medium"> Oui &ensp;</label>
                        <input type="radio" name="cnr-rc-recours" value="non"/>
                        <label class="text-gray-500 font-medium"> Non</label>
                    </span>  
                </div>
            </div>
        </div>

        <!-- Assurance tous risques chantier -->
        <div class="mt-20">
            <h3 class="text-gray-500 font-medium mb-4">Assurance tous risques chantier</h3>
            <div class="ml-24">
                <span class="font-medium">Informations générales :</span>
                <p class="ml-8">Descriptif identique à celui de la garantie dommages ouvrage.</p>
            </div>
            <div class="mt-10 mx-24">
                <span class="font-medium">Garanties demandées</span>
                <div class="mx-8 mt-4">
                    <span class="text-sm font-medium text-gray-900">Dommages matériels à la construction (CS n°884) 
                        <input type="radio" name="risques-chantier-materiel" value="oui"/>
                        <label class="text-gray-500 font-medium"> Oui &ensp;</label>
                        <input type="radio" name="risques-chantier-materiel" value="non"/>
                        <label class="text-gray-500 font-medium"> Non</label>
                    </span>  
                </div>
                <div class="mx-8 mt-4">
                    <span class="text-sm font-medium text-gray-900">Dommages matériels subits par les existants (CS n°884) &ensp;&ensp;
                        <input type="radio" name="risques-chantier-existants" value="oui"/>
                        <label class="text-gray-500 font-medium"> Oui &ensp;</label>
                        <input type="radio" name="risques-chantier-existants" value="non"/>
                        <label class="text-gray-500 font-medium"> Non</label>
                    </span>  
                </div>
            </div>
        </div>


        <div class="flex flex-row justify-center mt-16">
            <!-- Bouton précédent -->                                          
            <div class="flex space-y-4 justify-center sm:space-y-0 mr-6">
                <a href="index.php?page=step6" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-32 px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Précédent
                </a>
            </div>
            <!-- Bouton suivant -->
            <div class="text-center ml-6">
                <button type="submit" name="send-step7" value="step7" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-32 px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Suivant</button>
            </div>
        </div>
    </form>
</section>