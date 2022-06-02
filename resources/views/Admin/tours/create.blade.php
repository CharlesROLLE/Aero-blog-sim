<x-admin-layout>

    <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
        <div class="flex flex-col mt-4">
            <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                <div
                    class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
                    <div class="flex mt-2">
                        <h3 class="text-gray-700 text-3xl font-medium ml-6">Nueva Ruta</h3>
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


                {!! Form::open(['route' => 'admin.tours.store', 'class' => 'mt-4 mx-4', 'files' => true]) !!}

                <div
                    class="grid grid-cols-2 gap-6 bg-gray-100 border-b border-gray-200 shadow-lg mx-auto px-4 py-4 mb-2 ">

                    {!! Form::hidden('user_id', auth()->user()->id) !!}


                    {!! Form::label('legNumber', 'Etapa N°', ['class' => 'text-xl text-gray-700 rounded-lg p-2 mr-4
                    shadow-lg bg-white']) !!}
                    {!! form::number('legNumber', null, ['class' => 'rounded-lg shadow-lg bg-white,']) !!}

                    {!! Form::label('name', 'Nombre de la Etapa', ['class' => 'text-xl text-gray-700 rounded-lg p-2 mr-4
                    shadow-lg bg-white']) !!}
                    {!! form::text('name', null, ['id' => 'slug-source', 'class' => 'rounded-lg shadow-lg bg-white,'])
                    !!}

                    {!! Form::label('slug', 'Slug', ['class' => 'text-xl text-gray-700 rounded-lg p-2 mr-4 shadow-lg
                    bg-white']) !!}
                    {!! form::text('slug', null, ['id' => 'slug-target', 'class' => 'rounded-lg shadow-lg bg-white,',
                    'readonly', 'onfocus' => "Toslug()"]) !!}

                    {!! Form::label('icaoDep', 'Icao Departure', ['class' => 'text-xl text-gray-700 rounded-lg p-2 mr-4
                    shadow-lg bg-white']) !!}
                    {!! form::text('icaoDep', null, ['class' => 'rounded-lg shadow-lg bg-white,']) !!}

                    <div class="grid col-span-2">
                        {!! Form::label('imageDep', 'Imagen del Icao departure', ['class' => 'text-xl text-gray-700
                        rounded-lg p-2 shadow-lg bg-white mb-2']) !!}

                        {!! Form::file('imageDep', ['class' => 'shadow-lg bg-white float-left rounded-lg p-2 shadow-lg
                        bg-white', 'id' => 'imageDep']) !!}
                        <p class="text-xl text-gray-700 rounded-lg p-2 shadow-lg bg-white">Escoge la imagen del Icao departure,
                            puede ser de tipo png, jpeg, jpg de una talla max de 2Mo</p>
                    </div>

                    <div class="grid col-span-2">

                        {!! Form::label('icaoDepContent', 'Contenido Icao Departure', ['class' => 'text-xl text-gray-700
                        rounded-lg p-2 shadow-lg bg-white mb-2']) !!}

                        {!! Form::textarea('icaoDepContent', null, ['class' => 'shadow-lg bg-white float-left rounded-lg
                        p-2 shadow-lg bg-white']) !!}

                    </div>

                    {!! Form::label('icaoDes', 'Icao Arrival', ['class' => 'text-xl text-gray-700 rounded-lg p-2 mr-4
                    shadow-lg bg-white']) !!}
                    {!! form::text('icaoDes', null, ['class' => 'rounded-lg shadow-lg bg-white,']) !!}

                    <div class="grid col-span-2">
                        {!! Form::label('imageDes', 'Imagen del Icao Arrival', ['class' => 'text-xl text-gray-700
                        rounded-lg p-2 shadow-lg bg-white mb-2']) !!}

                        {!! Form::file('imageDes', ['class' => 'shadow-lg bg-white float-left rounded-lg p-2 shadow-lg
                        bg-white', 'id' => 'imageDes']) !!}
                        <p class="text-xl text-gray-700 rounded-lg p-2 shadow-lg bg-white">Escoge la imagen del Icao arrival,
                            puede ser de tipo png, jpeg, jpg de una talla max de 2Mo</p>
                    </div>

                    <div class="grid col-span-2">

                        {!! Form::label('icaoDesContent', 'Contenido Icao Arrival', ['class' => 'text-xl text-gray-700
                        rounded-lg p-2 shadow-lg bg-white mb-2']) !!}

                        {!! Form::textarea('icaoDesContent', null, ['class' => 'shadow-lg bg-white float-left rounded-lg
                        p-2 shadow-lg bg-white']) !!}

                    </div>

                    <div class="grid col-span-2">

                        {!! Form::label('descriptionLeg', 'Descripción de la Etapa', ['class' => 'text-xl text-gray-700
                        rounded-lg p-2 shadow-lg bg-white mb-2']) !!}

                        {!! Form::textarea('descriptionLeg', null, ['class' => 'shadow-lg bg-white float-left rounded-lg
                        p-2 shadow-lg bg-white']) !!}

                    </div>

                    <div class="grid col-span-2">

                        {!! Form::label('rutaIfr', 'Ruta IFR', ['class' => 'text-xl text-gray-700 rounded-lg p-2
                        shadow-lg bg-white mb-2']) !!}

                        {!! Form::textarea('rutaIfr', null, ['class' => 'shadow-lg bg-white float-left rounded-lg p-2
                        shadow-lg bg-white']) !!}

                    </div>

                    <div class="grid col-span-2">

                        {!! Form::label('departures', 'SIDs', ['class' => 'text-xl text-gray-700 rounded-lg p-2
                        shadow-lg bg-white mb-2']) !!}

                        {!! Form::textarea('departures', null, ['class' => 'shadow-lg bg-white float-left rounded-lg p-2
                        shadow-lg bg-white']) !!}

                    </div>

                    <div class="grid col-span-2">

                        {!! Form::label('arrivals', 'STARs', ['class' => 'text-xl text-gray-700 rounded-lg p-2 shadow-lg
                        bg-white mb-2']) !!}

                        {!! Form::textarea('arrivals', null, ['class' => 'shadow-lg bg-white float-left rounded-lg p-2
                        shadow-lg bg-white']) !!}

                    </div>

                    <div class="grid col-span-2">

                        {!! Form::label('approachs', 'Approximaciones', ['class' => 'text-xl text-gray-700 rounded-lg
                        p-2 shadow-lg bg-white mb-2']) !!}

                        {!! Form::textarea('approachs', null, ['class' => 'shadow-lg bg-white float-left rounded-lg p-2
                        shadow-lg bg-white']) !!}

                    </div>


                </div>

                <div>
                    {!! Form::submit('Crear Ruta', ['class' => 'p-4 text-white rounded-md bg-blue-600
                    hover:bg-blue-500']) !!}
                </div>


                {!! Form::close() !!}



            </div>
        </div>
    </main>


    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>

    <script>
        ClassicEditor
            .create( document.querySelector( '#icaoDepContent' ) )
            .catch( error => {
                console.error( error );
            } );

            ClassicEditor
            .create( document.querySelector( '#icaoDesContent' ) )
            .catch( error => {
                console.error( error );
            } );
           
            ClassicEditor
            .create( document.querySelector( '#descriptionLeg' ) )
            .catch( error => {
                console.error( error );
            } );

            ClassicEditor
            .create( document.querySelector( '#rutaIfr' ) )
            .catch( error => {
                console.error( error );
            } );

            ClassicEditor
            .create( document.querySelector( '#departures' ) )
            .catch( error => {
                console.error( error );
            } );

            ClassicEditor
            .create( document.querySelector( '#arrivals' ) )
            .catch( error => {
                console.error( error );
            } );

            ClassicEditor
            .create( document.querySelector( '#approachs' ) )
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