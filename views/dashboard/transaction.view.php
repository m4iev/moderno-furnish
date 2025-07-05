<?php require base_path('views/partials/head.php') ?>

<body class="flex bg-gray-100 min-h-screen">
    <?php require base_path('views/partials/sidebar.php') ?>
    <div class="flex-grow text-gray-800">
        <?php require base_path('views/partials/header.dashboard.php') ?>

        <main class="p-6 sm:p-10 space-y-6">
            <div class="flex flex-col space-y-6 md:space-y-0 md:flex-row justify-between">
                <div class="mr-6">
                    <h1 class="text-2xl font-semibold mb-2">Transaksi</h1>
                </div>
            </div>

            <?php if (isset($transactions)): ?>
                <table class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-700">
                    <thead class="bg-gray-100 dark:bg-gray-700">
                        <tr>
                            <th scope="col"
                                class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                ID
                            </th>
                            <th scope="col"
                                class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                Nama Transaksi
                            </th>
                            <th scope="col"
                                class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                Bukti
                            </th>
                            <th scope="col"
                                class="py-3 pl-8 pr-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                Status
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                        <?php for ($i = 0; $i < count($transactions); $i++): ?>
                            <form action="/dashboard/transaction" method="POST">
                                <input type="hidden" name="_method" value="PATCH">
                                <input type="hidden" name="id" value="<?= $transactions[$i]['id'] ?>">
                                <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <?= $transactions[$i]['id'] ?>
                                    </td>
                                    <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">
                                        <?= $transactions[$i]['nama'] ?>
                                    </td>
                                    <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <?php if (file_exists(base_path("public/img/users/" . $accounts_id[$i] . "/proof_" . $accounts_id[$i] . "-" . $transactions[$i]['id'] . ".png"))): ?>
                                            <a href=<?= "/img/users/" . $accounts_id[$i] . "/proof_" . $accounts_id[$i] . "-" . $transactions[$i]['id'] . ".png" ?> class="underline text-purple-500"
                                                download>Lihat</a>
                                        <?php else: ?>
                                            <p class="text-yellow-500">Tidak diunggah</p>
                                        <?php endif ?>
                                    </td>
                                    <td class="py-4 px-6 text-sm font-medium whitespace-nowrap">
                                        <select name="status" required onchange="this.form.submit()"
                                            class="h-full rounded-md border-0 bg-transparent py-0 pl-2 pr-7 text-<?php if ($transactions[$i]['status'] === 'Belum Dibayar') {
                                                echo 'yellow';
                                            } elseif ($transactions[$i]['status'] === 'Dibayar') {
                                                echo 'blue';
                                            } else {
                                                echo 'green';
                                            } ?>-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
                                            <option value="Belum Dibayar" class="text-yellow-500" <?php if ($transactions[$i]['status'] === 'Belum Dibayar')
                                                echo "selected='selected'" ?>>Belum Dibayar
                                                </option>
                                                <option value="Dibayar" class="text-blue-500" <?php if ($transactions[$i]['status'] === 'Dibayar')
                                                echo "selected='selected'" ?>>Dibayar
                                                </option>
                                                <option value="Terkirim" class="text-green-500" <?php if ($transactions[$i]['status'] === 'Terkirim')
                                                echo "selected='selected'" ?>>
                                                    Terkirim</option>
                                            </select>
                                        </td>
                                    </tr>
                                </form>
                        <?php endfor ?>
                    </tbody>
                </table>
            <?php else: ?>
                <h2 class="text-2xl font-semibold mb-2 text-center">Tidak ada transaksi yang dilakukan</h2>
            <?php endif ?>
        </main>
    </div>


</body>

</html>