<form action="" method="post">
    <!-- Construction bois -->
    <?php
    if($_SESSION["info_situation"]['situation_construction_bois']=="1"):
    ?>        
    <div class="mt-20">
        <h3 class="text-gray-500 font-medium">Construction en bois</h3>
        <div class="ml-10 mt-4">
            <span class="font-normal">La structure de la construction (poteaux, poutres et voiles) est-elle en bois ? &ensp;&ensp;
                <input type="radio" name="trav_annexes_constr_bois" value="1"/>
                <label class="text-gray-500 font-medium"> Oui &ensp;</label>
                <input type="radio" name="trav_annexes_constr_bois" value="0"/>
                <label class="text-gray-500 font-medium"> Non</label>
            </span>
        </div>
        <div class="ml-10 mt-4">
            <span class="font-normal">L'enveloppe de la construction (façade, planchers et balcons) est-elle en bois ? &ensp;&ensp;
                <input type="radio" name="trav_annexes_constr_bois_enveloppe" value="1"/>
                <label class="text-gray-500 font-medium"> Oui &ensp;</label>
                <input type="radio" name="trav_annexes_constr_bois_enveloppe" value="0"/>
                <label class="text-gray-500 font-medium"> Non</label>
            </span>
        </div>
        <div class="ml-10 mt-4">
            <span class="font-normal">Les produits utilisés bénéficient-ils d'un marquage CE ? &ensp;&ensp;
                <input type="radio" name="trav_annexes_constr_produits_ce"  value="1"/>
                <label class="text-gray-500 font-medium"> Oui &ensp;</label>
                <input type="radio" name="trav_annexes_constr_produits_ce" value="0"/>
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
    if($_SESSION["info_situation"]['situation_pann_photo'] =="1"):
    ?>    
    <div class="mt-20">
        <h3 class="text-gray-500 font-medium">Panneaux photovoltaïques</h3>
        <div class="ml-10 mt-6">
            <h3 class="font-normal">Quel est le système de montage des panneaux ? &ensp;&ensp;</h3>
            <div class="ml-10">
                <span>
                    <input type="radio" name="trav_annexes_pv_montage" value="integre"/>
                    <label> intégrés à la toiture</label>
                </span>
                <span class="ml-4">
                    <input type="radio" name="trav_annexes_pv_montage" value="surimpose"/>
                    <label> surimposés à la toiture</label>
                </span>
                <span class="ml-4">
                    <input type="radio" name="trav_annexes_pv_montage" value="autre"/>
                    <label> autres (ex : façade... )</label>
                </span>
            </div>
        </div>
        <div class="ml-10 mt-4">
            <span class="font-normal">Les procédés mis en oeuvre bénéficient-ils d'un avis technique ? &ensp;&ensp;
                <input type="radio" name="trav_annexes_pv_proc_tech"value="1" onclick="hideElement('pv_etn')"/>
                <label class="text-gray-500 font-medium"> Oui &ensp;</label>
                <input type="radio" name="trav_annexes_pv_proc_tech" value="0" onclick="showElement('pv_etn')"/>
                <label class="text-gray-500 font-medium"> Non</label>
            </span>
            <div id="pv_etn" class="hidden">
                <span class="font-normal ml-10">Sont-ils visés par une Enquête de Technique Nouvelle (ETN) ? &ensp;&ensp;
                    <input type="radio" name="trav_annexes_pv_etn" value="1"/>
                    <label class="text-gray-500 font-medium"> Oui &ensp;</label>
                    <input type="radio" name="trav_annexes_pv_etn" value="0"/>
                    <label class="text-gray-500 font-medium"> Non</label>
                </span>
            </div>
        </div>
        <div class="ml-10 mt-4">
            <span class="font-normal">En présence d'un avis technique, les procédés figurent-ils sur la liste verte de la C2P ? &ensp;&ensp;
                <input type="radio" name="trav_annexes_pv_liste_c2p" value="1"/>
                <label class="text-gray-500 font-medium"> Oui &ensp;</label>
                <input type="radio" name="trav_annexes_pv_liste_c2p" value="0"/>
                <label class="text-gray-500 font-medium"> Non</label>
            </span>  
        </div>
        <div class="ml-10 mt-4">
            <span class="font-normal">Quelle est la surface de l'installation ?
                <input type="text" name="trav_annexes_pv_surface" value="<?= isset($_SESSION['info_travaux_annexes']['trav_annexes_pv_surface']) ? $_SESSION['info_travaux_annexes']['trav_annexes_pv_surface'] : ''?>" style="height:10px; width: 60px; border-radius:6px;" class="bg-gray-50 ml-4"/> m²
            </span>
        </div>
        <div class="ml-10 mt-4">
            <span class="font-normal">Quelle est la puissance de l'installation ?
                <input type="text" name="trav_annexes_pv_puissance" value="<?= isset($_SESSION['info_travaux_annexes']['trav_annexes_pv_puissance']) ? $_SESSION['info_travaux_annexes']['trav_annexes_pv_puissance'] : ''?>" style="height:10px; width: 60px; border-radius:6px;" class="bg-gray-50 ml-4"/> kWc
            </span>
        </div>
        <div class="ml-10 mt-4">
            <h3 class="font-normal">Quelle est la destination de l'électricité produite par l'installation photovoltaïque ? &ensp;&ensp;</h3>
            <div class="ml-10">
                <span>
                    <input type="radio" name="trav_annexes_pv_destination" value="revente"/>
                    <label> revente à un opérateur dans le domaine de l'énergie</label>
                </span>
                <span class="ml-4">
                    <input type="radio" name="trav_annexes_pv_destination" value="autocons"/>
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
    if($_SESSION["info_situation"]['situation_geothermie'] =="1"):
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
    if($_SESSION["info_situation"]['situation_controle_tech'] =="1"):
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
                    <span><input type="radio" name="trav_annexes_ct_type_controle" value="l"/> L</span>
                    <span><input type="radio" name="trav_annexes_ct_type_controle" value="lth"/> L + TH</span>
                    <span><input type="radio" name="trav_annexes_ct_type_controle" value="le"/> LE</span>
                    <span><input type="radio" name="trav_annexes_ct_type_controle" value="leth"/> LE + TH</span>
                </div>
                <div class="flex flex-col ml-12">
                    <span><input type="radio" name="trav_annexes_ct_type_controle" value="lautre"/> L + Autres ( précisez : <input type="text" name="trav_annexes_ct_type_controle_l_autres" style="height:10px; width: 60px; border-radius:6px;" class="bg-gray-50 ml-4"/> )</span>
                    <span><input type="radio" name="trav_annexes_ct_type_controle" value="lthautre"/> L + TH + Autres ( précisez : <input type="text" name="trav_annexes_ct_type_controle_lth_autres" style="height:10px; width: 60px; border-radius:6px;" class="bg-gray-50 ml-4"/> )</span>
                    <span><input type="radio" name="trav_annexes_ct_type_controle" value="leautre"/> LE + Autres ( précisez : <input type="text" name="trav_annexes_ct_type_controle_le_autres" style="height:10px; width: 60px; border-radius:6px;" class="bg-gray-50 ml-4"/> )</span>
                    <span><input type="radio" name="trav_annexes_ct_type_controle" value="lethautre"/> LE + TH + Autres ( précisez : <input type="text" name="trav_annexes_ct_type_controle_leth_autres" style="height:10px; width: 60px; border-radius:6px;" class="bg-gray-50 ml-4"/> )</span>
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
            <button type="submit" name="send_step4bis" value="step4bis" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-32 px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Suivant</button>
        </div>
    </div>


    <input type="hidden" name="fields" value="travaux_annexes">
</form>

