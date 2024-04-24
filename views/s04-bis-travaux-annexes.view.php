<form action="" method="post">
        <!-- Construction bois -->
    <div class="myContainer mt-20">
        <h3 class="text-gray-500 font-medium">Construction en bois</h3>
        <div class="ml-10 mt-4">
            <span class="font-normal">La structure de la construction (poteaux, poutres et voiles) est-elle en bois ? &ensp;&ensp;
                <input type="radio" name="bois-structure" id=""/><label for="bois-structure" class="text-gray-500 font-medium"> Oui &ensp;</label><input type="radio" name="bois-structure" id=""/><label for="bois-structure" class="text-gray-500 font-medium"> Non</label>
            </span>
        </div>
        <div class="ml-10 mt-4">
            <span class="font-normal">L'enveloppe de la construction (façade, planchers et balcons) est-elle en bois ? &ensp;&ensp;
                <input type="radio" name="bois-enveloppe" id=""/><label for="bois-enveloppe" class="text-gray-500 font-medium"> Oui &ensp;</label><input type="radio" name="bois-enveloppe" id=""/><label for="bois-enveloppe" class="text-gray-500 font-medium"> Non</label>
            </span>
        </div>
        <div class="ml-10 mt-4">
            <span class="font-normal">Les produits utilisés bénéficient-ils d'un marquage CE ? &ensp;&ensp;
                <input type="radio" name="produits-ce" id=""/><label for="produits-ce" class="text-gray-500 font-medium"> Oui &ensp;</label><input type="radio" name="produits-ce" id=""/><label for="produits-ce" class="text-gray-500 font-medium"> Non</label>
            </span>
        </div>
        <div class="ml-10 mt-4">
            <span class="font-normal">Nom de l'entreprise réalisant la construction : &ensp;&ensp;</span>
            <div><?php coordFormDisplay($currentstep.'-bois'); ?></div>
        </div>
    </div>

        <!-- Panneaux photovoltaïques -->
    <div class="myContainer mt-20">
        <h3 class="text-gray-500 font-medium">Panneaux photovoltaïques</h3>
        <div class="ml-10 mt-6">
            <h3 class="font-normal">Quel est le système de montage des panneaux ? &ensp;&ensp;</h3>
            <div class="ml-10">
                <span>
                    <input type="radio" name="pv-montage" id=""/>
                    <label for="pv-montage"> intégrés à la toiture</label>
                </span>
                <span class="ml-4">
                    <input type="radio" name="pv-montage" id=""/>
                    <label for="pv-montage"> surimposés à la toiture</label>
                </span>
                <span class="ml-4">
                    <input type="radio" name="pv-montage" id=""/>
                    <label for="pv-montage"> autres (ex : façade... )</label>
                </span>
            </div>
        </div>
        <div class="ml-10 mt-4">
            <span class="font-normal">Les procédés mis en oeuvre bénéficient-ils d'un avis technique ? &ensp;&ensp;
                <input type="radio" name="pv-proc-tech" id="" onclick="radioFormClose('pv-etn-field')"/>
                <label for="pv-proc-tech" class="text-gray-500 font-medium"> Oui &ensp;</label>
                <input type="radio" name="pv-proc-tech" id="" onclick="radioFormOpen('pv-etn-field')"/>
                <label for="pv-proc-tech" class="text-gray-500 font-medium"> Non</label>
            </span>
            <div id="pv-etn-field" class="hidden">
                <span class="font-normal ml-10">- Sont-ils visés par une Enquête de Technique Nouvelle (ETN) ? &ensp;&ensp;
                    <input type="radio" name="pv-etn" id=""/>
                    <label for="pv-etn" class="text-gray-500 font-medium"> Oui &ensp;</label>
                    <input type="radio" name="pv-etn" id=""/>
                    <label for="pv-etn" class="text-gray-500 font-medium"> Non</label>
                </span>
            </div>
        </div>
        <div class="ml-10 mt-4">
            <span class="font-normal">En présence d'un avis technique, les procédés figurent-ils sur la liste verte de la C2P ? &ensp;&ensp;
                <input type="radio" name="liste-c2p" id=""/>
                <label for="liste-c2p" class="text-gray-500 font-medium"> Oui &ensp;</label>
                <input type="radio" name="liste-c2p" id=""/>
                <label for="liste-c2p" class="text-gray-500 font-medium"> Non</label>
            </span>  
        </div>
        <div class="ml-10 mt-4">
            <span class="font-normal">Quelle est la surface de l'installation ?<input type="text" name="pv-surface" style="height:10px; width: 60px; border-radius:6px;" class="bg-gray-50 ml-4"/> m²</span>
        </div>
        <div class="ml-10 mt-4">
            <span class="font-normal">Quelle est la puissance de l'installation ?<input type="text" name="pv-puissance" style="height:10px; width: 60px; border-radius:6px;" class="bg-gray-50 ml-4"/> kWc</span>
        </div>
        <div class="ml-10 mt-4">
            <h3 class="font-normal">Quelle est la destination de l'électricité produite par l'installation photovoltaïque ? &ensp;&ensp;</h3>
            <div class="ml-10">
                <span>
                    <input type="radio" name="pv-destination" id=""/>
                    <label for="pv-destination"> Revente à un opérateuer dans le domaine de l'énergie</label>
                </span>
                <span class="ml-4">
                    <input type="radio" name="pv-destination" id=""/>
                    <label for="pv-destination"> Autoconsommation</label>
                </span>
            </div>
        </div>
        <div class="ml-10 mt-4">
            <span class="font-normal">Nom de l'entreprise réalisant l'installation' : &ensp;&ensp;</span>
            <div><?php coordFormDisplay($currentstep.'-pv'); ?></div>
        </div>
    </div>

        <!-- Géothermie -->
    <div class="myContainer mt-20">
        <h3 class="text-gray-500 font-medium">Géothermie</h3>
        <div class="ml-10 mt-6">
            <span class="font-normal">Nom de l'entreprise réalisant les forages : &ensp;&ensp;</span>
            <div><?php coordFormDisplay($currentstep.'-geo'); ?></div>
        </div>
    </div>

        <!-- Contrôleur technique-->
    <div class="myContainer mt-20">
        <h3 class="text-gray-500 font-medium">Contrôleur technique</h3>
        <div class="ml-10 mt-6">
            <span class="font-normal">Nom du contrôleur technique : &ensp;&ensp;</span>
            <div><?php coordFormDisplay($currentstep.'-ct'); ?></div>
        </div>
        <div class="ml-10 mt-14">
            <h3 class="font-normal mb-4">Type de contrôle :</h3>
            <div class="flex flex-row ml-10">
                <div class="flex flex-col">
                    <span><input type="radio" name="type-controle"/> L</span>
                    <span><input type="radio" name="type-controle"/> L + TH</span>
                    <span><input type="radio" name="type-controle"/> LE</span>
                    <span><input type="radio" name="type-controle"/> LE + TH</span>
                </div>
                <div class="flex flex-col ml-12">
                    <span><input type="radio" name="type-controle"/> L + Autres ( précisez : <input type="text" name="pv-puissance" style="height:10px; width: 60px; border-radius:6px;" class="bg-gray-50 ml-4"/> )</span>
                    <span><input type="radio" name="type-controle"/> L + TH + Autres ( précisez : <input type="text" name="pv-puissance" style="height:10px; width: 60px; border-radius:6px;" class="bg-gray-50 ml-4"/> )</span>
                    <span><input type="radio" name="type-controle"/> LE + Autres ( précisez : <input type="text" name="pv-puissance" style="height:10px; width: 60px; border-radius:6px;" class="bg-gray-50 ml-4"/> )</span>
                    <span><input type="radio" name="type-controle"/> LE + TH + Autres ( précisez : <input type="text" name="pv-puissance" style="height:10px; width: 60px; border-radius:6px;" class="bg-gray-50 ml-4"/> )</span>
                </div>
            </div>
        </div>

    </div>
 
        <!-- Send button -->
    <div class="myContainer mt-20 text-center">
        <button type="submit" name="send-step5" value="step5" class="myContainer text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Suivant</button>
    </div>
</form>

