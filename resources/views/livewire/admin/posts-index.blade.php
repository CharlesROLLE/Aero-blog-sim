<div wire:init='loadPosts' class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
    <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
        <div class="flex flex-col mt-4">
            <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                <div
                    class="align-middle inline-block min-w-full ml-2 mr-10 shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
                    @if (session('info'))
                    <p
                        style="color: #fff; width:100%;font-size:18px;font-weight:600;text-align:center;background:#5cb85c;padding:17px 0;margin-bottom:6px;">
                        {{ session('info') }}</p>
                    @endif
                    <div class="flex mt-2">
                        <h3 class="text-gray-700 text-3xl font-medium ml-6">Lista de tus posts</h3>
                        <div class="ml-4">
                            <a href="{{ route('admin.posts.create') }}"
                                class="mb-4 w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-600 text-base font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:ml-3 sm:w-auto sm:text-xl">Crear
                                Post</a>
                        </div>

                    </div>

                    <div class=" shadow-lg w-full mb-4 ">
                        <x-jet-input class="w-full" type="text" placeholder="busca un post" wire:model="search" />
                    </div>

                    <table class="min-w-full">
                        <thead>
                            <tr>
                                <th
                                    class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                    Id</th>
                                <th
                                    class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                    Título</th>
                                <th
                                    class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                    Status</th>
                                <th
                                    class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                    Fecha de Creación</th>

                                <th
                                    class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                </th>
                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50"></th>
                            </tr>
                        </thead>

                        <tbody class="bg-white">

                            @foreach ($posts as $post)
                            <tr>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    <div class="flex items-center">
                                        {{ $post->id }}
                                    </div>
                                </td>

                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    <div class="flex items-center">
                                        <a href="{{ route('admin.posts.show', $post) }}">
                                            {{ $post->name }}
                                    </div>
                                </td>

                                <td class="px-8 py-4 whitespace-no-wrap border-b border-gray-200">
                                    <a href="{{ route('admin.posts.show', $post) }}">
                                        {{ $post->status }}
                                </td>

                                <td class="px-8 py-4  whitespace-no-wrap border-b border-gray-200">
                                    {{ $post->created_at->format('d/m/Y') }}
                                </td>


                                <td
                                    class="px-8 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
                                    <a href="{{ route('admin.posts.edit', $post) }}"
                                        class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-600 text-base font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:ml-3 sm:w-auto sm:text-sm">Editar</a>

                                <td
                                    class="px-8 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
                                    <form action="{{ route('admin.posts.destroy', $post) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit"
                                            class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">Eliminar</button>
                                    </form>

                                </td>
                            </tr>

                            @endforeach



                        </tbody>
                    </table>
                </div>
                @if (count($posts))

                <table class="min-w-full divide-y divide-gray-200">
                </table>

                @if ($posts->hasPages())

                <div class="mt-4">
                    {{ $posts->links() }}
                </div>

                @endif
                @else
                <div class="px-6 py-4">
                    No se ha encontrado ningun post
                </div>
                @endif
            </div>
        </div>
    </main>
</div>