<header class="header sticky top-0 bg-white shadow-md flex items-center justify-between px-8 py-02 mb-12 z-50">
    <!-- logo -->
    <h1 class="w-3/12">
        <a href="/">
            <img src="/img/modernofurnish-logo.png" alt="modernofurnish-logo"
                class="h-11 w-11 hover:text-yellow-500 duration-200">
        </a>
    </h1>

    <!-- navigation -->
    <nav class="nav font-semibold text-lg">
        <ul class="flex items-center">
            <li
                class="p-4 border-b-2 border-yellow-500 <?= $_SERVER['REQUEST_URI'] === '/' ? 'border-opacity-100 text-yellow-500' : 'border-opacity-0' ?> duration-200 cursor-pointer active">
                <a href="/">Beranda</a>
            </li>
            <li
                class="p-4 border-b-2 border-yellow-500 <?= $_SERVER['REQUEST_URI'] === '/products' ? 'border-opacity-100 text-yellow-500' : 'border-opacity-0' ?> duration-200 cursor-pointer">
                <a href="/products">Produk</a>
            </li>
        </ul>
    </nav>

    <!-- buttons --->
    <div class="w-3/12 flex justify-end">
        <a href="/history">
            <svg class="h-8 w-8 p-1 hover:text-yellow-500" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" />
                <rect x="5" y="3" width="14" height="18" rx="2" />
                <line x1="9" y1="7" x2="15" y2="7" />
                <line x1="9" y1="11" x2="15" y2="11" />
                <line x1="9" y1="15" x2="13" y2="15" />
            </svg>
        </a>
        <a href="/cart">
            <svg class="h-8 w-8 p-1 hover:text-yellow-500" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="9" cy="21" r="1" />
                <circle cx="20" cy="21" r="1" />
                <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6" />
            </svg>
        </a>
        <a href="/profile">
            <svg class="h-8 w-8 p-1 hover:text-yellow-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
        </a>
        <?php if (isset($_SESSION['user'])): ?>
            <a href="/logout">
                <svg class="h-8 w-8 p-1 hover:text-yellow-500" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" />
                    <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" />
                    <path d="M7 12h14l-3 -3m0 6l3 -3" />
                </svg>
            </a>
        <?php else: ?>
            <a href="/login">
                <svg class="h-8 w-8 p-1 hover:text-yellow-500" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" />
                    <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" />
                    <path d="M20 12h-13l3 -3m0 6l-3 -3" />
                </svg>
            </a>
        <?php endif ?>
    </div>
</header>