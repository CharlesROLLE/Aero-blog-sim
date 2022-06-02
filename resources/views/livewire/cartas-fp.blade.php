<div>
    <button wire:click="$set('open', true)"
        class="bg-blue-500 inline-flex py-3 px-5 rounded-lg items-center hover:bg-blue-400 focus:outline-none">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="white"
            stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7" />
        </svg>
        <span class="ml-4 flex items-start flex-col leading-none">
            <span class="text-xs text-white mb-1">CARTAS</span>
            <span class="title-font font-medium text-white">Planes de Vuelo</span>
        </span>
    </button>


    <x-jet-dialog-modal wire:model='open' maxWidth="2xl">

        <x-slot name='title'>
            <div class="flex flex-col md:pr-10 md:mb-0 mb-6 pr-0 w-full md:w-auto md:text-left text-center">
                <h2 class="text-xs text-blue-500 tracking-widest font-medium title-font mb-1">TOUR IFR ETAPA</h2>
                <h1 class="md:text-3xl text-2xl font-medium title-font text-gray-900">Cartas y Planes de vuelo</h1>
            </div>
        </x-slot>

        <x-slot name='content'>


            <div class="grid grid-cols-2 gap-6 bg-gray-100 border-b border-gray-200 shadow-lg mx-auto px-4 py-4 mb-2 ">
                
                @foreach ($cartas as $carta)
                    {{ $carta->content }}
                @endforeach
               
            </div>


        </x-slot>

        <x-slot name='footer'>
            <x-jet-button wire:click="$set('open', false)">
                Cerrar
                </x-jet-secondary-button>
        </x-slot>

    </x-jet-dialog-modal>

</div>