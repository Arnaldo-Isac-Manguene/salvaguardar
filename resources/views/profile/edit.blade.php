<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12 container">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="d-flex justify-content-center">
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg col-5">
                    <div class="max-w-xl">
                        @include('profile.partials.update-profile-information-form')
                    </div>
                </div>

                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg ms-5 col-5">
                    <div class="max-w-xl">
                        @include('profile.partials.update-password-form')
                    </div>
                </div>
            </div>

            <div class="p-4 bg-white shadow sm:rounded-lg">
                <div class="max-w-xxl center">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<style>
    @media (max-width:700px){
        .d-flex{
            display: block;
        } 
    }
</style>