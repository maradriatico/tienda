<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col items-center mt-4">
            <h1 class="mb-4 text-2xl font-semibold">Pedidos</h1>
            <div class="border border-gray-200 shadow">
                <table>
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-2 text-xs text-gray-500">
                                Pedido
                            </th>
                            <th class="px-6 py-2 text-xs text-gray-500">
                                Fecha
                            </th>
                            <th class="px-6 py-2 text-xs text-gray-500">
                                Ver
                            </th>
                            <th class="px-6 py-2 text-xs text-gray-500">
                                Borrar
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        @foreach ($pedidos as $articulo)
                            <tr class="whitespace-nowrap">
                                <td class="px-6 py-4">
                                    <div class="text-sm text-gray-900">
                                        {{ $articulo->id }}
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="text-sm text-gray-900">
                                        {{ $articulo->fecha_hora }}
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <a href="#"
                                        class="px-4 py-1 text-sm text-white bg-blue-400 rounded">Ver</a>
                                </td>
                                <td class="px-6 py-4">
                                    <a href="#"
                                        class="px-4 py-1 text-sm text-white bg-red-400 rounded">Borrar</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
                    <a href="/depart/create" class="mt-4 text-blue-900 hover:underline">Insertar un nuevo departamento</a>
                </div>
            </div>
        </div>
    </x-slot>
</x-app-layout>
