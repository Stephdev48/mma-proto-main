# Formulaire MMA Dommages-ouvrages

## Responsive !!
A continuer à partir de l'étape 4 comprise
Stepper
home.view textarea à finir
header : navbar

## Infobulles !

## fonction pour ajouter "required" aux champs obligatoires
required pas compatible avec hidden...
form-entreprise : les required bloquent le passage à l'autre step si pas remplis

## Champs date ouverture chantier
l'infobulle fait doublon avec le champ du dessous : "A défaut date prévue de début"

## template formulaire coordonnées
impossible d'ajouter le remplissage auto avec les ternaires. La fonction file_get_contents affiche en string les balises php et leur contenu dans l'attribut value des inputs.

## garder les champs cachés ouverts si retour sur étape précédente
modifier les onclick par if(checked) ou autre...

## insertion bdd après chaque étape

## à corriger :
si après avoir rempli les coordonnées souscripteur en step1, on fait précédent à partir de la step2, il y aura à nouveau ajout du souscripteur, et donc doublon...

## Supprimer les required en mode DEBUG