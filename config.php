<?php

require 'index.php';

$id = filter_input(INPUT_POST,'num');
$desc = filter_input(INPUT_POST,'dsc');
$ses = filter_input(INPUT_POST,'ses');
$dep = filter_input(INPUT_POST,'dep');

    if($id && $desc && $ses && $dep){

       $sql = $pdo->prepare("SELECT * FROM  arquivos WHERE id = :id ");
       $sql->bindValue(':id',$id);
       $sql->execute();

       if($sql->rowCont() == 0){

       $sql = $pdo->prepare("INSERT INTO arquivos (id,dsc,ses,dep) VALUES(:id, :dsc,:ses, :dep)" ); 
       $sql->bindValue(':id',$id);
       $sql->bindValue(':desc',$desc);
       $sql->bindValue(':ses',$ses);
       $sql->bindValue(':dep',$dep);
       $sql->execute();
       }

       header("location : index.php");
       exit;
    }else {
        header("location : index.php");
        exit;
    }