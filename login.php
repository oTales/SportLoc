<!DOCTYPE html>
<html lang="en">


<?php
session_set_cookie_params(['httponly' => true]);
session_start();
if (isset($_SESSION['email'])) {
   $email = $_SESSION['email'];
   $id = $_SESSION['idusuarios'];
}
?>

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Inter:wght@600&display=swap" rel="stylesheet">
   <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-white font-family-karla h-screen">

   <div class="w-full flex flex-wrap">

      <!-- Login Section -->
      <div class="w-full md:w-1/2 flex flex-col">

         <div class="flex justify-center md:justify-start pt-12 md:pl-12 md:-mb-24">
         </div>

         <div class="flex flex-col justify-center md:justify-start my-auto pt-8 md:pt-0 px-8 md:px-24 lg:px-32">
            <p class="text-center text-3xl">Bem-vindo(a)</p>
            <form class="flex flex-col pt-3 md:pt-8" action="./testelogin.php" method="POST">
               <div class="flex flex-col pt-4">
                  <label for="email" class="text-lg">Digite seu e-mail:</label>
                  <input name="email" type="email" id="email" placeholder="Digite aqui seu e-mail..." class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline">
               </div>

               <div class="flex flex-col pt-4">
                  <label for="password" class="text-lg">Digite sua senha:</label>
                  <input name="senha" type="password" id="password" placeholder="Digite aqui sua senha..." class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline">
               </div>

               <input type="submit" value="Login" class="bg-black text-white font-bold text-lg hover:bg-gray-600 hover:duration-500 p-2 mt-8">
            </form>
            <div class="text-center pt-12 pb-12">
               <p>Não tem uma conta? <a href="cadastrar.php" class="underline font-semibold">Registre aqui</a></p>
            </div>
         </div>

      </div>

      <!-- Image Section -->
      <div class="w-1/2 shadow-2xl">
         <img class="object-cover w-full h-screen hidden md:block" src="https://mobimg.b-cdn.net/v3/fetch/44/440be1e15b6112d2f12d69324af929be.jpeg">
      </div>
   </div>
   
</body>

</html>