<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Création d'une entreprise :
        </h2>
    </x-slot>

    @if ($errors->any())
    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                        <div class="alert alert-danger">
                            <strong>Attention !</strong>Il y a une erreur dans avec vos données.<br>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </div>
                </div>
            </div>
        </div>
    </div>
    @endif
    
    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <form method="POST" action="{{ route('entreprise.store') }}">
                    @csrf
                    <div>
                        <strong>Nom de l'entreprise : </strong>
                        <x-input id="Nom" class="block mt-1 w-full" type="text" name="Nom" required autofocus />
                    </div><br>

                    <div>
                        <strong>Rue : </strong>
                        <x-input id="Rue" class="block mt-1 w-full" type="text" name="Rue" required/>
                    </div><br>

                    <div>
                        <strong>Code Postal : </strong>
                        <x-input id="CodePostal" class="block mt-1 w-full" type="text" name="CodePostal" required/>
                    </div><br>

                    <div>
                        <strong>Ville </strong>
                        <x-input id="Ville" class="block mt-1 w-full" type="text" name="Ville" required/>
                    </div><br>

                    <div>
                        <strong>Numéro de téléphone : </strong>
                        <x-input id="Numéro" class="block mt-1 w-full" type="text" name="Numéro"/>
                    </div><br>

                    <div>
                        <strong>Email : </strong>
                        <x-input id="Email" class="block mt-1 w-full" type="text" name="Email"/>
                    </div><br>

                    <div>
                        <x-button class="ml-3">
                            {{ __('Ajouter') }}
                        </x-button>
                    </div>
                </form>
                </div>
            </div>
        </div>
</x-app-layout>