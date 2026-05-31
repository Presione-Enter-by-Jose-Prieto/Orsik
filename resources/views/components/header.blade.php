<header class="sticky top-0 z-40 underline-offset-4 lg:static">
    <nav class="flex w-full items-center justify-between px-6 py-2.25">
        <a href="/" class="z-50">
            <img src="/icon.ico" class="w-8" alt="Orsik">
        </a>

        <div class="hidden lg:flex xl:flex-1 items-center space-x-6 ml-6 mr-6 xl:mr-0 text-lg">
            <a class="hover:underline focus:underline focus:outline-none focus:ring-0" href="/docs">Docs</a>
        </div>
        <div class="flex flex-row items-center gap-2">
            <span>Proyecto en desarrollo</span>
            <div class="border rounded-full px-3 py-1 bg-blue-50 border-blue-200">
                <div class="text-xs font-medium text-blue-600">pre-alpha</div>
            </div>
        </div>

        <div class="hidden lg:flex xl:flex-1 items-center space-x-2 justify-end ml-6 xl:ml-0">
            <a class="flex cursor-pointer items-center rounded-full bg-black/5 hover:bg-black/10 text-lg px-4 py-1.5 text-black whitespace-nowrap"
                href="/signin">Sign in</a>
            <a class="flex cursor-pointer items-center rounded-full bg-neutral-800 text-lg px-4 py-1.5 text-white hover:bg-black whitespace-nowrap focus:bg-black"
                href="/register">Register</a>
        </div>

        <div class="lg:hidden flex items-center">
            <input type="checkbox" id="menu" class="peer hidden">
            <label for="menu" class="z-50 cursor-pointer peer-checked:hidden block">
                <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
                </svg>
            </label>
            <label for="menu" class="z-50 cursor-pointer hidden peer-checked:block fixed top-4 right-6">
                <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </label>

            <div class="fixed inset-0 bg-white z-40 hidden peer-checked:block overflow-y-auto">
                <div class="flex flex-col space-y-5 pt-22 text-3xl">
                    <a class="px-6" href="/docs">Docs</a>
                    <a href="/signin" class="block px-6">Sign in</a>
                    <a href="/register" class="block px-6">Register</a>
                </div>
            </div>
        </div>
    </nav>
</header>
