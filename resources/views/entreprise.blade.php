<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Liste des entreprises :
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border v-b border-gray-200">
                    <form action="{{ route('entreprise.search') }}">
                        <input type="text" class="form-control" name="search" placeholder="Piment d'espelette">
                        {!! "&emsp;" !!}
                        <x-button type="submit"> Rechercher </x-button>
                    </form>
                </div>
            </div>
            @if (\Session::has('success'))
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="alert alert-success">
                        <ul>
                            <li>{!! \Session::get('success') !!}</li>
                        </ul>
                    </div>
                </div>
            </div>
            @endif
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table>
                        <thread>
                            <tr>
                                <th> Nom {!! "&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;" !!}</th>
                                <th> Numéro {!! "&emsp;&emsp;&emsp;&emsp;&emsp;" !!}</th>
                                <th> Email {!! "&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;" !!}</th>
                                <th>Code Postal {!! "&emsp;&emsp;" !!}</th>
                            </tr>
                        </thread>
                        <thread>
                            <tbody>
                                @foreach($entreprise as $entreprise)
                                <tr>
                                    <td> {{$entreprise->Nom}} </td>
                                    <td> {{$entreprise->Numéro}} </td>
                                    <td> {{$entreprise->Email}} </td>
                                    <td> {{$entreprise->CodePostal}} </td>
                                    <td>
                                        <form action="{{ route('entreprise.destroy', $entreprise->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Supprimer {!!
                                                "&emsp;&emsp;" !!}</button>
                                        </form>
                                    </td>
                                    <td>
                                        <a href="{{url('entreprise/'.$entreprise->id )}}">Détails {!! "&emsp;&emsp;"
                                            !!}</a>
                                    </td>
                                    <td>
                                        <a href="{{url('entreprise/update/'.$entreprise->id )}}">Modifier</a>
                                    </td>
                                    @endforeach
                            </tbody>
                        </thread>
                    </table>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>