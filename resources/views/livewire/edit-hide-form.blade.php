<div class="mt-2">
    <div class="mb-2">
        @auth
        @if (auth()->user()->id === $post->user->id)
        <x-jet-button wire:click="$set('open', true)">
            Editar
        </x-jet-button>
        <x-jet-danger-button>
            Eliminar
        </x-jet-danger-button>
        @endif
        @endauth
    </div>

    <x-jet-dialog-modal wire:model="open" id="commentModal">
        <x-slot name="title">
            <h1 class="text-2xl mb-4">Edita tu post</h1>
        </x-slot>

        <x-slot name="content">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="container bg-white border-b border-gray-200 shadow-lg mx-auto justify-center px-4 py-2 ">
                    <section id="contact-us">
                        <div wire:loading wire:target='image'
                            class="bg-red-100 border border-red-400 text-xl font-normal  max-w-full flex-initial">
                            <div class="py-2">
                                <p class="ml-2">Cargando la imagen</p>
                                <div class="text-sm font-base">
                                    <p class="ml-2">Espero unos instantes mientras termine el proceso...</p>
                                </div>
                            </div>
                        </div>

                        <img src="{{ Storage::url($post->image) }}" alt="">



                        <input class="hidden" wire:model="id_user" type="text" id="id" name="user_id" value={{
                            Auth::user()->id }}" />


                        <div>
                            <x-jet-label for="name" value="{{ __('Título') }}" />
                            <x-jet-input id="slug-source" class="block mt-1 mb-2 w-full" wire:model.defer="post.name"
                                type="text" name="name" required autofocus autocomplete="name" />
                            <x-jet-input-error for="name" />

                            <x-jet-label for="slug" value="{{ __('Slug') }}" />
                            <x-jet-input id="slug-target" class="block mt-1 w-full" wire:model.defer="post.slug"
                                type="text" name="slug" :value="old('slug')" required autofocus autocomplete="slug" />
                            <x-jet-input-error for="slug" />
                        </div>


                        <!-- body -->
                        <div>
                            <x-jet-label for="body" class="mt-4 text-base" value="{{ __('Contenido del post') }}" />
                            <textarea wire:model.defer="post.body" id="editor" rows="8" name="body"></textarea>
                        </div>
                        <x-jet-input-error for="body" />


                        <div class="mt-2 center justify-center mx-auto">
                            <!-- Image -->
                            <x-jet-label for="url" value="{{ __('Imagen') }}" />
                            <input type="file" id="image" name="image" class="mb-2" wire:model.defer="post.image" />
                            <x-jet-input-error for="image" />

                        </div>
                        <div>
                            <!-- Drop Down-->
                            <x-jet-label for="categories" value="{{ __('Categoría') }}" />
                            <select name="category_id" class="block font-medium text-sm text-gray-700" id="categories"
                                wire:model.defer="post.category_id">
                                <option selected disabled>opciones </option>
                                @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>

                        </div>
                        <br>

                        <div>
                            <x-jet-label for="tags" value="{{ __('Etiquetas') }}" />

                            @foreach ($tags as $tag)
                            <label for="tagss"
                                class="relative flex-inline items-center isolate p-2 mr-4 mb-2 rounded-2xl">
                                <input wire:model.defer="tagsSelected" value={{ $tag->id }} type="checkbox"
                                class="relative
                                peer z-20 text-blue-600 rounded-md focus:ring-0" />
                                <span class="ml-1 relative z-20">{{ $tag->name }}</span>
                            </label>
                            @endforeach

                        </div>

                        <br>

                        <x-jet-label for="status" value="{{ __('Status') }}" />

                        <div class="flex">
                            <div class="inline-block rounded-lg">
                                Borrador <input type="radio" value=1 wire:model.defer="post.status" id="borrador" />

                            </div>
                            <div class="inline-block rounded-lg ml-4">
                                Publicado <input type="radio" value=2 wire:model.defer="post.status" name="publicado"
                                    id="publicado" />
                            </div>
                        </div>

                    </section>
                </div>
            </div>
        </x-slot>

        <x-slot name='footer'>
            <x-jet-secondary-button wire:click="$set('open', false)">
                Cancelar
            </x-jet-secondary-button>

            <x-jet-danger-button wire:click="save">
                Actualizar
            </x-jet-danger-button>
        </x-slot>

    </x-jet-dialog-modal>


    @push('js')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>

    <script>
        ClassicEditor
                .create( document.querySelector( '#editor' ) )
                .then(function(editor){
                    editor.model.document.on('change:data', () => {
                        @this.set('body', editor.getData());
                    })
                })
                .catch( error => {
                    console.error( error );
                } );
    </script>

    @endpush

</div>