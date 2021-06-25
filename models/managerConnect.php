<?php
    function userExiste($user,$pass){
        //tableau en ajouter en dure
        $tabConnect = array('Admin' => '@dmin123', 'Afpar'=>'@fpar123');

        $estValide = false;

        foreach($tabConnect as $key=>$values){
            //condition si @username est égal à ctrlLogin=clé && si @pass est égal à ctrlMDP=valeur Alors bool vrai
            if($user == $key && $pass == $values){
                //création d'un variable session <= la valeur @id envoyer en post
                $estValide = true; //defini la variable à vrai
            }
        }
        //retourne un boolean
        return $estValide;
    }