# Ministere-des-Finances
<h1>Tests</h1>
<p>
Pour faire les tests faîtez au préalable TRUNCATE table chiffreaffaires; TRUNCATE table denominations ; TRUNCATE table entreprises ; TRUNCATE table users;
</p>
<p>Puis lancez la commande:</p>
<p>php "vendor/phpunit/phpunit/phpunit" --bootstrap vendor/autoload.php tests/CalculCATest</p>
<h1>Base de Données</h1>
<p>Pour que l'application fonctionne vous devez exporter la base de données sur votre logiciel d'administration des données préfere</p>
