<x-admin-layout>
    
    @foreach ($cartas as $carta)
    {{ $carta->content }}
    @endforeach
</x-admin-layout>