<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('usuarios')  }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="row m-2 d-flex">
                    <div class=" justify-content-start col-6">
                        <h4>usuario  <b> {{ $usuario->name }}</b></h4>
                    </div>
                    <div class="justify-content-end d-flex col-6">
                        <a href="#" class="btn btn-outline-primary">Relatório</a>
                    </div>
                </div>
                <div class="ms-1 row">
                    <p class="col-6">
                        <label style="font-weight:600; width: 120px;">Referência:</label> {{ $usuario->referencia }}<br>
                        <label style="font-weight:600; width: 120px;">Preparado Por:</label> {{ $usuario->preparadoPor }}<br>
                        <label style="font-weight:600; width: 120px;">NamePIU:</label> {{ $usuario->namePIU }}<br>
                        
                    </p>
                                        
                    <p class="col-6">
                        <label style="font-weight:600; width: 120px;">Descricao:</label> {{ $usuario->descricao }}<br>
                        <label style="font-weight:600; width: 120px;">Aprovado Por:</label> {{ $usuario->aprovadoPor }}<br>
                        <label style="font-weight:600; width: 150px;">Estado do usuario:</label> {{ $usuario->estado==="pendente"?"Pendente":           ($usuario->estado==="concluído"?"Concluído":($usuario->estado==="progresso"?"Em Progresso": "Abandonado")) }}
                    </p>
                    
                </div>
                <hr>
                <div class="m-2">
                    <h5>Relatórios</h5>
                    <div class="table-responsive-md">
                        <table class="table table-striped table-hover table-borderless align-middle"
                        >
                            <thead class="table-light table-secondary">
                                <caption>
                                    Table Name
                                </caption>
                                <tr>
                                    <th>Data</th>
                                    <th>Descrição</th>
                                    <th>Tipo</th>
                                    <th>relatorio</th>
                                    <th class='col-3'>Acções</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                @foreach ($relatorios as $relatorio)
                                <tr class="">
                                    <td scope="row">{{ $relatorio->dia }}</td>
                                    <td>{{ $relatorio->descricao }}</td>
                                    <td>{{ $relatorio->tipo }}</td>
                                    <td>{{ $relatorio->relatorio }}</td>
                                    <td class="col-2">
                                        <a href="#" class="btn btn-outline-info" id="btn-apagar">Visualizar</a>
                                        <a href="#" class="btn btn-outline-danger" id="btn-apagar">Apagar</a>
                                        <a href="#" class="btn" id="btn-apagar"><i class="fa fas-edit">Baixar</i></a>
                                    </td>
                                </tr>
                                @endforeach
                               
                            </tbody>
                            <tfoot>
                                
                            </tfoot>
                        </table>
                        <div  class="mb-2 me-3">
                            {!! $relatorios->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
