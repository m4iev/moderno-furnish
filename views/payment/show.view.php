<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/header.php') ?>

<section class="rounded-3xl shadow-2xl min-h-screen">
  <div class="p-8 text-center sm:p-12">
    <p class="text-sm font-semibold uppercase tracking-widest text-pink-500 mt-32">
    Pesanan Anda telah dilakukan
    </p>

    <h2 class="mt-6 text-3xl font-bold">Selesaikan pembayaran dan unggah bukti di bawah ini</h2>

    <a class="mt-8 inline-block p-10 rounded-full bg-pink-600 py-4 text-sm font-bold text-white shadow-xl"
      href="/history">
      Riwayat
    </a>

    <a class="mt-8 inline-block p-10 rounded-full bg-pink-600 py-4 text-sm font-bold text-white shadow-xl"
      href="/proof?id=<?= $_GET['id'] ?>">
      Unggah Bukti Pembayaran
    </a>
  </div>
</section>
</body>
</html>