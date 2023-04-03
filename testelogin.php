<?php


include_once 'func.php';
if(isset($_POST['email']) || isset($_POST['senha'])){
   $id = $_POST['idusuarios'];
   $email = $_POST['email'];
   $senha = $_POST['senha'];

   if( empty($email) || empty($senha)){
      echo "<h1 class='error'>preencha todos os campos</h1>";
   }
   Autenticar('usuarios',$email,$senha);

}
?>