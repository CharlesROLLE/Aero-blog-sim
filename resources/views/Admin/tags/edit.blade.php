<x-admin-layout>

    <div class="containe flex">
        <div class="container">
            <h1 class="mb-8 mt-6 ml-5 text-2xl ">
                Editar Tag
            </h1>

            <section class="relative flex flex-wrap lg:h-screen lg:items-center">
                <div class="w-full px-4 py-12 lg:w-1/2 sm:px-6 lg:px-8 sm:py-16 lg:py-24">
                    <div class="max-w-lg mx-auto text-center">
                        <h1 class="text-2xl font-bold sm:text-3xl">Estas en modo edición!</h1>

                        <p class="mt-4 text-gray-500">
                            la etiqueta o slug se crea automaticamente
                        </p>
                    </div>


                    <form action="{{ route('admin.tags.update', $tag) }}" class="max-w-md mx-auto mt-8 mb-0 space-y-4"
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div>
                            <label for="name" class="">Nombre</label>

                            <div class="relative">
                                <input type="text" name="name" value="{{ $tag->name }}"
                                    class="w-full p-4 pr-12 text-sm border-gray-200 rounded-lg shadow-sm"
                                    placeholder="Ingrese el nombre de la categoría" id="slug-source" />
                                @error('name')
                                <p style="color: red; margin-bottom:25px;">{{ $message }}</p>
                                @enderror

                            </div>
                        </div>

                        <div>
                            <label for="slug" class="">Slug</label>
                            <div class="relative">
                                <input type="text" name="slug" value="{{ $tag->slug }}" onfocus="Toslug()"
                                    class="w-full p-4 pr-12 text-sm border-gray-200 rounded-lg shadow-sm"
                                    placeholder="Auto Slug - Click" id="slug-target" readonly />
                                @error('slug')
                                <p style="color: red; margin-bottom:25px;">{{ $message }}</p>
                                @enderror

                            </div>
                        </div>

                        <div>
                            <label for="color" class="">Color</label>
                            <div class="relative">
                                <select name="color"
                                    class="w-full p-4 pr-12 text-sm border-gray-200 rounded-lg shadow-sm">
                                    <option value="">{{ $tag->color }}</option>
                                    <option value="red">Color rojo</option>
                                    <option value="green">Color verde</option>
                                    <option value="purple">Color violeta</option>
                                    <option value="indigo">Color indigo</option>
                                    <option value="blue">Color azul</option>
                                    <option value="orange">Color naranja</option>
                                </select>
                                @error('color')
                                <p style="color: red; margin-bottom:25px;">{{ $message }}</p>
                                @enderror

                            </div>
                        </div>

                        <div class="flex items-center justify-between">

                            <button type="submit"
                                class="inline-block px-5 py-3 text-sm font-medium text-white bg-blue-500 rounded-lg">
                                Actualizar tag
                            </button>
                        </div>
                    </form>
                </div>

                <div class="relative w-full h-64 sm:h-96 lg:w-1/2 lg:h-full">
                    <img class="absolute inset-0 object-cover w-full h-full" src="{{asset('img/tags_create_edit.jpg')}}"
                        alt="" />
                </div>
            </section>
        </div>
    </div>

    <script type="text/javascript">
        function Toslug() {
 
            var name = document.getElementById("slug-source").value;
 
            var slug = name.toLowerCase().replace(/ /g, '-')
                .replace(/[^\w-]+/g, '');
 
            document.getElementById("slug-target").value = slug;
 
            document.getElementById("slug-target-span").innerHTML = slug;
        }
    </script>

</x-admin-layout>