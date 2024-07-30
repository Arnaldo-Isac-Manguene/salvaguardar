<x-app-layout>
    {{-- @if (Auth::user()->type === "admin") --}}
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Novo Relatório') }}
            </h2>
        </x-slot>
    {{-- @endif --}}
    

    <div class="py-1 mx-5 ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg  pb-2">
                <div class="px-3 pt-1">
                    <ul class="nav nav-tabs">
                        <il class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#relatorio">Relatório 1</a>
                        </il>
                        <il class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#relatorioi">Relatório 2</a>
                        </il>
                        <il class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#relatorioii">Relatório 3</a>
                        </il>
                    </ul>
                    <div class="tab-content mt-4">
                        <div id="relatorio" class="tab-pane fade show active">
                            1{{-- @include('relatorio.relatorios.relatorio') --}}
                        </div>
                        <div id="relatorioi" class="tab-pane fade">
                            2{{-- @include('relatorio.relatorios.relatorio') --}}
                        </div>
                        <div id="relatorioii" class="tab-pane fade">
                            3{{-- @include('relatorio.relatorios.relatorio') --}}
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</x-app-layout>