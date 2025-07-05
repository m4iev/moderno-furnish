<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/header.php') ?>


<section class="py-24 relative">
    <div class="w-full max-w-7xl mx-auto px-4 md:px-8 min-h-full">
        <h2 class="font-manrope font-extrabold text-3xl lead-10 text-black mb-9 text-center"><?= count($transactions) > 0 ? "Riwayat Pesanan" : "Anda belum memiliki pesanan apa pun." ?></h2>

        <?php if (isset($transactions)): ?>
            <?php foreach ($transactions as $transaction): ?>
                <div class="mt-7 pt-9">
                    <div class="flex max-lg:flex-col items-center gap-8 lg:gap-24 px-3 md:px-11">
                        <div class="grid grid-cols-2 w-full">
                            <div
                                class="col-span-4 sm:col-span-3 max-sm:mt-4 sm:pl-8 flex flex-col justify-center max-sm:items-center">
                                <h6 class="font-manrope font-semibold text-2xl leading-9 text-black mb-3 whitespace-nowrap">
                                    <?= $transaction['nama'] ?>
                                </h6>
                                <div class="flex items-center max-sm:flex-col gap-x-10 gap-y-3">
                                    <p class="font-semibold text-xl leading-8 text-black whitespace-nowrap">Total
                                        Rp<?= number_format($transaction['total_harga'], 2, ',', '.') ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center justify-around w-full sm:pl-28 lg:pl-0">
                            <?php if ($transaction['status'] === 'Belum Dibayar'): ?>
                                <div class="flex flex-col justify-center items-start max-sm:items-center">
                                    <p class="font-normal text-lg text-gray-500 leading-8 mb-2 text-left whitespace-nowrap">
                                        Status</p>
                                    <a href="/proof?id=<?= $transaction['id'] ?>"
                                        class="font-semibold text-lg leading-8 text-yellow-500 text-left whitespace-nowrap underline">Belum Bayar</a>
                                </div>
                            <?php elseif ($transaction['status'] === 'Dibayar'): ?>
                                <div class="flex flex-col justify-center items-start max-sm:items-center">
                                    <p class="font-normal text-lg text-gray-500 leading-8 mb-2 text-left whitespace-nowrap">
                                        Status</p>
                                    <p class="font-semibold text-lg leading-8 text-blue-500 text-left whitespace-nowrap">
                                        <?= $transaction['status'] ?>
                                    </p>
                                </div>
                            <?php else: ?>
                                <div class="flex flex-col justify-center items-start max-sm:items-center">
                                    <p class="font-normal text-lg text-gray-500 leading-8 mb-2 text-left whitespace-nowrap">
                                        Status</p>
                                    <p class="font-semibold text-lg leading-8 text-green-500 text-left whitespace-nowrap">
                                        <?= $transaction['status'] ?>
                                    </p>
                                </div>
                            <?php endif ?>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        <?php else: ?>
            <h3 class="text-center">Anda belum memiliki pesanan apa pun.</h3>
        <?php endif ?>
    </div>
</section>


<?php require base_path('views/partials/foot.php') ?>