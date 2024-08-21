<x-app-layout>
    <x-slot name="header">
        <div class=" d-flex me-2">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight me-auto">
                {{ __('Funcionário') }}
            </h2>
            <button type="button" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#projectoID">
                Novo Funcionário
            </button>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="row mt-2">
                    <h1 class="col-4 ps-4 me-auto h4">Lista de Relatórios</h1>
                    <div class="col-5 d-flex div-search">
                        <form action="{{ route('relatorio') }}">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" id="text-search" name="pesquisar" placeholder="Pesquisar ">
                                <div class="input-group-append">
                                    <button type="submit" class="btn" id="btn-search">Pesquisar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="min-h-40 ms-3">
                    @if (empty($funcionarios))
                        @if (isset($funcionarioPesquisa))

                            <table class="table table-responsive">
                                <thead class=" ">
                                  
                                    <tr class='h6'>
                                        <th scope="col"  class="text-nowrap">Referência do Projecto</th>
                                        <th scope="row"  class="text-nowrap">Nome</th>
                                        <th scope="row"  class="text-nowrap">Contacto</th>
                                        <th scope="col"  class="text-nowrap">Categoria</th>
                                        <th scope="col">Progresso</th>
                                        <th scope="col" class="">Ação</th>
                                    </tr>
                                </thead>
                                <tbody> 
                                    @foreach ($funcionarioPesquisa as $funcionario)
                                        <tr class="">
                                            <td scope="col">{{ $funcionario->refProject }}</td>
                                            <td  class="text-nowrap">{{ $funcionario->nome }}</td>
                                            <td >{{ $funcionario->contacto }}</td>
                                            <td class="">{{ $funcionario->categoria }}</td>
                                            <td class="w-auto d-flex ">
                                                <a href="#" class="me-1 btn btn-primary text-nowrap">Ver mais</a>
                                             </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="mb-2 me-3">
                                {!! $funcionarioPesquisa->links() !!}
                            </div>
                        @else
                            <div class="mb-2 ">
                                <p class="texto-piscante">Nenhum Funcionario encontrado! <br> Os funcionarios são feitos no relatórios.</p>
                            </div>
                        @endif
                    @else
                        <div class="table-responsive mx-2 ">

                            <table class="table table-responsive">
                                <thead class=" ">
                                    <tr class='h6'>
                                        <th scope="col"  class="text-nowrap">Referência</th>
                                        <th scope="row"  class="text-nowrap">Nome</th>
                                        <th scope="row"  class="text-nowrap">Contacto</th>
                                        <th scope="col"  class="text-nowrap">Categoria</th>
                                        <th scope="col" class="">Ação</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($funcionarios as $funcionario)
                                        <tr class="">
                                            <td scope="col">{{ $funcionario->refProject }}</td>
                                            <td  class="text-nowrap">{{ $funcionario->nome }}</td>
                                            <td >{{ $funcionario->contacto }}</td>
                                            <td class="">{{ $funcionario->categoria }}</td>
                                            <td class="w-auto d-flex ">
                                                <button class="btn btn-outline-info me-1" id="btn-apagar" data-bs-toggle="modal" data-bs-target="#projectoID">Visualizar</button>
                                                <a href="#" class="btn btn-outline-warning" id="btn-apagar"><i class="fa fas-edit">Baixar</i></a>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                            <div class="mb-2 me-3">
                                {!! $funcionarios->links() !!}
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

</x-app-layout>