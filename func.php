<?php
function inserir($nometabela,$camposTabela,$valores){
   $conn = conectar();
   $lista = $conn->prepare("INSERT INTO $nometabela($camposTabela) VALUES ($valores)");
   $lista -> execute();
   if($lista->rowCount() > 0){
      return 'Cadastrado';
   }else{
      return 'Vazio';
   }
}
function conectar() {
   try {
       $conn = new PDO('mysql:host=localhost; charset=utf8mb4; dbname=dblogin', 'root', '');
       $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   } catch (PDOException $e) {
       echo "banco esta com problema" . $e->getMessage();
       die();
   }
   return $conn;
}
function mostrarItem($campos,$nometabela){
   $conn = conectar();
   $lista = $conn->query("SELECT $campos FROM $nometabela");
   $lista -> execute();
   if($lista->rowCount() > 0){
      return $lista->fetchAll(PDO::FETCH_OBJ);
      
   }else{
      return 'Vazio';
   }
}
function Autenticar($nometabela, $campo1, $campo2) {
   $conn = conectar();
   $stmt = $conn->prepare("SELECT * FROM $nometabela WHERE email=? AND senha=?");
   $stmt->bindParam(1, $campo1);
   $stmt->bindParam(2, $campo2);
   $stmt->execute();
   $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
   if ($usuario) {
      $id = $usuario['idusuarios'];
      session_set_cookie_params(['httponly' => true]);
      session_start();
      $_SESSION['idusuarios'] = $id;
      $_SESSION['email'] = $campo1;
      $_SESSION['senha'] = $campo2;
      header('location: home.php');
   } else {
      unset($_SESSION['email']);
      unset($_SESSION['senha']);
      header('location: login.php');
   }
}

function inserirnalista($nometabela,$camposTabela,$valores){
   $conn = conectar();
   $lista = $conn->prepare("INSERT INTO $nometabela($camposTabela) VALUES ($valores)");
   $lista -> execute();
   if($lista->rowCount() > 0){
      return 'Cadastrado';
   }else{
      return 'Vazio';
   }
}

// function sairLista($idUsuario){
//    $con = conectar();
//    $lista = $con->prepare("DELETE FROM lista WHERE idusuario='$idUsuario'");
//    $lista->execute();
//    $usuario = $lista->fetch(PDO::FETCH_ASSOC);
//    if($usuario){
//       return 'Deletado com sucesso';
//       header('location: quadras.php');
//    }else{
//       return 'Vazio';
//    }
// }

function sairLista($idUsuario) {
   $con = conectar();
   $lista = $con->prepare("DELETE FROM lista WHERE idusuarios=:idUsuario");
   $lista->bindParam(':idUsuario', $idUsuario);
   $lista->execute();
   
   if($lista->rowCount() > 0) {
      return 'Deletado';
   } else {
      return 'Vazio';
   }
}



