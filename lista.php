<!DOCTYPE html>
<html lang="en">
   <?php include_once 'func.php';

?>
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-black ">
<ul>
   <li class="p-5"><a href="quadras.php">
   <svg width="46" height="46" fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
  <path d="M15 22.5 6 12l9-10.5"></path>
</svg>
   </a>

   </li>
</ul>
<div class="flex mt-20 items-center text-white flex-col justify-center">
   <?php
$listaBD = mostrarItem('*', 'lista');
foreach ($listaBD as $itemporlinha) {
    $idLista = $itemporlinha->idlista;
    $iduser = $itemporlinha->idusuarios;
    $nome = $itemporlinha->nome;
    ?>

  <ul class="w-96">
    <li
      class="w-full border-b-2 border-neutral-100 border-opacity-100 py-4 dark:border-opacity-50">
      <?php echo "$nome" ?>
    </li>
  </ul>
      <?php
}
?>

   <form class="mt-10" action="testelista.php" method="post">
   <button class="text-lg text-white bg-red-700 hover:bg-red-900 px-5 rounded-md"  type="submit">  SAIR </a></button>
   </form>
   <button><a href="./quadras.php"></a></button>
   </div>
</body>
</html>