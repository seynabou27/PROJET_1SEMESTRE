<?php

function find_login_password(string $login, string $password){
    // 1 lire le contenu du fichier
    $json = file_get_contents(ROUTE_DIR.'data/user.data.json');

    // 2 convertir le json en tableau
    $arrayuser = json_decode($json ,true);
    foreach ($arrayuser as $user) {
        if($user['login']==$login && $user['password']==$password){

        return $user;
    }
    }
    return[];
}




?>