<?php
    require_once 'connect.db.php';

    //création du souscripteur et de la demande ouvrage + doid dans chaque table
    function insert($array_SESSION){

        $DOID = false;
        $souscripteur_id = false;
        //var_dump($array_SESSION);
        if (strlen($array_SESSION["souscripteur_nom_raison"]) > 0 ){

            // insertion des données du souscripteur
            extract($array_SESSION);
            $sql = "INSERT INTO souscripteur (souscripteur_nom_raison, souscripteur_siret, souscripteur_adresse, souscripteur_code_postal, souscripteur_commune, souscripteur_profession, souscripteur_telephone, souscripteur_email, souscripteur_ancien_client_date, souscripteur_ancien_client_num) 
            VALUES ('$souscripteur_nom_raison', '$souscripteur_siret', '$souscripteur_adresse', '$souscripteur_code_postal', '$souscripteur_commune', '$souscripteur_profession', '$souscripteur_telephone', '$souscripteur_email', '$souscripteur_ancien_client_date', '$souscripteur_ancien_client_num');";
            $query = mysqli_query($GLOBALS["conn"], $sql);

            // insertion de souscripteur_id dans dommage_ouvrage
            $souscripteur_id = mysqli_insert_id($GLOBALS["conn"]);
            $sql = "INSERT INTO dommage_ouvrage (souscripteur_id) VALUES ('$souscripteur_id')";
            $query = mysqli_query($GLOBALS["conn"], $sql);

            // récupération de DOID et ajout dans toutes les tables
            $DOID = mysqli_insert_id($GLOBALS["conn"]);
            $sql = "INSERT INTO moa (DOID) VALUES ('$DOID');";
            $query = mysqli_query($GLOBALS["conn"], $sql);
            $sql = "INSERT INTO operation_construction (DOID) VALUES ('$DOID');";
            $query = mysqli_query($GLOBALS["conn"], $sql);
            $sql = "INSERT INTO situation (DOID) VALUES ('$DOID');";
            $query = mysqli_query($GLOBALS["conn"], $sql);
            $sql = "INSERT INTO travaux_annexes (DOID) VALUES ('$DOID');";
            $query = mysqli_query($GLOBALS["conn"], $sql);
            $sql = "INSERT INTO moe (DOID) VALUES ('$DOID');";
            $query = mysqli_query($GLOBALS["conn"], $sql);
            $sql = "INSERT INTO cnr (DOID) VALUES ('$DOID')";
            $query = mysqli_query($GLOBALS["conn"], $sql);

        }

        return $DOID;
    }

    //mise à jour de la base à chaque étape
    function update($array_SESSION, $currentstep){
        // var_dump($array_SESSION);

        // insertion des données
        extract($array_SESSION);
        switch ($currentstep){
            case 'step1':
            case 'step2':
                $sql = "INSERT INTO moa 
                        VALUES ('$moa_souscripteur',
                                '$moa_souscripteur_form_civilite',
                                '$moa_souscripteur_form_nom_prenom',
                                '$moa_souscripteur_form_adresse',
                                '$moa_souscripteur_form_raison_sociale',
                                '$moa_souscripteur_form_siret',
                                '$moa_qualite',
                                '$moa_qualite_champ',
                                '$moa_construction',
                                '$moa_construction_pro',
                                '$moa_construction_pro_champ',
                                '$moa_conception',
                                '$moa_conception_1',
                                '$moa_conception_2',
                                '$moa_conception_3',
                                '$moa_conception_4',
                                '$moa_direction',
                                '$moa_direction_1',
                                '$moa_direction_2',
                                '$moa_direction_3',
                                '$moa_direction_4',
                                '$moa_surveillance',
                                '$moa_surveillance_1',
                                '$moa_surveillance_2',
                                '$moa_surveillance_3',
                                '$moa_surveillance_4',
                                '$moa_execution',
                                '$moa_execution_1',
                                '$moa_execution_2',
                                '$moa_execution_3',
                                '$moa_execution_4'
                                );";
                break;
            case 'step3':
                $sql = "INSERT INTO operation_construction 
                        VALUES ('$nature_neuf_exist',
                                '$nature_operation_surelev',
                                '$nature_operation_surelev_sous_oeuvre',
                                '$nature_operation_surelev_hors_fond',
                                '$nature_operation_ext_horizont',
                                '$nature_operation_ext_horizont_exist',
                                '$nature_operation_renovation',
                                '$nature_operation_renovation_fond',
                                '$nature_operation_renovation_iso_therm',
                                '$nature_operation_renovation_refect_toit',
                                '$nature_operation_renovation_etancheite',
                                '$nature_operation_renovation_ravalement',
                                '$nature_operation_rehabilitation',
                                '$nature_operation_rehabilitation_fond',
                                '$nature_operation_rehabilitation_iso_therm',
                                '$nature_operation_rehabilitation_refect_toit',
                                '$nature_operation_rehabilitation_etancheite',
                                '$nature_operation_rehabilitation_ravalement',
                                '$operation_sinistre',
                                '$operation_sinistre_descr',
                                '$type_ouvrage_mais_indiv',
                                '$type_ouvrage_ope_pavill',
                                '$type_ouvrage_ope_pavill_nombre',
                                '$type_ouvrage_coll_habit',
                                '$type_ouvrage_coll_habit_nombre',
                                '$type_ouvrage_bat_indus',
                                '$type_ouvrage_centre_com',
                                '$type_ouvrage_centre_com_surf',
                                '$type_ouvrage_bat_bur',
                                '$type_ouvrage_hopital',
                                '$type_ouvrage_vrd_privatif',
                                '$type_ouvrage_autre_const',
                                '$type_ouvrage_autre_const_usage',
                                '$construction_adresse_esc_res_bat',
                                '$construction_adresse_num_nom_rue',
                                '$construction_adresse_lieu_dit',
                                '$construction_adresse_arrond',
                                '$construction_adresse_code_postal',
                                '$construction_adresse_commune',
                                '$construction_date_debut',
                                '$construction_date_debut_prevue',
                                '$construction_date_reception',
                                '$construction_cout_operation',
                                '$construction_cout_honoraires_moe',
                                '$cout_operation_tva'
                                ;)";                                             
                break;
            case 'step4':
                $sql = "INSERT INTO situation
                        VALUES ('$situation_zone_inond',
                                '$situation_sismique',
                                '$situation_insectes',
                                '$situation_proc_techniques',
                                '$situation_parking',
                                '$situation_do_10ans',
                                '$situation_do_10ans_contrat_assureur',
                                '$situation_do_10ans_contrat_numero',
                                '$situation_mon_hist',
                                '$situation_label_energie',
                                '$situation_label_qualite',
                                '$situation_etude_sol',
                                '$sol_entreprise_id ',
                                '$situation_etude_sol_bureau_mission ',
                                '$situation_etude_sol_bureau_mission_champ',
                                '$situation_etude_sol_parking',
                                '$situation_garanties_complètes',
                                '$situation_garanties_dommages_existants',
                                '$situation_construction_bois',
                                '$situation_pann_photo',
                                '$situation_geothermie',
                                '$situation_controle_tech'
                                ;)";
                break;
            case 'step4bis':
                $sql = "INSERT INTO travaux_annexes
                        VALUES ('$trav_annexes_constr_bois',
                                '$trav_annexes_constr_bois_enveloppe',
                                '$trav_annexes_constr_produits_ce',
                                '$bois_entreprise_id ',
                                '$trav_annexes_pv_montage',
                                '$trav_annexes_pv_proc_tech',
                                '$trav_annexes_pv_etn',
                                '$trav_annexes_pv_liste_c2p',
                                '$trav_annexes_pv_surface',
                                '$trav_annexes_pv_puissance',
                                '$trav_annexes_pv_destination',
                                '$pv_entreprise_id',
                                '$sol_entreprise_id',
                                '$geo_entreprise_id',
                                '$ct_entreprise_id',
                                '$trav_annexes_ct_type_controle',
                                '$trav_annexes_ct_type_controle_l_autres',
                                '$trav_annexes_ct_type_controle_lth_autres',
                                '$trav_annexes_ct_type_controle_le_autres',
                                '$trav_annexes_ct_type_controle_leth_autres'
                                ;)";
                break;
            case 'step5':
                $sql = "INSERT INTO moe
                        VALUES ('$moe_intervention',
                                '$moe_entreprise_id ',
                                '$moe_intervention_independant',
                                '$moe_intervention_independant_qualite',
                                '$moe_intervention_independant_mission',
                                '$moe_intervention_independant_mission_autre_descr'
                                ;)";
                break;
            case 'step6':
                $sql = "INSERT INTO cnr
                        VALUES ('$cnr_entreprise_id',
                                '$cnr_qualite',
                                '$cnr_rc_decennale',
                                '$cnr_rc_hors_decennale ',
                                '$cnr_rc_recours',
                                '$risques_chantier_materiel'
                                '$risques_chantier_existants'
                                ;)";
                break;
            }
        $query = mysqli_query($GLOBALS["conn"], $sql);
        return true;
    }
?>