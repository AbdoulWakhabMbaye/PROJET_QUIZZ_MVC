<?php
require_once(PATH_SRC."models".DIRECTORY_SEPARATOR."user.model.php");
/**
* Traitement des Requetes POST
*/
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_REQUEST['action'])){
        if($_REQUEST['action']=="connexion"){
            $login=$_POST['login'];
            $password=$_POST['password'];
            connexion($login,$password);
        }
    }
}
/**
* Traitement des Requetes GET
*/
if($_SERVER['REQUEST_METHOD']=="GET"){
    if(isset($_REQUEST['action'])){
        if($_REQUEST['action']=="connexion"){
            require_once(  PATH_VIEWS."securite".DIRECTORY_SEPARATOR."connexion.html.php"); 
        }
    }else{
        require_once(  PATH_VIEWS."securite".DIRECTORY_SEPARATOR."connexion.html.php");     
    
    }
}



//US1


function connexion(string $login,string $password):void{
    $errors=[];
    champ_obligatoire('login',$login,$errors,"Login obligatoire");
    if(count($errors)==0){
        valid_email('login',$login,$errors);
    }
    champ_obligatoire('password',$login,$errors);
    if(count($errors)==0){
        $user=find_user_login_password($login,$password);
        if(count($user)!=0){
            $_SESSION[KEY_USER_CONNECT]=$user;
            header("location:".PATH_POST."?controller=user&action=accueil");
            exit();
        }else{
            $errors['connexion']="Login ou mot de passe incorrect";
            $_SESSION[KEY_ERRORS]=$errors;
            header("location:".PATH_POST);
            exit();
        }
    }else{
        $_SESSION[KEY_ERRORS]=$errors;
        header("location:".PATH_POST);
        exit();
    }
}