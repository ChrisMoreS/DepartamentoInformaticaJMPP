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
    <script>
        tailwind.config = {
            content: ["./**/*.{html,php,js"],
            theme: {
                extend: {
            
                }
            }
        }
    </script>
</head>
<body>
    <header class="fixed top-0 left-0 flex justify-between w-full px-4 py-2 bg-white drop-shadow-sm">
        <div class="w-20 flex justify-start">
            <div id="hamburger" class="cursor-pointer block" onclick="openNav();">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </div>
            <div id="FSMenu" class="fixed w-screen h-screen bg-neutral-100 text-cultured top-0 left-0 translate-x-full ease-in-out duration-100">
                <div id="exitFSMenu" class="fixed top-2 left-4 cursor-pointer" onclick="closeNav();">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </div>
                <div class="w-screen h-screen flex flex-col justify-evenly items-center">
                    <a href="#">Noticias</a>
                    <a href="#">Oferta Educativa</a>
                    <a href="#">Proyecto Alumnos</a>
                    <a href="#">Álbum</a>
                    <a href="#">Evagd</a>
                    <a href="#">Pincel Ekade</a>
                </div>
            </div>
        </div>
        <div class="w-20 flex justify-center">
            <img src="style_sources/img/logos/logoIES-png.png" class="h-8">
        </div>
        <div class="w-20 flex justify-end">
            <button>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                    <path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z" clip-rule="evenodd" />
                </svg>
            </button>
        </div>
    </header>
