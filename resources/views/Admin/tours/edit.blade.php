<x-admin-layout>

    <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
        <div class="flex flex-col mt-4">
            <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                <div
                    class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
                    <div class="flex mt-2">
                        <h3 class="text-gray-700 text-3xl font-medium ml-6">Editar Ruta</h3>
                    </div>
                </div>

                <div class="container">

                    @if ($errors->any())

                    @foreach ($errors->all() as $error)
                    <div class="bg-red-300 mx-4 px-4 mt-2 ">
                        {{ $error }}
                    </div>

                    @endforeach

                    @endif

                </div>


                {!! Form::model($tour, ['route' => ['admin.tours.update', $tour ], 'files' => true, 'method' => 'put']) !!}


                <div
                    class="grid grid-cols-2 gap-6 bg-gray-100 border-b border-gray-200 shadow-lg mx-auto px-4 py-4 mb-2 ">


                    {!! Form::label('legNumber', 'N° de Etapa', ['class' => 'text-xl text-gray-700 rounded-lg p-2 mr-4
                    shadow-lg bg-white']) !!}
                    {!! form::text('legNumber', null, ['class' => 'rounded-lg shadow-lg bg-white,']) !!}


                    {!! Form::label('name', 'Nombre de la Etapa', ['class' => 'text-xl text-gray-700 rounded-lg p-2 mr-4
                    shadow-lg bg-white']) !!}
                    {!! form::text('name', null, ['id' => 'slug-source', 'class' => 'rounded-lg shadow-lg bg-white,'])
                    !!}


                    {!! Form::label('slug', 'Slug', ['class' => 'text-xl text-gray-700 rounded-lg p-2 mr-4 shadow-lg
                    bg-white']) !!}
                    {!! form::text('slug', null, ['id' => 'slug-target', 'class' => 'rounded-lg shadow-lg bg-white',
                    'readonly', 'onfocus' => "Toslug()"]) !!}

                    {!! Form::label('icaoDep', 'Icao Departure', ['class' => 'text-xl text-gray-700 rounded-lg p-2 mr-4
                    shadow-lg bg-white']) !!}
                    {!! form::text('icaoDep', null, ['class' => 'rounded-lg shadow-lg bg-white,']) !!}

                    <div class="grid col-span-2">

                        <div class="mb-2">
                            <img id="picture" class="w-full h-60 object-cover object-center"
                                src="/storage/tours/{{ $tour->imageDep }}">

                        </div>

                        <div class="grid col-span-2">
                            {!! Form::label('imageDep', 'Imagen del Icao departure', ['class' => 'text-xl text-gray-700
                            rounded-lg p-2 shadow-lg bg-white mb-2']) !!}
    
                            {!! Form::file('imageDep', ['class' => 'shadow-lg bg-white float-left rounded-lg p-2 shadow-lg
                            bg-white', 'id' => 'imageDep']) !!}
                            <p class="text-xl text-gray-700 rounded-lg p-2 shadow-lg bg-white">Escoge la imagen del Icao departure,
                                puede ser de tipo png, jpeg, jpg de una talla max de 2Mo</p>
                        </div>

                    </div>


                    <div class="flex col-span-2 items-center">

                        {!! Form::label('icaoDepContent', 'Contenido Icao Departure', ['class' => 'text-xl text-gray-700
                        rounded-lg p-2 mr-4 shadow-lg bg-white']) !!}

                        {!! Form::textarea('icaoDepContent', null, ['class' => 'shadow-lg bg-white float-left rounded-lg
                        p-2 shadow-lg bg-white', 'id' => 'icaoDeptCont']) !!}

                    </div>


                    {!! Form::label('icaoDes', 'Icao Arrival', ['class' => 'text-xl text-gray-700 rounded-lg p-2 mr-4
                    shadow-lg bg-white']) !!}
                    {!! form::text('icaoDes', null, ['class' => 'rounded-lg shadow-lg bg-white,']) !!}

                    <div class="grid col-span-2">

                        <div class="mb-2">
                            <img id="picture" class="w-full h-60 object-cover object-center"
                                src="/storage/tours/{{ $tour->imageDes }}">

                        </div>

                        <div class="grid col-span-2">
                            {!! Form::label('imageDep', 'Imagen del Icao departure', ['class' => 'text-xl text-gray-700
                            rounded-lg p-2 shadow-lg bg-white mb-2']) !!}
    
                            {!! Form::file('imageDep', ['class' => 'shadow-lg bg-white float-left rounded-lg p-2 shadow-lg
                            bg-white', 'id' => 'imageDep']) !!}
                            <p class="text-xl text-gray-700 rounded-lg p-2 shadow-lg bg-white">Escoge la imagen del Icao departure,
                                puede ser de tipo png, jpeg, jpg de una talla max de 2Mo</p>
                        </div>

                    </div>

                    <div class="flex col-span-2 items-center">

                        {!! Form::label('icaoDesContent', 'Contenido Icao Arrival', ['class' => 'text-xl text-gray-700
                        rounded-lg p-2 mr-4 shadow-lg bg-white']) !!}

                        {!! Form::textarea('icaoDesContent', null, ['class' => 'shadow-lg bg-white float-left rounded-lg
                        p-2 shadow-lg bg-white', 'id' => 'icaoDestCont']) !!}

                    </div>

                    <div class="flex col-span-2 items-center">

                        {!! Form::label('descriptionLeg', 'Descripción de la etapa', ['class' => 'text-xl text-gray-700
                        rounded-lg p-2 mr-4 shadow-lg bg-white']) !!}

                        {!! Form::textarea('descriptionLeg', null, ['class' => 'shadow-lg bg-white float-left rounded-lg
                        p-2 shadow-lg bg-white', 'id' => 'body']) !!}

                    </div>

                    <div class="flex col-span-2 items-center">

                        {!! Form::label('rutaIfr', 'Ruta IFR', ['class' => 'text-xl text-gray-700 rounded-lg p-2 mr-4
                        shadow-lg bg-white']) !!}

                        {!! Form::textarea('rutaIfr', null, ['class' => 'shadow-lg bg-white float-left rounded-lg p-2
                        shadow-lg bg-white', 'id' => 'ifr']) !!}

                    </div>


                    <div class="flex col-span-2 items-center">

                        {!! Form::label('departures', 'Salidas', ['class' => 'text-xl text-gray-700 rounded-lg p-2 mr-4
                        shadow-lg bg-white']) !!}

                        {!! Form::textarea('departures', null, ['class' => 'shadow-lg bg-white float-left rounded-lg p-2
                        shadow-lg bg-white', 'id' => 'star']) !!}

                    </div>

                    <div class="flex col-span-2 items-center">

                        {!! Form::label('arrivals', 'Llegadas', ['class' => 'text-xl text-gray-700 rounded-lg p-2 mr-4
                        shadow-lg bg-white']) !!}

                        {!! Form::textarea('arrivals', null, ['class' => 'shadow-lg bg-white float-left rounded-lg p-2
                        shadow-lg bg-white', 'id' => 'arrival']) !!}

                    </div>

                    <div class="flex col-span-2 items-center">

                        {!! Form::label('approachs', 'Aproximaciones', ['class' => 'text-xl text-gray-700 rounded-lg p-2
                        mr-4 shadow-lg bg-white']) !!}

                        {!! Form::textarea('approachs', null, ['class' => 'shadow-lg bg-white float-left rounded-lg p-2
                        shadow-lg bg-white', 'id' => 'approach']) !!}

                    </div>

                    <div>
                        {!! Form::submit('Actualizar ruta', ['class' => 'p-4 text-white rounded-md bg-blue-600
                        hover:bg-blue-500']) !!}
                    </div>


                    {!! Form::close() !!}



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

            ClassicEditor
            .create( document.querySelector( '#icaoDeptCont' ) )
            .catch( error => {
                console.error( error );
            } ); 

            ClassicEditor
            .create( document.querySelector( '#icaoDestCont' ) )
            .catch( error => {
                console.error( error );
            } ); 
            
            ClassicEditor
            .create( document.querySelector( '#ifr' ) )
            .catch( error => {
                console.error( error );
            } ); 

            ClassicEditor
            .create( document.querySelector( '#star' ) )
            .catch( error => {
                console.error( error );
            } ); 

            ClassicEditor
            .create( document.querySelector( '#arrival' ) )
            .catch( error => {
                console.error( error );
            } ); 

            ClassicEditor
            .create( document.querySelector( '#approach' ) )
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