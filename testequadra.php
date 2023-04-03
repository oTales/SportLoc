<?php 
include_once("./func.php");
include_once("./quadras.php");
if(isset($_POST)){
    $idEntrar = $id;
    $nome = $logado;
    $entrar = $idquadras;
    if($entrar != 'Vazio'){
        inserirnalista('lista','idusuarios,nome',"'$idEntrar','$nome'");
        header("Location: ./lista.php");
        echo 'Deu certo';
    }else {
        echo 'Deu ruim';
    }
}


