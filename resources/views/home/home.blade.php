<x-layout>
    @include('home._header')
    <main class="max-w-6xl mx-auto mt-6 lg:mt-10 space-y-6">
      @if($posts->count())
          <x-posts-grid :posts="$posts" />
          {{-- <x-post-featured-card  /> --}}
      @else
          <p class="text-center">No se encontro ningun post, vuelva a ingrasar mas tarde</p>
      @endif
    </main>
</x-layout>
