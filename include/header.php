<?php
    
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="./">
    <link rel="stylesheet" href="style_sources/css/index.css">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jodit/3.18.9/jodit.es2018.min.css"/>
    <title>Departamento Informatica JMPP</title>
</head>
<body>
    <header class="fixed top-0 left-0 flex justify-between w-full px-4 py-2 bg-white drop-shadow-sm">
        <div class="w-20 flex justify-start">
            <div id="hamburger" class="cursor-pointer" onclick="openElement('pagesMenu');">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </div>
            <div id="pagesMenu" class="hidden fixed w-screen h-screen bg-white text-cultured top-0 left-0 ease-in-out duration-100">
                <div id="exitFSMenu" class="fixed top-2 left-4 cursor-pointer" onclick="closeElement('pagesMenu');">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </div>
                <ul class="w-screen h-full flex flex-col justify-center items-center text-xl font-medium">
                    <li class="mb-20"><a href="noticias.php">Noticias</a></li>
                    <li class="mb-20"><a href="#">Oferta Educativa</a></li>
                    <li class="mb-20"><a href="#">Proyecto Alumnos</a></li>
                    <li class="mb-20"><a href="#">Álbum</a></li>
                    <li class="mb-20"><a href="#">Evagd</a></li>
                    <li class=""><a href="#">Pincel Ekade</a></li>
                </ul>
            </div>
        </div>
        <div class="w-20 flex justify-center">
            <a href=""><img src="style_sources/img/logos/logoIES-png.png" class="h-8"></a>
        </div>
        <div class="w-20 flex justify-end">
            <div id="userIcon" class="cursor-pointer" onclick="openElement('userOptions');">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                    <path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z" clip-rule="evenodd" />
                </svg>
            </div>
            <div id="userOptions" class="hidden fixed w-screen h-fit bg-white text-cultured top-0 left-0 transition-all ease-in-out duration-100">
                <div id="exitFSMenu" class="fixed top-2 right-4 cursor-pointer" onclick="closeElement('userOptions');">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </div>
                <div class="w-screen h-screen p-5 flex flex-col justify-center items-center">
                    <h2 class="text-center text-xl mb-5">Iniciar Sesión</h2>
                    <form class="flex flex-col justify-evenly mb-5" action="" method="post">
                        <div class="mb-4">
                            <label class="block mb-2 text-sm font-medium text-gray-900" for="userLogin">Usuario</label>
                            <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5" type="text" name="userLogin" id="userLogin" autocomplete="off">
                        </div>
                        <div class="mb-4">
                            <label class="block mb-2 text-sm font-medium text-gray-900" for="loginPassword">Contraseña</label>
                            <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5" type="password" name="loginPassword" id="loginPassword" autocomplete="off">
                        </div>
                        <div class="mb-4 flex justify-between">
                            <input class="border p-2 rounded-lg border-gray-300 text-sm font-medium text-gray-900" type="reset" value="Limpiar">
                            <input class="border p-2 rounded-lg border-gray-300 text-sm font-medium text-gray-900" type="submit" value="Enviar">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </header>
