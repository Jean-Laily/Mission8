<?php

$pdo = getConnect();

function getConnect(){
    //initialisation des variables et affectations des valeurs par defaut 
    $url = "localhost";             //@ip.... par ex : polenumerique.re ou 172.20.1.101
    $port = '';                     //port ip ... par ex : "3306"
    $char = 'UTF8';                 //charset ... defini le type d'encodage souhaité
    $bdd = 'surfwavedb';                // nom de la data base
    $login = "root";                
    $pass = "";

    //try catch va permettre de capturer l'erreur et de retourner un null s'il y a exception
    try{
        //création de la connection vers un SGBD avec l'extension PHP Data Object 
        $serveur = 'mysql:host=' .  $url  .';dbname='. $bdd;
        if($port != '') $serveur .= ';port='. $port;
        if($char != '') $serveur .= ';charset='. $char;

        //instantiation de l'objet PDO et de ses paramètres requis
        $pdo = new PDO($serveur, $login, $pass); 

    }catch(PDOException $e){
        // echo 'Echec de la connection : ';
        $pdo = null;
    }

    return $pdo;
}
