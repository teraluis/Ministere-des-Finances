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
