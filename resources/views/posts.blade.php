<x-layout>
{{-- @extends('\components\layout')
@section('content') --}}

  @include('_post-header')


<main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">

    {{-- <x-post-first-card :post="posts[0]" /> --}}
    {{-- @if ($post->count()) --}}
      {{-- <x-posts-grid:post:"$posts"
    @else
      <a class="text-center">No hay notificaciones o posteo aun, vuelve despues.</p>
    @endif --}}
      <x-post-featured-card  />
{{-- :post="posts[0]" --}}
  {{-- <div class="lg:grid lg:grid-cols-2"> --}}
    {{-- <x-post-card /><x-post-card /> --}}

  {{-- </div> --}}

  {{-- <div class="lg:grid lg:grid-cols-3"> --}}

    {{-- <x-post-card /><x-post-card /><x-post-card /> --}}

  {{-- </div> --}}
</main>

{{-- @endsection --}}
</x-layout>
