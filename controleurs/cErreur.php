<?php
    //Gestion erreur 403 & 404 à terminer
    if(!empty($gAction)){
        if($gAction == "err103"){
            $view = "v403";
        }else if($gAction == "err104"){
            $view = "v404";
        }
    }
