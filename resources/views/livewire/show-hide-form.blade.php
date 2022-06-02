<div>
    @auth
    @if (auth()->user()->id === $comment->user->id)
    <x-jet-button wire:click="$set('open', true)">
        Editar
    </x-jet-button>
    <x-jet-danger-button>
        Eliminar
    </x-jet-danger-button>
    @endif
    @endauth

    <x-jet-dialog-modal wire:model="open" id="commentModal">
        <x-slot name='title'>
            Edita tu comentario
        </x-slot>

        <x-slot name='content'>
            <div id="comment-form" class="object-center lg:col-span-2 bg-white overflow-hidden  mb-4">
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-full px-3 mb-2 mt-2">
                        <x-jet-input wire:model="comment.content" type="text" />

                        <input type="hidden" name="post_id" value="{{ $comment->id }}" />
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

</div>