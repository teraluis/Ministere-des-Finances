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
<?php include 'navbar.php'; ?>
        <table class="table table-dark">
          <thead>
            <tr>
              <th scope="col">id</th>
              <th scope="col">Nom de l'Entreprise</th>
              <th scope="col">siret</th>
              <th scope="col">adresse</th>
              <th scope="col">representant</th>
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
                $tbody.="<td>".$entreprise->representant."</td>";
                $tbody.="</th>";
                $tbody.="</tr>\r\n";
            }
            echo $tbody;
            ?>
          </tbody>
        </table>
        <div class="container">
        <form action="<?php echo $helper->url("entreprise","create") ?>" method="post" class="col-lg-5">
            <h3>Ajouter une Entreprise</h3>
            <hr>
            Denomination ou Nom de l'énreprise: <input type="text" name="nom" class="form-control"/>
            <div class="form-group col-md-6">
                <label for="nom">Représentant :</label>
                <select id="autoEntreprise" name="representant" class="form-control">
                <?php
                    echo "<option value='indefini'>pas de representant </option>";
                    foreach ($allUsers as $nom){
                        echo "<option value='".$nom->nom."'>".$nom->nom."</option>";
                    }
                ?>
                </select>
            </div>
            <span>le siret doit contenir 14 chiffres pour être valide</span><br>
            siret : <input type="number" name="siret"  pattern="[0-9]{14}" placeholder="12345678910112"
                           class="form-control" required="true"/> 
            <div class="form-group col-md-6">
                <label for="autoEntreprise">Forme Juridique (les auto-entreprises n'ont pas de siège social) :</label>
                <select id="denomination" name="denomination" class="form-control">
                <?php
                    foreach ($allDenominations as $denomination){
                        echo "<option value='".$denomination->id."' >".$denomination->nom."</option>";
                    }
                ?>
                </select>
            </div>
            Adresse du Siège Social :<input id="adresse" type="text" name="adresse" class="form-control"/>
            <br>
            <input type="submit" name="ajouter" class="form-control " />
            <br/>
            <a href="index.php?controller=User&action=index" class="btn btn-primary">Ajouter une Representant </a>
        </form>
        <script>
           $( window ).ready(function() {
               var option = $( "#denomination" ).find("option");
               console.log(option[0].value);
                if(option[0].value==1){
                    $("#adresse").attr("disabled",true); 
                }
            });
            $( "#denomination" ).change(function() {
                if(this.value==1){
                    $("#adresse").attr("disabled",true); 
                }
              
            });
        </script>
        </div>
    </body>
    
</html>