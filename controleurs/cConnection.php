<?php
    //prevoir la mise en place de la variable session
    include 'models/managerConnect.php';

    $id = (isset($_POST["idUser"])) ? htmlspecialchars($_POST["idUser"]) : "";
    $mdp = (isset($_POST["mdpUser"])) ? htmlspecialchars($_POST["mdpUser"]) : "";

    //SI le param Get act n'est pas vide et égale a cx qui vaut connection
    if(!empty($gAction) && $gAction == "cx"){
        //Création de la variable session si les données sont correct
        if(userExiste($id, $mdp)){ 
            //création d'un variable session 
            $_SESSION["username"] = $id;
            $_SESSION["pass"] = $mdp;

            //redirection vers accueil si ok
            header("location: index.php?act=cad");
            
        }else{
            //redirection vers accueil avec msg Erreur si pas ok 
            header("location: index.php?act=acc&err=101");
            
        }
        
    }
   