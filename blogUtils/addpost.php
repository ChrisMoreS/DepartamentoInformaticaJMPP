<div class="mt-20 mx-4 bg-neutral-100">
    <h1 class="text-center text-xl mb-5">Añadir una entrada</h1>
    <form class="flex flex-col" action="" method="post">
        <div class="mb-4">                    
            <label class="block mb-2 text-sm font-medium text-gray-900" for="portadaEntrada">Portada de la entrada</label>
            <input class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer focus:outline-none" id="portadaEntrada" type="file">
        </div>
        <div class="">
        <label class="block mb-2 text-sm font-medium text-gray-900" for="tituloEntrada">Título de la entrada</label>
        <input type="text" id="tituloEntrada" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Nombre" required>
        </div>
        <div class="flex flex-col">
            <label for="Content">Content</label>
            <textarea  name="contentEntrada" id="editor"></textarea>
        </div>
    </form>
</div>