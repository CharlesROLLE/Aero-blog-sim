<x-admin-layout>

    <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
        <div class="flex flex-col mt-4">
            <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                <div
                    class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
                    <div class="flex mt-2">
                        <h3 class="text-gray-700 text-3xl font-medium ml-6">Editar Contenido</h3>
                    </div>
                </div>


                {!! Form::model($carta, ['route' => ['admin.cartas.update', $carta], 'class' => 'mt-4 mx-4', 'files' => true,  'method' => 'put']) !!}

                <div
                    class="grid grid-cols-2 gap-6 bg-gray-100 border-b border-gray-200 shadow-lg mx-auto px-4 py-4 mb-2 ">

                    
                    <div class="grid col-span-2 items-center">
                        
                        {!! Form::label('name', 'Nombre', ['class' => 'text-xl text-gray-700 rounded-lg p-2 mb-2
                        shadow-lg bg-white']) !!}
                        {!! form::text('name', null, ['class' => 'rounded-lg shadow-lg bg-white']) !!}

                    </div>

                    <div class="grid col-span-2">

                        {!! Form::label('content', 'Contenido', ['class' => 'text-xl text-gray-700
                        rounded-lg p-2 shadow-lg bg-white mb-2']) !!}

                        {!! Form::textarea('content', null, ['class' => 'shadow-lg bg-white float-left rounded-lg
                        p-2 shadow-lg bg-white']) !!}

                    </div>

                </div>

                <div>
                    {!! Form::submit('Actualizar Contenido', ['class' => 'p-4 text-white rounded-md bg-blue-600
                    hover:bg-blue-500']) !!}
                </div>


                {!! Form::close() !!}

            </div>
        </div>
    </main>


    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>

    <script>

        class MyUploadAdapter {
            constructor( loader ) {
               
                this.loader = loader;
            }
            
            upload() {
                return this.loader.file
                    .then( file => new Promise( ( resolve, reject ) => {
                        this._initRequest();
                        this._initListeners( resolve, reject, file );
                        this._sendRequest( file );
                    } ) );
            }
        
            // Aborts the upload process.
            abort() {
                if ( this.xhr ) {
                    this.xhr.abort();
                }
            }

            _initRequest() {
                const xhr = this.xhr = new XMLHttpRequest();
        
                // Note that your request may look different. It is up to you and your editor
                // integration to choose the right communication channel. This example uses
                // a POST request with JSON as a data structure but your configuration
                // could be different.
                xhr.open( 'POST', 'http://example.com/image/upload/path', true );
                xhr.responseType = 'json';
            }
           
        }
        
        ClassicEditor
            .create( document.querySelector( '#content' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>

</x-admin-layout>