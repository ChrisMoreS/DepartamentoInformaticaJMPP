<?php
    include('./include/header.php');
?>

    <div class="mt-16 mb-5">
        <h1 class="text-lg text-center uppercase mb-10">Blogs</h1>
        <div class="mx-4 mb-1">
            <button class="border border-gray-300 p-1.5 rounded-lg mr-2 text-sm bg-gray-50 focus:ring-gray-500 focus:border-gray-500" onclick="openElement('addPost');">Agregar entrada</button>
        </div>
        <hr class="w-screen border border-cyan-500">
        <div class="mx-4 mt-1 flex overflow-x-scroll">
            <p class="border border-gray-300 p-1.5 rounded-lg mr-2 text-sm bg-gray-50 focus:ring-gray-500 focus:border-gray-500">Todas</p>
            <p class="border border-gray-300 p-1.5 rounded-lg mr-2 text-sm bg-gray-50 focus:ring-gray-500 focus:border-gray-500">ASIR</p>
            <p class="border border-gray-300 p-1.5 rounded-lg mr-2 text-sm bg-gray-50 focus:ring-gray-500 focus:border-gray-500">DAW</p>
            <p class="border border-gray-300 p-1.5 rounded-lg mr-2 text-sm bg-gray-50 focus:ring-gray-500 focus:border-gray-500">CETI</p>
            <p class="border border-gray-300 p-1.5 rounded-lg mr-2 text-sm bg-gray-50 focus:ring-gray-500 focus:border-gray-500">DAM</p>
        </div>
    </div>
    <div class="flex flex-wrap justify-between mx-4 my-3.5">
        <div class="flex flex-col h-52 w-32 mb-5">
            <div class="w-full mb-2">
                <img src="style_sources/img/blog/blog-default-1.png" class="object-center" alt="">
            </div>
            <div clasS="w-full h-full flex flex-col justify-between">
                <h4 class="text-md font-semibold">POST TITLE</h4>
                <p class="text-sm text-ellipsis">Post small content with more content than ever</p>
                <hr class="w-full bg-cyan-500 h-0.5">
                <div class="flex justify-between">
                    <small class="text-xs font-light">Post date</small>
                    <small class="text-xs font-light">Post Author</small>
                </div>
            </div>
        </div>
        <div class="flex flex-col h-52 w-32 mb-5">
            <div class="w-full mb-2">
                <img src="style_sources/img/blog/blog-default-2.png" class="object-center" alt="">
            </div>
            <div clasS="w-full h-full flex flex-col justify-between">
                <h4 class="text-md font-semibold">POST TITLE</h4>
                <p class="text-sm text-ellipsis">Post small content with more content than ever</p>
                <hr class="w-full bg-cyan-500 h-0.5">
                <div class="flex justify-between">
                    <small class="text-xs font-light">Post date</small>
                    <small class="text-xs font-light">Post Author</small>
                </div>
            </div>
        </div>
        <div class="flex flex-col h-52 w-32 mb-5">
            <div class="w-full mb-2">
                <img src="style_sources/img/blog/blog-default-3.png" class="object-center" alt="">
            </div>
            <div clasS="w-full h-full flex flex-col justify-between">
                <h4 class="text-md font-semibold">POST TITLE</h4>
                <p class="text-sm text-ellipsis">Post small content with more content than ever</p>
                <hr class="w-full bg-cyan-500 h-0.5">
                <div class="flex justify-between">
                    <small class="text-xs font-light">Post date</small>
                    <small class="text-xs font-light">Post Author</small>
                </div>
            </div>
        </div>
        <div class="flex flex-col h-52 w-32 mb-5">
            <div class="w-full mb-2">
                <img src="style_sources/img/blog/blog-default-4.png" class="object-center" alt="">
            </div>
            <div class="w-full h-full flex flex-col justify-between">
                <h4 class="text-md font-semibold">POST TITLE</h4>
                <p class="text-sm text-ellipsis">Post small content with more content than ever</p>
                <hr class="w-full bg-cyan-500 h-0.5">
                <div class="flex justify-between">
                    <small class="text-xs font-light">Post date</small>
                    <small class="text-xs font-light">Post Author</small>
                </div>
            </div>
        </div>
    </div>

<?php
    include('./blogUtils/addpost.php');
    include('./blogUtils/editpost.php');
    include('./blogUtils/deletepost.php');
    include('./include/footer.php');
?>