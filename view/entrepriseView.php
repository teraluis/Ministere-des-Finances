<!DOCTYPE HTML>
<html lang="">
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
    <div class="containre">
        <table class="table table-dark">
          <thead>
            <tr>
              <th scope="col">id</th>
              <th scope="col">nom</th>
              <th scope="col">siret</th>
              <th scope="col">adresse</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $tbody="";
            foreach ($allEntreprises as $entreprise) {
                $tbody.="<tr>\r\n";
                $tbody.="<th scope='row'>".$entreprise->id."</th>";
                $tbody.="<td>".$entreprise->nom."</td>";
                $tbody.="<td>".$entreprise->siret."</td>";
                $tbody.="<td>".$entreprise->adresse."</td>";
                $tbody.="</th>";
                $tbody.="</tr>\r\n";
            }
            echo $tbody;
            ?>
          </tbody>
        </table>
        <div class="containre">
        <form action="<?php echo $helper->url("entreprise","create") ?>" method="post" class="col-lg-5">
            <h3>Ajouter une Entreprise</h3>
            <hr>
            Nom : <input type="text" name="nom" class="form-control"/>
            siret : <input type="number" name="siret" class="form-control"/> 
            <div class="form-group col-md-4">
                <label for="autoEntreprise">DENOMINATION</label>
                <select id="autoEntreprise" name="denomination" class="form-control">
<!--                <option selected>Auto Entreprise</option>
                <option >SARL</option>-->
                <?php
                    foreach ($allDenominations as $denomination){
                        echo "<option value='".$denomination->id."' >".$denomination->nom."</option>";
                    }
                ?>
                </select>
            </div>
            adresse :<input type="text" name="adresse" class="form-control"/>
            <br>
            <input type="submit" name="ajouter" class="form-control " />
        </form>
        </div>
    </body>
    
</html>