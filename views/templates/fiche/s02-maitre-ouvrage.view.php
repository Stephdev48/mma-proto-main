
<div class="">
    <!-- Informations Maitre d'ouvrage -->
    <fieldset class="grid md:gap-6 border-2 border-gray-400 p-4 m-6">
        <legend class="mx-2 p-2 text-xl font-medium">Maitre d'ouvrage :</legend>

        <div class="">
            <?php 
                if($DATA['moa_souscripteur'] == 1){
                    echo "<strong>Le maitre d'ouvrage est le souscripteur</strong>";
                }else{
                    echo "<div class='flex flex-row'>
                            <h3>Nom, Prénom</h3>
                            <strong class='pl-4'>".$DATA['moa_souscripteur_form_nom_prenom']."</strong><br />
                        </div>
                        <div class='flex flex-row'>
                            <h3>Adresse</h3>
                            <strong class='pl-4'>".$DATA['moa_souscripteur_form_adresse']."</strong><br />
                        </div>";
                    if($DATA['moa_souscripteur_form_civilite'] == "entreprise"){
                        echo "<div class='flex flex-row'>
                            <h3>Raison sociale</h3>
                            <strong class='pl-4'>".$DATA['moa_souscripteur_form_raison_sociale']."</strong><br />
                        </div>
                        <div class='flex flex-row'>
                            <h3>Siret n°</h3>
                            <strong class='pl-4'>".$DATA['moa_souscripteur_form_siret']."</strong><br />
                        </div>";
                    }               
                }
            ?>
        </div>

        <div class="flex flex-row">
            <h3>Qualité du maitre d'ouvrage</h3>
            <strong class="pl-4"><?php
                switch ($DATA['moa_qualite']){
                    case 'etat':
                        echo "Etat (services publics)";
                        break;
                    case 'hlm_public':
                        echo "Organismes d'habitations à loyer modéré (secteur public)";
                        break;
                    case 'syndic':
                        echo "Syndicats de copropriétaires";
                        break;
                    case 'vendeur_prive':
                        echo "Vendeur privé après achèvement";
                        break;
                    case'sci':
                        echo "Société Civile Immobilière";
                        break;
                    case 'entreprise':
                        echo "Entreprise";
                        break;
                    case'moa_qualite_autre':
                        echo $DATA['moa_qualite_champ'];
                        break;
                    case 'collectivites':
                        echo "Collectivités locales";
                        break;
                    case 'hlm_prive':
                        echo "Organismes d'habitations à loyer modéré (secteur privé)";
                        break;
                    case'vendeur_prive_imm':
                        echo "Vendeur privé d'immeubles à construire";
                        break;
                    case 'particulier':
                        echo "Particulier";
                        break;
                    case 'prom_prive':
                        echo "Promoteur privé immobilier";
                        break;
                    case 'asso':
                        echo "Association";
                        break;
                };
            ?></strong>
        </div>

        <div class="flex flex-col">
            <?php
                if($DATA['moa_construction'] == 1){
                    echo "<strong>Le maitre d'ouvrage participe à la construction</strong>";

                    if($DATA['moa_construction_pro'] == 1){
                        echo "<div class='flex flex-row mt-6'>
                                <h3>Sa profession</h3>
                                <strong class='pl-4'>".$DATA['moa_construction_pro_champ']."</strong>
                                </div>";
                    }else{
                        echo "<strong>Le maitre d'ouvrage n'est pas un professionnel de la construction</strong>";
                    };

                    
                    if((($DATA['moa_conception']) == 1) || 
                        (($DATA['moa_direction']) == 1 ) || 
                        (($DATA['moa_surveillance']) == 1 ) || 
                        (($DATA['moa_execution']) == 1 )){
                            echo "<h3 class='mt-6'>Ses activités ou missions</h3>";
                        
                        if($DATA['moa_conception'] == 1){
                            echo "<div class='flex flex-row mt-6'>
                                <strong class='pl-4'>Conception :</strong>
                                </div>";
                                if($DATA['moa_conception_1'] == 1){
                                    echo "<div class='flex flex-row mt-6 pl-4'>
                                            <strong class='pl-4'>Papiers peints et/ou Peintures intérieures</strong>
                                            </div>";
                                }
                                if($DATA['moa_conception_2'] == 1){
                                    echo "<div class='flex flex-row mt-6 pl-4'>
                                            <strong class='pl-4'>Gros oeuvre fondations, Charpente - Couverture, Etanchéité</strong>
                                            </div>";
                                }
                                if($DATA['moa_conception_3'] == 1){
                                    echo "<div class='flex flex-row mt-6 pl-4'>
                                            <strong class='pl-4'>Autres travaux :".$DATA['moa_conception_4']."</strong>
                                            </div>";
                                }
                        }


                        if($DATA['moa_direction'] == 1){
                            echo "<div class='flex flex-row mt-6'>
                                <strong class='pl-4'>Direction :</strong>
                                </div>";
                                if($DATA['moa_direction_1'] == 1){
                                    echo "<div class='flex flex-row mt-6 pl-4'>
                                            <strong class='pl-4'>Papiers peints et/ou Peintures intérieures</strong>
                                            </div>";
                                }
                                if($DATA['moa_direction_2'] == 1){
                                    echo "<div class='flex flex-row mt-6 pl-4'>
                                            <strong class='pl-4'>Gros oeuvre fondations, Charpente - Couverture, Etanchéité</strong>
                                            </div>";
                                }
                                if($DATA['moa_direction_3'] == 1){
                                    echo "<div class='flex flex-row mt-6 pl-4'>
                                            <strong class='pl-4'>Autres travaux :".$DATA['moa_direction_4']."</strong>
                                            </div>";
                                }
                        }

                        if($DATA['moa_surveillance'] == 1){
                            echo "<div class='flex flex-row mt-6'>
                                <strong class='pl-4'>Surveillance :</strong>
                                </div>";
                                if($DATA['moa_surveillance_1'] == 1){
                                    echo "<div class='flex flex-row mt-6 pl-4'>
                                            <strong class='pl-4'>Papiers peints et/ou Peintures intérieures</strong>
                                            </div>";
                                }
                                if($DATA['moa_surveillance_2'] == 1){
                                    echo "<div class='flex flex-row mt-6 pl-4'>
                                            <strong class='pl-4'>Gros oeuvre fondations, Charpente - Couverture, Etanchéité</strong>
                                            </div>";
                                }
                                if($DATA['moa_surveillance_3'] == 1){
                                    echo "<div class='flex flex-row mt-6 pl-4'>
                                            <strong class='pl-4'>Autres travaux :".$DATA['moa_surveillance_4']."</strong>
                                            </div>";
                                }
                        }

                        if($DATA['moa_execution'] == 1){
                            echo "<div class='flex flex-row mt-6'>
                                <strong class='pl-4'>Execution :</strong>
                                </div>";
                                if($DATA['moa_execution_1'] == 1){
                                    echo "<div class='flex flex-row mt-6 pl-4'>
                                            <strong class='pl-4'>Papiers peints et/ou Peintures intérieures</strong>
                                            </div>";
                                }
                                if($DATA['moa_execution_2'] == 1){
                                    echo "<div class='flex flex-row mt-6 pl-4'>
                                            <strong class='pl-4'>Gros oeuvre fondations, Charpente - Couverture, Etanchéité</strong>
                                            </div>";
                                }
                                if($DATA['moa_execution_3'] == 1){
                                    echo "<div class='flex flex-row mt-6 pl-4'>
                                            <strong class='pl-4'>Autres travaux :".$DATA['moa_execution_4']."</strong>
                                            </div>";
                                }
                        }
                    }
                    
                }else{
                    echo "<strong>Le maitre d'ouvrage ne participe pas à la construction</strong>";
                }
            ?>
        </div>
        
    </fieldset>
</div>








