<section>
    <!-- Situation de l'ouvrage -->
    <form action="" method="post">


            <!-- Zone inondable -->
        <div>
            <span class="text-gray-500 font-medium">Est-il situé dans une zone inondable ? &ensp;&ensp;
                <input type="radio" name="situation_zone_inond" value="1" <?= $_SESSION['info_situation']['situation_zone_inond']==1 ? "checked=checked" : ""; ?> required/>
                <label> Oui &ensp;</label>
                <input type="radio" name="situation_zone_inond" value="0" <?= $_SESSION['info_situation']['situation_zone_inond']==0 ? "checked=checked" : ""; ?>/>
                <label> Non</label>
            </span>  
        </div>
            <!-- Zone sismicité -->
        <div class="flex-column mt-16">
            <span class="text-gray-500 font-medium">Dans quelle zone de sismicité est-il situé ?</span>
            <div class="ml-10 mt-2">
                <input type="radio" name="situation_sismique" value="1"/><label class="mr-6 text-sm lg:text-base" <?= $_SESSION['info_situation']['situation_sismique']==1 ? "checked=checked" : ""; ?>> 1 (très faible)</label>
                <input type="radio" name="situation_sismique" value="2" <?= $_SESSION['info_situation']['situation_sismique']==2 ? "checked=checked" : ""; ?>/><label class="mr-6 text-sm lg:text-base"> 2 (faible)</label>
                <input type="radio" name="situation_sismique" value="3" <?= $_SESSION['info_situation']['situation_sismique']==3 ? "checked=checked" : ""; ?>/><label class="mr-6 text-sm lg:text-base"> 3 (modérée)</label>
                <input type="radio" name="situation_sismique" value="4" <?= $_SESSION['info_situation']['situation_sismique']==4 ? "checked=checked" : ""; ?>/><label class="mr-6 text-sm lg:text-base"> 4 (moyenne)</label>
                <input type="radio" name="situation_sismique" value="5" <?= $_SESSION['info_situation']['situation_sismique']==5 ? "checked=checked" : ""; ?>/><label class="text-sm lg:text-base"> 5 (forte)</label>
            </div>
        </div>
            <!-- Zone termites insectes -->
        <div class="mt-16">
            <span class="text-gray-500 font-medium">Est-il situé dans une zone contaminée par les termites ou autres insectes xylophages ? &ensp;&ensp;
                <input type="radio" name="situation_insectes" value="1" <?= $_SESSION['info_situation']['situation_insectes']==1 ? "checked=checked" : ""; ?> required/>
                <label> Oui &ensp;</label>
                <input type="radio" name="situation_insectes" <?= $_SESSION['info_situation']['situation_insectes']==0 ? "checked=checked" : ""; ?> value="0"/>
                <label> Non</label>
            </span>  
        </div>
            <!-- Matériaux traditionnels ou technique courante -->
        <div class="mt-16">
            <span class="text-gray-500 font-medium">Les travaux sont-ils réalisés avec des matériaux traditionnels ou selon des procédés de technique courante ? &ensp;&ensp;
                <input type="radio" name="situation_proc_techniques" value="1" <?= $_SESSION['info_situation']['situation_proc_techniques']==1 ? "checked=checked" : ""; ?> required/>
                <label> Oui &ensp;</label>
                <input type="radio" name="situation_proc_techniques" value="0" <?= $_SESSION['info_situation']['situation_proc_techniques']==0 ? "checked=checked" : ""; ?>/>
                <label> Non</label>
            </span>  
        </div>
            <!-- Parking -->
        <div class="mt-16">
            <span class="text-gray-500 font-medium">Y a-t-il la présence d'un parking (accessoire de l'ouvrage) desservant l'ouvrage ? &ensp;&ensp;
                <input type="radio" name="situation_parking" value="1" <?= $_SESSION['info_situation']['situation_parking']==1 ? "checked=checked" : ""; ?> required/>
                <label> Oui &ensp;</label>
                <input type="radio" name="situation_parking" value="0" <?= $_SESSION['info_situation']['situation_parking']==0 ? "checked=checked" : ""; ?>/>
                <label> Non</label>
            </span>  
        </div>
            <!-- Travaux sur existants -->
        <div class="mt-16">
            <h3 class="text-gray-500 font-medium">Si travaux sur une contruction existante ou sur existants :</h3>
                <div class="my-2 ml-10">
                    <span class="font-normal">Si les existants datent de moins de 10 ans, ont-ils fait l'objet d'un contrat d'assurance "dommages ouvrage" ? &ensp;&ensp;
                        <input type="radio" name="situation_do_10ans" value="1" <?= $_SESSION['info_situation']['situation_do_10ans']==1 ? "checked=checked" : ""; ?> onclick="showElement('situation_do_10ans_contrat')" required/>
                        <label class="text-gray-500 font-medium"> Oui &ensp;</label>
                        <input type="radio" name="situation_do_10ans" value="0" <?= $_SESSION['info_situation']['situation_do_10ans']==0 ? "checked=checked" : ""; ?> onclick="hideElement('situation_do_10ans_contrat')"/>
                        <label class="text-gray-500 font-medium"> Non</label>
                    </span>
                    <div id="situation_do_10ans_contrat" class="hidden ml-10 mt-4 ">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nom de l'assureur :&ensp;&ensp;</label>
                        <input type="text" name="situation_do_10ans_contrat_assureur" value="<?= isset($_SESSION['info_situation']['situation_do_10ans_contrat_assureur']) ? $_SESSION['info_situation']['situation_do_10ans_contrat_assureur'] : ''?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">N° de contrat :&ensp;&ensp;</label>
                        <input type="text" name="situation_do_10ans_contrat_numero" value="<?= isset($_SESSION['info_situation']['situation_do_10ans_contrat_numero']) ? $_SESSION['info_situation']['situation_do_10ans_contrat_numero'] : ''?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
                    </div>
                </div>
                <div class="mt-4 ml-10">
                    <span class="font-normal">Les existants sont-ils classés monuments historiques ou font-ils l'objet d'une protection du patrimoine ? &ensp;&ensp;
                        <input type="radio" name="situation_mon_hist" value="1" <?= $_SESSION['info_situation']['situation_mon_hist']==1 ? "checked=checked" : ""; ?> required/>
                        <label class="text-gray-500 font-medium"> Oui &ensp;</label>
                        <input type="radio" name="situation_mon_hist" value="0" <?= $_SESSION['info_situation']['situation_mon_hist']==0 ? "checked=checked" : ""; ?>/>
                        <label class="text-gray-500 font-medium"> Non</label>
                    </span>
                </div>
        </div>
            <!-- Label -->
        <div class="mt-16">
            <h3 class="text-gray-500 font-medium">Label :</h3>
            <div class="my-2 ml-10">
                <span class="font-normal">L'opération de construction bénéficie-t-elle d'un label de performance énergétique (ex. BBC...) ? &ensp;&ensp;
                    <input type="radio" name="situation_label_energie" value="1" <?= $_SESSION['info_situation']['situation_label_energie']==1 ? "checked=checked" : ""; ?> required/>
                    <label class="text-gray-500 font-medium"> Oui &ensp;</label>
                    <input type="radio" name="situation_label_energie" value="0" <?= $_SESSION['info_situation']['situation_label_energie']==0 ? "checked=checked" : ""; ?>/>
                    <label class="text-gray-500 font-medium"> Non</label>
                </span>  
            </div>
            <div class="my-2 ml-10">
                <span class="font-normal">L'opération de construction bénéficie-t-elle d'un label de qualité environnementale (ex. HQE...) ? &ensp;&ensp;
                    <input type="radio" name="situation_label_qualite" value="1" <?= $_SESSION['info_situation']['situation_label_qualite']==1 ? "checked=checked" : ""; ?> required/>
                    <label class="text-gray-500 font-medium"> Oui &ensp;</label>
                    <input type="radio" name="situation_label_qualite" value="0" <?= $_SESSION['info_situation']['situation_label_qualite']==0 ? "checked=checked" : ""; ?>/>
                    <label class="text-gray-500 font-medium"> Non</label>
                </span>
            </div>
        </div>
            <!-- Etude de sol -->
        <div class="mt-20">
            <h3 class="text-gray-500 font-medium">Etude de sol</h3>
            <div class="flex flex-col lg:flex-row ml-10 mt-6">
                <span class="font-normal">Intervention d'un bureau spécialisé ? &ensp;&ensp;</span>
                <div class="ml-8 text-gray-500 font-medium">
                    <input type="radio" name="situation_etude_sol" value="1" <?= $_SESSION['info_situation']['situation_etude_sol']==1 ? "checked=checked" : ""; ?> onclick="showElement('situation_etude_sol_form')" required/>
                    <label> Oui &ensp;</label>
                    <input type="radio" name="situation_etude_sol" value="0" <?= $_SESSION['info_situation']['situation_etude_sol']==0 ? "checked=checked" : ""; ?> onclick="hideElement('situation_etude_sol_form')"/>
                    <label> Non</label>
                </div>
            </div>
            <div id="situation_etude_sol_form" class="hidden px-8 py-4">
                <?php echo coordFormDisplay('situation_etude_sol'); ?>
                <div class="flex flex-col lg:flex-row ml-24 mt-2">
                    <span class="text-sm font-medium mt-2">Mission : &ensp;&ensp;</span>
                    <div class="flex flex-row ml-8 text-gray-500 font-medium mt-2">
                        <span><input type="radio" name="situation_etude_sol_bureau_mission" value="g2_amp" <?= $_SESSION['info_situation']['situation_etude_sol_bureau_mission']=="g2_amp" ? "checked=checked" : ""; ?> onclick="hideElement('situation_etude_sol_bureau_mission_autre')"/> G2 AMP</span>
                        <span class="ml-6"><input type="radio" name="situation_etude_sol_bureau_mission" value="g2_pro" <?= $_SESSION['info_situation']['situation_etude_sol_bureau_mission']=="g2_pro" ? "checked=checked" : ""; ?> onclick="hideElement('situation_etude_sol_bureau_mission_autre')"/> G2 Pro</span>
                        <span class="ml-6"><input type="radio" name="situation_etude_sol_bureau_mission" value="etude_sol_autre" <?= $_SESSION['info_situation']['situation_etude_sol_bureau_mission']=="etude_sol_autre" ? "checked=checked" : ""; ?> onclick="showElement('situation_etude_sol_bureau_mission_autre')"/> Autre </span>
                    </div>
                    <div id="situation_etude_sol_bureau_mission_autre" class="hidden ml-4">
                        <input type="text" name="situation_etude_sol_bureau_mission_champ" value="<?= isset($_SESSION['info_situation']['situation_etude_sol_bureau_mission_champ']) ? $_SESSION['info_situation']['situation_etude_sol_bureau_mission_champ'] : ''?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Veuillez précisez"/>
                    </div>    
                </div>
            </div>
            <div class="flex flex-col lg:flex-row mt-6">
                <span class="ml-10 font-normal">
                    Si présence d'un parking et/ou de voiries, l'étude de sol vise-t-elle également ces ouvrages ?  &ensp;&ensp;
                </span>
                <div class="text-gray-500 font-medium">
                    <input type="radio" name="situation_etude_sol_parking" value="1" <?= $_SESSION['info_situation']['situation_etude_sol_parking']==1 ? "checked=checked" : ""; ?> required/>
                    <label> Oui &ensp;</label>
                    <input type="radio" name="situation_etude_sol_parking" value="0" <?= $_SESSION['info_situation']['situation_etude_sol_parking']==0 ? "checked=checked" : ""; ?>/>
                    <label> Non</label>
                </div>
            </div>
        </div>
            <!-- Garanties demandées -->
        <div>
            <h3 class="text-gray-500 font-medium mt-16">Garanties demandées</h3>
            <div class="ml-10 mt-2">
                <h4 class="font-normal">Garanties complètes (CS n°811) </h4>
                <span class="text-sm font-normal ml-6">Dommages ouvrages obligatoire + dommages aux éléments d'équipement et immatériels &ensp;&ensp;
                    <input type="radio" name="situation_garanties_completes" value="1" <?= $_SESSION['info_situation']['situation_garanties_completes']==1 ? "checked=checked" : ""; ?> required/>
                    <label class="text-gray-500 font-medium"> Oui &ensp;</label>
                    <input type="radio" name="situation_garanties_completes" value="0" <?= $_SESSION['info_situation']['situation_garanties_completes']==0 ? "checked=checked" : ""; ?>/>
                    <label class="text-gray-500 font-medium"> Non</label>
                </span>
            </div>
            <div class="ml-10 mt-2">
                <span class="font-normal">Dommages matériels subits par les existants (CS n°811) &ensp;&ensp;
                    <input type="radio" name="situation_garanties_dommages_existants" value="1" required/>
                    <label class="text-gray-500 font-medium"> Oui &ensp;</label>
                    <input type="radio" name="situation_garanties_dommages_existants" value="0"/>
                    <label class="text-gray-500 font-medium"> Non</label>
                </span>
            </div>
        </div>
            <!-- Travaux annexes -->
        <div class="flex-column mt-16">
            <span class="text-gray-500 font-medium">Travaux annexes :</span>
            <div class="ml-10 mt-2">
                <span class="font-normal">S'agit-il d'une construction en bois ? &ensp;&ensp;
                    <input type="radio" name="situation_construction_bois" value="1" <?= $_SESSION['info_situation']['situation_construction_bois']==1 ? "checked=checked" : ""; ?> required/>
                    <label class="text-gray-500 font-medium"> Oui &ensp;</label>
                    <input type="radio" name="situation_construction_bois" value="0" <?= $_SESSION['info_situation']['situation_construction_bois']==0 ? "checked=checked" : ""; ?>/>
                    <label class="text-gray-500 font-medium"> Non</label>
                </span>
            </div>
            <div class="ml-10 mt-2">
                <span class="font-normal">Y a-t-il la présence de panneaux photovoltaïques ? &ensp;&ensp;
                    <input type="radio" name="situation_pann_photo" value="1" <?= $_SESSION['info_situation']['situation_pann_photo']==1 ? "checked=checked" : ""; ?> required/>
                    <label class="text-gray-500 font-medium"> Oui &ensp;</label>
                    <input type="radio" name="situation_pann_photo" value="0" <?= $_SESSION['info_situation']['situation_pann_photo']==0 ? "checked=checked" : ""; ?>/>
                    <label class="text-gray-500 font-medium"> Non</label>
                </span>
            </div>
            <div class="ml-10 mt-2">
                <span class="font-normal">L'opération de construction bénéficie-t-elle d'une installation géothermique ? &ensp;&ensp;
                    <input type="radio" name="situation_geothermie" value="1" <?= $_SESSION['info_situation']['situation_geothermie']==1 ? "checked=checked" : ""; ?> required/>
                    <label class="text-gray-500 font-medium"> Oui &ensp;</label>
                    <input type="radio" name="situation_geothermie" value="0" <?= $_SESSION['info_situation']['situation_geothermie']==0 ? "checked=checked" : ""; ?>/>
                    <label class="text-gray-500 font-medium"> Non</label>
                </span>
            </div>
            <div class="ml-10 mt-2">
                <span class="font-normal">Y a-t-il intervention d'un contrôleur technique ? &ensp;&ensp;
                    <input type="radio" name="situation_controle_tech" value="1" <?= $_SESSION['info_situation']['situation_controle_tech']==1 ? "checked=checked" : ""; ?> required/>
                    <label class="text-gray-500 font-medium"> Oui &ensp;</label>
                    <input type="radio" name="situation_controle_tech" value="0" <?= $_SESSION['info_situation']['situation_controle_tech']==0 ? "checked=checked" : ""; ?>/>
                    <label class="text-gray-500 font-medium"> Non</label>
                </span>
            </div>
        </div>


        <div class="flex flex-row justify-center mt-16">
            <!-- Bouton précédent -->                                          
            <div class="flex space-y-4 justify-center sm:space-y-0 mr-6">
                <button type="submit" name="page_next" value="step3" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-32 px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Précédent</button>
            </div>
            <!-- Bouton suivant -->
            <div class="text-center ml-6">
                <button type="submit" name="page_next" value="step4bis" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-32 px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Suivant</button>
            </div>
        </div>


        <input type="hidden" name="fields" value="situation">
    </form>
</section>


    
    
