<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Visualisation d'une entreprise :
        </h2>
    </x-slot>


<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table>
                        <thread>
                            <tr>
                                <th> Civilité    {!! "&emsp;&emsp;&emsp;" !!}</th>
                                <th> Nom    {!! "&emsp;&emsp;&emsp;&emsp;&emsp;" !!}</th>
                                <th> Prénom    {!! "&emsp;&emsp;&emsp;" !!}</th>
                                <th> Rue    {!! "&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;" !!}</th>
                                <th>Code Postal     {!! "&emsp;&emsp;" !!}</th>
                                <th>Ville     {!! "&emsp;&emsp;&emsp;" !!}</th>
                                <th> Numéro     {!! "&emsp;&emsp;&emsp;&emsp;&emsp;" !!}</th>
                                <th> Email {!! "&emsp;&emsp;&emsp;&emsp;&emsp;" !!}</th>
                                <th> Entreprise {!! "&emsp;&emsp;&emsp;&emsp;" !!}</th>
                                
                            </tr>
                        <thread>
                        <tbody>
                                <tr>
                                    <td> {{$collaborateur->civilité}} </td>
                                    <td> {{$collaborateur->Nom}} </td>
                                    <td> {{$collaborateur->Prénom}} </td>
                                    <td> {{$collaborateur->Rue}} </td>
                                    <td> {{$collaborateur->CodePostal}} </td>
                                    <td> {{$collaborateur->Ville}} </td>
                                    <td> {{$collaborateur->Numéro}} </td>
                                    <td> {{$collaborateur->Email}} </td>
                                    <td> {{$collaborateur->Entreprise}} </td>
                        </table>
                </div>
            </div>
        </div>
</div>

</x-app-layout>