<x-app-layout>
    <x-slot name="header">
        <div class=" d-flex me-2">
            <h2 class="col-10 me-auto font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Usuários cadastrados') }}
            </h2>
            <button type="button" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#userID">
                Novo usuário
            </button>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="row mt-2">
                    <h1 class="col-4 ps-4 me-auto h4">Lista de usuários</h1>
                    <div class="col-5 d-flex div-search">
                    <form action="{{ route('usuario.index') }}">
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
                @if (empty($users))
                    @if (isset($userPesquisa))

                        <table class="table table-responsive">
                            <thead class=" ">
                                <tr class='h6'>
                                    <th scope="col"  class="text-nowrap">Nome do usuário</th>
                                    <th scope="row"  class="text-nowrap">email</th>
                                    <th scope="row"  class="text-nowrap">Tipo de usuário</th>
                                    <th scope="col" class="">Ação</th>
                                </tr>
                            </thead>
                            <tbody>
                        @foreach ($userPesquisa as $user)
                        <tr class="">
                            <td scope="col">{{ $user->name }}</td>
                            <td  class="text-nowrap">{{ $user->email }}</td>
                            <td >
                                @if ($user->type=='admin')
                                    Administrador
                                @endif
                                @if ($user->type=='esp')
                                    Especialista Supervisor do Ambiente
                                @endif
                                @if ($user->type=='sup')
                                    Especialista do Ambiente
                                @endif
                                @if ($user->type=='er')
                                    Engenheiro Residente
                                @endif
                           </td>
                            <td class="w-auto d-flex ">
                                <a href="{{ route('usuario.show', $user->id) }}" class="me-1 btn btn-primary text-nowrap">Ver mais</a>
                                <form action="{{ route('usuario.destroy', $user->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-delete">Apagar</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="mb-2 me-3">
                        {!! $userPesquisa->links() !!}
                    </div>
                    @else
                    <p>Nenhum usuário encontrado.</p>
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
                                @foreach ($users as $user)
                                    <tr class="">
                                        <td scope="col">{{ $user->name }}</td>
                                        <td  class="text-nowrap">{{ $user->email }}</td>
                                        <td >{{ $user->type }}</td>
                                        <td class="w-auto d-flex ">
                                            <a href="#" class="me-1 btn btn-primary text-nowrap">Ver mais</a>
                                            <!-- <a href="#" class="btn btn-warning">Imprimir</a> -->
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                        <div class="mb-2 me-3">
                            {!! $users->links() !!}
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    @include('layouts.modal-user')

</x-app-layout>
