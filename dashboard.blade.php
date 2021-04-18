<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if(auth()->user()->name == "admin")
                        Vous êtes connecté comme admin !
                    @elseif(auth()->user()->name == "gestionnaire")
                        Vous êtes connecté comme gestionnaire !
                    @elseif(auth()->user()->name == "user")
                        Vous êtes connecté comme user !
                    @else
                    Vous n'êtes pas sensé être là !
                    @endif
                </div>
            </div><br>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <a href="{{url('/entreprise/create')}}">Création d'une entreprise</a>
                        </div>

                        <div class="p-6 bg-white border-b border-gray-200">
                            <a href="{{url('entreprise')}}">Liste des entreprises</a>
                        </div>
            </div><br>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <a href="{{url('/collaborateur/create')}}">Création d'un collaborateur</a>
                        </div>
                        </div>
                        <div class="p-6 bg-white border-b border-gray-200">
                            <a href="{{url('collaborateur')}}">Liste des collaborateurs</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
