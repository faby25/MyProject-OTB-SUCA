<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">
            {{ __('Posts de Administradores.') }}
        </h2>
    </x-slot>
    <main>
        @php
        $posts=\App\Models\Post::all();
        @endphp
        @if($posts->count())
            <x-posts.grid :posts="$posts" />
            @sectionMissing('posts.grid')
                <div class="pull-right mt-3">
                      <p class="text-center">No se encontro más post</p>
                </div>
            @endif
        @else
            <p class="text-center mt-3">No se encontro ningun post, vuelva a ingrasar mas tarde</p>
        @endif

    </main>
</x-app-layout>
