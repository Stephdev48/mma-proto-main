    <!-- Situation de l'ouvrage -->
<form action="" method="post">
        <!-- Zone inondable -->
    <div>
        <span class="text-gray-500 font-medium">Est-il situé dans une zone inondable ? &ensp;&ensp;
            <input type="radio" name="zone-inond"/>
            <label for="zone-inond"> Oui &ensp;</label>
            <input type="radio" name="zone-inond"/>
            <label for="zone-inond"> Non</label>
        </span>  
    </div>
        <!-- Zone sismicité -->
    <div class="flex-column mt-16">
        <span class="text-gray-500 font-medium">Dans quelle zone de sismicité est-il situé ?</span>
        <div class="ml-10 mt-2">
            <input type="radio" name="sism-range"/><label for="sism-range" class="mr-6 text-sm lg:text-base"> 1 (très faible)</label>
            <input type="radio" name="sism-range"/><label for="sism-range" class="mr-6 text-sm lg:text-base"> 2 (faible)</label>
            <input type="radio" name="sism-range"/><label for="sism-range" class="mr-6 text-sm lg:text-base"> 3 (modérée)</label>
            <input type="radio" name="sism-range"/><label for="sism-range" class="mr-6 text-sm lg:text-base"> 4 (moyenne)</label>
            <input type="radio" name="sism-range"/><label for="sism-range" class="text-sm lg:text-base"> 5 (forte)</label>
        </div>
    </div>
        <!-- Zone termites insectes -->
    <div class="mt-16">
        <span class="text-gray-500 font-medium">Est-il situé dans une zone contaminée par les termites ou autres insectes xylophages ? &ensp;&ensp;
            <input type="radio" name="insectes"/><label for="insectes"> Oui &ensp;</label><input type="radio" name="insectes"/><label for="insectes"> Non</label>
        </span>  
    </div>
        <!-- Matériaux traditionnels ou technique courante -->
    <div class="mt-16">
        <span class="text-gray-500 font-medium">Les travaux sont-ils réalisés avec des matériaux traditionnels ou selon des procédés de technique courante ? &ensp;&ensp;
            <input type="radio" name="proc-techniques"/><label for="proc-techniques"> Oui &ensp;</label><input type="radio" name="proc-techniques"/><label for="proc-techniques"> Non</label>
        </span>  
    </div>
        <!-- Parking -->
    <div class="mt-16">
        <span class="text-gray-500 font-medium">Y a-t-il la présence d'un parking (accessoire de l'ouvrage) desservant l'ouvrage ? &ensp;&ensp;
            <input type="radio" name="parking"/>
            <label for="parking"> Oui &ensp;</label>
            <input type="radio" name="parking"/>
            <label for="parking"> Non</label>
        </span>  
    </div>
        <!-- Travaux sur existants -->
    <div class="mt-16">
        <h3 class="text-gray-500 font-medium">Si travaux sur une contruction existante ou sur existants :</h3>
            <div class="my-2 ml-10">
                <span class="font-normal">Si les existants datent de moins de 10 ans, ont-ils fait l'objet d'un contrat d'assurance "dommages ouvrage" ? &ensp;&ensp;
                    <input type="radio" name="do-10ans" onclick="radioFormOpen('contrat-do-10ans')"/>
                    <label for="do-10ans" class="text-gray-500 font-medium"> Oui &ensp;</label>
                    <input type="radio" name="do-10ans" onclick="radioFormClose('contrat-do-10ans')"/>
                    <label for="do-10ans" class="text-gray-500 font-medium"> Non</label>
                </span>
                <div id="contrat-do-10ans" class="hidden ml-10 mt-4 ">
                    <label for="contrat-do-assureur" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nom de l'assureur :&ensp;&ensp;</label>
                    <input type="text" name="contrat-do-assureur" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
                    <label for="contrat-do-numero" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">N° de contrat :&ensp;&ensp;</label>
                    <input type="text" name="contrat-do-numero" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
                </div>
            </div>
            <div class="mt-6 ml-10">
                <span class="font-normal">Les existants sont-ils classés monuments historiques ou font-ils l'objet d'une protection du patrimoine ? &ensp;&ensp;
                    <input type="radio" name="exist-mon-hist"/><label for="exist-mon-hist" class="text-gray-500 font-medium"> Oui &ensp;</label><input type="radio" name="exist-mon-hist"/><label for="exist-mon-hist" class="text-gray-500 font-medium"> Non</label>
                </span>
            </div>
    </div>
        <!-- Label -->
    <div class="mt-16">
        <h3 class="text-gray-500 font-medium">Label :</h3>
        <div class="my-2 ml-10">
            <span class="font-normal">L'opération de construction bénéficie-t-elle d'un label de performance énergétique (ex. BBC...) ? &ensp;&ensp;
                <input type="radio" name="label-energie" value="oui"/>
                <label for="label-energie" class="text-gray-500 font-medium"> Oui &ensp;</label>
                <input type="radio" name="label-energie" value="non"/>
                <label for="label-energie" class="text-gray-500 font-medium"> Non</label>
            </span>  
        </div>
        <div class="my-2 ml-10">
            <span class="font-normal">L'opération de construction bénéficie-t-elle d'un label de qualité environnementale (ex. HQE...) ? &ensp;&ensp;
                <input type="radio" name="label-qualite" value="oui"/>
                <label for="label-qualite" class="text-gray-500 font-medium"> Oui &ensp;</label>
                <input type="radio" name="label-qualite" value="non"/>
                <label for="label-qualite" class="text-gray-500 font-medium"> Non</label>
            </span>
        </div>
    </div>
        <!-- Etude de sol -->
    <div class="mt-20">
        <h3 class="text-gray-500 font-medium">Etude de sol</h3>
        <div class="flex flex-col lg:flex-row ml-10 mt-6">
            <span class="font-normal">Intervention d'un bureau spécialisé ? &ensp;&ensp;</span>
            <div class="ml-8 text-gray-500 font-medium">
                <input type="radio" name="etude-sol" value="oui" id="check-yes" onclick="radioFormOpen('etude-sol-form')"/>
                <label for="etude-sol"> Oui &ensp;</label>
                <input type="radio" name="etude-sol" value="non" id="check-no" onclick="radioFormClose('etude-sol-form')"/>
                <label for="etude-sol"> Non</label>
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
                    <label for="etude-sol-parking"> Oui &ensp;</label>
                    <input type="radio" name="etude-sol-parking" value="non"/>
                    <label for="etude-sol-parking"> Non</label>
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
                <label for="constr-bois" class="text-gray-500 font-medium"> Oui &ensp;</label>
                <input type="radio" name="constr-bois" value="non"/>
                <label for="constr-bois" class="text-gray-500 font-medium"> Non</label>
            </span>
        </div>
        <div class="ml-10 mt-2">
            <span class="font-normal">Y a-t-il la présence de panneaux photovoltaïques ? &ensp;&ensp;
                <input type="radio" name="pann-photo" value="oui"/>
                <label for="pann-photo" class="text-gray-500 font-medium"> Oui &ensp;</label>
                <input type="radio" name="pann-photo" value="non"/>
                <label for="pann-photo" class="text-gray-500 font-medium"> Non</label>
            </span>
        </div>
        <div class="ml-10 mt-2">
            <span class="font-normal">L'opération de construction bénéficie-t-elle d'une installation géothermique ? &ensp;&ensp;
                <input type="radio" name="geothermie" value="oui"/>
                <label for="geothermie" class="text-gray-500 font-medium"> Oui &ensp;</label>
                <input type="radio" name="geothermie" value="non"/>
                <label for="geothermie" class="text-gray-500 font-medium"> Non</label>
            </span>
        </div>
        <div class="ml-10 mt-2">
            <span class="font-normal">Y a-t-il intervention d'un contrôleur technique ? &ensp;&ensp;
                <input type="radio" name="control-tech" value="oui"/>
                <label for="control-tech" class="text-gray-500 font-medium"> Oui &ensp;</label>
                <input type="radio" name="control-tech" value="non"/>
                <label for="control-tech" class="text-gray-500 font-medium"> Non</label>
            </span>
        </div>
    </div>
        <!-- Send button -->
    <div class="mt-16 text-center">
        <button type="submit" name="send-step4" value="step4" class="myContainer text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-2/5 lg:w-1/5 px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Suivant</button>
    </div>

    <input type="hidden" name="fields" value="situation">
</form>


    
    
