<section>
    <!-- Situation de l'ouvrage -->
    <form action="" method="post">


            <!-- Zone inondable -->
        <div>
            <span class="text-gray-500 font-medium">Est-il situé dans une zone inondable ? &ensp;&ensp;
                <input type="radio" name="situation-zone-inond" value="oui" required/>
                <label> Oui &ensp;</label>
                <input type="radio" name="situation-zone-inond" value="non"/>
                <label> Non</label>
            </span>  
        </div>
            <!-- Zone sismicité -->
        <div class="flex-column mt-16">
            <span class="text-gray-500 font-medium">Dans quelle zone de sismicité est-il situé ?</span>
            <div class="ml-10 mt-2">
                <input type="radio" name="situation-sismique" value="1"/><label class="mr-6 text-sm lg:text-base"> 1 (très faible)</label>
                <input type="radio" name="situation-sismique" value="2"/><label class="mr-6 text-sm lg:text-base"> 2 (faible)</label>
                <input type="radio" name="situation-sismique" value="3"/><label class="mr-6 text-sm lg:text-base"> 3 (modérée)</label>
                <input type="radio" name="situation-sismique" value="4"/><label class="mr-6 text-sm lg:text-base"> 4 (moyenne)</label>
                <input type="radio" name="situation-sismique" value="5"/><label class="text-sm lg:text-base"> 5 (forte)</label>
            </div>
        </div>
            <!-- Zone termites insectes -->
        <div class="mt-16">
            <span class="text-gray-500 font-medium">Est-il situé dans une zone contaminée par les termites ou autres insectes xylophages ? &ensp;&ensp;
                <input type="radio" name="situation-insectes" value="oui" required/>
                <label> Oui &ensp;</label>
                <input type="radio" name="situation-insectes" value="non"/>
                <label> Non</label>
            </span>  
        </div>
        
            <!-- Matériaux traditionnels ou technique courante -->
        <div class="mt-16">
            <span class="text-gray-500 font-medium">Les travaux sont-ils réalisés avec des matériaux traditionnels ou selon des procédés de technique courante ? &ensp;&ensp;
                <input type="radio" name="situation-proc-techniques" value="oui" required/>
                <label> Oui &ensp;</label>
                <input type="radio" name="situation-proc-techniques" value="non"/>
                <label> Non</label>
            </span>  
        </div>
            <!-- Parking -->
        <div class="mt-16">
            <span class="text-gray-500 font-medium">Y a-t-il la présence d'un parking (accessoire de l'ouvrage) desservant l'ouvrage ? &ensp;&ensp;
                <input type="radio" name="situation-parking" value="oui" required/>
                <label> Oui &ensp;</label>
                <input type="radio" name="situation-parking" value="non"/>
                <label> Non</label>
            </span>  
        </div>
            <!-- Travaux sur existants -->
        <div class="mt-16">
            <h3 class="text-gray-500 font-medium">Si travaux sur une contruction existante ou sur existants :</h3>
                <div class="my-2 ml-10">
                    <span class="font-normal">Si les existants datent de moins de 10 ans, ont-ils fait l'objet d'un contrat d'assurance "dommages ouvrage" ? &ensp;&ensp;
                        <input type="radio" name="situation-do-10ans" value="oui" onclick="showElement('situation-do-10ans-contrat')" required/>
                        <label class="text-gray-500 font-medium"> Oui &ensp;</label>
                        <input type="radio" name="situation-do-10ans" value="non" onclick="hideElement('situation-do-10ans-contrat')"/>
                        <label class="text-gray-500 font-medium"> Non</label>
                    </span>
                    <div id="situation-do-10ans-contrat" class="hidden ml-10 mt-4 ">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nom de l'assureur :&ensp;&ensp;</label>
                        <input type="text" name="situation-do-10ans-contrat-assureur" value="<?= isset($_SESSION['info-situation']['situation-do-10ans-contrat-assureur']) ? $_SESSION['info-situation']['situation-do-10ans-contrat-assureur'] : ''?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">N° de contrat :&ensp;&ensp;</label>
                        <input type="text" name="situation-do-10ans-contrat-numero" value="<?= isset($_SESSION['info-situation']['situation-do-10ans-contrat-numero']) ? $_SESSION['info-situation']['situation-do-10ans-contrat-numero'] : ''?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
                    </div>
                </div>
                <div class="mt-4 ml-10">
                    <span class="font-normal">Les existants sont-ils classés monuments historiques ou font-ils l'objet d'une protection du patrimoine ? &ensp;&ensp;
                        <input type="radio" name="situation-mon-hist" value="oui" required/>
                        <label class="text-gray-500 font-medium"> Oui &ensp;</label>
                        <input type="radio" name="situation-mon-hist" value="non"/>
                        <label class="text-gray-500 font-medium"> Non</label>
                    </span>
                </div>
        </div>
        
            <!-- Label -->
        <div class="mt-16">
            <h3 class="text-gray-500 font-medium">Label :</h3>
            <div class="my-2 ml-10">
                <span class="font-normal">L'opération de construction bénéficie-t-elle d'un label de performance énergétique (ex. BBC...) ? &ensp;&ensp;
                    <input type="radio" name="situation-label-energie" value="oui" required/>
                    <label class="text-gray-500 font-medium"> Oui &ensp;</label>
                    <input type="radio" name="situation-label-energie" value="non"/>
                    <label class="text-gray-500 font-medium"> Non</label>
                </span>  
            </div>
            <div class="my-2 ml-10">
                <span class="font-normal">L'opération de construction bénéficie-t-elle d'un label de qualité environnementale (ex. HQE...) ? &ensp;&ensp;
                    <input type="radio" name="situation-label-qualite" value="oui" required/>
                    <label class="text-gray-500 font-medium"> Oui &ensp;</label>
                    <input type="radio" name="situation-label-qualite" value="non"/>
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
                    <input type="radio" name="situation-etude-sol" value="oui" onclick="showElement('situation-etude-sol-form')" required/>
                    <label> Oui &ensp;</label>
                    <input type="radio" name="situation-etude-sol" value="non" onclick="hideElement('situation-etude-sol-form')"/>
                    <label> Non</label>
                </div>
            </div>
            <div id="situation-etude-sol-form" class="hidden px-8 py-4">
                <?php echo coordFormDisplay('situation-etude-sol'); ?>
                <div class="flex flex-col lg:flex-row ml-24 mt-2">
                    <span class="text-sm font-medium mt-2">Mission : &ensp;&ensp;</span>
                    <div class="flex flex-row ml-8 text-gray-500 font-medium mt-2">
                        <span><input type="radio" name="situation-etude-sol-bureau-mission" value="g2-amp" onclick="hideElement('situation-etude-sol-bureau-mission-autre')"/> G2 AMP</span>
                        <span class="ml-6"><input type="radio" name="situation-etude-sol-bureau-mission" value="g2-pro" onclick="hideElement('situation-etude-sol-bureau-mission-autre')"/> G2 Pro</span>
                        <span class="ml-6"><input type="radio" name="situation-etude-sol-bureau-mission" value="etude-sol-autre" onclick="showElement('situation-etude-sol-bureau-mission-autre')"/> Autre </span>
                    </div>
                    <div id="situation-etude-sol-bureau-mission-autre" class="hidden ml-4">
                        <input type="text" name="situation-etude-sol-bureau-mission-champ" value="<?= isset($_SESSION['info-situation']['situation-etude-sol-bureau-mission-champ']) ? $_SESSION['info-situation']['situation-etude-sol-bureau-mission-champ'] : ''?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Veuillez précisez"/>
                    </div>    
                </div>
            </div>
            <div class="flex flex-col lg:flex-row mt-6">
                <span class="ml-10 font-normal">
                    Si présence d'un parking et/ou de voiries, l'étude de sol vise-t-elle également ces ouvrages ?  &ensp;&ensp;
                </span>
                <div class="text-gray-500 font-medium">
                    <input type="radio" name="situation-etude-sol-parking" value="oui" required/>
                    <label> Oui &ensp;</label>
                    <input type="radio" name="situation-etude-sol-parking" value="non"/>
                    <label> Non</label>
                </div>
            </div>
        </div>
            <!-- Travaux annexes -->
        <div class="flex-column mt-16">
            <span class="text-gray-500 font-medium">Travaux annexes :</span>
            <div class="ml-10 mt-2">
                <span class="font-normal">S'agit-il d'une construction en bois ? &ensp;&ensp;
                    <input type="radio" name="situation-construction-bois" value="oui" required/>
                    <label class="text-gray-500 font-medium"> Oui &ensp;</label>
                    <input type="radio" name="situation-construction-bois" value="non"/>
                    <label class="text-gray-500 font-medium"> Non</label>
                </span>
            </div>
            <div class="ml-10 mt-2">
                <span class="font-normal">Y a-t-il la présence de panneaux photovoltaïques ? &ensp;&ensp;
                    <input type="radio" name="situation-pann-photo" value="oui" required/>
                    <label class="text-gray-500 font-medium"> Oui &ensp;</label>
                    <input type="radio" name="situation-pann-photo" value="non"/>
                    <label class="text-gray-500 font-medium"> Non</label>
                </span>
            </div>
            <div class="ml-10 mt-2">
                <span class="font-normal">L'opération de construction bénéficie-t-elle d'une installation géothermique ? &ensp;&ensp;
                    <input type="radio" name="situation-geothermie" value="oui" required/>
                    <label class="text-gray-500 font-medium"> Oui &ensp;</label>
                    <input type="radio" name="situation-geothermie" value="non"/>
                    <label class="text-gray-500 font-medium"> Non</label>
                </span>
            </div>
            <div class="ml-10 mt-2">
                <span class="font-normal">Y a-t-il intervention d'un contrôleur technique ? &ensp;&ensp;
                    <input type="radio" name="situation-controle-tech" value="oui" required/>
                    <label class="text-gray-500 font-medium"> Oui &ensp;</label>
                    <input type="radio" name="situation-controle-tech" value="non"/>
                    <label class="text-gray-500 font-medium"> Non</label>
                </span>
            </div>
        </div>

        <div class="flex flex-row justify-center mt-16">
            <!-- Bouton précédent -->                                          
            <div class="flex space-y-4 justify-center sm:space-y-0 mr-6">
                <a href="index.php?page=step3" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-32 px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Précédent
                </a>
            </div>
            <!-- Bouton suivant -->
            <div class="text-center ml-6">
                <button type="submit" name="send-step4" value="step4" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-32 px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Suivant</button>
            </div>
        </div>


        <input type="hidden" name="fields" value="situation">
    </form>
</section>


    
    
