<div wire:init='loadPosts'>
    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 bg-white border-b border-gray-200 shadow-lg mx-auto px-4 py-4 ">
                    <h1 class="font-semibold text-xl text-gray-800 leading-tight" >Bienvenidos al Blog!</h1>
                   
                    <div>
                        @foreach ($categories as $category)
                        <a href="{{ route('posts.category', $category) }}" class="inline-block px-3 h-8 bg-blue-500 text-white rounded-full text-center leading-8 font-bold hover:bg-blue-400 ">{{ $category->name }}</a>
                            
                        @endforeach
                    </div>
                    <div class="flex items-center" >
                        <span>Mostar</span>
                        <select wire:model='quantPost' class="ml-2 mr-2 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" >
                            <option value="11">11</option>
                            <option value="26">26</option>
                            <option value="50">50</option>
                            <option value="101">101</option>
                        </select>
                        <span>posts</span>
                    </div>
                    <div>
                        <x-jet-input type="text" placeholder="busca un post" wire:model="search"/>
                    </div>
                   
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    
                    @foreach ($posts as $post)
                        <article class="w-full h-80 bg-cover bg-center @if($loop->first) md:col-span-2 @endif" style= "background-image: url(/storage/posts/{{ $post->image }})"> 
                            <div class="w-full h-full px-8 flex flex-col justify-center">
                                <div>
                                    @foreach ($post->tags as $tag)
                                        <a href="{{ route('posts.tag', $tag) }}" class="inline-block px-3 h-6 bg-{{ $tag->color }}-600 text-white rounded-full hover:bg-gray-400">{{ $tag->name }}</a>
                                    @endforeach
                                </div>
                                <h1 class="text-4xl text-white leading-8 font-bold mt-2 hover:text-gray-200">
                                  <a href="{{ route('posts.show', $post) }}">
                                      {{ $post->name }}
                                  </a>
                              </h1> 
                          </div>
                        </article>  
                    @endforeach
                </div>

                @if (count($posts))

                    <table class="min-w-full divide-y divide-gray-200">
                    </table>

                    @if ($posts->hasPages())

                        <div class="mt-4">
                            {{ $posts->links() }}
                        </div>
                            
                    @endif
                @else
                    <div class="px-6 py-4">
                        Ningun post se ha encontrado
                    </div>
                @endif
           
            </div>
        </div>
    </div>
</div>
