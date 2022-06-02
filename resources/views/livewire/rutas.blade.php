<div>
    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 sm:px-20 bg-white border-b border-gray-200 shadow-lg">
                <div class="mt-8 text-2xl">
                    Bienvenidos al Tour IFR
                </div>
            </div>

            <div class="bg-white grid grid-cols-1 border-b border-gray-200 shadow-lg">
                @foreach ($tours as $tour)
                <div class="p-6 mb-4 mt-4 border-b border-gray-200 shadow-lg">
                    <section class="text-gray-600 body-font py-2">
                        <div class="container px-5 py-1 mx-auto flex items-center md:flex-row flex-col">
                            <div
                                class="flex flex-col md:pr-10 md:mb-0 mb-6 pr-0 w-full md:w-auto md:text-left text-center">
                                <h2 class="text-xs text-blue-500 tracking-widest font-medium title-font mb-1">TOUR IFR
                                    ETAPA {{ $tour->legNumber }}</h2>
                                <h1 class="md:text-3xl text-2xl font-medium title-font text-gray-900">{{ $tour->name }}
                                </h1>
                            </div>
                            <div class="flex md:ml-auto md:mr-0 mx-auto items-center flex-shrink-0 space-x-4">
                                <button
                                    class="bg-blue-500 inline-flex py-3 px-5 rounded-lg items-center hover:bg-blue-400 focus:outline-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="white" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7" />
                                    </svg>
                                    <span class="ml-4 flex items-start flex-col leading-none">
                                        <span class="text-xs text-white mb-1">CARTAS</span>
                                        <span class="title-font font-medium text-white">Planes de Vuelo</span>
                                    </span>
                                </button>
                                <button
                                    class="bg-blue-500 inline-flex py-3 px-5 rounded-lg items-center hover:bg-blue-400 focus:outline-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="white" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M8 13v-1m4 1v-3m4 3V8M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" />
                                    </svg>
                                    <span class="ml-4 flex items-start flex-col leading-none">
                                        <span class="text-xs text-white mb-1">Ruta</span>
                                        <span class="title-font font-medium text-white">En Detalle</span>
                                    </span>
                                </button>
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
                                        $ruta->icaoDep }}</h2>
                                    {{ $ruta->icaoDepContent }}
                                </div>
                                <div class="sm:w-1/2 mb-10 px-4">
                                    <div class="rounded-lg h-64 overflow-hidden">
                                        <img alt="content" class="object-cover object-center h-full w-full"
                                            src="/storage/tours/{{ $tour->imageDes }}">
                                    </div>
                                    <h2 class="title-font text-2xl font-medium text-gray-900 mt-6 mb-3">{{
                                        $tour->icaoDes }}</h2>
                                    {{ $tour->icaoDesContent }}
                                </div>
                            </div>
                            <div>
                            </div>
                        </div>
                    </section>
                    <hr>
                    <div class="hidden mt-4">
                        hola
                    </div>
                </div>



                @endforeach

            </div>
        </div>
    </div>
</div>