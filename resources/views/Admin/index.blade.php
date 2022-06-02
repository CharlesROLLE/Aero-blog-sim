<x-admin-layout>

    <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
        <div class="container mx-auto px-6 py-8">

            <div class="containe flex">
                <section class="dark:bg-coolGray-800 dark:text-coolGray-100">
                    <div class="container max-w-xl p-6 py-12 mx-auto space-y-24 lg:px-8 lg:max-w-7xl">
                        <div>
                            <h2 class="text-3xl font-bold tracking-tight text-center sm:text-5xl dark:text-coolGray-50">
                                Blog Aero Sim</h2>
                            <p class="max-w-3xl mx-auto mt-4 text-xl text-center dark:text-coolGray-400">Administración
                                de la Web App</p>
                        </div>
                        <div class="grid lg:gap-8 lg:grid-cols-2 lg:items-center">
                            <div>
                                <h3 class="text-2xl font-bold tracking-tight sm:text-3xl dark:text-coolGray-50">
                                    Publicaciones</h3>
                                <p class="mt-3 text-lg dark:text-coolGray-400">Aqui puedes gestionar los tipos de
                                    usuarios del blog al igual que todo el contenido de tu posts. crear, leer, editar,
                                    actualizar y borrar - CRUD.</p>
                                <div class="mt-12 space-y-12">
                                    <div class="flex">
                                        <div class="flex-shrink-0">
                                            <div
                                                class="flex items-center justify-center w-12 h-12 rounded-md dark:bg-violet-400 dark:text-coolGray-900">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke="currentColor" class="w-7 h-7">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="ml-4">
                                            <h4 class="text-lg font-medium leading-6 dark:text-coolGray-50">Categorías
                                            </h4>
                                            <p class="mt-2 dark:text-coolGray-400">Define sus nombres.....</p>
                                        </div>
                                    </div>
                                    <div class="flex">
                                        <div class="flex-shrink-0">
                                            <div
                                                class="flex items-center justify-center w-12 h-12 rounded-md dark:bg-violet-400 dark:text-coolGray-900">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke="currentColor" class="w-7 h-7">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="ml-4">
                                            <h4 class="text-lg font-medium leading-6 dark:text-coolGray-50">Etiquetas
                                            </h4>
                                            <p class="mt-2 dark:text-coolGray-400">Creación automatica del slug.</p>
                                        </div>
                                    </div>
                                    <div class="flex">
                                        <div class="flex-shrink-0">
                                            <div
                                                class="flex items-center justify-center w-12 h-12 rounded-md dark:bg-violet-400 dark:text-coolGray-900">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke="currentColor" class="w-7 h-7">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="ml-4">
                                            <h4 class="text-lg font-medium leading-6 dark:text-coolGray-50">Usuarios
                                            </h4>
                                            <p class="mt-2 dark:text-coolGray-400">Sistema de roles y permisos.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div aria-hidden="true" class="mt-10 lg:mt-0">
                                <img src="{{asset('img/cockpit_dashboard.jpg')}}" alt=""
                                    class="mx-auto rounded-lg shadow-lg dark:bg-coolGray-500 h-90">
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </main>

</x-admin-layout>