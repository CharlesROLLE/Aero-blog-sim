<div>
    <button wire:click="$set('open', true)" class="bg-blue-500 inline-flex py-3 px-5 rounded-lg items-center hover:bg-blue-400 focus:outline-none">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="white"
            stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M8 13v-1m4 1v-3m4 3V8M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" />
        </svg>
        <span class="ml-4 flex items-start flex-col leading-none">
            <span class="text-xs text-white mb-1">Ruta</span>
            <span class="title-font font-medium text-white">En Detalle</span>
        </span>
    </button>

    <x-jet-dialog-modal wire:model='open' maxWidth="2xl" >

        <x-slot name='title'>
            <div class="flex flex-col md:pr-10 md:mb-0 mb-6 pr-0 w-full md:w-auto md:text-left text-center">
                <h2 class="text-xs text-blue-500 tracking-widest font-medium title-font mb-1">TOUR IFR ETAPA {{ $tour->legNumber }}</h2>
                <h1 class="md:text-3xl text-2xl font-medium title-font text-gray-900">{{ $tour->name }}</h1>
              </div>
        </x-slot>

        <x-slot name='content'>
            <section>
                <div class="p-6 sm:px-2 bg-white border-b border-gray-200 shadow-lg">
                    <x-label for="Descrición de la Etapa" class="text-xl font-medium title-font text-gray-900" />
                    <hr>
                    {!! $tour->descriptionLeg !!}
                    <hr>
                    <br>
                    <x-label for="Ruta IFR" class="text-xl font-medium title-font text-gray-900" />
                    <hr>
                    {!! $tour->rutaIfr !!}
                    <hr>
                    <br>
                    <x-label for="SIDs" class="text-xl font-medium title-font text-gray-900" />
                    <hr>
                    {!! $tour->departures !!}
                    <hr>
                    <br>
                    <x-label for="STARs" class="text-xl font-medium title-font text-gray-900" />
                    <hr>
                    {!! $tour->arrivals !!}
                    <hr>
                    <br>
                    <x-label for="Approachs" class="text-xl font-medium title-font text-gray-900" />
                    <hr>
                    {!! $tour->approachs !!}
                </div>
            </section>

        </x-slot>

        <x-slot name='footer'>
            <x-jet-button wire:click="$set('open', false)">
                Cerrar
            </x-jet-secondary-button>
        </x-slot>

    </x-jet-dialog-modal>

</div>