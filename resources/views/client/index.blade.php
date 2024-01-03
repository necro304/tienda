<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Clients') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-2 ">

                <!-- agregar cliente -->
                <div class="flex justify-end mb-2">
                    <a href="{{route('clients.create')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        <i class="fa-solid fa-plus"></i> Crear Cliente
                    </a>
                </div>

                @if(count($clients) > 0)
                    <div class="relative overflow-x-auto">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Nombre
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Telefono
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Dirección
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Acciones
                                </th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($clients as $client)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $client->name }}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $client->phone }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $client->address }}
                                    </td>
                                    <td class="px-6 py-4">


                                        <div class="inline-flex rounded-md shadow-sm" role="group">
                                            <a href="{{route('clients.edit', $client)}}" type="button" class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-s-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                                                <i class="fa-solid fa-pencil text-yellow-300"></i>
                                            </a>

                                            <form action="{{route('clients.destroy', $client)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border-t border-b border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                                                    <i class="fa-solid fa-trash text-red-800"></i>
                                                </button>
                                            </form>

                                        </div>



                                    </td>
                                </tr>
                            @endforeach


                            </tbody>
                        </table>
                    </div>
                @else

                    <div class="flex justify-center items-center h-20">
                        <h1 class="text-gray-500 text-2xl">No hay clientes</h1>
                    </div>

                @endif

            </div>
        </div>
    </div>


</x-app-layout>
