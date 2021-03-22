<?php
    include './models/managerEquipe.php';

    //cas ou l'utilisateur à choisi de mémoriser cette page dans ses favoris
    //si la variable session[username] && session[pass] n'est pas existant alors redirection vers index?act=acc
    if(!isset($_SESSION["username"]) && !isset($_SESSION["pass"])){
        header('location:index.php?act=acc'); 
    }

    if(!empty($gAction) && $gAction == "equ"){
        $tabEquipe = getEquipe();
        $view = "vEquipe";
    }