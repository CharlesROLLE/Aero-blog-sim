<div>
    <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
        <div class="flex flex-col mt-8">
            <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                <div
                    class="align-middle inline-block min-w-full ml-2 mr-10 shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
                    @if (session('info'))
                    <p
                        style="color: #fff; width:100%;font-size:18px;font-weight:600;text-align:center;background:#5cb85c;padding:17px 0;margin-bottom:6px;">
                        {{ session('info') }}</p>
                    @endif
                    <div class="flex mt-2 mb-2 place-items-center">
                        <h3 class="text-gray-700 text-3xl font-medium mb-2 ml-6">Lista de Contenidos</h3>
                        <div class="block ml-4">
                            <a href="{{ route('admin.cartas.create') }}"
                                class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Agregar
                                Contenido</a>
                        </div>
                    </div>

                    <div class=" shadow-lg w-full mb-4 ">
                        <x-jet-input class="w-full" type="text" placeholder="busca un conenido" wire:model="search" />
                    </div>

                    @if ($cartas->count())

                    <table class="min-w-full divide-y divide-gray-200 w-full">
                        <thead>
                            <tr>
                                <th scope="col" width="50"
                                    class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    ID
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Nombre
                                </th>
                            
                                <th scope="col"
                                    class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Publicado el
                                </th>
                               
                                <th scope="col" width="200" class="px-6 py-3 bg-gray-50">

                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($cartas as $carta)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                    {{ $carta->id }}
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                    {{ $carta->name }}
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                    {{ $carta->created_at }}
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <a href="{{ route('admin.cartas.show', $carta->id) }}"
                                        class="text-blue-600 hover:text-blue-900 mb-2 mr-4">Ver</a>
                                    <a href="{{ route('admin.cartas.edit', $carta->id) }}"
                                        class="text-indigo-600 hover:text-indigo-900 mb-2 mr-4">Editar</a>
                                    <form class="inline-block" action="{{ route('admin.cartas.destroy', $carta->id) }}"
                                        method="POST" onsubmit="return confirm('Estas seguro?');">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="text-red-600 hover:text-red-900 mb-2 mr-4"
                                            value="Eliminar">
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div
                        class="align-middle inline-block min-w-full ml-2 mr-10 shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
                        {{ $cartas->links() }}
                    </div>

                    @else
                    <div
                        class="align-middle inline-block min-w-full p-2 shadow overflow-hidden sm:rounded-lg bg-white border-b border-gray-200">
                        <strong>No hay registros</strong>
                    </div>

                    @endif

                </div>
            </div>
        </div>
    </main>

</div>
