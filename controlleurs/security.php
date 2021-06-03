<?php

    if ($_SERVER['REQUEST_METHOD']=='GET') {
        if(isset($_GET['views'])){
            if ($_GET['views']=='connexion') {
                require_once(ROUTE_DIR.'views/security/connexion.html.php');
                
            }elseif ($_GET['views']=='inscription') {
                require_once(ROUTE_DIR.'views/security/inscription.html.php');
            }elseif ($_GET['views']=='Deconnexion') {
                require_once(ROUTE_DIR.'views/security/connexion.html.php');
                Deconnexion();
                    
                    
                
        }else {
            require_once(ROUTE_DIR.'views/security/connexion.html.php');
        }

    }
     
 }elseif($_SERVER['REQUEST_METHOD'] =='POST'){
    if (isset($_POST['action'])) {
        if ($_POST['action']== 'connexion') {
    
             connexion($_POST['login'],$_POST['password']);
        }elseif ($_POST['action'] == 'inscription'){
             inscription($_POST['login'],$_POST['password'],$_POST['prenom'],$_POST['noms']);

        }

    }
}
    
 
function connexion(string $login, string $password): void{
    $arrayErreur=array();
    validation_login ($login,'login', $arrayErreur);
    validation_password ($password, 'password',$arrayErreur );
    
    if(form_valid($arrayErreur)){
        //appel du model
        $user= find_login_password($login, $password);
    if (count($user)==0){
        $arrayErreur['erreurConnexion']="login ou password incorrect";
        $_SESSION['arrayErreur']=$arrayErreur;
        header('location:'.WEB_ROUTE.'?controlleurs=security&views=connexion');
    }else{
        $_SESSION['userConnect']=$user;
        if($user['role']=='ROLE_ADMIN'){
            header('location:'.WEB_ROUTE.'?controlleurs=admin&views=liste_question');

        }elseif($user['role']=='ROLE_JOUEUR'){
            header('location:'.WEB_ROUTE.'?controlleurs=joueur&views=jeu');
        }
    }
    }else{
        $_SESSION['arrayErreur']=$arrayErreur;
        header('location:'.WEB_ROUTE.'?controlleurs=security&views=connexion');
    }
   

}


function inscription(string $login, string $password, string $prenom, string $noms):void{
    $arrayErreur=array();
    validation_login ($login,'login', $arrayErreur);
    validation_password ($password, 'password',$arrayErreur );
        if ($_POST['password']!= $_POST['password1']){
            $arrayErreur['password1']='Les deux champs doivent etre identique';

        }
    validation_prenom($prenom, 'prenom',$arrayErreur);
    validation_noms($noms, 'noms',$arrayErreur);
    //validation_datenaiss();
    

    
    if(form_valid($arrayErreur)){
        //appel du model
        $user= find_login_password($login, $password);
    if (count($user)==0){
        $arrayErreur['erreurConnexion']="login ou password incorrect";
        $_SESSION['arrayErreur']=$arrayErreur;
        header('location:'.WEB_ROUTE.'?controlleurs=security&views=inscription');
    }else{
        if($user['role']=='ROLE_ADMIN'){
            header('location:'.WEB_ROUTE.'?controlleurs=admin&views=liste_question');

        }elseif($user['role']=='ROLE_JOUEUR'){
            header('location:'.WEB_ROUTE.'?controlleurs=joueur&views=jeu');
        }
    }
    }else{
        $_SESSION['arrayErreur']=$arrayErreur;
        header('location:'.WEB_ROUTE.'?controlleurs=security&views=inscription');
    }
   


}

function Deconnexion():void{

}

?>