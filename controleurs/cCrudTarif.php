<?php
    include './models/managerTarif.php';

    //cas ou l'utilisateur à choisi de mémoriser cette page dans ses favoris
    //si la variable session[username] && session[pass] n'est pas existant alors redirection vers index?act=acc
    if(!isset($_SESSION["username"]) && !isset($_SESSION["pass"])){
        header('location:index.php?act=acc'); 
    }

    /////////////////////////////////////////////////////////////////
    ///// Parti Affichage des formulaires selon le cas du crud //////
    /////////////////////////////////////////////////////////////////
    if(!empty($gAction) && $gAction == "cru"){
        $tabTarif = getTarif();
        $tabCat = getCategoP();

        //paramètre GET reçus, contrôler & nettoyer
        $gCodeDuree = isset($_GET['cdu']) ? $_GET['cdu'] : null;
        $gCategoProd = isset($_GET['cpr']) ? $_GET['cpr'] : null;
        $gPrixLoc = isset($_GET['pl']) ? $_GET['pl'] : null;
        $gRequete = isset($_GET['req']) ? $_GET['req'] : null;

    
        $view = "vCrudTarif";
    }