<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Création d'un collaborateur :
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
                <form method="POST" action="{{ route('collaborateur.store') }}">
                    @csrf
                    <div>
                        <strong>Civilité : {!! "&emsp;" !!}<strong>
                        <input type="radio" id="male" name="civilité" value="male">
                        <label for="male">Male {!! "&emsp;" !!}</label>
                        <input type="radio" id="female" name="civilité" value="female">
                        <label for="male">Female {!! "&emsp;" !!}</label>
                        <input type="radio" id="non-binaire" name="civilité" value="non-binaire">
                        <label for="non-binaire">Non-binaire</label>
                    </div>

                    <div>
                        <strong>Nom : </strong>
                        <x-input id="Nom" class="block mt-1 w-full" type="text" name="Nom" required autofocus />
                    </div><br>

                    <div>
                        <strong>Prénom : </strong>
                        <x-input id="Prénom" class="block mt-1 w-full" type="text" name="Prénom" required autofocus />
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
                        <strong>Entreprise : </strong>
                        <x-input id="Entreprise" class="block mt-1 w-full" type="text" name="Entreprise"/>
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