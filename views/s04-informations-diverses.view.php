<?php if(DEBUG==true):?>
    <div id="debug">
        <pre>
        <?php
        //if(!empty($_POST)){ var_dump($_POST);};
        //if(!empty($_FILES)){ var_dump($_FILES);};
        if(!empty($_SESSION)){ var_dump($_SESSION);};        
        ?>
        </pre>
    </div>
<?php endif;?> 




<section>
    <!-- Situation de l'ouvrage -->
    <form action="" method="post">
            <!-- Zone inondable -->
        <div>
            <span class="text-gray-500 font-medium">Est-il situé dans une zone inondable ? &ensp;&ensp;
                <input type="radio" name="situation-zone-inond" value="oui"/>
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
                <input type="radio" name="situation-insectes" value="oui"/>
                <label> Oui &ensp;</label>
                <input type="radio" name="situation-insectes" value="non"/>
                <label> Non</label>
            </span>  
        </div>
            <!-- Matériaux traditionnels ou technique courante -->
        <div class="mt-16">
            <span class="text-gray-500 font-medium">Les travaux sont-ils réalisés avec des matériaux traditionnels ou selon des procédés de technique courante ? &ensp;&ensp;
                <input type="radio" name="situation-proc-techniques" value="oui"/>
                <label> Oui &ensp;</label>
                <input type="radio" name="situation-proc-techniques" value="non"/>
                <label> Non</label>
            </span>  
        </div>
            <!-- Parking -->
        <div class="mt-16">
            <span class="text-gray-500 font-medium">Y a-t-il la présence d'un parking (accessoire de l'ouvrage) desservant l'ouvrage ? &ensp;&ensp;
                <input type="radio" name="situation-parking" value="oui"/>
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
                        <input type="radio" name="situation-do-10ans" value="oui" onclick="radioFormOpen('situation-do-10ans-contrat')"/>
                        <label class="text-gray-500 font-medium"> Oui &ensp;</label>
                        <input type="radio" name="situation-do-10ans" value="non" onclick="radioFormClose('situation-do-10ans-contrat')"/>
                        <label class="text-gray-500 font-medium"> Non</label>
                    </span>
                    <div id="situation-do-10ans-contrat" class="hidden ml-10 mt-4 ">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nom de l'assureur :&ensp;&ensp;</label>
                        <input type="text" name="situation-do-10ans-contrat-assureur" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">N° de contrat :&ensp;&ensp;</label>
                        <input type="text" name="situation-do-10ans-contrat-numero" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
                    </div>
                </div>
                <div class="mt-2 ml-10">
                    <span class="font-normal">Les existants sont-ils classés monuments historiques ou font-ils l'objet d'une protection du patrimoine ? &ensp;&ensp;
                        <input type="radio" name="situation-mon-hist" value="oui"/>
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
                    <input type="radio" name="label-energie" value="oui"/>
                    <label class="text-gray-500 font-medium"> Oui &ensp;</label>
                    <input type="radio" name="label-energie" value="non"/>
                    <label class="text-gray-500 font-medium"> Non</label>
                </span>  
            </div>
            <div class="my-2 ml-10">
                <span class="font-normal">L'opération de construction bénéficie-t-elle d'un label de qualité environnementale (ex. HQE...) ? &ensp;&ensp;
                    <input type="radio" name="label-qualite" value="oui"/>
                    <label class="text-gray-500 font-medium"> Oui &ensp;</label>
                    <input type="radio" name="label-qualite" value="non"/>
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
                    <input type="radio" name="etude-sol" value="oui" onclick="radioFormOpen('etude-sol-form')"/>
                    <label> Oui &ensp;</label>
                    <input type="radio" name="etude-sol" value="non" onclick="radioFormClose('etude-sol-form')"/>
                    <label> Non</label>
                </div>
            </div>
            <div id="etude-sol-form" class="hidden px-8 py-4">
                <div>
                    <?php echo coordFormDisplay($currentstep.'-es'); ?>
                </div>
                <div class="flex flex-col lg:flex-row mt-16">
                    <span class="ml-2 font-normal">
                        Si présence d'un parking et/ou de voiries, l'étude de sol vise-t-elle également ces ouvrages ?  &ensp;&ensp;
                    </span>
                    <div class="text-gray-500 font-medium">
                        <input type="radio" name="etude-sol-parking" value="oui"/>
                        <label> Oui &ensp;</label>
                        <input type="radio" name="etude-sol-parking" value="non"/>
                        <label> Non</label>
                    </div>
                </div>
            </div>
        </div>
            <!-- Travaux annexes -->
        <div class="flex-column mt-16">
            <span class="text-gray-500 font-medium">Travaux annexes :</span>
            <div class="ml-10 mt-2">
                <span class="font-normal">S'agit-il d'une construction en bois ? &ensp;&ensp;
                    <input type="radio" name="constr-bois" value="oui"/>
                    <label class="text-gray-500 font-medium"> Oui &ensp;</label>
                    <input type="radio" name="constr-bois" value="non"/>
                    <label class="text-gray-500 font-medium"> Non</label>
                </span>
            </div>
            <div class="ml-10 mt-2">
                <span class="font-normal">Y a-t-il la présence de panneaux photovoltaïques ? &ensp;&ensp;
                    <input type="radio" name="pann-photo" value="oui"/>
                    <label class="text-gray-500 font-medium"> Oui &ensp;</label>
                    <input type="radio" name="pann-photo" value="non"/>
                    <label class="text-gray-500 font-medium"> Non</label>
                </span>
            </div>
            <div class="ml-10 mt-2">
                <span class="font-normal">L'opération de construction bénéficie-t-elle d'une installation géothermique ? &ensp;&ensp;
                    <input type="radio" name="geothermie" value="oui"/>
                    <label class="text-gray-500 font-medium"> Oui &ensp;</label>
                    <input type="radio" name="geothermie" value="non"/>
                    <label class="text-gray-500 font-medium"> Non</label>
                </span>
            </div>
            <div class="ml-10 mt-2">
                <span class="font-normal">Y a-t-il intervention d'un contrôleur technique ? &ensp;&ensp;
                    <input type="radio" name="control-tech" value="oui"/>
                    <label class="text-gray-500 font-medium"> Oui &ensp;</label>
                    <input type="radio" name="control-tech" value="non"/>
                    <label class="text-gray-500 font-medium"> Non</label>
                </span>
            </div>
        </div>
            <!-- Bouton suivant -->
        <div class="mt-16 text-center">
            <button type="submit" name="send-step4" value="step4" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-2/5 lg:w-1/5 px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Suivant</button>
        </div>

        <input type="hidden" name="fields" value="situation">
    </form>
</section>


    
    
