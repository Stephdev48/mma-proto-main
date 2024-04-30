<?php if(DEBUG==true):?>
    <div id="debug">
        <pre>
        <?php
        //if(!empty($_POST)){ var_dump($_POST);};
        //if(!empty($_FILES)){ var_dump($_FILES);};
        if(!empty($_SESSION)){ var_dump($_SESSION);};
        //var_dump($array_datas);
        ?>
        </pre>
    </div>
<?php endif;?> 
<form action="" method="post">
        <!-- Construction bois -->
    <?php
    if($_SESSION["info-situation"]['situation-construction-bois']=='oui'):
    ?>        
    <div class="mt-20">
        <h3 class="text-gray-500 font-medium">Construction en bois</h3>
        <div class="ml-10 mt-4">
            <span class="font-normal">La structure de la construction (poteaux, poutres et voiles) est-elle en bois ? &ensp;&ensp;
                <input type="radio" name="trav-annexes-constr-bois" value="oui"/>
                <label class="text-gray-500 font-medium"> Oui &ensp;</label>
                <input type="radio" name="trav-annexes-constr-bois" value="non"/>
                <label class="text-gray-500 font-medium"> Non</label>
            </span>
        </div>
        <div class="ml-10 mt-4">
            <span class="font-normal">L'enveloppe de la construction (façade, planchers et balcons) est-elle en bois ? &ensp;&ensp;
                <input type="radio" name="trav-annexes-constr-bois-enveloppe" value="oui"/>
                <label class="text-gray-500 font-medium"> Oui &ensp;</label>
                <input type="radio" name="trav-annexes-constr-bois-enveloppe" value="non"/>
                <label class="text-gray-500 font-medium"> Non</label>
            </span>
        </div>
        <div class="ml-10 mt-4">
            <span class="font-normal">Les produits utilisés bénéficient-ils d'un marquage CE ? &ensp;&ensp;
                <input type="radio" name="trav-annexes-constr-produits-ce"  value="oui"/>
                <label class="text-gray-500 font-medium"> Oui &ensp;</label>
                <input type="radio" name="trav-annexes-constr-produits-ce" value="non"/>
                <label class="text-gray-500 font-medium"> Non</label>
            </span>
        </div>
        <div class="ml-10 mt-4">
            <span class="font-normal">Nom de l'entreprise réalisant la construction : &ensp;&ensp;</span>
            <div><?php echo coordFormDisplay('bois'); ?></div>
        </div>
    </div>
    <?php
    endif;  // fin construction bois
    ?>

    <!-- Panneaux photovoltaïques -->
    <?php
    if($_SESSION["info-situation"]['situation-pann-photo']=='oui'):
    ?>    
    <div class="mt-20">
        <h3 class="text-gray-500 font-medium">Panneaux photovoltaïques</h3>
        <div class="ml-10 mt-6">
            <h3 class="font-normal">Quel est le système de montage des panneaux ? &ensp;&ensp;</h3>
            <div class="ml-10">
                <span>
                    <input type="radio" name="trav-annexes-pv-montage" value="integre"/>
                    <label> intégrés à la toiture</label>
                </span>
                <span class="ml-4">
                    <input type="radio" name="trav-annexes-pv-montage" value="surimpose"/>
                    <label> surimposés à la toiture</label>
                </span>
                <span class="ml-4">
                    <input type="radio" name="trav-annexes-pv-montage" value="autre"/>
                    <label> autres (ex : façade... )</label>
                </span>
            </div>
        </div>
        <div class="ml-10 mt-4">
            <span class="font-normal">Les procédés mis en oeuvre bénéficient-ils d'un avis technique ? &ensp;&ensp;
                <input type="radio" name="trav-annexes-pv-proc-tech"value="oui" onclick="hideElement('pv-etn')"/>
                <label class="text-gray-500 font-medium"> Oui &ensp;</label>
                <input type="radio" name="trav-annexes-pv-proc-tech" value="non" onclick="showElement('pv-etn')"/>
                <label class="text-gray-500 font-medium"> Non</label>
            </span>
            <div id="pv-etn" class="hidden">
                <span class="font-normal ml-10">Sont-ils visés par une Enquête de Technique Nouvelle (ETN) ? &ensp;&ensp;
                    <input type="radio" name="trav-annexes-pv-etn" value="oui"/>
                    <label class="text-gray-500 font-medium"> Oui &ensp;</label>
                    <input type="radio" name="trav-annexes-pv-etn" value="non"/>
                    <label class="text-gray-500 font-medium"> Non</label>
                </span>
            </div>
        </div>
        <div class="ml-10 mt-4">
            <span class="font-normal">En présence d'un avis technique, les procédés figurent-ils sur la liste verte de la C2P ? &ensp;&ensp;
                <input type="radio" name="trav-annexes-pv-liste-c2p" value="oui"/>
                <label class="text-gray-500 font-medium"> Oui &ensp;</label>
                <input type="radio" name="trav-annexes-pv-liste-c2p" value="non"/>
                <label class="text-gray-500 font-medium"> Non</label>
            </span>  
        </div>
        <div class="ml-10 mt-4">
            <span class="font-normal">Quelle est la surface de l'installation ?
                <input type="text" name="trav-annexes-pv-surface" value="<?= isset($_SESSION['info-travaux-annexes']['trav-annexes-pv-surface']) ? $_SESSION['info-travaux-annexes']['trav-annexes-pv-surface'] : ''?>" style="height:10px; width: 60px; border-radius:6px;" class="bg-gray-50 ml-4"/> m²
            </span>
        </div>
        <div class="ml-10 mt-4">
            <span class="font-normal">Quelle est la puissance de l'installation ?
                <input type="text" name="trav-annexes-pv-puissance" value="<?= isset($_SESSION['info-travaux-annexes']['trav-annexes-pv-puissance']) ? $_SESSION['info-travaux-annexes']['trav-annexes-pv-puissance'] : ''?>" style="height:10px; width: 60px; border-radius:6px;" class="bg-gray-50 ml-4"/> kWc
            </span>
        </div>
        <div class="ml-10 mt-4">
            <h3 class="font-normal">Quelle est la destination de l'électricité produite par l'installation photovoltaïque ? &ensp;&ensp;</h3>
            <div class="ml-10">
                <span>
                    <input type="radio" name="trav-annexes-pv-destination" value="revente"/>
                    <label> revente à un opérateur dans le domaine de l'énergie</label>
                </span>
                <span class="ml-4">
                    <input type="radio" name="trav-annexes-pv-destination" value="autocons"/>
                    <label> autoconsommation</label>
                </span>
            </div>
        </div>
        <div class="ml-10 mt-4">
            <span class="font-normal">Nom de l'entreprise réalisant l'installation' : &ensp;&ensp;</span>
            <div><?php echo coordFormDisplay('pv'); ?></div>
        </div>
    </div>
    <?php
    endif;  // fin panneaux photovoltaïques
    ?>

    <!-- Géothermie -->
    <?php
    if($_SESSION["info-situation"]['situation-geothermie']=='oui'):
    ?>
    <div class="mt-20">
        <h3 class="text-gray-500 font-medium">Géothermie</h3>
        <div class="ml-10 mt-6">
            <span class="font-normal">Nom de l'entreprise réalisant les forages : &ensp;&ensp;</span>
            <div><?php echo coordFormDisplay('geo'); ?></div>
        </div>
    </div>
    <?php
    endif;  // fin géothermie
    ?>

    <!-- Contrôleur technique-->
    <?php
    if($_SESSION["info-situation"]['situation-control-tech']=='oui'):
    ?>
    <div class="mt-20">
        <h3 class="text-gray-500 font-medium">Contrôleur technique</h3>
        <div class="ml-10 mt-6">
            <span class="font-normal">Nom du contrôleur technique : &ensp;&ensp;</span>
            <div><?php echo coordFormDisplay('ct'); ?></div>
        </div>
        <div class="ml-10 mt-14">
            <h3 class="font-normal mb-4">Type de contrôle (choisissez l'option correspondante):</h3>
            <div class="flex flex-row ml-10">
                <div class="flex flex-col">
                    <span><input type="radio" name="trav-annexes-ct-type-controle" value="l"/> L</span>
                    <span><input type="radio" name="trav-annexes-ct-type-controle" value="lth"/> L + TH</span>
                    <span><input type="radio" name="trav-annexes-ct-type-controle" value="le"/> LE</span>
                    <span><input type="radio" name="trav-annexes-ct-type-controle" value="leth"/> LE + TH</span>
                </div>
                <div class="flex flex-col ml-12">
                    <span><input type="radio" name="trav-annexes-ct-type-controle" value="lautre"/> L + Autres ( précisez : <input type="text" name="pv-puissance" style="height:10px; width: 60px; border-radius:6px;" class="bg-gray-50 ml-4"/> )</span>
                    <span><input type="radio" name="trav-annexes-ct-type-controle" value="lthautre"/> L + TH + Autres ( précisez : <input type="text" name="pv-puissance" style="height:10px; width: 60px; border-radius:6px;" class="bg-gray-50 ml-4"/> )</span>
                    <span><input type="radio" name="trav-annexes-ct-type-controle" value="leautre"/> LE + Autres ( précisez : <input type="text" name="pv-puissance" style="height:10px; width: 60px; border-radius:6px;" class="bg-gray-50 ml-4"/> )</span>
                    <span><input type="radio" name="trav-annexes-ct-type-controle" value="lethautre"/> LE + TH + Autres ( précisez : <input type="text" name="pv-puissance" style="height:10px; width: 60px; border-radius:6px;" class="bg-gray-50 ml-4"/> )</span>
                </div>
            </div>
        </div>

    </div>
    <?php
    endif;  // fin contrôleur technique
    ?>
 
    <div class="flex flex-row justify-center mt-16">
        <!-- Bouton précédent -->                                          
        <div class="flex space-y-4 justify-center sm:space-y-0 mr-6">
            <a href="index.php?page=step4" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-32 px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Précédent
            </a>
        </div>
        <!-- Bouton suivant -->
        <div class="text-center ml-6">
            <button type="submit" name="send-step4bis" value="step4bis" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-32 px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Suivant</button>
        </div>
    </div>


    <input type="hidden" name="fields" value="travaux-annexes">
</form>

