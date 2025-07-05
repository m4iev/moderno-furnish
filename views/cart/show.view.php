<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/header.php') ?>


<div class="flex h-full flex-col bg-white shadow-xl">
  <div class="flex-1 overflow-y-auto px-4 py-6 sm:px-6">
    <h2 class="text-lg font-medium text-gray-900" id="slide-over-title">keranjang belanja</h2>

    <div class="mt-8">
      <div class="flow-root">
        <?php if (isset($carts)): ?>
          <ul role="list" class="-my-6 divide-y divide-gray-200">
            <?php for ($i = 0; $i < count($carts); $i++): ?>
              <li class="flex py-6 my-3">
                <div class="h-24 w-24 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">
                  <img src="img/items/<?= $carts[$i]['id_barang'] ?>/<?= $carts[$i]['id_barang'] ?>.png"
                    class="h-full w-full object-cover object-center">
                </div>
                <div class="ml-4 flex flex-1 flex-col">
                  <div>
                    <div class="flex justify-between text-base font-medium text-gray-900">
                      <h3>
                        <a href="/product?id=<?= $items[$i]['id'] ?>"><?= $items[$i]['nama'] ?></a>
                      </h3>
                      <p class="ml-4">Rp<?= number_format($items[$i]['harga'] * $carts[$i]['jumlah'], 2, ',', '.') ?></p>
                    </div>
                  </div>
                  <div class="flex flex-1 items-end justify-between text-sm">
                    <p class="text-gray-500">Qty <?= $carts[$i]['jumlah'] ?></p>
                    <div class="flex">
                      <form action="/cart" method="POST">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="id_keranjang" value="<?= $carts[$i]['id'] ?>">
                        <button type="submit" class="font-medium text-indigo-600 hover:text-indigo-500">Hapus</button>
                      </form>
                    </div>
                  </div>
                </div>
              </li>
            <?php endfor ?>
          </ul>
          <div class="border-t border-gray-200 px-4 py-6 sm:px-6">
            <div class="flex justify-between text-base font-medium text-gray-900">
              <p>Subtotal</p>
              <p>Rp<?= number_format($total, 2, ',', '.') ?></p>
            </div>
            <p class="mt-0.5 text-sm text-gray-500">Bebas pengiriman.</p>
            <div class="mt-6">
              <a href="/checkout"
                class="flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-6 py-3 text-base font-medium text-white shadow-sm hover:bg-indigo-700">Checkout</a>
            </div>
            <div class="mt-6 flex justify-center text-center text-sm text-gray-500">
              <p>
                or
                <a href="/products" class="font-medium text-indigo-600 hover:text-indigo-500">
                  Lanjutkan Belanja
                  <span aria-hidden="true"> &rarr;</span>
                </a>
              </p>
            </div>
          </div>
        <?php else: ?>
          <h3 class="font-medium text-indigo-600 hover:text-indigo-500 my-12 text-center">Anda tidak memiliki barang apa pun di keranjang belanja Anda.</h3>
          <a href="/products"
            class="flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-6 py-3 text-base font-medium text-white shadow-sm hover:bg-indigo-700">Lanjutkan Belanja</a>
        <?php endif ?>
      </div>
    </div>
  </div>
</div>

</body>
</html>