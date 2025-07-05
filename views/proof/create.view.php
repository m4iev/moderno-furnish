<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/header.php') ?>

<div class="min-h-screen p-6 bg-gray-100 flex items-center justify-center">
    <div class="container max-w-screen-lg mx-auto">
        <div>
            <h2 class="font-semibold text-xl text-gray-600 mb-6">Proof</h2>

            <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6 min-h-12">
                <form action="/proof" class="flex flex-col justify-center items-center" method="POST" enctype="multipart/form-data" autocomplete="off">
                    <input type="hidden" name="id" value="<?= $_GET['id'] ?>">

                    <input type="file" name="proof_picture" id="proof_picture" class="block item-center ml-48 text-transparent" accept=".png">

                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-12"
                        type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>