<x-admin-layout>

    <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
        <div class="flex flex-col mt-8">
            <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                <div
                    class="align-middle inline-block min-w-full ml-2 mr-10 shadow overflow-hidden sm:rounded-lg border-b border-gray-200">

                    <div class="container">

                        @if ($errors->any())

                        @foreach ($errors->all() as $error)
                        <div class="bg-red-300 mx-4 px-4 mt-2 ">
                            {{ $error }}
                        </div>

                        @endforeach

                        @endif

                    </div>

                    {!! Form::model($post, ['route' => ['admin.posts.update', $post ], 'files' => true, 'method' =>
                    'put']) !!}

                    <div
                        class="grid grid-cols-2 gap-6 bg-gray-100 border-b border-gray-200 shadow-lg mx-auto px-4 py-4 mb-2 ">



                        {!! Form::hidden('user_id', auth()->user()->id) !!}


                        {!! Form::label('name', 'Título', ['class' => 'text-xl text-gray-700 rounded-lg p-2 mr-4
                        shadow-lg bg-white']) !!}
                        {!! form::text('name', null, ['id' => 'slug-source', 'class' => 'rounded-lg shadow-lg
                        bg-white,']) !!}


                        {!! Form::label('slug', 'Slug', ['class' => 'text-xl text-gray-700 rounded-lg p-2 mr-4 shadow-lg
                        bg-white']) !!}
                        {!! form::text('slug', null, ['id' => 'slug-target', 'class' => 'rounded-lg shadow-lg bg-white',
                        'readonly', 'onfocus' => "Toslug()"]) !!}

                        <div class="flex col-span-2 items-center">

                            {!! Form::label('body', 'Contenido del post', ['class' => 'text-xl text-gray-700 rounded-lg
                            p-2 mr-4 shadow-lg bg-white']) !!}

                            {!! Form::textarea('body', null, ['class' => 'shadow-lg bg-white float-left rounded-lg p-2
                            shadow-lg bg-white']) !!}

                        </div>

                        <div class="grid col-span-2">

                            <div class="mb-2">
                                <img id="picture" class="w-full h-60 object-cover object-center"
                                    src="/storage/posts/{{ $post->image }}">

                            </div>

                            <div class="grid col-span-1">
                                {!! Form::label('image', 'Imagen del post', ['class' => 'text-xl text-gray-700
                                rounded-lg p-2 shadow-lg bg-white mb-2']) !!}

                                {!! Form::file('image', ['class' => 'shadow-lg bg-white float-left rounded-lg p-2
                                shadow-lg bg-white', 'id' => 'image']) !!}
                                <p class="text-xl text-gray-700 rounded-lg p-2 shadow-lg bg-white">Escoge la imagen para
                                    tu post, puede ser de tipo png, jpeg, jpg de una talla max de 2Mo</p>
                            </div>

                        </div>

                        {!! Form::label('category_id', 'Categoría', ['class' => 'text-xl text-gray-700 rounded-lg p-2
                        mr-4 shadow-lg bg-white']) !!}
                        {!! form::select('category_id', $categories, null, ['class' => 'rounded-lg shadow-lg bg-white'])
                        !!}


                        <div class="flex col-span-2">

                            {!! Form::label('tags', 'Tags', ['class' => 'text-xl text-gray-700 rounded-lg p-2 mr-4
                            shadow-lg bg-white']) !!}

                            @foreach ($tags as $tag)

                            <label>

                                {!! Form::checkbox('tags[]', $tag->id, null, ['class' =>'m-4']) !!}
                                {{ $tag->name }}

                            </label>

                            @endforeach

                        </div>

                        {!! Form::label('status', 'Status del post', ['class' => 'text-xl text-gray-700 rounded-lg p-2
                        mr-4 shadow-lg bg-white']) !!}
                        <div class="flex col-span-1">

                            <label class="mr-4">

                                {!! Form::radio('status', 1, null, ['class' => 'mr-4']) !!}
                                <p class="">Borrador</p>
                            </label>

                            <label class="">

                                {!! Form::radio('status', 2, null, ['class' => 'mr-4']) !!}
                                <p class="">Publicado</p>
                            </label>

                        </div>

                        <div>
                            {!! Form::submit('Actualizar post', ['class' => 'p-4 text-white rounded-md bg-blue-600
                            hover:bg-blue-500']) !!}
                        </div>





                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
    </main>

    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>

    <script>
        ClassicEditor
            .create( document.querySelector( '#body' ) )
            .catch( error => {
                console.error( error );
            } );
       
    </script>




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