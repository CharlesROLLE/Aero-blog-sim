<div class="py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4">
            <h1 class="text-4xl font-bold text-gray-600 py-4">{{ $post->name }}</h1>

            <div x-data="{show: false}" class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <div class="lg:col-span-2 shadow-xl">
                    <figure>
                        <img class="w-full h-80 object-cover object-center" src="/storage/posts/{{ $post->image }}">
                    </figure>
                    <div class="text-base text-gray-500 mt-4 px-2 mb-2">
                        {!! $post->body !!}
                    </div>
                    <div class="px-2 mb-4">
                        @foreach ($post->tags as $tag)
                        <a href="{{ route('posts.tag', $tag) }}"
                            class="inline-block px-3 h-6 bg-{{ $tag->color }}-600 text-white rounded-full hover:bg-gray-400">{{
                            $tag->name
                            }}</a>
                        @endforeach
                    </div>

                    @auth
                    @if (auth()->user()->id === $post->user->id)
                    <div class="flex">
                        @livewire('edit-hide-form', ['post' => $post], key($post->id))
                    </div>
                    @endif
                    @endauth


                </div>

                <aside>
                    <h1 class="text-2xl font-bold text-gray-600 mb-4">Más en {{ $post->category->name }}</h1>

                    <ul>
                        @foreach ($similares as $similar)
                        <li class="mb-4">
                            <a class="flex" href="{{ route('posts.show', $similar) }}">
                                <img class="w-36 h-20 object-cover object-center" src="/storage/posts/{{ $similar->image }}"
                                    alt="">
                                <span class="ml-2 text-gray-600 ">{{ $similar->name }}</span>
                            </a>
                        </li>

                        @endforeach
                    </ul>
                </aside>

                @auth
                <div class="object-center lg:col-span-2 bg-white overflow-hidden shadow-xl mb-4">

                    <!-- comment form -->

                    <form action="{{ route('comment.store') }}" method="post"
                        class="w-full bg-white shadow-xl rounded-lg px-4 pt-2">
                        @csrf
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <h2 class="px-4 pt-3 pb-2 text-gray-600 text-lg">Agrega un comentario...</h2>
                            <div class="w-full md:w-full px-3 mb-2 mt-2">
                                <textarea
                                    class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white"
                                    name="content" placeholder='Aquí !' required></textarea>
                                <input type="hidden" name="post_id" value="{{ $post->id }}" />
                            </div>
                            <div class="w-full md:w-full flex items-start px-3">
                                <div class="-mr-1">
                                    <input type='submit'
                                        class="bg-white text-gray-700 font-medium py-1 px-4 border border-gray-400 rounded-lg tracking-wide mr-1 mb-2 hover:bg-gray-100"
                                        value='Publicar'>
                                </div>
                            </div>
                    </form>

                </div>
                @else
                <div class="font-bold lg:col-span-2 ">


                    <a href="{{ route('register') }}"
                        class="ml-4 px-2 rounded text-base text-white bg-gray-700 hover:bg-gray-500 ">Registrate para
                        poder commentar</a>
                </div>

                @endauth
                <h1 class="text-2xl lg:col-span-2 font-bold text-gray-600 px-2">Comentarios</h1>
                <hr class="bg-red-800 lg:col-span-2 ">
                <div class="bg-white overflow-hidden lg:col-span-2 shadow-xl sm:rounded-lg px-4 mb-4">
                    @foreach ($post->comments as $comment)
                    <div class="flex">

                        <div class="font-bold">

                            {{ $comment->user->name}}
                        </div>
                        <div class="text-gray-400 ml-2 ">
                            {{ $comment->created_at->diffForHumans() }}
                        </div>
                    </div>

                    <div class="text-base text-gray-600">
                        <p lass="inline-block px-3 h-6 rounded-full ">
                            {{$comment->content}}
                        </p>


                        @auth
                        @if (auth()->user()->id === $comment->user->id)
                        <div class="flex">
                            @livewire('show-hide-form', ['comment' => $comment], key($comment->id))
                        </div>
                        @endif
                        @endauth


                    </div>
                    <hr class="bg-gray-100 ">

                    @endforeach
                </div>
            </div>

        </div>

    </div>

</div>