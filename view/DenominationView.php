<!DOCTYPE HTML>
<html lang="fr">
    <head>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <style>
            input[type=submit]:hover {
                cursor:pointer;
            }
        </style>
    </head>
    <body>
<?php include 'navbar.php'; ?>
    <div class="containre">
        <table class="table table-dark">
          <thead>
            <tr>
              <th scope="col">Inspecteur des Impôts</th>
              <th scope="col">nom</th>
              <th scope="col">création</th>
              <th scope="col">taxe</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $tbody="";
            foreach ($allDenominations as $denom) {
                $tbody.="<tr>\r\n";
                $tbody.="<th scope='row'>".$denom->user."</th>";
                $tbody.="<td>".$denom->nom."</td>";
                $tbody.="<td>".$denom->creation."</td>";
                $tbody.="<td>".$denom->pourcent."</td>";
                $tbody.="</th>";
                $tbody.="</tr>\r\n";
            }
            echo $tbody;
            ?>
          </tbody>
        </table>
        <form action="<?php echo $helper->url("Denomination","create") ?>" method="post" class="col-lg-5">
            <h3>Ajouter un type de entreprise</h3>
            <hr>
            Denomination : <input type="text" name="nom" class="form-control" required="true"/>
            Agent : <input type="text" name="user" class="form-control" required="true"/> 
            Taxe :<input type="number" name="pourcent" step="0.01" class="form-control" placeholder="0.25"
           pattern="[0-9]{1}\.[0-9]{2}"
           required/>
            <br>
            <input type="submit" name="ajouter" class="form-control"/>
            <br>
            <a href="index.php?controller=Entreprise&action=index" class="btn btn-primary">Ajouter une Entreprise </a>
        </form>
    </div>
    </body>
    
</html>