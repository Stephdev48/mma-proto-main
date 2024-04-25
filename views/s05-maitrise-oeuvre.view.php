<form action="" method="post">
    <!-- Maitrise d'oeuvre -->
    <div class="mt-20">
        <h3 class="text-gray-500 font-medium">Maitrise d'oeuvre</h3>
        <div class="flex flex-col lg:flex-row ml-10 mt-6">
            <span class="font-normal">Y a-t-il intervention d'un architecte ou d'un maitre d'oeuvre ? &ensp;&ensp;</span>
            <div class="ml-8 text-gray-500 font-medium">
                <input type="radio" name="moa-intervention" onclick="radioFormOpen('moa-intervention-form')"/>
                <label for="moa-intervention"> Oui &ensp;</label>
                <input type="radio" name="moa-intervention" onclick="radioFormClose('moa-intervention-form')"/>
                <label for="moa-intervention"> Non</label>
            </div>
        </div>
        <div id="moa-intervention-form" class="hidden px-8 py-4">
            <div>
                <?php echo coordFormDisplay($currentstep.'-moa'); ?>
            </div>
            <div class="flex mt-16">
                <span class="font-normal">Est-il indépendant à l'égard des autres constructeurs et du maître d'ouvrage ?</span>
                <div class="ml-10">
                    <input type="radio" name="moa-inde" onclick="radioFormClose('moa-inde-info')"/>
                    <label for="moa-inde" class="text-gray-500 font-medium"> Oui &ensp;</label>
                    <input type="radio" name="moa-inde" onclick="radioFormOpen('moa-inde-info')"/>
                    <label for="moa-inde" class="text-gray-500 font-medium"> Non</label>
                </div>
            </div>
        </div>
        <div id="moa-inde-info" class="hidden px-8 py-4">
            <div class="ml-10">
                <label for="moa-qualite" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Veuillez indiquer sa qualité, sa fonction</label>
                <input type="text" name="moa-qualite" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
            </div>
            <div class="ml-10 mt-4">
                <span for="moa-mission" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Veuillez indiquer sa mission</span>
                <div class="ml-10">
                    <div>
                        <input type="checkbox" name="moa-mission-concep">
                        <label for="moa-mission-concep" class="font-normal">Conception</label>
                    </div>
                    <div>
                        <input type="checkbox" name="moa-mission-direction">
                        <label for="moa-mission-direction" class="font-normal">Direction et surveillance des travaux</label>
                    </div>
                    <div>                
                        <input type="checkbox" name="moa-mission-complete">
                        <label for="moa-mission-complete" class="font-normal">Mission complète</label>
                    </div>
                    <div>                  
                        <input type="checkbox" name="moa-mission-autre">
                        <label for="moa-mission-autre" class="font-normal">Autre</label>
                        <span class="text-xs">(à décrire : <input type="text" name="moa-mission-autre-descr" style="height:10px; width: 150px; border-radius:6px;" class="bg-gray-50"/> )</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
</form>