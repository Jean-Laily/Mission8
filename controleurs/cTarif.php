<?php
    include './models/managerTarif.php';

    //cas ou l'utilisateur à choisi de mémoriser cette page dans ses favoris
    //si la variable session[username] && session[pass] n'est pas existant alors redirection vers index?act=acc
    if(!isset($_SESSION["username"]) && !isset($_SESSION["pass"])){
        header('location:index.php?act=acc'); 
    }

    
    /////////////////////////////////////////////////////////
    //// Parti Affichage du tableau dynamique avec icons ////
    /////////////////////////////////////////////////////////
    if(!empty($gAction) && $gAction == "tar"){
        $tabTarif = getTarif();
        $tabCat = getCategoP();

        
        //paramètre GET reçus ,controler & nettoyer
        $gRequete = isset($_GET['req']) ? $_GET['req'] : null;
        $gMsgInfo = isset($_GET['ms']) ? $_GET['ms'] : null;
        
        //paramètre POST reçus ,controler & nettoyer
        $pCoDuree = isset($_POST['cDuree']) ? htmlspecialchars($_POST['cDuree']) : null;
        $pCatProd = isset($_POST['cProduit']) ? htmlspecialchars($_POST['cProduit']) : null;
        $pPrixLoc = isset($_POST['prixLoc']) ? htmlspecialchars($_POST['prixLoc']) : null;


      

        //reception du paramètre requete pour le crud on aiguille en fonction du besoin
        if(!empty($gRequete)){

            switch($gRequete){
                case 'c':
                    //condition pour la requête create
                    if(!empty($pCoDuree) && !empty($pCatProd) && !empty($pPrixLoc) ){
                        $bool = getCreate($pCoDuree, $pCatProd, $pPrixLoc);
                        if($bool){
                            header("location: index.php?act=tar&ms=12");
                        }else{
                            header("location: index.php?act=tar&err=110");
                        }
    
                    }
                break;
                case 'u':
                    //condition pour la requête update
                    if(!empty($pCoDuree) && !empty($pCatProd) && !empty($pPrixLoc) ){
                        $bool = getUpdate($pCoDuree, $pCatProd, $pPrixLoc);
                        if($bool){
                            header("location: index.php?act=tar&ms=13");
                        }else{
                            header("location: index.php?act=tar&err=115");
                        }
                    }
                    
                break;
                case 'd':
                    //condition pour la requête delete
                    if(!empty($pCoDuree) && !empty($pCatProd)){
                        $bool = getDelete($pCoDuree, $pCatProd);
                        if($bool){
                            header("location: index.php?act=tar&ms=14");
                        }else{
                            header("location: index.php?act=tar&err=120");
                        }
                    }
                break;
                default:
                    header("location:./index.php?act=err104");
                break;
            }
        }
        $view = "vTarif";  
    }