<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                    <div
                        class="table-responsive"
                    >
                        <div class="justify-content-end my-2 d-flex"><a href="#" class="btn btn-primary">Novo Projecto</a></div>
                        <table
                            class="table"
                        >
                            <thead>
                                <tr>
                                    <th scope="col">Referência</th>
                                    <th scope="col">Projecto</th>
                                    <th scope="col">Progresso</th>
                                    <th scope="col">Acção</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="">
                                    <td scope="row">ref_001</td>
                                    <td>Contrução Estrada</td>
                                    <td>Pedente</td>
                                    <td>
                                        <a href="#" class="btn btn-primary">ver</a>
                                        <a href="#" class="btn btn-info">editar</a>
                                        <a href="#" class="btn btn-warning">relatório</a>
                                    </td>
                                </tr>
                                <tr class="">
                                    <td scope="row">ref_001</td>
                                    <td>Contrução Estrada</td>
                                    <td>Pedente</td>
                                    <td>
                                        <a href="#" class="btn btn-primary">ver</a>
                                        <a href="#" class="btn btn-info">editar</a>
                                        <a href="#" class="btn btn-warning">relatório</a>
                                    </td>
                                </tr>
                                <tr class="">
                                    <td scope="row">ref_001</td>
                                    <td>Contrução Estrada</td>
                                    <td>Pedente</td>
                                    <td>
                                        <a href="#" class="btn btn-primary">ver</a>
                                        <a href="#" class="btn btn-info">editar</a>
                                        <a href="#" class="btn btn-warning">relatório</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
