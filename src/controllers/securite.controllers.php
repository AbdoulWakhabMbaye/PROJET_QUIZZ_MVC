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
        }elseif($_REQUEST['action']=='inscription'){
            if(isset($_POST)){
                $prenom=$_POST['prenom'];
                $nom=$_POST['nom'];
                $login=$_POST['login'];
                $password1=$_POST['password1'];
                $password2=$_POST['password2'];
                $file=$_POST['files'];

            }
        }
    }
}
/**
* Traitement des Requetes GET
*/
if($_SERVER['REQUEST_METHOD']=="GET"){
    if(isset($_REQUEST['action'])){
        if($_REQUEST['action']=="connexion"){
            presenter_connexion();
            require_once(  PATH_VIEWS."securite".DIRECTORY_SEPARATOR."connexion.html.php"); 
        }elseif($_REQUEST['action']=="deconnexion"){
            log_out();
        }elseif($_REQUEST['action']=="inscriptionAdmin"){
            presenter_inscriptionAdmin();
        }
        elseif($_REQUEST['action']=="inscription"){
            inscription();
        }
    }else{
        presenter_connexion();     
    
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


function presenter_connexion(){
    ob_start();
    require_once(PATH_VIEWS.'securite'.DIRECTORY_SEPARATOR.'connexion.html.php');
    $content_for_views = ob_get_clean();
    require_once(PATH_VIEWS.'user'.DIRECTORY_SEPARATOR.'accueil.html.php');
}

function log_out(){
    session_destroy();
    session_unset();
    header('location:'.PATH_POST);
    exit();
}

function presenter_inscriptionAdmin(){
    ob_start();
    require_once(PATH_VIEWS.'securite'.DIRECTORY_SEPARATOR.'inscriptionAdmin.html.php');
    $content_for_list = ob_get_clean();
    require_once(PATH_VIEWS.'user'.DIRECTORY_SEPARATOR.'accueil.html.php');

}

function inscription(){
    ob_start();
    require_once(PATH_VIEWS.'securite'.DIRECTORY_SEPARATOR.'inscriptionJoueur.html.php');
    $content_for_views = ob_get_clean();
    require_once(PATH_VIEWS.'user'.DIRECTORY_SEPARATOR.'accueil.html.php');    
}


