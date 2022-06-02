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

                                @livewire('cartas-fp')

                                @livewire('tour-detail', ['tour' => $tour], key($tour->id))

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
                                    {{ $tour->icaoDepContent }}
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

            @if (count($tours))

            <table class="min-w-full divide-y divide-gray-200">
            </table>

            @if ($tours->hasPages())

            <div class="mt-4">
                {{ $tours->links() }}
            </div>

            @endif
            @else
            <div class="px-6 py-4">
                Ningun registro se ha encontrado
            </div>
            @endif
        </div>
    </div>
</div>