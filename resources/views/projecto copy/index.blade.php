<x-app-layout>
    <x-slot name="header">
        <div class=" d-flex me-2">
            <h2 class="col-10 me-auto font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Projeto') }}
            </h2>
            <button type="button" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#projectoID">
                Novo Projeto
            </button>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="row mt-2">
                    <h1 class="col-4 ps-4 me-auto h4">Lista de Projetos</h1>
                    <div class="col-5 d-flex div-search">
                    <form action="{{ route('projecto') }}">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="text-search" name="pesquisar" placeholder="Pesquisar ">
                            <div class="input-group-append">
                            <button type="submit" class="" id="btn-search">Pesquisar</button>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
                <div class="min-h-40 ms-3">
                @if (empty($projectos))
                    @if (isset($projectoPesquisa))

                        <table class="table table-responsive">
                            <thead class=" ">
                                <tr class='h6'>
                                    <th scope="col"  class="text-nowrap">Referência</th>
                                    <th scope="row"  class="text-nowrap">Name of the PIU</th>
                                    <th scope="row"  class="text-nowrap">Descrição do Projeto</th>
                                    <th scope="col"  class="text-nowrap">Preparado Por</th>
                                    <th scope="col">Progresso</th>
                                    <th scope="col" class="">Ação</th>
                                </tr>
                            </thead>
                            <tbody>
                        @foreach ($projectoPesquisa as $projecto)
                        <tr class="">
                            <td scope="col">{{ $projecto->referencia }}</td>
                            <td  class="text-nowrap">{{ $projecto->namePIU }}</td>
                            <td >{{ $projecto->descricao }}</td>
                            <td class="">{{ $projecto->preparadoPor }}</td>
                            <td class="text-nowrap">{{ $projecto->estado }}</td>
                            <td class="w-auto d-flex ">
                                <a href="{{ route('projecto.show', $projecto->referencia)  }}" class="me-1 btn btn-primary text-nowrap">Ver mais</a>
                                <!-- <a href="#" class="btn btn-warning">Imprimir</a> -->
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="mb-2 me-3">
                        {!! $projectoPesquisa->links() !!}
                    </div>
                    @else
                    <p>Nenhum projeto encontrado.</p>
                    @endif
                @else
                    <div class="table-responsive mx-2 ">

                        <table class="table table-responsive">
                            <thead class=" ">
                                <tr class='h6'>
                                    <th scope="col"  class="text-nowrap">Referência</th>
                                    <th scope="row"  class="text-nowrap">Name of the PIU</th>
                                    <th scope="row"  class="text-nowrap">Descrição do Projeto</th>
                                    <th scope="col"  class="text-nowrap">Preparado Por</th>
                                    <th scope="col">Progresso</th>
                                    <th scope="col" class="">Ação</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($projectos as $projecto)
                                    <tr class="">
                                        <td scope="col">{{ $projecto->referencia }}</td>
                                        <td  class="text-nowrap">{{ $projecto->namePIU }}</td>
                                        <td >{{ $projecto->descricao }}</td>
                                        <td class="">{{ $projecto->preparadoPor }}</td>
                                        <td class="text-nowrap">{{ $projecto->estado }}</td>
                                        <td class="w-auto d-flex ">
                                            <a href="{{ route('projecto.show', $projecto->id)  }}" class="me-1 btn btn-primary text-nowrap">Ver mais</a>
                                            <!-- <a href="#" class="btn btn-warning">Imprimir</a> -->
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                        <div class="mb-2 me-3">
                            {!! $projectos->links() !!}
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    @include('layouts.modal-projecto')

</x-app-layout>
