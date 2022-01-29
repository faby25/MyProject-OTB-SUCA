<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl">
            {{ __('Notificaciones') }}
        </h2>
    </x-slot>
    <main>

          @include('notices.form')
        {{-- @php
        $posts=\App\Models\Post::all();
        @endphp

        @if($posts->count())
            <x-posts-grid :posts="$posts" />
        @else
            <p class="text-center">No se encontro ningun post, vuelva a ingrasar mas tarde</p>
        @endif --}}
    </main>


</x-app-layout>
