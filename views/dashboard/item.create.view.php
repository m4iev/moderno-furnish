<?php require base_path('views/partials/head.php') ?>

<body class="flex bg-gray-100 min-h-screen">
    <?php require base_path('views/partials/sidebar.php') ?>
    <div class="flex-grow text-gray-800">
        <?php require base_path('views/partials/header.dashboard.php') ?>

        <main class="p-6 sm:p-10 space-y-6">
            <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                <form action="/dashboard/item/add" method="POST" enctype="multipart/form-data" autocomplete="off">
                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                        <div class="text-gray-600 ml-9">
                            <p class="font-medium text-2xl">Tambah Barang</p>
                        </div>
                        <div class="lg:col-span-2">
                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                                <div class="md:col-span-5">
                                    <label for="nama">Nama Barang</label>
                                    <input type="text" name="nama" id="nama"
                                        class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" required />
                                </div>
                                <div class="md:col-span-5">
                                    <label for="kategori">Kategori</label>
                                    <input type="text" name="kategori" id="kategori"
                                        class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" required />
                                </div>
                                <div class="md:col-span-5 mt-3">
                                    <label for="merk">Merk</label>
                                    <input type="text" name="merk" id="merk"
                                        class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" required />
                                </div>
                                <div class="md:col-span-5 mt-3">
                                    <label for="harga">Harga</label>
                                    <input type="number" name="harga" id="harga"
                                        class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" required />
                                </div>
                                <div class="md:col-span-5 mt-3">
                                    <label for="stok">Stok</label>
                                    <input type="number" name="stok" id="stok"
                                        class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" required />
                                </div>
                                <div class="md:col-span-5 mt-3">
                                    <label for="gambar_barang">Gambar Barang</label>
                                    <input type="file" name="gambar_barang" id="gambar_barang" class="h-10 w-full" accept=".png">
                                </div>
                                <div class="col-span-full mt-3">
                                    <label for="deskripsi"
                                        class="block text-sm font-medium leading-6 text-gray-900">Deskripsi</label>
                                    <p class="mt-3 text-sm leading-6 text-gray-600">Tulis deskripsi barang disini.
                                    </p>
                                    <div class="mt-2">
                                        <textarea id="deskripsi" name="deskripsi" rows="3"
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
        </main>
    </div>


</body>

</html>