<x-app-layout>
 @foreach ($noticias as $noticia)
     {{$noticia->titulo}}
 @endforeach
</x-app-layout>
