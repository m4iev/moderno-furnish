<?php require base_path('views/partials/head.php') ?>

<div class="overflow-hidden bg-white-900">
    <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
        <div class="flex flex-col items-center justify-between xl:flex-row">
            <div class="w-full max-w-xl mb-12 xl:pr-16 xl:mb-0 xl:w-7/12">
                <h1 class="text-3xl md:text-5xl text-yellow-300 tracking-loose">ModernoFurnish</h1>
                <h2 class="text-3xl md:text-5xl leading-relaxed md:leading-snug mb-2">Temukan furnitur berkualitas terbaik dengan harga yang sesuai dengan kantong Anda.
                </h2>
                <p class="text-sm md:text-base text-white-50 mb-4">Dipercaya oleh lebih dari 1000 orang.</p>
            </div>
            <div class="w-full max-w-xl xl:px-8 xl:w-5/12">
                <div class="relative">
                    <svg viewBox="0 0 52 24" fill="currentColor"
                        class="absolute bottom-0 right-0 z-0 hidden w-32 -mb-8 -mr-20 text-teal-accent-400 lg:w-32 lg:-mr-16 sm:block">
                        <defs>
                            <pattern id="766323e1-e594-4ffd-a688-e7275079d540" x="0" y="0" width=".135" height=".30">
                                <circle cx="1" cy="1" r=".7"></circle>
                            </pattern>
                        </defs>
                        <rect fill="url(#766323e1-e594-4ffd-a688-e7275079d540)" width="52" height="24"></rect>
                    </svg>
                    <div class="relative bg-white rounded shadow-2xl p-7 sm:p-10">
                        <h3 class="mb-4 text-xl font-semibold sm:text-center sm:mb-6 sm:text-2xl">
                            Masuk
                        </h3>
                        <form action="/login" method="POST">
                            <div class="mb-1 sm:mb-2">
                                <label for="email" class="inline-block mb-1 font-medium">E-mail</label>
                                <input placeholder="akas@example.org" required="" type="text"
                                    class="flex-grow w-full h-12 px-4 mb-2 transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none focus:border-deep-purple-accent-400 focus:outline-none focus:shadow-outline"
                                    id="email" name="email" />
                            </div>
                            <div class="mb-1 sm:mb-2">
                                <label for="password" class="inline-block mb-1 font-medium">Kata Sandi</label>
                                <input placeholder="Kata Sandi Anda" required="" type="password"
                                    class="flex-grow w-full h-12 px-4 mb-2 transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none focus:border-deep-purple-accent-400 focus:outline-none focus:shadow-outline"
                                    id="password" name="password" />
                            </div>
                            <div class="mt-4 mb-2 sm:mb-4">
                                <button type="submit"
                                    class="inline-flex items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-gray-900 hover:bg-gray-700 focus:shadow-outline focus:outline-none">
                                    Login
                                </button>
                            </div>
                        </form>
                        <?php if (isset($error)): ?>
                            <p class="text-red-500 text-xs mt-2"><?= $error ?></p>
                        <?php endif; ?>
                        <p>
                            Belum punya akun?
                            <a href="/register" class="font-medium text-indigo-600 hover:text-indigo-500">
                                Daftar
                                <span aria-hidden="true"> &rarr;</span>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require base_path('views/partials/foot.php') ?>

</body>

</html>