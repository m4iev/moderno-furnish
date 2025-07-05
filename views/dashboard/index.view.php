<?php include base_path('views/partials/head.php') ?>

<body class="flex bg-gray-100 min-h-screen">
    <?php require base_path('views/partials/sidebar.php') ?>
    <div class="flex-grow text-gray-800">
        <?php require base_path('views/partials/header.dashboard.php') ?>

        <main class="p-6 sm:p-10 space-y-6">
            <div class="flex flex-col space-y-6 md:space-y-0 md:flex-row justify-between">
                <div class="mr-6">
                    <h1 class="text-2xl font-semibold mb-2">Dashboard</h1>
                </div>
                <div class="flex flex-wrap items-start justify-end -mb-3">


                </div>
            </div>
            <section class="grid md:grid-cols-2 xl:grid-cols-3 gap-6">
                <div class="flex items-center p-8 bg-white shadow rounded-lg">
                    <div
                        class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-purple-600 bg-purple-100 rounded-full mr-6">
                        <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="22 12 16 12 14 15 10 15 8 12 2 12" />
                            <path
                                d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z" />
                        </svg>
                    </div>
                    <div>
                        <span class="block text-2xl font-bold"><?= $items_count ?></span>
                        <span class="block text-gray-500">Item</span>
                    </div>
                </div>
                <div class="flex items-center p-8 bg-white shadow rounded-lg">
                    <div
                        class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-green-600 bg-green-100 rounded-full mr-6">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </div>
                    <div>
                        <span class="block text-2xl font-bold"><?= $users_count ?></span>
                        <span class="block text-gray-500">Akun</span>
                    </div>
                </div>
                <div class="flex items-center p-8 bg-white shadow rounded-lg">
                    <div
                        class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-red-600 bg-red-100 rounded-full mr-6">
                        <svg class="h-6 w-6" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" />
                            <rect x="7" y="9" width="14" height="10" rx="2" />
                            <circle cx="14" cy="14" r="2" />
                            <path d="M17 9v-2a2 2 0 0 0 -2 -2h-10a2 2 0 0 0 -2 2v6a2 2 0 0 0 2 2h2" />
                        </svg>
                    </div>
                    <div>
                        <span class="inline-block text-2xl font-bold"><?= $transactions_count ?></span>
                        <span class="block text-gray-500">Transaksi</span>
                    </div>
                </div>

            </section>


        </main>
    </div>


</body>

</html>