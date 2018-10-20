# Ministere-des-Finances
<h1>Tests</h1>
Le ministère des finances vous demande de créer un programme devant permettre de
calculer les impôts dus par les entreprises françaises.
Dans un premier temps, ce programme devra gérer 2 types d'entreprise :
A) Les auto-entreprises, qui ont les propriétés suivantes :
- N° SIRET
- Dénomination
B) Les SAS, qui ont les propriétés suivantes :
- N° SIRET
- Dénomination
- Adresse du siège social
Le programme sera étendu par la suite avec d'autres types d'entreprise (SASU, SARL ...)
<p>
Par ailleurs, le calcul des impôts devra respecter les règles de gestion suivantes :
  </p>
<ul>
<li>Pour les auto-entreprises :
  impôts = 25% du CA annuel de l'entreprise</li>
<ul>Pour les SAS :
  impôts = 33% du CA annuel de l'entreprise</li>
</ul>
Note : le CA de l'entreprise sera fourni au service par la classe de test et il n'est pas
nécessaire de l'inclure dans les propriétés des entreprises.

<p>Puis lancez la commande:</p>
<p>php "vendor/phpunit/phpunit/phpunit" --bootstrap vendor/autoload.php tests/CalculCATest</p>
<h1>Base de Données</h1>
<p>Pour que l'application fonctionne vous devez exporter la base de données sur votre logiciel d'administration des données préfere</p>
<p>
  Voici quelques infos sur le test de Luis :

Son modèle métier est complètement lié à sa persistance de données (alors qu'il avait été précisé qu'il ne fallait pas aller jusqu'à la persistance ni l'exposition)
Constructeur vide sur tous ses objets, aucun contrôle de cohérence
Getter / Setter systématiques sans contrôle de cohérence, c'est donc équivalent à mettre tous les attributs de classe en public
Pour faire le calcul il insère une ligne en base de données
Peu de rigueur dans le formatage du code
Pas de gestion d'erreur par Exception
Consigne non respectée : on ne demandait que le modèle métier
Points positifs :

Des tests
Gestion des dépendances avec composer
Implication sur le test car ça a dû lui prendre beaucoup de temps
Quelques conseils :

Ne pas partir dans tous les sens et se concentrer sur ce qui est demandé
Sortir de cette approche où on pense d'abord à sa persistance en base de données, l'implémentation de la persistance et l'exposition doivent venir après avoir implémenté son modèle métier
Ne pas réinventer la roue et utiliser des composants populaires avec une bonne communauté et maintenu (MVC, Persistance, etc.)
J'espère que ça l'aidera.</p>
