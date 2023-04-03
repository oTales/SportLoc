<?php
include_once("./func.php");
include_once("./quadras.php");

if(isset($_POST)){
   $idSair=$id;
   if($idSair != 'Vazio'){
    sairLista($idSair);
    header('location: ./quadras.php');
   }else {
      echo 'Deu errado';
   }
}
