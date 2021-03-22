<?php
    include './models/managerTarif.php';
    include './models/managerEquipe.php';

     //cas ou l'utilisateur à choisi de mémoriser cette page dans ses favoris
    //si la variable session[username] && session[pass] existe alors redirection vers index?act=cad
    if(isset($_SESSION["username"]) && isset($_SESSION["pass"])){
        header('location:index.php?act=cad'); 
    }
    
    if(!empty($gAction) && $gAction == "acc"){
        $tabTarif = getTarif();
        $tabCat = getCategoP();
        $tabEquipe = getEquipe();

        
   
        //cas blindage de s'il y a manipulation du parametre err = erreur 
           //alors redirection vers l'accueil
           if(isset($gErreur)){
             if($gErreur != 101){
                 header('location:./index.php?act=err104');
             }
          }

        $view = "vAccueil";
    }