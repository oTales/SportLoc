<?php
session_start();
if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {
   unset($_SESSION['email']);
   unset($_SESSION['senha']);
   header('Location: http://localhost/login/login.php');
} else {
   $logado = $_SESSION['email'];
   $id = $_SESSION['idusuarios'];
   if (empty($logado)) {
      header('Location: http://localhost/login/login.php');
   }
   if (empty($id)) {
      echo "ID não existe! Tente novamente.";
   }
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>

   <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-black">

   <nav class="flex justify-center space-x-4">
      <a href="./home.php" class="rounded-lg px-3 py-2 text-white font-medium hover:bg-slate-900 ease-in duration-300 ">HOME</a>
      <a href="./quadras.php" class="rounded-lg px-3 py-2 text-white font-medium hover:bg-slate-900 ease-in duration-300 ">QUADRAS</a>
      <a href="./sobre.php" class="rounded-lg px-3 py-2 text-white font-medium hover:bg-slate-900 ease-in duration-300 ">SOBRE</a>
   </nav>

   <div class="flex justify-center items-center">
      <div class="2xl:mx-auto 2xl:container lg:px-20 lg:py-16 md:py-12 md:px-6 py-9 px-4 w-96 sm:w-auto">
         <div role="main" class="flex flex-col items-center justify-center">
         <h1 class="text-base font-bold leading-9 text-center text-gray-800 dark:text-gray-50"><?php echo "$logado"?> Bem vindo</h1>
            <h1 class="text-4xl font-bold leading-9 text-center text-gray-800 dark:text-gray-50">QUADRAS RECENTES</h1>
            <p class="text-base leading-normal text-center text-gray-600 dark:text-white mt-4 lg:w-1/2 md:w-10/12 w-11/12">Procurando por quadras perto de você? Está no lugar certo!</p>
         </div>
         <div class="lg:flex items-stretch md:mt-12 mt-8">
            <div class="lg:w-1/2">
               <div class="sm:flex items-center justify-between xl:gap-x-8 gap-x-6">
                  <div class="sm:w-1/2 relative">
                     <div>

                        <div class="absolute bottom-0 left-0 p-6">
                           <h2 class="text-xl font-semibold 5 text-white">Quadra</h2>
                           <p class="text-base leading-4 text-white mt-2">Descrição de quadra</p>
                           <a href="javascript:void(0)" class="focus:outline-none focus:underline flex items-center mt-4 cursor-pointer text-white hover:text-gray-200 hover:underline">
                              <p class="pr-2 text-sm font-medium leading-none">Entrar</p>
                              <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/blog-I-svg1.svg" alt="arrow">
                           </a>
                        </div>
                     </div>
                     <img src="https://jrcor.com.br/blog/wp-content/uploads/2020/03/quadras-poliesportivas-5.jpg" class="w-full" alt="chair" />
                  </div>
                  <div class="sm:w-1/2 sm:mt-0 mt-4 relative">
                     <div>

                        <div class="absolute bottom-0 left-0 p-6">
                           <h2 class="text-xl font-semibold 5 text-white">Quadra</h2>
                           <p class="text-base leading-4 text-white mt-2">Descrição de quadra</p>
                           <a href="javascript:void(0)" class="focus:outline-none focus:underline flex items-center mt-4 cursor-pointer text-white hover:text-gray-200 hover:underline">
                              <p class="pr-2 text-sm font-medium leading-none">Entrar</p>
                              <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/blog-I-svg1.svg" alt="arrow">
                           </a>
                        </div>
                     </div>
                     <img src="https://jrcor.com.br/blog/wp-content/uploads/2020/03/quadras-poliesportivas-5.jpg" class="w-full" alt="wall design" />
                  </div>
               </div>
               <div class="relative">
                  <div>

                     <div class="absolute bottom-0 left-0 md:p-10 p-6">
                        <h2 class="text-xl font-semibold 5 text-white">Quadra</h2>
                        <p class="text-base leading-4 text-white mt-2">Descrição de quadra</p>
                        <a href="javascript:void(0)" class="focus:outline-none focus:underline flex items-center mt-4 cursor-pointer text-white hover:text-gray-200 hover:underline">
                           <p class="pr-2 text-sm font-medium leading-none">Entrar</p>
                           <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/blog-I-svg1.svg" alt="arrow">
                        </a>
                     </div>
                  </div>
                  <img src="./assets/nba.jpg" alt="sitting place" class="w-full mt-8 md:mt-6 hidden sm:block" />
                  <img class="w-full mt-4 sm:hidden" src="https://jrcor.com.br/blog/wp-content/uploads/2020/03/quadras-poliesportivas-5.jpg" alt="sitting place" />
               </div>
            </div>
            <div class="lg:w-1/2 xl:ml-8 lg:ml-4 lg:mt-0 md:mt-6 mt-4 lg:flex flex-col justify-between">
               <div class="relative">
                  <div>

                     <div class="absolute bottom-0 left-0 md:p-10 p-6">
                        <h2 class="text-xl font-semibold 5 text-white">Quadra</h2>
                        <p class="text-base leading-4 text-white mt-2">Descrição de quadra</p>
                        <a href="javascript:void(0)" class="focus:outline-none focus:underline flex items-center mt-4 cursor-pointer text-white hover:text-gray-200 hover:underline">
                           <p class="pr-2 text-sm font-medium leading-none">Entrar</p>
                           <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/blog-I-svg1.svg" alt="arrow">
                        </a>
                     </div>
                  </div>
                  <img src="./assets/chicago.jpg" alt="sitting place" class="w-full sm:block hidden" />
                  <img class="w-full sm:hidden" src="https://i.ibb.co/dpXStJk/Rectangle-29.png" alt="sitting place" />
               </div>
               <div class="sm:flex items-center justify-between xl:gap-x-8 gap-x-6 md:mt-6 mt-4">
                  <div class="relative w-full">
                     <div>

                        <div class="absolute bottom-0 left-0 p-6">
                           <h2 class="text-xl font-semibold 5 text-white">Quadra</h2>
                           <p class="text-base leading-4 text-white mt-2">Descrição de quadra</p>
                           <a href="javascript:void(0)" class="focus:outline-none focus:underline flex items-center mt-4 cursor-pointer text-white hover:text-gray-200 hover:underline">
                              <p class="pr-2 text-sm font-medium leading-none">Entrar</p>
                              <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/blog-I-svg1.svg" alt="arrow">
                           </a>
                        </div>
                     </div>
                     <img src="https://jrcor.com.br/blog/wp-content/uploads/2020/03/quadras-poliesportivas-5.jpg" class="w-full" alt="chair" />
                  </div>
                  <div class="relative w-full sm:mt-0 mt-4">
                     <div>

                        <div class="absolute bottom-0 left-0 p-6">
                           <h2 class="text-xl font-semibold 5 text-white">Quadra</h2>
                           <p class="text-base leading-4 text-white mt-2">Descrição de quadra</p>
                           <a href="javascript:void(0)" class="focus:outline-none focus:underline flex items-center mt-4 cursor-pointer text-white hover:text-gray-200 hover:underline">
                              <p class="pr-2 text-sm font-medium leading-none">Entrar</p>
                              <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/blog-I-svg1.svg" alt="arrow">
                           </a>
                        </div>
                     </div>
                     <img src="https://jrcor.com.br/blog/wp-content/uploads/2020/03/quadras-poliesportivas-5.jpg" class="w-full" alt="wall design" />
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

</body>

</html>