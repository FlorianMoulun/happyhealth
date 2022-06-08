<?php 
 ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Error 404</title>
</head>
<body>
    <main class="h-screen w-full flex flex-col justify-center items-center bg-[#200355]">
        <h1 class="text-9xl font-extrabold text-white tracking-widest">404</h1>
        <div class="bg-[#DF6462] px-2 text-sm rounded rotate-12 absolute font-bold">
            Page Not Found
        </div>
        <button class="mt-5">
          <a class="relative inline-block text-sm font-medium text-[#DF6462] group active:text-orange-500 focus:outline-none focus:ring" href=".">
            <span class="absolute inset-0 transition-transform translate-x-0.5 translate-y-0.5 bg-[#DF6462] group-hover:translate-y-0 group-hover:translate-x-0 rounded-3xl"></span>
            <span class="relative block px-12 py-3 bg-[#200355] border border-current rounded-3xl">
              Go Home
            </span>
          </a>
        </button>
    </main>  
</body>
</html>