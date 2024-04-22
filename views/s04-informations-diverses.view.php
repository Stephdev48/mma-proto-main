    <!-- Situation de l'ouvrage -->
<section class="myContainer">
    <div class="">
        <span class="text-gray-500 font-medium">Est-il situé dans une zone inondable ? &ensp;&ensp;
            <input type="radio" name="zone-inond" id=""/><label for="zone-inond"> Oui &ensp;</label><input type="radio" name="zone-inond" id=""/><label for="zone-inond"> Non</label>
        </span>  
    </div>
    <div class="flex-column mt-10">
        <span class="text-gray-500 font-medium">Dans quelle zone de sismicité est-il situé ?</span>
        <div class="ml-10 mt-2">
            <input type="radio" name="sism-range"/><label for="sism-range" class="mr-6"> 1 (très faible)</label>
            <input type="radio" name="sism-range"/><label for="sism-range" class="mr-6"> 2 (faible)</label>
            <input type="radio" name="sism-range"/><label for="sism-range" class="mr-6"> 3 (modérée)</label>
            <input type="radio" name="sism-range"/><label for="sism-range" class="mr-6"> 4 (moyenne)</label>
            <input type="radio" name="sism-range"/><label for="sism-range"> 5 (forte)</label>
        </div>
    </div>
    <div class="mt-10">
        <span class="text-gray-500 font-medium">Est-il situé dans une zone contaminée par les termites ou autres insectes xylophages ? &ensp;&ensp;
            <input type="radio" name="insectes" id=""/><label for="insectes"> Oui &ensp;</label><input type="radio" name="insectes" id=""/><label for="insectes"> Non</label>
        </span>  
    </div>
    <div class="mt-10">
        <span class="text-gray-500 font-medium">Les travaux sont-ils réalisés avec des matériaux traditionnels ou selon des procédés de technique courante ? &ensp;&ensp;
            <input type="radio" name="proc-techniques" id=""/><label for="proc-techniques"> Oui &ensp;</label><input type="radio" name="proc-techniques" id=""/><label for="proc-techniques"> Non</label>
        </span>  
    </div>
    <div class="mt-10">
        <span class="text-gray-500 font-medium">Y a-t-il la présence d'un parking (accessoire de l'ouvrage) desservant l'ouvrage ? &ensp;&ensp;
            <input type="radio" name="parking" id=""/><label for="parking"> Oui &ensp;</label><input type="radio" name="parking" id=""/><label for="parking"> Non</label>
        </span>  
    </div>
    <div class="mt-10">
        <h3 class="text-gray-500 font-medium">Si travaux sur une contruction existante ou sur existants :</h3>
            <div class="my-2 ml-10">
                <span class="font-normal">Si les existants datent de moins de 10 ans, ont-ils fait l'objet d'un contrat d'assurance "dommages ouvrage" ? &ensp;&ensp;
                    <input type="radio" name="do-10ans" id="" onclick="radioFormOpen('contrat-do-10ans')"/><label for="do-10ans" class="text-gray-500 font-medium"> Oui &ensp;</label>
                    <input type="radio" name="do-10ans" id="" onclick="radioFormClose('contrat-do-10ans')"/><label for="do-10ans" class="text-gray-500 font-medium"> Non</label>
                </span>
                <div id="contrat-do-10ans" class="hidden ml-10 mt-4 ">
                    <label for="contrat-do-assureur" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nom de l'assureur :&ensp;&ensp;</label>
                    <input type="text" id="" name="contrat-do-assureur" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
                    <label for="contrat-do-numero" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">N° de contrat :&ensp;&ensp;</label>
                    <input type="text" id="" name="contrat-do-numero" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
                </div>
            </div>
            <div class="my-2 ml-10">
                <span class="font-normal">Les existants sont-ils classés monuments historiques ou font-ils l'objet d'une protection du patrimoine ? &ensp;&ensp;
                    <input type="radio" name="exist-mon-hist" id=""/><label for="exist-mon-hist" class="text-gray-500 font-medium"> Oui &ensp;</label><input type="radio" name="exist-mon-hist" id=""/><label for="exist-mon-hist" class="text-gray-500 font-medium"> Non</label>
                </span>
            </div>
    </div>
    <div class="mt-10">
        <h3 class="text-gray-500 font-medium">Label :</h3>
        <div class="my-2 ml-10">
            <span class="font-normal">L'opération de construction bénéficie-t-elle d'un label de performance énergétique (ex. BBC...) ? &ensp;&ensp;
                <input type="radio" name="label-energie" id=""/><label for="label-energie" class="text-gray-500 font-medium"> Oui &ensp;</label><input type="radio" name="label-energie" id=""/><label for="label-energie" class="text-gray-500 font-medium"> Non</label>
            </span>  
        </div>
        <div class="my-2 ml-10">
            <span class="font-normal">L'opération de construction bénéficie-t-elle d'un label de qualité environnementale (ex. HQE...) ? &ensp;&ensp;
                <input type="radio" name="label-qualite" id=""/><label for="label-qualite" class="text-gray-500 font-medium"> Oui &ensp;</label><input type="radio" name="label-qualite" id=""/><label for="label-qualite" class="text-gray-500 font-medium"> Non</label>
            </span>
        </div>
    </div>
</section>


    <!-- Travaux annexes -->
<section class="myContainer">
    <div class="flex-column mt-10">
        <span class="text-gray-500 font-medium">Travaux annexes :</span>
        <div class="ml-10 mt-2">
            <span class="text-gray-500 font-medium">S'agit-il d'une construction en bois ? &ensp;&ensp;
                <input type="radio" name="constr-bois" id=""/><label for="constr-bois"> Oui &ensp;</label><input type="radio" name="constr-bois" id=""/><label for="constr-bois"> Non</label>
            </span>
        </div>
        <div class="ml-10 mt-2">
            <span class="text-gray-500 font-medium">Y a-t-il la présence de pannaeux photovoltaïques ? &ensp;&ensp;
                <input type="radio" name="pann-photo" id=""/><label for="pann-photo"> Oui &ensp;</label><input type="radio" name="pann-photo" id=""/><label for="pann-photo"> Non</label>
            </span>
        </div>
        <div class="ml-10 mt-2">
            <span class="text-gray-500 font-medium">L'opération de construction bénéficie-t-elle d'une installation géothermique ? &ensp;&ensp;
                <input type="radio" name="geothermie" id=""/><label for="geothermie"> Oui &ensp;</label><input type="radio" name="geothermie" id=""/><label for="geothermie"> Non</label>
            </span>
        </div>
        <div class="ml-10 mt-2">
            <span class="text-gray-500 font-medium">Y a-t-il intervention d'un contrôleur technique ? &ensp;&ensp;
                <input type="radio" name="control-tech" id=""/><label for="control-tech"> Oui &ensp;</label><input type="radio" name="control-tech" id=""/><label for="control-tech"> Non</label>
            </span>
        </div>
    </div>
</section>
    
    
    <!-- Send button -->
<div class="myContainer mt-16 text-center">
    <button type="submit" name="send-step4" value="step4" class="myContainer text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Suivant</button>
</div>
