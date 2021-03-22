<?php
   session_start();
   include 'models/connectData.php';
   include 'models/managerTools.php';

   if($pdo == null){
      header("location:./index.php?act=err103");
   }

  
   
   $view = "";
   //Paramètre GET blindage 
   $gAction = isset($_GET['act']) ? $_GET['act'] : null ;
   $gErreur = isset($_GET['err']) ? $_GET['err'] : null ;

   if(!isset($_GET['act'])){
      header("location:./index.php?act=acc");
   }else{
      switch ($gAction){
         case "acc":
            include './controleurs/cAccueil.php';
         break;
         case "cad" :
            include './controleurs/cConsoleAdmin.php';
         break;
         case "tar" :
            include './controleurs/cTarif.php';
         break;
         case "cru" :
            include './controleurs/cCrudTarif.php';
         break;
         case "equ" :
            include './controleurs/cEquipe.php';
         break;
         case "err103" :
            include './controleurs/cErreur.php';
         break;
         case "err104" :
            include './controleurs/cErreur.php';
         break;
         case "cx" :
            include './controleurs/cConnection.php';
         break;
         case "dx" :
            include './controleurs/cDeconnection.php';
         break;
         default:
            header("location:./index.php?act=err104");
         break;
      }
   }
   
   include './views/'.$view.'.php';

  
?>