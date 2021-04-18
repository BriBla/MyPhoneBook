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
                                <th> Nom    {!! "&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;" !!}</th>
                                <th> Rue    {!! "&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;" !!}</th>
                                <th>Code Postal     {!! "&emsp;&emsp;" !!}</th>
                                <th>Ville     {!! "&emsp;&emsp;&emsp;" !!}</th>
                                <th> Numéro     {!! "&emsp;&emsp;&emsp;&emsp;&emsp;" !!}</th>
                                <th> Email {!! "&emsp;&emsp;&emsp;&emsp;&emsp;" !!}</th>
                            </tr>
                        <thread>
                        <tbody>
                                <tr>
                                    <td> {{$entreprise->Nom}} </td>
                                    <td> {{$entreprise->Rue}} </td>
                                    <td> {{$entreprise->CodePostal}} </td>
                                    <td> {{$entreprise->Ville}} </td>
                                    <td> {{$entreprise->Numéro}} </td>
                                    <td> {{$entreprise->Email}} </td>
                        </table>
                </div>
            </div>
        </div>
</div>

</x-app-layout>