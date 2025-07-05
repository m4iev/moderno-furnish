<aside class="hidden sm:flex sm:flex-col">
    <div class="flex-grow flex flex-col justify-between text-gray-500 bg-gray-800">
        <nav class="flex flex-col mx-4 my-3 space-y-4">
            <a href="/dashboard"
                class="inline-flex items-center justify-center py-3 <?= $_SERVER['REQUEST_URI'] === '/dashboard' ? 'text-purple-600 bg-white rounded-lg' : 'hover:text-gray-400 hover:bg-gray-700 focus:text-gray-400 focus:bg-gray-700 rounded-lg' ?>">
                <span class="sr-only">Home</span>
                <svg class="h-8 w-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                    <polyline points="9 22 9 12 15 12 15 22" />
                </svg>
            </a>
            <a href="/dashboard/item"
                class="inline-flex items-center justify-center py-3 <?= $_SERVER['REQUEST_URI'] === '/dashboard/item' ? 'text-purple-600 bg-white rounded-lg' : 'hover:text-gray-400 hover:bg-gray-700 focus:text-gray-400 focus:bg-gray-700 rounded-lg' ?>">
                <span class="sr-only">Item</span>
                <svg class="h-8 w-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="22 12 16 12 14 15 10 15 8 12 2 12" />
                    <path
                        d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z" />
                </svg>
            </a>
            <a href="/dashboard/account"
                class="inline-flex items-center justify-center py-3 <?= $_SERVER['REQUEST_URI'] === '/dashboard/account' ? 'text-purple-600 bg-white rounded-lg' : 'hover:text-gray-400 hover:bg-gray-700 focus:text-gray-400 focus:bg-gray-700 rounded-lg' ?>">
                <span class="sr-only">User</span>
                <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>
            </a>
            <a href="/dashboard/transaction"
                class="inline-flex items-center justify-center py-3 <?= $_SERVER['REQUEST_URI'] === '/dashboard/transaction' ? 'text-purple-600 bg-white rounded-lg' : 'hover:text-gray-400 hover:bg-gray-700 focus:text-gray-400 focus:bg-gray-700 rounded-lg' ?>">
                <span class="sr-only">Transaction</span>
                <svg class="h-8 w-8" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" />
                    <rect x="7" y="9" width="14" height="10" rx="2" />
                    <circle cx="14" cy="14" r="2" />
                    <path d="M17 9v-2a2 2 0 0 0 -2 -2h-10a2 2 0 0 0 -2 2v6a2 2 0 0 0 2 2h2" />
                </svg>
            </a>
        </nav>
    </div>
</aside>