<?php
    //cas ou l'utilisateur à choisi de mémoriser cette page dans ses favoris
    //si la variable session[username] && session[pass] n'est pas existant alors redirection vers index?act=acc
    if(!isset($_SESSION["username"]) && !isset($_SESSION["pass"])){
        header('location:index.php?act=acc'); 
    }

    //////////////////////////////////////////
    // Parti Affichage de la console Admin //
    /////////////////////////////////////////
    if(!empty($gAction) && $gAction == "cad"){
        $view = "vConsoleAdmin";
    }


    

  


    

    