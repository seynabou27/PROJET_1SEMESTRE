<?php 
if (isset($_SESSION['arrayErreur'])){
    $arrayErreur =$_SESSION['arrayErreur'];
    unset ($_SESSION['arrayErreur']);
}

?>




<!doctype html>
<html lang="en">
  <head>
    <title>inscription</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container border border-dark">
         
          
      <h3 class="card-title text-center ">Formulaire d'inscription</h3>
      <?php //if (isset($arrayErreur['erreurConnexion'])):?>
        <div class="alert alert-danger" role="alert">
        <strong><?php echo isset($arrayErreur['erreurConnexion']) ?$arrayErreur['erreurConnexion']:'';?></strong>
         <?//endif?>
        </div>

      <form method="POST" action="<?=WEB_ROUTE?>">
            <input type="hidden" name="controlleurs" value="security"/>
            <input type="hidden" name="action" value="inscription"/>

            <div class="form-group col-md-3">
                <label for="inputAddress">Prenon</label>
                <input type="text" name="prenom" class="form-control" id="" placeholder="Prenom">
                <small id="passwordlHelp" class="form-text text-danger"><?php echo isset($arrayErreur['prenom'])? $arrayErreur['prenom']:'';?></small>
            </div>
            <div class="form-group col-md-3">
                <label for="inputAddress2">Noms</label>
                <input type="text" name="noms" class="form-control" id="" placeholder="Noms">
                <small id="nomsdlHelp" class="form-text text-danger"><?php echo isset($arrayErreur['noms'])? $arrayErreur['noms']:'';?></small>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="inputEmail4">Email</label>
                    <input type="texte" name="login" class="form-control" id="inputEmail4" placeholder="Email">
                    <small id="emaillHelp" class="form-text text-danger"><?php echo isset($arrayErreur['login'])? $arrayErreur['login']:'';?></small>
                </div>
                <div class="form-group col-md-3">
                    <label for="inputPassword4">Password</label>
                    <input type="password" name="password" class="form-control" id="inputPassword4" placeholder="Password">
                    <small id="passwordlHelp" class="form-text text-danger"><?php echo isset($arrayErreur['password'])? $arrayErreur['password']:'';?></small>
                </div>

                <div class="form-group col-md-3">
                    <label for="inputPassword4">configure your Password</label>
                    <input type="password" name="password1" class="form-control" id="inputPassword4" placeholder="Password">
                    <small id="passwordlHelp" class="form-text text-danger"><?php echo isset($arrayErreur['password1'])? $arrayErreur['password11']:'';?></small>
                </div>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="femme" id="exampleRadios1" value="option1" checked>
                <label class="form-check-label" for="exampleRadios1">
                    HOMME
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="femme" id="exampleRadios2" value="option2">
                <label class="form-check-label" for="exampleRadios2">
                 FEMME
                </label>
            </div>
            <div class="form-group col-md-2">
                <label for="inputdate">Date de Naissance</label>
                <input type="text" name="datenaiss" class="form-control" id="inputdate" placeholder="JJ/MM/AA">
            </div>

            <!--<div class="form-group col-md-3">
                <label for="inputAddress">Address</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="1234 SN">
            </div>-->
  
        <!--<div class="form-row">
            <div class="form-group col-md-3">
                <label for="inputState">Indentifiant</label>
                <select id="inputState" class="form-control">
                    <option selected>Choisir...</option>
                    <option>+221</option>
                    <option>...</option>
                </select>
            </div>
            <div class="form-group col-md-3">
                <label for="inputCity">N° Téléphone</label>
                <input type="text" class="form-control" id="">
            </div>

   
        </div>-->
        <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                    Check me out
                </label>
            </div>
        </div>
    
  <!--<label for="file" >
  <p> Choisir un Avatar</p>
    <input id="file" type="file" name="file" class="hide-upload" required/>
    <i class="fa fa-plus image-plus"></i>
    
    </label>-->
  <button type="submit" class="btn btn-primary" name="btn_submit">S'inscrire</button>

  <a href="<?=WEB_ROUTE.'??controlleurs=security&views=connexion'?>">Se connecter</a>
</form>
</div>



<style>
    .container{
        background-color: #FA8072;
    }

</style>









    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>