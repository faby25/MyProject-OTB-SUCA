<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl">
            {{ __('header') }}
        </h2>
    </x-slot>
    <main>
      @include('content')
    </main>
</x-app-layout>
