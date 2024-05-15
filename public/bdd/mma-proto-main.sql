-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 15 mai 2024 à 14:30
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `mma-proto-main`
--

-- --------------------------------------------------------

--
-- Structure de la table `cnr`
--

CREATE TABLE `cnr` (
  `DOID` int(11) NOT NULL,
  `cnr_entreprise_id` int(11) NOT NULL,
  `cnr_qualite` varchar(255) NOT NULL,
  `cnr_rc_decennale` tinyint(1) NOT NULL,
  `cnr_rc_hors_decennale` tinyint(1) NOT NULL,
  `cnr_rc_recours` tinyint(1) NOT NULL,
  `risques_chantier_materiel` tinyint(1) NOT NULL,
  `risques_chantier_existants` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `dommage_ouvrage`
--

CREATE TABLE `dommage_ouvrage` (
  `DOID` int(11) NOT NULL,
  `souscripteur_id` int(11) NOT NULL,
  `date_creation` date NOT NULL DEFAULT current_timestamp(),
  `date_modification` date DEFAULT NULL,
  `date_validation` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `entreprise`
--

CREATE TABLE `entreprise` (
  `entreprise_id` int(11) NOT NULL,
  `entreprise_raison_sociale` varchar(255) NOT NULL,
  `entreprise_nom` varchar(255) NOT NULL,
  `entreprise_prenom` varchar(255) NOT NULL,
  `entreprise_nat_juri` varchar(255) NOT NULL,
  `entreprise_adresse` varchar(255) NOT NULL,
  `entreprise_code_postal` varchar(255) NOT NULL,
  `entreprise_commune` varchar(255) NOT NULL,
  `entreprise_num_contrat` varchar(255) NOT NULL,
  `entreprise_numero_siret` varchar(255) NOT NULL,
  `entreprise_type` enum('bois','pv','geo','ct','cnr','sol') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `entreprise`
--

INSERT INTO `entreprise` (`entreprise_id`, `entreprise_raison_sociale`, `entreprise_nom`, `entreprise_prenom`, `entreprise_nat_juri`, `entreprise_adresse`, `entreprise_code_postal`, `entreprise_commune`, `entreprise_num_contrat`, `entreprise_numero_siret`, `entreprise_type`) VALUES
(1, 'GEVAUBOIS', 'PAULIN', 'Christian', 'SARL', 'Rue du  novembre', '48000', 'MENDE', '', '', 'bois');

-- --------------------------------------------------------

--
-- Structure de la table `moa`
--

CREATE TABLE `moa` (
  `DOID` int(11) NOT NULL,
  `moa_souscripteur` tinyint(1) DEFAULT NULL,
  `moa_souscripteur_form_civilite` enum('particulier','entreprise') DEFAULT NULL,
  `moa_souscripteur_form_nom_prenom` varchar(255) DEFAULT NULL,
  `moa_souscripteur_form_adresse` varchar(255) DEFAULT NULL,
  `moa_souscripteur_form_raison_sociale` varchar(255) DEFAULT NULL,
  `moa_souscripteur_form_siret` varchar(255) DEFAULT NULL,
  `moa_qualite` enum('etat','hlm_public','syndic','vendeur_prive','sci','entreprise','moa_qualite_autre','collectivites','hlm_prive','vendeur_prive_imm','particulier','prom_prive','asso') DEFAULT NULL,
  `moa_qualite_champ` varchar(255) DEFAULT NULL,
  `moa_construction` tinyint(1) DEFAULT NULL,
  `moa_construction_pro` tinyint(1) DEFAULT NULL,
  `moa_construction_pro_champ` varchar(255) DEFAULT NULL,
  `moa_conception` tinyint(1) DEFAULT NULL,
  `moa_conception_1` tinyint(1) DEFAULT NULL,
  `moa_conception_2` tinyint(1) DEFAULT NULL,
  `moa_conception_3` tinyint(1) DEFAULT NULL,
  `moa_conception_4` varchar(255) DEFAULT NULL,
  `moa_direction` tinyint(1) DEFAULT NULL,
  `moa_direction_1` tinyint(1) DEFAULT NULL,
  `moa_direction_2` tinyint(1) DEFAULT NULL,
  `moa_direction_3` tinyint(1) DEFAULT NULL,
  `moa_direction_4` varchar(255) DEFAULT NULL,
  `moa_surveillance` tinyint(1) DEFAULT NULL,
  `moa_surveillance_1` tinyint(1) DEFAULT NULL,
  `moa_surveillance_2` tinyint(1) DEFAULT NULL,
  `moa_surveillance_3` tinyint(1) DEFAULT NULL,
  `moa_surveillance_4` varchar(255) DEFAULT NULL,
  `moa_execution` tinyint(1) DEFAULT NULL,
  `moa_execution_1` tinyint(1) DEFAULT NULL,
  `moa_execution_2` tinyint(1) DEFAULT NULL,
  `moa_execution_3` tinyint(1) DEFAULT NULL,
  `moa_execution_4` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `moe`
--

CREATE TABLE `moe` (
  `DOID` int(11) NOT NULL,
  `moe_intervention` tinyint(1) DEFAULT NULL,
  `moe_entreprise_id` int(11) DEFAULT NULL,
  `moe_intervention_independant` tinyint(1) DEFAULT NULL,
  `moe_intervention_independant_qualite` varchar(255) DEFAULT NULL,
  `moe_intervention_independant_mission` enum('conception','direction','complete','autre') DEFAULT NULL,
  `moe_intervention_independant_mission_autre_descr` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `operation_construction`
--

CREATE TABLE `operation_construction` (
  `DOID` int(11) NOT NULL,
  `nature_neuf_exist` enum('neuve','existante') DEFAULT NULL,
  `nature_operation_surelev` tinyint(1) DEFAULT NULL,
  `nature_operation_surelev_sous_oeuvre` tinyint(1) DEFAULT NULL,
  `nature_operation_surelev_hors_fond` tinyint(1) DEFAULT NULL,
  `nature_operation_ext_horizont` tinyint(1) DEFAULT NULL,
  `nature_operation_ext_horizont_exist` tinyint(1) DEFAULT NULL,
  `nature_operation_renovation` tinyint(1) DEFAULT NULL,
  `nature_operation_renovation_fond` tinyint(1) DEFAULT NULL,
  `nature_operation_renovation_iso_therm` tinyint(1) DEFAULT NULL,
  `nature_operation_renovation_refect_toit` tinyint(1) DEFAULT NULL,
  `nature_operation_renovation_etancheite` tinyint(1) DEFAULT NULL,
  `nature_operation_renovation_ravalement` tinyint(1) DEFAULT NULL,
  `nature_operation_rehabilitation` tinyint(1) DEFAULT NULL,
  `nature_operation_rehabilitation_fond` tinyint(1) DEFAULT NULL,
  `nature_operation_rehabilitation_iso_therm` tinyint(1) DEFAULT NULL,
  `nature_operation_rehabilitation_refect_toit` tinyint(1) DEFAULT NULL,
  `nature_operation_rehabilitation_etancheite` tinyint(1) DEFAULT NULL,
  `nature_operation_rehabilitation_ravalement` tinyint(1) DEFAULT NULL,
  `operation_sinistre` tinyint(1) DEFAULT NULL,
  `operation_sinistre_descr` text DEFAULT NULL,
  `type_ouvrage_mais_indiv` tinyint(1) DEFAULT NULL,
  `type_ouvrage_ope_pavill` tinyint(1) DEFAULT NULL,
  `type_ouvrage_ope_pavill_nombre` int(11) DEFAULT NULL,
  `type_ouvrage_coll_habit` tinyint(1) DEFAULT NULL,
  `type_ouvrage_coll_habit_nombre` int(11) DEFAULT NULL,
  `type_ouvrage_bat_indus` tinyint(1) DEFAULT NULL,
  `type_ouvrage_centre_com` tinyint(1) DEFAULT NULL,
  `type_ouvrage_centre_com_surf` int(11) DEFAULT NULL,
  `type_ouvrage_bat_bur` tinyint(1) DEFAULT NULL,
  `type_ouvrage_hopital` tinyint(1) DEFAULT NULL,
  `type_ouvrage_vrd_privatif` tinyint(1) DEFAULT NULL,
  `type_ouvrage_autre_const` tinyint(1) DEFAULT NULL,
  `type_ouvrage_autre_const_usage` varchar(255) DEFAULT NULL,
  `construction_adresse_esc_res_bat` varchar(255) DEFAULT NULL,
  `construction_adresse_num_nom_rue` varchar(255) DEFAULT NULL,
  `construction_adresse_lieu_dit` varchar(255) DEFAULT NULL,
  `construction_adresse_arrond` varchar(255) DEFAULT NULL,
  `construction_adresse_code_postal` int(11) DEFAULT NULL,
  `construction_adresse_commune` varchar(255) DEFAULT NULL,
  `construction_date_debut` date DEFAULT NULL,
  `construction_date_debut_prevue` date DEFAULT NULL,
  `construction_date_reception` date DEFAULT NULL,
  `construction_cout_operation` decimal(10,0) DEFAULT NULL,
  `construction_cout_honoraires_moe` decimal(10,0) DEFAULT NULL,
  `cout_operation_tva` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `rcd`
--

CREATE TABLE `rcd` (
  `rcd_id` int(11) NOT NULL,
  `DOID` int(11) NOT NULL,
  `rcd_nature_id` int(11) NOT NULL,
  `rcd_nature_autre` varchar(255) NOT NULL,
  `rcd_nom` varchar(255) NOT NULL,
  `repertoire` varchar(255) NOT NULL,
  `fichier` varchar(255) NOT NULL,
  `fichier_remarque` text NOT NULL,
  `annexe_fichier` varchar(255) NOT NULL,
  `annexe_fichier_remarque` text NOT NULL,
  `montant` decimal(10,0) NOT NULL,
  `construction_date_debut` date NOT NULL,
  `construction_date_fin` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `rcd_nature`
--

CREATE TABLE `rcd_nature` (
  `rcd_nature_id` int(11) NOT NULL,
  `rcd_nature_nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `rcd_nature`
--

INSERT INTO `rcd_nature` (`rcd_nature_id`, `rcd_nature_nom`) VALUES
(1, 'BET\r\n'),
(2, 'Ingénieur conseil'),
(3, 'Maçonnerie'),
(4, 'Enduit'),
(5, 'Charpente bois'),
(6, 'Charpente métallique'),
(7, 'Couverture / étanchéité'),
(8, 'Plomberie'),
(9, 'Carrelage'),
(10, 'Menuiseries'),
(11, 'Plaques de plâtres'),
(12, 'Revêtements souples sols murs'),
(13, 'Électricité'),
(14, 'Fondation'),
(15, 'Terrassement');

-- --------------------------------------------------------

--
-- Structure de la table `situation`
--

CREATE TABLE `situation` (
  `DOID` int(11) NOT NULL,
  `situation_zone_inond` tinyint(1) DEFAULT NULL,
  `situation_sismique` int(11) DEFAULT NULL,
  `situation_insectes` tinyint(1) DEFAULT NULL,
  `situation_proc_techniques` tinyint(1) DEFAULT NULL,
  `situation_parking` tinyint(1) DEFAULT NULL,
  `situation_do_10ans` tinyint(1) DEFAULT NULL,
  `situation_do_10ans_contrat_assureur` varchar(255) DEFAULT NULL,
  `situation_do_10ans_contrat_numero` varchar(255) DEFAULT NULL,
  `situation_mon_hist` tinyint(1) DEFAULT NULL,
  `situation_label_energie` tinyint(1) DEFAULT NULL,
  `situation_label_qualite` tinyint(1) DEFAULT NULL,
  `situation_etude_sol` tinyint(1) DEFAULT NULL,
  `sol_entreprise_id` int(11) DEFAULT NULL,
  `situation_etude_sol_bureau_mission` enum('g2_amp','g2_pro','etude_sol_autre') DEFAULT NULL,
  `situation_etude_sol_bureau_mission_champ` varchar(255) DEFAULT NULL,
  `situation_etude_sol_parking` tinyint(1) DEFAULT NULL,
  `situation_garanties_complètes` tinyint(1) DEFAULT NULL,
  `situation_garanties_dommages_existants` tinyint(1) DEFAULT NULL,
  `situation_construction_bois` tinyint(1) DEFAULT NULL,
  `situation_pann_photo` tinyint(1) DEFAULT NULL,
  `situation_geothermie` tinyint(1) DEFAULT NULL,
  `situation_controle_tech` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `souscripteur`
--

CREATE TABLE `souscripteur` (
  `souscripteur_id` int(11) NOT NULL,
  `souscripteur_nom_raison` varchar(255) NOT NULL,
  `souscripteur_siret` varchar(255) NOT NULL,
  `souscripteur_adresse` varchar(255) NOT NULL,
  `souscripteur_code_postal` int(11) NOT NULL,
  `souscripteur_commune` varchar(255) NOT NULL,
  `souscripteur_profession` varchar(255) NOT NULL,
  `souscripteur_telephone` varchar(255) NOT NULL,
  `souscripteur_email` varchar(255) NOT NULL,
  `souscripteur_ancien_client_date` date NOT NULL,
  `souscripteur_ancien_client_num` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `travaux_annexes`
--

CREATE TABLE `travaux_annexes` (
  `DOID` int(11) NOT NULL,
  `trav_annexes_constr_bois` tinyint(1) DEFAULT NULL,
  `trav_annexes_constr_bois_enveloppe` tinyint(1) DEFAULT NULL,
  `trav_annexes_constr_produits_ce` tinyint(1) DEFAULT NULL,
  `bois_entreprise_id` int(11) DEFAULT NULL,
  `trav_annexes_pv_montage` enum('integre','surimpose','autre') DEFAULT NULL,
  `trav_annexes_pv_proc_tech` tinyint(1) DEFAULT NULL,
  `trav_annexes_pv_etn` tinyint(1) DEFAULT NULL,
  `trav_annexes_pv_liste_c2p` tinyint(1) DEFAULT NULL,
  `trav_annexes_pv_surface` int(11) DEFAULT NULL,
  `trav_annexes_pv_puissance` int(11) DEFAULT NULL,
  `trav_annexes_pv_destination` enum('revente','autocons') DEFAULT NULL,
  `pv_entreprise_id` int(11) DEFAULT NULL,
  `geo_entreprise_id` int(11) DEFAULT NULL,
  `ct_entreprise_id` int(11) DEFAULT NULL,
  `trav_annexes_ct_type_controle` enum('l','lth','le','leth','lautre','lthautre','leautre','lethautre') DEFAULT NULL,
  `trav_annexes_ct_type_controle_l_autres` varchar(255) DEFAULT NULL,
  `trav_annexes_ct_type_controle_lth_autres` varchar(255) DEFAULT NULL,
  `trav_annexes_ct_type_controle_le_autres` varchar(255) DEFAULT NULL,
  `trav_annexes_ct_type_controle_leth_autres` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `cnr`
--
ALTER TABLE `cnr`
  ADD PRIMARY KEY (`DOID`),
  ADD KEY `cnr_entreprise_id` (`cnr_entreprise_id`);

--
-- Index pour la table `dommage_ouvrage`
--
ALTER TABLE `dommage_ouvrage`
  ADD PRIMARY KEY (`DOID`),
  ADD KEY `souscripteur_id` (`souscripteur_id`);

--
-- Index pour la table `entreprise`
--
ALTER TABLE `entreprise`
  ADD PRIMARY KEY (`entreprise_id`);

--
-- Index pour la table `moa`
--
ALTER TABLE `moa`
  ADD PRIMARY KEY (`DOID`);

--
-- Index pour la table `moe`
--
ALTER TABLE `moe`
  ADD PRIMARY KEY (`DOID`),
  ADD KEY `moe_entreprise_id` (`moe_entreprise_id`);

--
-- Index pour la table `operation_construction`
--
ALTER TABLE `operation_construction`
  ADD PRIMARY KEY (`DOID`);

--
-- Index pour la table `rcd`
--
ALTER TABLE `rcd`
  ADD PRIMARY KEY (`rcd_id`),
  ADD KEY `cnr_doid` (`DOID`),
  ADD KEY `rcd_nature_id` (`rcd_nature_id`);

--
-- Index pour la table `rcd_nature`
--
ALTER TABLE `rcd_nature`
  ADD PRIMARY KEY (`rcd_nature_id`);

--
-- Index pour la table `situation`
--
ALTER TABLE `situation`
  ADD PRIMARY KEY (`DOID`),
  ADD KEY `sol_entreprise_id` (`sol_entreprise_id`);

--
-- Index pour la table `souscripteur`
--
ALTER TABLE `souscripteur`
  ADD PRIMARY KEY (`souscripteur_id`),
  ADD KEY `souscripteur_id` (`souscripteur_id`);

--
-- Index pour la table `travaux_annexes`
--
ALTER TABLE `travaux_annexes`
  ADD PRIMARY KEY (`DOID`),
  ADD KEY `bois_entreprise_id` (`bois_entreprise_id`),
  ADD KEY `pv_entreprise_id` (`pv_entreprise_id`),
  ADD KEY `geo_entreprise_id` (`geo_entreprise_id`),
  ADD KEY `ct_entreprise_id` (`ct_entreprise_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `dommage_ouvrage`
--
ALTER TABLE `dommage_ouvrage`
  MODIFY `DOID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT pour la table `entreprise`
--
ALTER TABLE `entreprise`
  MODIFY `entreprise_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `rcd`
--
ALTER TABLE `rcd`
  MODIFY `rcd_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `rcd_nature`
--
ALTER TABLE `rcd_nature`
  MODIFY `rcd_nature_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `souscripteur`
--
ALTER TABLE `souscripteur`
  MODIFY `souscripteur_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `dommage_ouvrage`
--
ALTER TABLE `dommage_ouvrage`
  ADD CONSTRAINT `dommage_ouvrage_ibfk_1` FOREIGN KEY (`souscripteur_id`) REFERENCES `souscripteur` (`souscripteur_id`);

--
-- Contraintes pour la table `rcd`
--
ALTER TABLE `rcd`
  ADD CONSTRAINT `rcd_ibfk_1` FOREIGN KEY (`rcd_nature_id`) REFERENCES `rcd_nature` (`rcd_nature_id`),
  ADD CONSTRAINT `rcd_ibfk_2` FOREIGN KEY (`DOID`) REFERENCES `dommage_ouvrage` (`DOID`);

--
-- Contraintes pour la table `travaux_annexes`
--
ALTER TABLE `travaux_annexes`
  ADD CONSTRAINT `travaux_annexes_ibfk_1` FOREIGN KEY (`bois_entreprise_id`) REFERENCES `entreprise` (`entreprise_id`),
  ADD CONSTRAINT `travaux_annexes_ibfk_2` FOREIGN KEY (`pv_entreprise_id`) REFERENCES `entreprise` (`entreprise_id`),
  ADD CONSTRAINT `travaux_annexes_ibfk_3` FOREIGN KEY (`geo_entreprise_id`) REFERENCES `entreprise` (`entreprise_id`),
  ADD CONSTRAINT `travaux_annexes_ibfk_4` FOREIGN KEY (`ct_entreprise_id`) REFERENCES `entreprise` (`entreprise_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
