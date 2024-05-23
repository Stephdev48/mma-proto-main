<div>
    <!-- Maitrise d'oeuvre -->
    <fieldset class="grid md:gap-6 border-2 border-gray-400 p-4 m-6">
        <legend class="mx-2 p-2 text-xl font-medium">Maitrise d'oeuvre</legend>

        <div class="flex flex-col">
            <div class='ml-6'>
                <?php 
                    if(isset($DATA['moe_intervention']) && $DATA['moe_intervention'] == 0)
                    {
                        echo "<strong>Aucun architecte ou maitre d'oeuvre n'intervient</strong>";

                    }
                    elseif((isset($DATA['moe_intervention']) && $DATA['moe_intervention'] == 1))
                    {       
                        echo "<strong>Architecte ou maitre d'oeuvre :</strong>";
                        echo "<div class='ml-6'>
                                <div class='flex flex-row'>
                                    <h3>Nom entreprise ou raison sociale</h3>
                                    <strong class='pl-4'>".$DATA['moe_entreprise_raison_sociale']."</strong>
                                </div>
                                <div class='flex flex-row'>
                                    <h3>Nom</h3>
                                    <strong class='pl-4'>".$DATA['moe_entreprise_nom']."</strong>
                                </div>
                                <div class='flex flex-row'>
                                    <h3>Prénom</h3>
                                    <strong class='pl-4'>".$DATA['moe_entreprise_prenom']."</strong>
                                </div>
                                <div class='flex flex-row'>
                                    <h3>Adresse</h3>
                                    <strong class='pl-4'>".$DATA['moe_entreprise_adresse']."&nbsp;".$DATA['moe_entreprise_code_postal']."&nbsp;".$DATA['moe_entreprise_commune']."</strong>
                                </div>
                                <div class='flex flex-row'>
                                    <h3>Siret n°</h3>
                                    <strong class='pl-4'>".$DATA['moe_entreprise_numero_siret']."</strong>
                                </div>
                            </div>";

                        if(isset($DATA['moe_intervention_independant']) && $DATA['moe_intervention_independant'] == 1)
                        {
                            $content = boxDisplay("L'architecte ou le maitre d'oeuvre est indépendant à l'égard des autres constructeurs et du maitre d'ouvrage");
                            echo $content;
                        }
                        elseif(isset($DATA['moe_intervention_independant']) && $DATA['moe_intervention_independant'] == 0)
                        {
                            if(isset($DATA['moe_intervention_independant_qualite']))
                            {
                                echo "<span class='mr-2'>Qualité et fonction du maitre d'oeuvre :</span><strong>".$DATA['moe_intervention_independant_qualite']."</strong>";
                            }
                            if(isset($DATA['moe_intervention_independant_mission']))
                            {
                                echo "<h3 class='mr-2'>Mission du maitre d'oeuvre :</h3>";
                                switch ($DATA['moe_intervention_independant_mission'])
                                {
                                    case 'conception':
                                        echo"<strong>Conception</strong>";
                                        break;
                                    case 'direction':
                                        echo"<strong>Direction et surveillance des travaux</strong>";
                                        break;
                                    case 'complete':
                                        echo"<strong>Mission complète</strong>";
                                        break;
                                    case 'autre':
                                        echo"<strong>Autre : ".$DATA['moe_intervention_independant_autre_descr']."</strong>";
                                    break;
                                }
                            }
                            
                        }
                    }
                ?>
            </div>
        </div>
    </fieldset>
</div>