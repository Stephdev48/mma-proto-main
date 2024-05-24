<div>
    <!-- CNR et risques chantier -->
    <fieldset class="grid md:gap-6 border-2 border-gray-400 p-4 m-6">
        <legend class="mx-2 p-2 text-xl font-medium">CNR et risques chantier</legend>

        <div>
            <?php
                if(isset($DATA['cnr_entreprise_raison_sociale']))
                {       
                    echo "<h3>Désignation du constructeur non réalisateur :</h3>";
                    echo "<div class='ml-6'>
                            <div class='flex flex-row'>
                                <h3>Nom entreprise ou raison sociale</h3>
                                <strong class='pl-4'>".$DATA['cnr_entreprise_raison_sociale']."</strong>
                            </div>
                            <div class='flex flex-row'>
                                <h3>Nom</h3>
                                <strong class='pl-4'>".$DATA['cnr_entreprise_nom']."</strong>
                            </div>
                            <div class='flex flex-row'>
                                <h3>Prénom</h3>
                                <strong class='pl-4'>".$DATA['cnr_entreprise_prenom']."</strong>
                            </div>
                            <div class='flex flex-row'>
                                <h3>Adresse</h3>
                                <strong class='pl-4'>".$DATA['cnr_entreprise_adresse']."&nbsp;".$DATA['cnr_entreprise_code_postal']."&nbsp;".$DATA['cnr_entreprise_commune']."</strong>
                            </div>
                            <div class='flex flex-row'>
                                <h3>Siret n°</h3>
                                <strong class='pl-4'>".$DATA['cnr_entreprise_numero_siret']."</strong>
                            </div>
                            <div class='flex flex-row'>
                                <h3>Siret n°</h3>
                                <strong class='pl-4'>".$DATA['cnr_qualite']."</strong>
                            </div>
                            <div>
                                <h3>Garanties demandées</h3>";
                                if(isset($DATA['cnr_rc_decennale']) && $DATA['cnr_rc_decennale'] == 1){
                                    echo "<strong class='pl-4'>RC Décennale - Garanties complètes (CS n°812)</strong>";
                                    }
                                if(isset($DATA['cnr_rc_hors_decennale']) && $DATA['cnr_rc_hors_decennale'] == 1){
                                    echo "<strong class='pl-4'>RC hors décennale (CS n°883)</strong>";
                                    }
                                if(isset($DATA['cnr_rc_recours']) && $DATA['cnr_rc_recours'] == 1){
                                    echo "<strong class='pl-4'>Recours et défense pénale (CS n°886)</strong>";
                                    };
                    echo "</div></div>";
                }
            ?>
        </div>
        <div class='flex flex-row'>
                <h3>Assurance tous risques chantier : Garanties demandées</h3>
                <?php
                    if(isset($DATA['risques_chantier_materiel']) && $DATA['risques_chantier_materiel'] == 1){
                            echo "<strong class='pl-4'>Dommages matériels à la construction (CS n°884)</strong>";
                            }
                    if(isset($DATA['risques_chantier_existants']) && $DATA['risques_chantier_existants'] == 1){
                        echo "<strong class='pl-4'>Dommages matériels subits par les existants (CS n°884)</strong>";
                        }
                ?>
            </div>

        
        
    </fieldset>
</div>