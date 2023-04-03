<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include_once 'func.php';
if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: /login.php');
} else {
    $logado = $_SESSION['email'];
    $id = $_SESSION['idusuarios'];
    if (empty($logado)) {
        header('Location: ./login.php');
    }
}
?>

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <script src="https://cdn.tailwindcss.com"></script>
   <script>
  </script>
</head>

<body class="bg-black">
<nav class="flex justify-center space-x-4">
      <a href="./home.php" class="rounded-lg px-3 py-2 text-white font-medium hover:bg-slate-900 ease-in duration-300 ">HOME</a>
      <a href="./quadras.php" class="rounded-lg px-3 py-2 text-white font-medium hover:bg-slate-900 ease-in duration-300 ">QUADRAS</a>
      <a href="./sobre.php" class="rounded-lg px-3 py-2 text-white font-medium hover:bg-slate-900 ease-in duration-300 ">SOBRE</a>
   </nav>

   <h1 class="font-sans text-center ">QUADRAS</h1>
<div class="  text-zinc-50 justify-center flex gap-10 flex-wrap ">
   <?php
include_once "func.php";
$quadras = mostrarItem('*', 'quadras');
foreach ($quadras as $montarQuadras) {
   $idquadras = $montarQuadras->idquadras;
    $nomeQuadra = $montarQuadras->nome;
    $localQuadra = $montarQuadras->Local;
    $quantidadePessoas = $montarQuadras->quantidadePessoas;
    $descricao = $montarQuadras->descricao;
   
    ?>

               <div class=" lg:fromright w-96 ">
                <a href="#" class="group">
                    <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-black xl:aspect-h-8 xl:aspect-w-7">
                        <img src="./assets/quadra.jpg" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="h-full w-full object-cover object-center group-hover:opacity-75">
                    </div>
                    <h1 class="mt-4 text-xl text-zinc-50"><?php echo "$nomeQuadra" ?></h1>
                    <p class="mt-1 text-lg font-medium text-zinc-50"><?php echo "$localQuadra" ?></p>
                    <p class="mt-1 text-base font-medium text-zinc-50"><?php echo "$descricao" ?></p>
                    <p class="mt-1 text-base font-medium text-zinc-50">10/15</p>
                </a>
                <form class="mt-5" action="./testequadra.php" method="POST">
               <button class="py-2 px-4 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75  animate-bounce"type="submit">Entrar</button>
               <button class="py-2 px-4 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75  animate-bounce"><a href="./lista.php">Ver Lista</a></button>
            </form>
      </div>

   <?php }?>


</div>

</body>

</html>