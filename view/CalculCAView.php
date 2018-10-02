<!DOCTYPE HTML>
<html lang="fr">
    <head>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/>
        <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>


        <style>
            input[type=submit]:hover {
                cursor:pointer;
            }
        </style>
    </head>
    <body>

    <div class="containre">
        <table id="example" class="display" width="100%">
        <thead>
            <tr>
                <th>Siret</th>
                <th>Nom</th>
                <th>Montant</th>
                <th>Taxe</th>
                <th>Année</th>
            </tr>
        </thead>
        </table>
        <form action="<?php echo $helper->url("CalculCA","calculTaxe") ?>" method="post" class="col-lg-5">
            <h3>Calcul des Impôts</h3>
            <hr>
            <div class="form-group col-md-6">
                <label for="nom">Siret :</label>
                <select id="siret" name="siret" class="form-control">
                <?php
                    foreach ($allEntreprises as $entreprise){
                        echo "<option value='".$entreprise->id."'>".$entreprise->siret."</option>";
                    }
                ?>
                </select>
            </div>
            montant : <input type="text" name="montant" class="form-control" required="true"/> 
            <div class="form-group col-md-6">
                <label for="nom">Année :</label>
                <select id="annee" name="annee" class="form-control">
                <?php
                    for($i=date("Y");$i>1970;$i--){
                        echo "<option value='".$i."'>".$i."</option>";
                    }
                ?>
                </select>
            </div>
            <br>
            <input type="submit" class="form-control" value="Calculer">
            <br>
            <a href="index.php?controller=Entreprise&action=index" class="btn btn-primary">Ajouter une Entreprise </a>
        </form>
    </div>
        <script>
            var data = <?= $all ?>;
            $(document).ready(function() {
                $('#example').DataTable({
                    data: data,
                    columns: [
                        { data: 'siret' },
                        { data: 'nom' },
                        { data: 'montant' },
                        { data: 'impots' },
                        { data: 'annee' }
                    ]
                });
            } );
        </script>
    </body>
    
</html>