<?php 
if (isset($_SESSION['arrayErreur'])){
    $arrayErreur =$_SESSION['arrayErreur'];
    unset ($_SESSION['arrayErreur']);
}

?>




<!doctype html>
<html lang="en">
  <head>
    <title>quizz</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
  </head>
  <body>
                            
  <div class="container login-container col-md-8 offset-md-4 ">
            <div class="row align-center">
                <div class="col-md-6 login-form-1 border border-dark">
                    <h3 class="card-title text-center ">formulaire de connexion</h3>
                    <?php //if (isset($arrayErreur['erreurConnexion'])):?>
                    <div class="alert alert-danger" role="alert">
                        <strong><?php echo isset($arrayErreur['erreurConnexion']) ?$arrayErreur['erreurConnexion']:'';?></strong>
                        <?//endif?>
                    </div>
                    
                    <form method="POST" action="<?=WEB_ROUTE?>">
                        <input type="hidden" name="controlleurs" value="security"/>
                        <input type="hidden" name="action" value="connexion"/>
                               
                        
            <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="texte" name="login" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-danger"><?php echo isset($arrayErreur['login'])? $arrayErreur['login']:'';?></small>
         </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    <small id="passwordlHelp" class="form-text text-danger"><?php echo isset($arrayErreur['password'])? $arrayErreur['password']:'';?></small>
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <a href="<?=WEB_ROUTE.'?controlleurs=security&views=inscription'?>">s'inscrire en tant que joueur</a>
  
      


  
</form>
</div>
    </div>
  </div>






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>