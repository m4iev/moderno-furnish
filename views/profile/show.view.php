<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/header.php') ?>

<div class="h-full p-6 bg-gray-100 flex items-center justify-center">
    <div class="container max-w-screen-lg mx-auto">
        <div>
            <h2 class="font-semibold text-xl text-gray-600 mb-3">Profil</h2>

            <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                    <div class="text-gray-600 ml-9">
                        <p class="font-medium text-2xl">Detail Pribadi Anda</p>
                    </div>
                    <div class="lg:col-span-2">
                        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                            <div class="md:col-span-5">
                                <label for="nama">Nama Lengkap</label>
                                <p class="h-7 mt-3 rounded px-1 w-full bg-gray-100"><?= $customer['nama'] ?></p>
                            </div>
                            <div class="md:col-span-5">
                                <label for="no_telp">No, Telepon</label>
                                <p class="h-7 mt-3 rounded px-1 w-full bg-gray-100"><?= $customer['no_telp'] ?></p>
                            </div>
                            <fieldset class="md:col-span-5">
                                <legend class="text-sm font-semibold leading-6 text-gray-900">Jenis Kelamin
                                </legend>
                                <div class="mt-3 space-y-6">
                                    <p class="h-7 mt-3 rounded px-1 w-full bg-gray-100"><?= $customer['jenis_kelamin'] ?></p>
                                </div>
                            </fieldset>
                            <div class="md:col-span-5 mt-3">
                                <label for="tanggal_lahir">Tanggal Lahir</label>
                                <p class="h-7 mt-3 rounded px-1 w-full bg-gray-100"><?= $customer['tanggal_lahir'] ?></p>
                            </div>
                            <div class="col-span-full mt-3">
                                <label for="alamat"
                                    class="block text-sm font-medium leading-6 text-gray-900">Alamat</label>
                                </p>
                                <p class="h-auto mt-3 rounded px-1 w-full bg-gray-100"><?= $customer['alamat'] ?>
                                </p>
                            </div>
                            <div class="md:col-span-5 text-right">
                                <div class="inline-flex items-end">
                                    <a href="/profile/edit"
                                        class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>