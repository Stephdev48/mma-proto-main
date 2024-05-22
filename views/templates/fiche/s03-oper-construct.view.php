
<div class="">
    <!-- Operation de construction -->
    <fieldset class="grid md:gap-6 border-2 border-gray-400 p-4 m-6">
        <legend class="mx-2 p-2 text-xl font-medium">Opération de construction : nature et type de l'ouvrage</legend>
        <div class="flex flex-row">
            <h3>Nature de l'opération :</h3>
            <div>
                <?php 
                    if($DATA['nature_neuf_exist'] == "neuve"){
                        echo "<strong>Construction neuve</strong>";
                    }else{
                        echo "<div class='flex flex-row'>
                                <strong>Travaux sur construction existante</strong>
                                <div>";
                            if($DATA['nature_operation_surelev'] == 1){
                                echo "<div class='flex flex-row'>
                                        <strong>Surélévation</strong>
                                        <div class='flex flex-row'>";
                                        if($DATA['nature_operation_surelev_sous_oeuvre'] == 1){
                                            $content = boxDisplay("Reprise en sous-oeuvre / Travaux sur fondation");
                                            echo $content;
                                        }
                                        if($DATA['nature_operation_surelev_hors_fond'] == 1){
                                            $content = boxDisplay("Intervention sur la structure existante (hors fondation)");
                                            echo $content;
                                        }

                                echo "</div>";
                            }
                    }
                    //             <h3>Nom, Prénom</h3>
                    //             <strong class='pl-4'>".$DATA['moa_souscripteur_form_nom_prenom']."</strong><br />
                    //         </div>
                    //         <div class='flex flex-row'>
                    //             <h3>Adresse</h3>
                    //             <strong class='pl-4'>".$DATA['moa_souscripteur_form_adresse']."</strong><br />
                    //         </div>";
                    //     if($DATA['moa_souscripteur_form_civilite'] == "entreprise"){
                    //         echo "<div class='flex flex-row'>
                    //             <h3>Raison sociale</h3>
                    //             <strong class='pl-4'>".$DATA['moa_souscripteur_form_raison_sociale']."</strong><br />
                    //         </div>
                    //         <div class='flex flex-row'>
                    //             <h3>Siret n°</h3>
                    //             <strong class='pl-4'>".$DATA['moa_souscripteur_form_siret']."</strong><br />
                    //         </div>";
                    //     }               
                    //}
                ?>
            </div>
        </div>
        <div class="flex flex-row">
            <h3>Adresse</h3>
            <strong class="pl-4"><?=$DATA['souscripteur_adresse']?>&nbsp;<?=$DATA['souscripteur_code_postal']?>&nbsp;<?=$DATA['souscripteur_commune']?></strong>
        </div>
        <div class="flex flex-row">
            <h3>Profession</h3>
            <strong class="pl-4"><?=$DATA['souscripteur_profession']?></strong>
        </div>
        <div class="flex flex-row">
            <h3>Téléphone</h3>
            <strong class="pl-4"><?=$DATA['souscripteur_telephone']?></strong>
        </div>
        <div class="flex flex-row">
            <h3>Email</h3>
            <strong class="pl-4"><?=$DATA['souscripteur_email']?></strong>
        </div>
    </fieldset>
</div>








