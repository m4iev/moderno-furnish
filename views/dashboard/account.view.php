<?php require base_path('views/partials/head.php') ?>

<body class="flex bg-gray-100 min-h-screen">
    <?php require base_path('views/partials/sidebar.php') ?>
    <div class="flex-grow text-gray-800">
        <?php require base_path('views/partials/header.dashboard.php') ?>

        <main class="p-6 sm:p-10 space-y-6">
            <div class="flex flex-col space-y-6 md:space-y-0 md:flex-row justify-between">
                <div class="mr-6">
                    <h1 class="text-2xl font-semibold mb-2">Pengguna</h1>
                </div>
            </div>

            <?php if (isset($users)): ?>
                <table class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-700">
                    <thead class="bg-gray-100 dark:bg-gray-700">
                        <tr>
                            <th scope="col"
                                class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                ID
                            </th>
                            <th scope="col"
                                class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                Nama Pengguna
                            </th>
                            <th scope="col"
                                class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                E-mail
                            </th>
                            <th scope="col" class="p-4">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                        <?php foreach ($users as $user): ?>
                            <form action="/dashboard/account" method="POST">
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="id" value="<?= $user['id'] ?>">
                                <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <?= $user['id'] ?>
                                    </td>
                                    <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">
                                        <?= $user['username'] ?>
                                    </td>
                                    <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <?= $user['email'] ?>
                                    </td>
                                    <td class="py-4 px-6 text-sm font-medium text-center whitespace-nowrap">
                                        <button type="submit"
                                            class="text-red-600 dark:text-red-500 hover:underline">Hapus</button>
                                    </td>
                                </tr>
                            </form>
                        <?php endforeach ?>
                    </tbody>
                </table>
            <?php else: ?>
                <h2 class="text-2xl font-semibold mb-2 text-center">No user registered</h2>
            <?php endif ?>

        </main>
    </div>


</body>

</html>