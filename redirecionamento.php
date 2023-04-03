<?php

if(isset($_POST['nome']) || isset($_POST['email']) || isset($_POST['senha'])){
   $nome = $_POST['nome'];
   $email = $_POST['email'];
   $senha = $_POST['senha'];

   if(empty($nome) || empty($email) || empty($senha)){
      echo "<h1 class='error'>preencha todos os campos</h1>";
   }
   include_once 'func.php';
   inserir('usuarios','nome,email,senha',"'$nome','$email','$senha'");
   header("Location: ./login.php");
}

?>