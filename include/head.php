<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style_sources/css/index.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
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
    <header class="fixed top-0 left-0 flex justify-between w-full p-2 bg-neutral-300 bg-opacity-75">
        <div class="w-fit justify-items-start">
            <img src="./style_sources/img/logos/logoIES-png.png" class="h-8">
        </div>
        <div class="hidden">

        </div>
        <div class="w-fit flex justify-end">
            <div id="hamburger" onclick="showMenu();">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </div>
            <div id="FSMenu" class="hidden top-0 left-0 bg-red-900 h-screen w-screen">
                <div id="exitFSMenu" class="fixed top-2 right-2">

                </div>
            </div>
        </div>
    </header>
