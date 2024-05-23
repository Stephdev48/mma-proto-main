<div>
    <!-- Travaux annexes -->
    <fieldset class="grid md:gap-6 border-2 border-gray-400 p-4 m-6">
        <legend class="mx-2 p-2 text-xl font-medium">Travaux annexes</legend>
            <div class='ml-6'>
                <?php 
                    if(isset($DATA['trav_annexes_constr_bois']) && $DATA['trav_annexes_constr_bois'] == 1){
                        echo "<strong>La structure de la construction (poteaux, poutres et voiles) est en bois</strong>";
                        }
                ?>
            </div>
            <div class='ml-6'>
                <?php 
                    if(isset($DATA['trav_annexes_constr_bois_enveloppe']) && $DATA['trav_annexes_constr_bois_enveloppe'] == 1){
                        echo "<strong>L'enveloppe de la construction (façade, planchers et balcons) est en bois</strong>";
                        }
                ?>
            </div>
            <div class='ml-6'>
                <?php 
                    if(isset($DATA['trav_annexes_constr_produits_ce']) && $DATA['trav_annexes_constr_produits_ce'] == 1){
                        echo "<strong>Les produits utilisés bénéficient d'un marquage CE</strong>";
                        }
                ?>
            </div>
            <?php 
                    if(isset($DATA['sol']) && $DATA['sol'] == 1){
                        echo "<strong>Un bureau spécialisé intervient pour l'étude de sol :</strong>";
                        echo "<div class='ml-6'>
                                <div class='flex flex-row'>
                                    <h3>Nom entreprise ou raison sociale</h3>
                                    <strong class='pl-4'>".$DATA['sol_entreprise_raison_sociale']."</strong>
                                </div>
                                <div class='flex flex-row'>
                                    <h3>Nom</h3>
                                    <strong class='pl-4'>".$DATA['sol_entreprise_nom']."</strong>
                                </div>
                                <div class='flex flex-row'>
                                    <h3>Prénom</h3>
                                    <strong class='pl-4'>".$DATA['sol_entreprise_prenom']."</strong>
                                </div>
                                <div class='flex flex-row'>
                                    <h3>Adresse</h3>
                                    <strong class='pl-4'>".$DATA['sol_entreprise_adresse']."&nbsp;".$DATA['sol_entreprise_code_postal']."&nbsp;".$DATA['sol_entreprise_commune']."</strong>
                                </div>
                                <div class='flex flex-row'>
                                    <h3>Siret n°</h3>
                                    <strong class='pl-4'>".$DATA['sol_entreprise_numero_siret']."</strong>
                                </div>
                            </div>";
                    }
                ?>







    
    
    
    
    
    
    
    
    
    
    
    
    </fieldset>
</div>