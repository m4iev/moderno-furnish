<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/header.php') ?>

<h2 class="text-3xl text-center mb-3 font-bold">Produk</h2>
<div class=" px-2">
    <div class="max-w-md mx-auto rounded-lg overflow-hidden md:max-w-xl">
        <div class="md:flex">
            <div class="w-full p-3">

                <div class="relative">
                    <button>
                        <svg class="absolute h-8 w-8 top-9 left-4" width="24" height="24" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" />
                            <circle cx="10" cy="10" r="7" />
                            <line x1="21" y1="21" x2="15" y2="15" />
                        </svg>
                    </button>
                    <input type="text"
                        class="bg-white h-14 w-full px-12 rounded-lg focus:outline-none hover:cursor-pointer" name="search" id="search-input" onkeypress="handle(event);">
                </div>

            </div>

        </div>
    </div>

</div>
<div class="w-full flex flex-col justify-center align-center mb-3">
    <p class="text-center font-medium">Kategori</p>
    <div class="w-full flex justify-center align-center gap-6 mt-3">
        <a href="/products"
            class="hover:text-yellow-500 <?php if ($_SERVER['REQUEST_URI'] === '/products')
                echo 'border-b-2 border-yellow-500' ?>">Semua</a>
            <a href="/products?kategori=Meja"
                class="hover:text-yellow-500 <?php if ($_SERVER['REQUEST_URI'] === '/products?kategori=Meja')
                echo 'border-b-2 border-yellow-500' ?>">Meja</a>
            <a href="/products?kategori=Kursi"
                class="hover:text-yellow-500 <?php if ($_SERVER['REQUEST_URI'] === '/products?kategori=Kursi')
                echo 'border-b-2 border-yellow-500' ?>">Kursi</a>
            <a href="/products?kategori=Lemari"
                class="hover:text-yellow-500 <?php if ($_SERVER['REQUEST_URI'] === '/products?kategori=Lemari')
                echo 'border-b-2 border-yellow-500' ?>">Lemari</a>
            <a href="/products?kategori=Lampu"
                class="hover:text-yellow-500 <?php if ($_SERVER['REQUEST_URI'] === '/products?kategori=Lampu')
                echo 'border-b-2 border-yellow-500' ?>">Lampu</a>
            <a href="/products?kategori=Sofa"
                class="hover:text-yellow-500 <?php if ($_SERVER['REQUEST_URI'] === '/products?kategori=Sofa')
                echo 'border-b-2 border-yellow-500' ?>">Sofa</a>
        </div>
    </div>


    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 w-full px-12 min-h-screen">
    <?php foreach ($products as $product): ?>
        <div class="relative mx-auto w-full">
            <a href="/product?id=<?= $product['id'] ?>"
                class="relative inline-block duration-300 ease-in-out transition-transform transform hover:-translate-y-2 w-full">
                <div class="shadow p-4 rounded-lg bg-white hover:bg-gray-400">
                    <div class="flex justify-center relative rounded-lg overflow-hidden h-52">
                        <div class="transition-transform duration-500 transform ease-in-out hover:scale-110 w-full">
                            <div class="absolute inset-0 bg-black opacity-100">
                                <img src="img/items/<?= $product['id'] ?>/<?= $product['id'] ?>.png" alt="">
                            </div>
                        </div>


                        <span
                            class="absolute top-0 left-0 inline-flex mt-3 ml-3 px-3 py-2 rounded-lg z-10 bg-red-500 text-sm font-medium text-white select-none">
                            Baru
                        </span>
                    </div>

                    <div class="mt-4">
                        <h2 class="font-medium text-base md:text-lg text-gray-800 line-clamp-1"
                            title="<?= $product['nama'] ?>">
                            <?= $product['nama'] ?>
                        </h2>
                        <p class="mt-2 text-sm text-gray-800 line-clamp-1">
                            <?= $product['kategori'] ?>
                        </p>
                    </div>

                    <div class="grid grid-cols-2 mt-8">
                        <div class="flex items-center">
                            <p class="text-gray-800 line-clamp-1">
                                <?= $product['merk'] ?>
                            </p>
                        </div>

                        <div class="flex justify-end">
                            <p class="inline-block font-semibold text-primary whitespace-nowrap leading-tight rounded-xl">
                                <span class="text-sm uppercase">
                                    Rp
                                </span>
                                <span class="text-lg"><?= number_format($product['harga'], 2, ',', '.') ?></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    <?php endforeach ?>
</div>

<script src="/js/search.js"></script>
<?php require base_path('views/partials/foot.php') ?>