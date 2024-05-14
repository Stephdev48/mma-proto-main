<section>
    <form action="" method="post">

        <!-- CNR -->
        <div>
            <div class="mt-20">
                <h3 class="text-gray-500 font-medium">Désignation du constructeur non réalisateur</h3>
                <div>
                    <?php echo coordFormDisplay('cnr'); ?>
                </div>
                <div class="mx-24 my-2">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Intervenant en qualité de ?</label>
                    <input type="text" name="cnr_qualite" value="<?= isset($_SESSION['info_cnr']['cnr_qualite']) ? $_SESSION['info_cnr']['cnr_qualite'] : ''?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required/>
                </div>
            </div>
            <div class="mt-10 mx-24">
                <span class="font-medium">Garanties demandées</span>
                <div class="mx-8 mt-4">
                    <span class="text-sm font-medium text-gray-900">RC Décennale - Garanties complètes (CS n°812) 
                        <span class="font-normal"> &ensp;&ensp;(RC décennale obligatoire + facultatives) &ensp;&ensp;</span>
                        <input type="radio" name="cnr_rc_decennale" value="1" <?= isset($_SESSION['info_cnr']['cnr_rc_decennale'])==1 ? "checked=checked" : ""; ?> required/>
                        <label class="text-gray-500 font-medium"> Oui &ensp;</label>
                        <input type="radio" name="cnr_rc_decennale" value="0" <?= isset($_SESSION['info_cnr']['cnr_rc_decennale'])==0 ? "checked=checked" : ""; ?>/>
                        <label class="text-gray-500 font-medium"> Non</label>
                    </span>  
                </div>
                <div class="mx-8 mt-4">
                    <span class="text-sm font-medium text-gray-900">RC hors décennale (CS n°883) &ensp;&ensp;
                        <input type="radio" name="cnr_rc_hors_decennale" value="1" <?= isset($_SESSION['info_cnr']['cnr_rc_hors_decennale'])==1 ? "checked=checked" : ""; ?> required/>
                        <label class="text-gray-500 font-medium"> Oui &ensp;</label>
                        <input type="radio" name="cnr_rc_hors_decennale" value="0" <?= isset($_SESSION['info_cnr']['cnr_rc_hors_decennale'])==0 ? "checked=checked" : ""; ?>/>
                        <label class="text-gray-500 font-medium"> Non</label>
                    </span>  
                </div>
                <div class="mx-8 mt-4">
                    <span class="text-sm font-medium text-gray-900">Recours et défense pénale (CS n°886) &ensp;&ensp;
                        <input type="radio" name="cnr_rc_recours" value="1" <?= isset($_SESSION['info_cnr']['cnr_rc_recours'])==1 ? "checked=checked" : ""; ?> required/>
                        <label class="text-gray-500 font-medium"> Oui &ensp;</label>
                        <input type="radio" name="cnr_rc_recours" value="0" <?= isset($_SESSION['info_cnr']['cnr_rc_recours'])==0 ? "checked=checked" : ""; ?>/>
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
                <p class="ml-8 mt-4">Descriptif identique à celui de la garantie dommages ouvrage.</p>
            </div>
            <div class="mt-10 mx-24">
                <span class="font-medium">Garanties demandées</span>
                <div class="mx-8 mt-4">
                    <span class="font-normal">Dommages matériels à la construction (CS n°884)  &ensp;&ensp;
                        <input type="radio" name="risques_chantier_materiel" value="1" <?= isset($_SESSION['info_cnr']['risques_chantier_materiel'])==1 ? "checked=checked" : ""; ?> required/>
                        <label class="text-gray-500 font-medium"> Oui &ensp;</label>
                        <input type="radio" name="risques_chantier_materiel" value="0" <?= isset($_SESSION['info_cnr']['risques_chantier_materiel'])==0 ? "checked=checked" : ""; ?>/>
                        <label class="text-gray-500 font-medium"> Non</label>
                    </span>  
                </div>
                <div class="mx-8 mt-4">
                    <span class="font-normal">Dommages matériels subits par les existants (CS n°884) &ensp;&ensp;
                        <input type="radio" name="risques_chantier_existants" value="1" <?= isset($_SESSION['info_cnr']['risques_chantier_existants'])==1 ? "checked=checked" : ""; ?> required/>
                        <label class="text-gray-500 font-medium"> Oui &ensp;</label>
                        <input type="radio" name="risques_chantier_existants" value="0" <?= isset($_SESSION['info_cnr']['risques_chantier_existants'])==0 ? "checked=checked" : ""; ?>/>
                        <label class="text-gray-500 font-medium"> Non</label>
                    </span>  
                </div>
            </div>
        </div>



        <div class="flex flex-row justify-center mt-16">
            <!-- Bouton précédent -->                                          
            <div class="flex space-y-4 justify-center sm:space-y-0 mr-6">
                <button type="submit" name="page_next" value="step5" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-32 px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Précédent</button>
            </div>
            <!-- Bouton suivant -->
            <div class="text-center ml-6">
                <button type="submit" name="page_next" value="validation" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-32 px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Suivant</button>
            </div>
        </div>
        
        <input type="hidden" name="fields" value="cnr">
    </form>
</section>