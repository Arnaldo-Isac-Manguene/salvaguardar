<footer x-data="{ open: false }" class="bg-white border-b border-gray-100 fixed-bottom">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{  " ©Copright ".date('Y') }}
                    </x-nav-link>
                </div>
                <div class="hidden space-x-10 sm:-my-px sm:m-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{  __(' FENG - Faculdade de Engenharia ') }}
                    </x-nav-link>
                </div>
            </div>

        </div>
    </div>
</footer>
