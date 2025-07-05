<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/header.php') ?>

<!-- component -->
<div class="min-h-screen p-6 bg-gray-100 flex items-center justify-center">
    <div class="container max-w-screen-lg mx-auto">
        <div>
            <h2 class="font-semibold text-xl text-gray-600 mb-6">Profil</h2>

            <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                <form action="/profile" method="POST">
                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                        <div class="text-gray-600 ml-9">
                            <p class="font-medium text-2xl">Detail Pribadi</p>
                        </div>
                        <div class="lg:col-span-2">
                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                                <div class="md:col-span-5">
                                    <label for="nama">Nama Lengkap</label>
                                    <input type="text" name="nama" id="nama"
                                        class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" required />
                                </div>
                                <div class="md:col-span-5">
                                    <label for="no_telp">No. Telepon</label>
                                    <input type="text" name="no_telp" id="no_telp"
                                        class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" required />
                                </div>
                                <fieldset class="md:col-span-5">
                                    <legend class="text-sm font-semibold leading-6 text-gray-900">Jenis Kelamin
                                    </legend>
                                    <p class="mt-1 text-sm leading-6 text-gray-600">Pilih jenis kelamin tertentu.</p>
                                    <div class="mt-6 space-y-6">
                                        <div class="flex items-center gap-x-3">
                                            <input id="pria" name="jenis_kelamin" type="radio"
                                                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                                                value="pria" required>
                                            <label for="pria"
                                                class="block text-sm font-medium leading-6 text-gray-900">Pria</label>
                                        </div>
                                        <div class="flex items-center gap-x-3">
                                            <input id="wanita" name="jenis_kelamin" type="radio"
                                                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                                                value="wanita">
                                            <label for="wanita"
                                                class="block text-sm font-medium leading-6 text-gray-900">Wanita</label>
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="md:col-span-5 mt-3">
                                    <label for="tanggal_lahir">Tanggal Lahir</label>
                                    <input type="date" name="tanggal_lahir" id="tanggal_lahir"
                                        class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" required />
                                </div>
                                <div class="col-span-full mt-3">
                                    <label for="alamat"
                                        class="block text-sm font-medium leading-6 text-gray-900">Alamat</label>
                                    <p class="mt-3 text-sm leading-6 text-gray-600">Tulis alamat Anda di sini.
                                    </p>
                                    <div class="mt-2">
                                        <textarea id="alamat" name="alamat" rows="3"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                            required></textarea>
                                    </div>
                                </div>
                                <div class="md:col-span-5 text-right">
                                    <div class="inline-flex items-end">
                                        <button
                                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                                            type="submit">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>