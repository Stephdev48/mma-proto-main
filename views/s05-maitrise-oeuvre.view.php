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


<form action="" method="post">
    <!-- Maitrise d'oeuvre -->
    <div class="mt-20">
        <h3 class="text-gray-500 font-medium">Maitrise d'oeuvre</h3>
        <div class="flex flex-col lg:flex-row ml-10 mt-6">
            <span class="font-normal">Y a-t-il intervention d'un architecte ou d'un maitre d'oeuvre ? &ensp;&ensp;</span>
            <div class="ml-8 text-gray-500 font-medium">
                <input type="radio" name="moe-intervention" value="oui" onclick="radioFormOpen('moe-intervention-form')"/>
                <label> Oui &ensp;</label>
                <input type="radio" name="moe-intervention" value="non" onclick="radioFormClose('moe-intervention-form')"/>
                <label> Non</label>
            </div>
        </div>
        <div id="moe-intervention-form" class="hidden px-8 py-4">
            <div>
                <?php echo coordFormDisplay($currentstep.'-moe'); ?>
            </div>
            <div class="flex mt-16">
                <span class="font-normal">Est-il indépendant à l'égard des autres constructeurs et du maître d'ouvrage ?</span>
                <div class="ml-10">
                    <input type="radio" name="moe-inde" value="oui" onclick="radioFormClose('moe-inde-info')"/>
                    <label class="text-gray-500 font-medium"> Oui &ensp;</label>
                    <input type="radio" name="moe-inde" value="non" onclick="radioFormOpen('moe-inde-info')"/>
                    <label class="text-gray-500 font-medium"> Non</label>
                </div>
            </div>
        </div>
        <div id="moe-inde-info" class="hidden px-8 py-4">
            <div class="ml-10">
                <label for="moe-qualite" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Veuillez indiquer sa qualité, sa fonction</label>
                <input type="text" name="moe-qualite" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
            </div>
            <div class="ml-10 mt-4">
                <span class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Veuillez indiquer sa mission</span>
                <div class="ml-10">
                    <div>
                        <input type="radio" name="moe-mission-conception" value="conception">
                        <label for="moe-mission-conception" class="font-normal">Conception</label>
                    </div>
                    <div>
                        <input type="radio" name="moe-mission-direction" value="direction">
                        <label for="moe-mission-direction" class="font-normal">Direction et surveillance des travaux</label>
                    </div>
                    <div>                
                        <input type="radio" name="moe-mission-complete" value="complete">
                        <label for="moe-mission-complete" class="font-normal">Mission complète</label>
                    </div>
                    <div>                  
                        <input type="radio" name="moe-mission-autre" value="autre">
                        <label for="moe-mission-autre" class="font-normal">Autre</label>
                        <span class="text-xs">(à décrire : 
                            <input type="text" name="moe-mission-autre-descr" style="height:10px; width: 150px; border-radius:6px;" class="bg-gray-50"/> )
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
                    if (isset($_SESSION['info-travaux-annexes'])){
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
                <button type="submit" name="send-step2" value="step2" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-32 px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Suivant</button>
            </div>
        </div>


    <input type="hidden" name="fields" value="moe">
</form>