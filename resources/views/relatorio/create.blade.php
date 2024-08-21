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
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
                <div  class="container mt-4">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#relatorio">
                                EVALUATION OF ADMINISTRATIVE PERFORMANCE					
                            </a>
                        </li>
                        @if (3>2)
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#relatorioi">
                                    TECHNICAL PERFORMANCE EVALUATION Passa
                                </a>
                            </li>
                        @else    
                            <li class="nav-item">
                                <a class="nav-link disabled"  href="#">
                                    TECHNICAL PERFORMANCE EVALUATION			
                                </a>
                            </li>
                        @endif
                        
                        @if (3<4)
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#relatorioii">Finalizando</a>
                            </li>                            
                        @else
                            <li class="nav-item ">
                                <a class="nav-link disabled" href="#">Finalizando</a>
                            </li>                            
                        @endif
                    </ul>
                    <div class="tab-content mt-2">
                        <div id="relatorio" class="tab-pane fade show ">
                            @include('relatorio.relatorios.relatorio')
                        </div>
                        <div id="relatorioi" class="tab-pane fade show">
                            @include('relatorio.relatorios.relatorioi')
                        </div>
                        <div id="relatorioii" class="tab-pane fade show">
                            @include('relatorio.relatorios.relatorioii')            
                        </div>
                    </div>  
                </div>
                <!-- Inclua o Bootstrap JS e o jQuery -->
                <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
                {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>             --}}
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
        


            </div>
        </div>
    </div>
</x-app-layout>