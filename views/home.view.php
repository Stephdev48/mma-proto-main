    <!-- CGU, RGPD et checkbox -->
<section class="bg-white dark:bg-gray-900">
    <div class="py-8 text-center lg:py-16">

        <!-- Champ texte CGU -->
        <h1 class="mb-4 text-3xl md:text-4xl lg:text-2xl font-extrabold tracking-tight leading-none text-gray-900 dark:text-white">Dommage Ouvrage</h1>
        <textarea id="cgu" rows="8" cols="80" class="mb-8 font-normal text-sm lg:text-lg text-gray-500 sm:px-4 lg:px-16 dark:text-gray-400">
            Ce contrat est commercialisé par la société Cabinet Cotton Alexandre, courtier/agent d'assurance -  immatriculé  à  l'Orias  (Registre  unique  des  intermédiaires  en  assurance)  sous  le  numéro  18002947 (www.orias.fr) et au RCS de Mende n° 840 357 743.  
            Le siège social de la société Cabinet Cotton Alexandre est situé au 5, rue Boulevard du Soubeyran 48000 MENDE. La forme juridique de la société Cabinet Cotton Alexandre est une EIRL. 

            La société Cabinet Cotton Alexandre ne détient aucune participation directe ou indirecte d'une compagnie d'assurance. Aucune compagnie d'assurance ne détient de participation directe ou indirecte dans la société Cabinet Cotton Alexandre. 
            La société Cabinet Cotton Alexandre  exerce son activité de courtage d'assurance conformément à l'article L.520-1, II, 1°, b du code des assurances.  
            Le nom des entreprises d'assurance avec lesquelles la société Cabinet Cotton Alexandre travaille en qualité de courtier, sont : 
            GROUPAMA, GENERALI, L'AUXILIAIRE, QBE, HELVETIA METLIFE, EUROP ASSISTANCE, GROUPE ZEPHIR, NETVOX, APRIL, AIG, ALBINGIA, TETRIS, AXRE, ENTORIA, ALPTIS, KLARITY, ERGO, APICIL, CHUBB.                            
            En cas de difficulté dans l'application du contrat d'assurance, vous pouvez adresser votre réclamation par courrier à Cabinet Cotton Alexandre à l'adresse du siège social ou par email cabinetcotton@outlook.fr : Vous recevrez un accusé de réception au maximum sous 10  jours et une réponse dans un délai maximum de 2 mois. En cas d'échec de votre réclamation, vous pouvez vous adresser au Médiateur de l'Assurance soit par courrier à La Médiation de l'Assurance, TSA 50110 75441 Paris Cedex 09, ou par mail : le.mediateur@mediation-assurance.org 
            La société SARL Cabinet Cotton Alexandre est soumise au contrôle de l'Autorité de Contrôle Prudentiel et de Résolution (ACPR) - 4 place de Budapest - CS 92459, 75436 PARIS Cedex 09.
        </textarea>
            
        <!-- Champ texte RGPD -->
        <h1 class="mb-4 text-3xl font-extrabold tracking-tight leading-none text-gray-900 md:text-4xl lg:text-2xl dark:text-white">Mentions légales RGPD</h1>
        <textarea id="rgpd" rows="8" cols="80" class="mb-8 font-normal text-sm lg:text-lg text-gray-500 sm:px-4 lg:px-16 dark:text-gray-400">
            Accordant une grande importance au respect de la vie privée de ses clients (ci-après « Vous »), La société Cabinet Cotton Alexandre vous informe de la façon la plus transparente possible, des traite-ments mis en œuvre dans le cadre de l'utilisation des données personnelles que vous lui confiez.
            Le présent document a pour but de répondre à la réglementation en vigueur et notamment au Règlement (UE) 2016/679 du Parlement Européen et du Conseil du 27 avril 2016 relatif à la protection des personnes physiques à l'égard du traitement des données à caractère personnel et à la libre circulation de ces données (RGPD), et abrogeant la directive 95/46/CE.
            Ainsi, dans le cadre de nos relations professionnelles, nous sommes amenés à collecter, traiter et détenir des informations vous concernant :
            • sur des bases légales différentes (votre consentement, la nécessité contractuelle, le respect d'une obligation légale et/ou encore l'intérêt légitime du Responsable du traitement).
            • conformément aux finalités définies ensemble.
            Les données collectées seront conservées pendant toute la durée de nos relations contractuelles et ensuite en archive pendant un délai de cinq (5) ans, à défaut des délais plus courts ou plus longs spécialement prévus notamment en cas de litige.
            Mr Cotton Alexandre agit en qualité de responsable de traitement au sens des dispositions du Règlement Général sur la protection des données personnelles (RGPD).
            Vous bénéficiez d'un droit d'accès, de rectification, de suppression, de portabilité, de limitation, d'opposition, de définition des directives relatives au sort de vos Données à Caractère Personnel suite à une demande adressée :
            • par voie postale à l'adresse : 5 bd, rue Soubeyran - 48000 - MENDE
            • ou électronique à Mr Cotton Alexandre responsable du traitement par mail à l'adresse : Cabinet Cotton Alexandre cabinetcotton@outlook.fr.fr
            • vos demandes seront prises en compte dans un délai maximum d'un mois.
            Les Données à Caractère Personnel qui vous seront communiquées dans le cadre de l'exercice de votre droit d'accès le seront à titre personnel et confidentiel. A ce titre, pour que votre demande d'accès soit prise en compte, Vous devrez faire parvenir les éléments nécessaires à votre identification à savoir, une attestation écrite sur l'honneur par laquelle Vous certifiez être le titulaire desdites Données à Caractère Personnel ainsi qu'une photocopie d'une pièce d'identité. 
            Vous disposez par ailleurs en cas de non-respect par La société Cabinet Cotton Alexandre à ses obli-gations au titre de la législation/réglementation en vigueur, du droit d'introduire une réclamation auprès de la Commission Nationale de l'Informatique et des Libertés (CNIL).
        </textarea>


        <!-- Checkbox "Lu et approuvé" -->
        <div class="flex flex-col justify-center mb-4">
            <div>
                <input id="checkbox-approuve" type="checkbox" value="approuve" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-400 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" onclick="buttonActivate('start-button', 'checkbox-approuve')">
                <label for="checkbox-approuve" class="text-base font-medium text-gray-900 dark:text-gray-300">&nbsp;Lu et approuvé.</label>
            </div>
            <span class="text-xs mt-2">( veuillez cocher la case pour continuer )</span>
        </div><br />

        <!-- Bouton démarrer -->                                          
        <div class="flex space-y-4 justify-center sm:space-y-0">
            <a href="index.php?page=step1" id="start-button" class="hidden inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                Commencer
                <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </a>
        </div>

    </div>
</section>