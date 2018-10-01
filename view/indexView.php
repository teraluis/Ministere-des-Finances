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
              <th scope="col">mail</th>
              <th scope="col">password</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $tbody="";
            foreach ($allusers as $user) {
                $tbody.="<tr>\r\n";
                $tbody.="<th scope='row'>".$user->id."</th>";
                $tbody.="<td>".$user->nom."</td>";
                $tbody.="<td>".$user->mail."</td>";
                $tbody.="<td>".$user->password."</td>";
                $tbody.="</th>";
                $tbody.="</tr>\r\n";
            }
            echo $tbody;
            ?>
          </tbody>
        </table>
        <form action="<?php echo $helper->url("users","create") ?>" method="post" class="col-lg-5">
            <h3>Ajouter Utilisateur</h3>
            <hr>
            Nom : <input type="text" name="nom" class="form-control"/>
            mail : <input type="mail" name="mail" class="form-control"/> 
            password :<input type="password" name="password" class="form-control"/>
            <br>
            <input type="submit" name="ajouter" class="form-control"/>
        </form>
        <a href="index.php?controller=Entreprise&action=index">Entreprises </a>
    </div>
    </body>
    
</html>