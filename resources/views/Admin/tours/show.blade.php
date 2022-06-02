<x-admin-layout>

    <div class="overflow-y-auto" >
        <div class="py-4">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="p-6 sm:px-20 bg-white border-b  border-gray-200 shadow-lg">
                    <div class="mt-4 flex text-2xl">
                        <h3 class="text-gray-700 text-3xl font-medium ml-6">Ruta en detalle</h3>

                        <div class="ml-4">
                            <a href="{{ route('admin.tours.index') }}"
                                class="mb-4 w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-600 text-base font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:ml-3 sm:w-auto sm:text-xl">Lista de rutas</a>
                        </div>
                    </div>
                    
                </div>

                <div class="bg-white grid grid-cols-1 border-b border-gray-200 shadow-lg">
                    <div class="p-6">
                        <section class="text-gray-600 body-font py-2">
                            <div class="container px-5 py-1 mx-auto flex items-center md:flex-row flex-col">
                                <div
                                    class="flex flex-col md:pr-10 md:mb-0 mb-6 pr-0 w-full md:w-auto md:text-left text-center">
                                    <h2 class="text-xs text-blue-500 tracking-widest font-medium title-font mb-1">TOUR
                                        IFR ETAPA {{ $tour->legNumber }}</h2>
                                    <h1 class="md:text-3xl text-2xl font-medium title-font text-gray-900">{{ $tour->name
                                        }}</h1>
                                </div>

                            </div>
                        </section>
                        <section class="text-gray-600 body-font">
                            <div class="container px-2 py-2 mx-auto">
                                <div class="flex flex-wrap -mx-4 -mb-10 text-center">
                                    <div class="sm:w-1/2 mb-10 px-4">
                                        <div class="rounded-lg h-64 overflow-hidden">
                                            <img alt="content" class="object-cover object-center h-full w-full"
                                                src="/storage/tours/{{ $tour->imageDep }}">
                                        </div>

                                        <h2 class="title-font text-2xl font-medium text-gray-900 mt-6 mb-3">{{
                                            $tour->icaoDep }}</h2>
                                        {!! $tour->icaoDepContent !!}

                                    </div>   
                                       

                                     <div class="sm:w-1/2 mb-10 px-4">
                                            <div class="rounded-lg h-64 overflow-hidden">
                                                <img alt="content" class="object-cover object-center h-full w-full"
                                                    src="/storage/tours/{{ $tour->imageDes }}">
                                            </div>
                                            <h2 class="title-font text-2xl font-medium text-gray-900 mt-6 mb-3">{{
                                                $tour->icaoDes }}</h2>
                                                {!! $tour->icaoDesContent !!}
                                     </div>
                                    
                                </div>
                        </section>

                        <section>
                            <div class="p-6 sm:px-2 bg-white border-b border-gray-200 shadow-lg">
                                <x-label for="Descrición de la Etapa" />
                                <hr>
                                {!! $tour->descriptionLeg !!}
                                <hr>
                                <br>
                                <x-label for="Ruta IFR" />
                                <hr>
                                {!! $tour->rutaIfr !!}
                                <hr>
                                <br>
                                <x-label for="SIDs" />
                                <hr>
                                {!! $tour->departures !!}
                                <hr>
                                <br>
                                <x-label for="STARs" />
                                <hr>
                                {!! $tour->arrivals !!}
                                <hr>
                                <br>
                                <x-label for="Approachs" />
                                <hr>
                                {!! $tour->approachs !!}
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-admin-layout>