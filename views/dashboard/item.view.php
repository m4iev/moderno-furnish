<?php require base_path('views/partials/head.php') ?>

<body class="flex bg-gray-100 min-h-screen">
    <?php require base_path('views/partials/sidebar.php') ?>
    <div class="flex-grow text-gray-800">
        <?php require base_path('views/partials/header.dashboard.php') ?>

        <main class="p-6 sm:p-10 space-y-6">
            <div class="flex flex-col space-y-6 md:space-y-0 md:flex-row justify-between">
                <div class="mr-6">
                    <h2 class="text-2xl font-semibold mb-2">Produk</h2>
                </div>
                <a href="/dashboard/item/add">
                    <button
                        class="inline-flex px-5 py-3 text-white bg-purple-600 hover:bg-purple-700 focus:bg-purple-700 rounded-md ml-6 mb-3">
                        <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            class="flex-shrink-0 h-6 w-6 text-white -ml-1 mr-2">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                        </svg>
                        Tambah Produk Baru
                    </button>
                </a>
            </div>

            <?php if (isset($items)): ?>
                <table class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-700">
                    <thead class="bg-gray-100 dark:bg-gray-700">
                        <tr>
                            <th scope="col"
                                class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                ID
                            </th>
                            <th scope="col"
                                class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                Nama
                            </th>
                            <th scope="col"
                                class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                Stok
                            </th>
                            <th scope="col"
                                class="py-3 pl-8 pr-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                Harga
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                        <?php for ($i = 0; $i < count($items); $i++): ?>
                            <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <?= $items[$i]['id'] ?>
                                </td>
                                <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">
                                    <?= $items[$i]['nama'] ?>
                                </td>
                                <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <?= $items[$i]['stok'] ?>
                                </td>
                                <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <?= number_format($items[$i]['harga'], 2, ',', '.') ?>
                                </td>
                            </tr>
                        <?php endfor ?>
                    </tbody>
                </table>
            <?php else: ?>
                <h2 class="text-2xl font-semibold mb-2 text-center">No item has been stocked</h2>
            <?php endif ?>
        </main>
    </div>


</body>

</html>