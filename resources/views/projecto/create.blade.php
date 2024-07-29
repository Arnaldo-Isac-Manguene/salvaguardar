<x-app-layout>
    {{-- @if (Auth::user()->type === "admin") --}}
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Novo Projecto') }}
            </h2>
        </x-slot>
    {{-- @endif --}}
    

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="">
                    <div class="justify-content-end my-2 d-flex  me-2">
                        <a href="#" class="btn btn-primary">Salvar Projecto</a>
                    </div>
                </div>

                <form action="#" method="get" class="m-5 form-group">
                    {{ csrf_field() }}
                    <label for="project-name" class="label-control">Projecto</label>
                    <input type="text" name="project-name" id="project-name" class="form-control">
                    <button class="btn btn-sm-primary text-end mt-2" type="submit">Salvar Projecto</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
