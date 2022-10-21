<div id="addPost" class="hidden fixed top-0 left-0 z-9 w-screen h-full flex flex-col justify-center items-center px-4 bg-white ">
    <div id="closeAddPost" class="fixed top-2 right-4 cursor-pointer" onclick="closeElement('addPost');">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
        </svg>
    </div>
    <h1 class="text-center text-lg mb-5">Añadir una entrada</h1>
    <form class="flex flex-col" action="" method="post">
        <div class="mb-4">                    
            <label class="block mb-2 text-sm font-medium text-gray-900" for="addPostImage">Portada</label>
            <input class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer focus:outline-none" id="addPostImage" type="file">
        </div>
        <div class="mb-4">
            <label class="block mb-2 text-sm font-medium text-gray-900" for="addPostTitle">Título</label>
            <input type="text" id="addPostTitle" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Nombre" required>
        </div>
        <div class="mb-4">
            <label class="block mb-2 text-sm font-medium text-gray-900" for="addPostContent">Contenido</label>
            <textarea  name="contentEntrada" id="addPostContent" required></textarea>
        </div>
        <div class="mb-4 flex justify-between">
            <input class="border p-2 rounded-lg border-gray-300 text-sm font-medium text-gray-900" type="reset" value="Limpiar">
            <input class="border p-2 rounded-lg border-gray-300 text-sm font-medium text-gray-900" type="submit" value="Enviar">
        </div>
    </form>
</div>

Example