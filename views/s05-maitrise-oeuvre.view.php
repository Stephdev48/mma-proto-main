<form action="" method="post">
    <!-- Maitrise d'oeuvre -->
    <div class="">
        <h3 class="text-gray-500 font-medium">Maitrise d'oeuvre</h3>
        <div class="flex flex-col lg:flex-row ml-10 mt-6">
            <span class="font-normal">Y a-t-il intervention d'un architecte ou d'un maitre d'oeuvre ? &ensp;&ensp;</span>
            <div class="ml-8 text-gray-500 font-medium">
                <input type="radio" name="moe_intervention" value="1" onclick="showElement('moe_intervention_form')" required/>
                <label> Oui &ensp;</label>
                <input type="radio" name="moe_intervention" value="0" onclick="hideElement('moe_intervention_form')"/>
                <label> Non</label>
            </div>
        </div>
        <div id="moe_intervention_form" class="hidden px-8 py-4">
            <div>
                <?php echo coordFormDisplay('moe'); ?>
            </div>
            <div class="flex mt-16">
                <span class="font-normal">Est-il indépendant à l'égard des autres constructeurs et du maître d'ouvrage ?</span>
                <div class="ml-10">
                    <input type="radio" name="moe_intervention_independant" value="1" onclick="hideElement('moe_intervention_independant_info')"/>
                    <label class="text-gray-500 font-medium"> Oui &ensp;</label>
                    <input type="radio" name="moe_intervention_independant" value="0" onclick="showElement('moe_intervention_independant_info')"/>
                    <label class="text-gray-500 font-medium"> Non</label>
                </div>
            </div>
        </div>
        <div id="moe_intervention_independant_info" class="hidden px-8 py-4">
            <div class="ml-10">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Veuillez indiquer sa qualité, sa fonction</label>
                <input type="text" name="moe_intervention_independant_qualite" value="<?= isset($_SESSION['info_moe']['moe_intervention_independant_qualite']) ? $_SESSION['info_moe']['moe_intervention_independant_qualite'] : ''?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
            </div>
            <div class="ml-10 mt-4">
                <span class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Veuillez indiquer sa mission</span>
                <div class="ml-10">
                    <div>
                        <input type="radio" name="moe_intervention_independant_mission" value="conception">
                        <label class="font-normal">Conception</label>
                    </div>
                    <div>
                        <input type="radio" name="moe_intervention_independant_mission" value="direction">
                        <label class="font-normal">Direction et surveillance des travaux</label>
                    </div>
                    <div>                
                        <input type="radio" name="moe_intervention_independant_mission" value="complete">
                        <label class="font-normal">Mission complète</label>
                    </div>
                    <div>                  
                        <input type="radio" name="moe_intervention_independant_mission" value="autre">
                        <label class="font-normal">Autre</label>
                        <span class="text-xs">(à décrire : 
                            <input type="text" name="moe_intervention_independant_mission_autre_descr" value="<?= isset($_SESSION['info_moe']['moe_intervention_mission_autre_descr']) ? $_SESSION['info_moe']['moe_intervention_mission_autre_descr'] : ''?>" style="height:10px; width: 350px; border-radius:6px; font-size:14px;" class="bg-gray-50"/> )
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="flex flex-row justify-center mt-16">
        <!-- Bouton précédent -->                                          
        <div class="flex space-y-4 justify-center sm:space-y-0 mr-6">
            <?php
                if (isset($_SESSION['info_travaux_annexes'])){
                    echo '<a href="index.php?page=step4bis" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-32 px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Précédent</a>';
                }else{
                    echo '<a href="index.php?page=step4" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-32 px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Précédent
                </a>';
                }
            ?>
        </div>
        <!-- Bouton suivant -->
        <div class="text-center ml-6">
            <button type="submit" name="send_step5" value="step5" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-32 px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Suivant</button>
        </div>
    </div>


    <input type="hidden" name="fields" value="moe">
</form>