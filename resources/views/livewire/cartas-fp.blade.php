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

            <div id="container" class="w-4/5 mx-auto">
                <div class="flex flex-col sm:flex-row">
                    <!-- Card 1 -->
                    <div class="sm:w-1/4 p-2">
                        <div class="bg-white px-6 py-8 rounded-lg shadow-lg text-center">
                            <div class="mb-3">
                                <img class="w-auto mx-auto rounded-full" src="https://i.pravatar.cc/150?img=66"
                                    alt="" />
                            </div>
                            <h2 class="text-xl font-medium text-gray-700">Pande Muliada</h2>
                            <span class="text-blue-500 block mb-5">Front End Developer</span>

                            <a href="#" class="px-4 py-2 bg-blue-500 text-white rounded-full">Hire</a>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="sm:w-1/4 p-2">
                        <div class="bg-white px-6 py-8 rounded-lg shadow-lg text-center">
                            <div class="mb-3">
                                <img class="w-auto mx-auto rounded-full" src="https://i.pravatar.cc/150?img=31"
                                    alt="" />
                            </div>
                            <h2 class="text-xl font-medium text-gray-700">Saraswati Cahyati</h2>
                            <span class="text-blue-500 block mb-5">Back End Developer</span>

                            <a href="#" class="px-4 py-2 bg-blue-500 text-white rounded-full">Hire</a>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="sm:w-1/4 p-2">
                        <div class="bg-white px-6 py-8 rounded-lg shadow-lg text-center">
                            <div class="mb-3">
                                <img class="w-auto mx-auto rounded-full" src="https://i.pravatar.cc/150?img=18"
                                    alt="" />
                            </div>
                            <h2 class="text-xl font-medium text-gray-700">Wayan Alex</h2>
                            <span class="text-blue-500 block mb-5">Data Scientist</span>

                            <a href="#" class="px-4 py-2 bg-blue-500 text-white rounded-full">Hire</a>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="sm:w-1/4 p-2">
                        <div class="bg-white px-6 py-8 rounded-lg shadow-lg text-center">
                            <div class="mb-3">
                                <img class="w-auto mx-auto rounded-full" src="https://i.pravatar.cc/150?img=28"
                                    alt="" />
                            </div>
                            <h2 class="text-xl font-medium text-gray-700">Ketut Julia</h2>
                            <span class="text-blue-500 block mb-5">Project Manager</span>

                            <a href="#" class="px-4 py-2 bg-blue-500 text-white rounded-full">Hire</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-6 bg-gray-100 border-b border-gray-200 shadow-lg mx-auto px-4 py-4 mb-2 ">

                <div class="grid col-span-2">

                    {!! Form::label('enaire', 'ENAIRE', ['class' => 'text-xl text-gray-700
                    rounded-lg p-2 shadow-lg bg-white mb-2']) !!}

                    {!! Form::textarea('enaire', 'test', ['class' => 'shadow-lg bg-white float-left rounded-lg
                    p-2 shadow-lg bg-white']) !!}

                </div>
            </div>


        </x-slot>

        <x-slot name='footer'>
            <x-jet-button wire:click="$set('open', false)">
                Cerrar
                </x-jet-secondary-button>
        </x-slot>

    </x-jet-dialog-modal>

</div>