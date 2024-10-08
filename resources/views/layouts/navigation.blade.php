<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-9 w-auto fill-current bg-pistachio" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                    <x-nav-link :href="route('projecto')" :active="request()->routeIs('projecto')">
                        {{ __('Projecto') }}
                    </x-nav-link>
                    <x-nav-link :href="route('relatorio')" :active="request()->routeIs('relatorio')">
                        {{ __('Relatório') }}
                    </x-nav-link>
                    <x-nav-link :href="route('notificacao')" :active="request()->routeIs('notificacao')">
                        {{ __('Notificação') }}
                    </x-nav-link><x-nav-link :href="route('funcionario')" :active="request()->routeIs('funcionario')">
                        {{ __('Funcionarios') }}
                    </x-nav-link>
                    @if (Auth::user()->type == "admin" || Auth::user()->type == "esp")
                        <x-nav-link :href="route('usuario.index')" :active="request()->routeIs('usuario.index')">
                            {{ __('Usuários') }}
                        </x-nav-link>
                    @endif
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <div style="height:30px;">   
                                {{ Auth::user()->name }}
                                <p style="font-size: 10px;" class="block w-full text-end leading-5 text-blue-700 transition duration-150 ease-in-out">
                                    {{ Auth::user()->type == "admin" ? 'Administrador' : (Auth::user()->type == "er" ? 'Engenheiro Residente' :(Auth::user()->type == "esp" ? 'Especialista Supervisor' : 'Supervisor'))  }}
                                </p>
                            </div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Perfil') }}
                        </x-dropdown-link>
                        <x-dropdown-link href="#">
                            {{ __('menu-item') }}
                        </x-dropdown-link>
                        <hr>
                        <!-- Authentication -->
                        <form method="POST" class="d-flex" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                this.closest('form').submit();">
                                    {{ __('Sair') }}                                    
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex bg-pistachio items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md bg-pistachio hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden w-auto z-3">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link  class="text-end" :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
            
            <x-responsive-nav-link  class="text-end" :href="route('projecto')" :active="request()->routeIs('projecto')">
                {{ __('Projecto') }}
            </x-responsive-nav-link>
            
            <x-responsive-nav-link  class="text-end" :href="route('relatorio')" :active="request()->routeIs('relatorio')">
                {{ __('Relatório') }}
            </x-responsive-nav-link>
            
            <x-responsive-nav-link  class="text-end" :href="route('notificacao')" :active="request()->routeIs('notificacao')">
                {{ __('Notificação') }}
            </x-responsive-nav-link>
            
            <x-responsive-nav-link  class="text-end" :href="route('usuario.index')" :active="request()->routeIs('usuario.index')">
                {{ __('Usuários') }}
            </x-responsive-nav-link>
            
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200 text-end">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1 ">
                <x-responsive-nav-link class="text-end" :href="route('profile.edit')">
                    {{ __('Perfil') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}" >
                    @csrf

                    <x-responsive-nav-link class="text-end" :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Terminar Sessão') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
<style>
    .bg-pistachio{
        background-color: #679e53;
        /* background-color: #9fcd90; */
    }
</style>