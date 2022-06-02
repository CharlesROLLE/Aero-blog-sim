<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4">
                <div class="flex items-center  mt-4 p-2 ">
                    <a href="{{ route('posts.index') }}"><x-heroicon-o-arrow-circle-left class="mr-8 h-10 w-10 text-indigo-600  " /></a> 
                    <h1 class="ml-4 text-3xl font-bold">Categoría: {{ $category->name }}</h1>
                </div>
               
                <hr class="h-1 mb-4" >
                @foreach ($posts as $post)
                <article class="mb-8 bg-white shadow-lg rounded-lg overflow-hidden">
                    <img class="w-full h-72 object-cover object-center" src="/storage/posts/{{ $post->image }}">
                    <div class="px-6 py-4">
                        <h1 class="font-bold text-xl mb-2 hover:text-gray-500">
                            <a href="{{ route('posts.show', $post) }}">{{ $post->name }}</a>
                        </h1>

                        <div class="text-gray-700 text-base">
                            {!! $post->body !!}
                        </div>
                    </div>
                    <div class="px-6 py-4 pb-2">
                        @foreach ($post->tags as $tag)
                        <a href="{{ route('posts.tag', $tag) }}"
                            class="inline-block px-3 h-6 bg-{{ $tag->color }}-600 text-white rounded-full hover:bg-gray-400">{{
                            $tag->name
                            }}</a>
                        @endforeach
                    </div>
                </article>

                @endforeach
            </div>
            <div class="mt-4">
                {{ $posts->links() }}
            </div>
        </div>
    </div>
</x-app-layout>