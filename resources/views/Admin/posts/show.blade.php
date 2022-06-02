<x-admin-layout>

    <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
        <div class="flex flex-col mt-8">
            <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                <div
                    class="align-middle inline-block min-w-full ml-2 mr-10 shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
                    <div class="mt-2">

                        <div class="flex items-center border-b border-gray-200 px-4">
                            <h3 class="text-gray-700 text-3xl px-4 font-medium">Post en detalle</h3>
                            <a href="{{ route('admin.posts.index') }}"
                                class="mb-4 w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-600 text-base font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:ml-3 sm:w-auto sm:text-xl">Todos
                                tus
                                Posts</a>
                        </div>
                        <div class="mx-4 mt-4 ">
                            <div class="text-gray-700 text-2xl px-4 font-medium shadow-sm mt-4">
                                {{ $post->name }}
                            </div>
                            <hr>
                            <br>
                            <div class="text-gray-600 body-font">
                                <div class="container px-2 py-2 mx-auto">
                                    <div class="flex flex-wrap -mx-4 -mb-10 text-center">
                                        <div class=" mb-10 px-4">
                                            <div class="rounded-lg  overflow-hidden">
                                                <img class="w-full h-60 object-cover object-center"
                                                    src="/storage/posts/{{ $post->image }}">
                                            </div>
                                            <hr>
                                            <br>
                                            <div class="shadow-xl border-b border-gray-200">
                                                {!! $post->body !!}
                                            </div>
                                            <hr>
                                            <br>

                                            <div class="flex">


                                                <p class="text-2xl shadow-xl border-b border-gray-200">Categoría: {{
                                                    $post->category->name }} </p>

                                            </div>

                                            <hr>
                                            <br>

                                            <div class="flex items-center shadow-xl border-b border-gray-200">
                                                <div>
                                                    <p class="text-2xl">Etiquetas: </p>
                                                </div>


                                                <div class="ml-10">
                                                    @foreach ($post->tags as $tag)
                                                    <a href="{{ route('posts.tag', $tag) }}"
                                                        class="inline-block px-3 h-6 bg-{{ $tag->color }}-600 text-white rounded-full hover:bg-gray-400">{{
                                                        $tag->name }}</a>
                                                    @endforeach
                                                </div>

                                            </div>
                                            <hr>
                                            <br>

                                            <div class="flex shadow-xl border-b border-gray-200">
                                                <div class="inline-block rounded-lg">
                                                    Borrador <input type="radio" value=1 {{ ($post->status=="1")?
                                                    "checked" : "" }} id="borrador" />

                                                </div>
                                                <div class="inline-block rounded-lg ml-4">
                                                    Publicado <input type="radio" value=2 {{ ($post->status=="2")?
                                                    "checked" : "" }} name="publicado"
                                                    id="publicado" />
                                                </div>
                                            </div>


                                        </div>



                                    </div>

                                </div>
                            </div>


                        </div>


                    </div>

                </div>
            </div>
        </div>
    </main>

</x-admin-layout>