<x-admin-layout>

    <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
        <div class="flex flex-col mt-4">
            <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                <div
                    class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
                    <div class="flex mt-2">
                        <h3 class="text-gray-700 text-3xl font-medium ml-6">Nuevo Contenido</h3>
                    </div>
                </div>


                {!! Form::open(['route' => 'admin.cartas.store', 'class' => 'mt-4 mx-4', 'files' => true]) !!}

                <div
                    class="grid grid-cols-2 gap-6 bg-gray-100 border-b border-gray-200 shadow-lg mx-auto px-4 py-4 mb-2 ">

                    <div class="grid col-span-2">

                        {!! Form::label('content', 'Contenido', ['class' => 'text-xl text-gray-700
                        rounded-lg p-2 shadow-lg bg-white mb-2']) !!}

                        {!! Form::textarea('content', null, ['class' => 'shadow-lg bg-white float-left rounded-lg
                        p-2 shadow-lg bg-white']) !!}

                    </div>

                </div>

                <div>
                    {!! Form::submit('Crear Contenido', ['class' => 'p-4 text-white rounded-md bg-blue-600
                    hover:bg-blue-500']) !!}
                </div>


                {!! Form::close() !!}

            </div>
        </div>
    </main>


    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>

    <script>
        ClassicEditor
            .create( document.querySelector( '#content' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>

</x-admin-layout>