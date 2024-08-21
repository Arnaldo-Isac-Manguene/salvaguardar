<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Projecto')  }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="row m-2 d-flex">
                    <div class=" justify-content-start col-6">
                        <h4>Data do Projecto <b>{{ $projecto->created_at }}</b></h4>
                    </div>
                    <div class="justify-content-end d-flex col-6">
                        <a href="{{ route('funcionario.create', $projecto->referencia ) }}" class="btn btn-outline-primary btn-sm me-1" data-bs-toggle="modal" data-bs-target="#projectoID">
                            Novo Funcionário
                        </a>
                        <a href="{{ route('relatorio.create', $projecto->referencia ) }}" class="btn btn-outline-primary" >Relatório</a>
                    </div>
                </div>
                <div class="ms-1 row">
                    <p class="col-6">
                        <label style="font-weight:600; width: 120px;">NamePIU:</label> {{ $projecto->namePIU }}<br>
                        <label style="font-weight:600; width: 120px;">Referência:</label> {{ $projecto->referencia }}<br>
                        <label style="font-weight:600; width: 120px;">Preparado Por:</label> {{ $projecto->preparadoPor }}<br>
                        
                    </p>
                                        
                    <div class="col-6 mb-3">
                        <label style="font-weight:600; width: 160px;">Descrição:</label> {{ $projecto->descricao }}<br>
                        <label style="font-weight:600; width: 160px;">Aprovado Por:</label> {{ $projecto->aprovadoPor }}<br>
                        <div style="" class="d-flex ">
                            <label style="font-weight:600; width: 150px;" class="me-1">Estado do Projecto:</label> 
                            <form class="py-0" action="{{ route('projecto.update', $projecto->id) }}" method="POST" id="estadoForm">
                                @csrf
                                @method('PUT')
                                <select style="border:0" class="form-select py-0" name="estado" onchange="document.getElementById('estadoForm').submit();">
                                    <option value="pendente" {{ $projecto->estado === 'pendente' ? 'selected' : '' }}>Pendente</option>
                                    <option value="progresso" {{ $projecto->estado === 'progresso' ? 'selected' : '' }}>Em Progresso</option>
                                    <option value="abandonado" {{ $projecto->estado === 'abandonado' ? 'selected' : '' }}>Abandonado</option>
                                    <option value="concluído" {{ $projecto->estado === 'concluído' ? 'selected' : '' }}>Concluído</option>
                                </select>
                            </form>
                        </div>                                           
                    </div>
                    
                </div>
                <hr>
                <div class="m-2">
                    <h5>Relatórios</h5>
                    <div class="table-responsive-md">
                        <table class="table table-striped table-hover table-borderless align-middle" >
                            <thead class="table-secondary">                                
                                <tr>
                                    <th>Data</th>
                                    <th>Descrição</th>
                                    <th>Tipo</th>
                                    <th>relatório</th>
                                    <th class='col-3'>Acções</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                @foreach ($relatorios as $relatorio)
                                <tr class="">
                                    <td scope="row">{{ $relatorio->created_at }}</td>
                                    <td>{{ $relatorio->descricao }}</td>
                                    <td>{{ $relatorio->analyticalStatus }}</td>
                                    <td>{{ $relatorio->relatorio }}</td>
                                    <td class="col-2">
                                        <a href="{{ route('relatorio.visualizar', $relatorio->id) }}" class="btn btn-outline-info" id="btn-apagar">Visualizar</a>
                                        <a href="#" class="btn btn-outline-danger" id="btn-apagar">Apagar</a>
                                        <a href="{{ route('relatorio.baixar', $relatorio->id) }}" class="btn btn-outline-warning" id="btn-apagar"><i class="fa fas-edit">Baixar</i></a>
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
    @include('funcionario.modal-funcionario')
</x-app-layout>
