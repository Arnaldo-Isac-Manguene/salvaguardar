<x-app-layout>
    <x-slot name="header">
        <div class=" d-flex me-2">
            <h2 class="col-10 me-auto font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
            <button type="button" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#projectoID">
                Novo Projeto
            </button>
        </div>
    </x-slot>
<?php
    $i=0;$p=0;$a=0;$c=0;$ddd='';
    foreach ($projectos as $projecto)
        {if( $projecto->estado == 'pendente')
            {$i++;}
        if( $projecto->estado == 'progresso')
            {$p++;}
        if( $projecto->estado == 'concluído')
            {$c++;$ddd=$projecto->estado;}
        if( $projecto->estado == 'abandonado')
            {$a++;}
    }
?>
    <div class="py-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="d-inline">
                    <div class="d-flex text-center ">
                        <div class="card w-25 m-1">
                            <a href="#" class="h-auto">
                                <div class="card-header" style="background:#cccccc;color:white"><b>Projetos Pendentes</b></div>
                                <div class="card-body"><p id="cardbody" class="qtdPendente">
                                    {{$i}}
                                </p></div>
                            </a>
                        </div>

                        <div class="card w-25 m-1">
                            <a href="#" class="h-auto">
                                <div class="card-header" style="background:#00aadd;color:white"> <b>Projetos Em Progresso</b></div>
                                <div class="card-body"><p id="cardbody">
                                    {{$p}}
                                </p></div>
                            </a>
                        </div>

                        <div class="card w-25 m-1">
                            <a href="#" class="h-auto">
                            <div class="card-header" style="background:#00002faa;color:white"> <b>Projetos Abandonados</b></div>
                            <div class="card-body"><p id="cardbody">
                                    {{ $a}}
                            </p></div>
                            </a>
                        </div>

                        <div class="card w-25 m-1"><a href="#" class="h-auto">
                            <div class="card-header" style="background:#11ffaabb;color:white"><b>Projetos Concluídos</b></div>
                            <div class="card-body"><p id="cardbody">
                                {{$c}}
                            </p></div> </a>
                        </div>

                        <div class="card w-25 m-1"><a href="#" class="h-auto">
                            <div class="card-header" style="background:#717faa;color:white"><b>Total de Projectos</b></div>
                            <div class="card-body"><p id="cardbody">
                                {{$c+$a+$i+$p}}
                            </p></div> </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-5 m-2"><canvas id="chartId" aria-label="chart" height="350" width="580"></canvas></div>
                    <div class="col-1"></div>
                    <div class="col-5 m-2"><canvas id="chartIdpie" aria-label="chart" height="350" width="580"></canvas></div>
                </div>
            </div>
        </div>
    </div>

    <script>var data = <?php echo json_encode($projectos); ?>;</script>
    @include('layouts.modal-projecto')

</x-app-layout>
