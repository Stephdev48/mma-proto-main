<?php
    //Customized title
    $title = "Accueil DO";
    
    // Filling the content variable
    ob_start();
    ?>

<section class="bg-white dark:bg-gray-900">
            <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16">
                <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-2xl dark:text-white">Demande Ouvrage</h1>
                <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 lg:px-48 dark:text-gray-400">Ce contrat est commercialisé par la société Cabinet Cotton Alexandre, courtier/agent d’assurance –  immatriculé  à  l’Orias  (Registre  unique  des  intermédiaires  en  assurance)  sous  le  numéro  18002947 (www.orias.fr) et au RCS de Mende n° 840 357 743.  
                Le siège social de la société Cabinet Cotton Alexandre est situé au 5, rue Boulevard du Soubeyran 48000 MENDE. La forme juridique de la société Cabinet Cotton Alexandre est une EIRL. 

                La société Cabinet Cotton Alexandre ne détient aucune participation directe ou indirecte d’une compagnie d’assurance. Aucune compagnie d’assurance ne détient de participation directe ou indirecte dans la société Cabinet Cotton Alexandre. 
                La société Cabinet Cotton Alexandre  exerce son activité de courtage d’assurance conformément à l’article L.520-1, II, 1°, b) du code des assurances.  
                Le nom des entreprises d’assurance avec lesquelles la société Cabinet Cotton Alexandre travaille en qualité de courtier, sont : 
                GROUPAMA, GENERALI, L’AUXILIAIRE, QBE, HELVETIA METLIFE, EUROP ASSISTANCE, GROUPE ZEPHIR, NETVOX, APRIL, AIG, ALBINGIA, TETRIS, AXRE, ENTORIA, ALPTIS, KLARITY, ERGO, APICIL, CHUBB.                            
                En cas de difficulté dans l’application du contrat d’assurance, vous pouvez adresser votre réclamation par courrier à Cabinet Cotton Alexandre à l’adresse du siège social ou par email cabinetcotton@outlook.fr : Vous recevrez un accusé de réception au maximum sous 10  jours et une réponse dans un délai maximum de 2 mois. En cas d’échec de votre réclamation, vous pouvez vous adresser au Médiateur de l’Assurance soit par courrier à La Médiation de l’Assurance, TSA 50110 75441 Paris Cedex 09, ou par mail : le.mediateur@mediation-assurance.org 
                La société SARL Cabinet Cotton Alexandre est soumise au contrôle de l’Autorité de Contrôle Prudentiel et de Résolution (ACPR) – 4 place de Budapest – CS 92459, 75436 PARIS Cedex 09. 
                    
                        
                    <div class="flex items-center mb-4">
                    <input checked id="checkbox-1" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" >
                    <label for="checkbox-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">I agree to the <a href="#" class="text-blue-600 hover:underline dark:text-blue-500">terms and conditions</a>.</label>
                    </div><br />  
                </p>                                                       
                <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
                    <a href="views/step1.view.php" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                        Débuter
                        <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                </div>
            </div>
        </section>

<?php
    $content = ob_get_clean();
    require("base.view.php");
    ?>