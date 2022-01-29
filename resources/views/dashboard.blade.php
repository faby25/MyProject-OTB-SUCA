<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl">
            {{ __('Notificaciones') }}
        </h2>
    </x-slot>
    <main>
      @include('admins.dashboard')
      @include('socios.dashboard')
    </main>
</x-app-layout>
