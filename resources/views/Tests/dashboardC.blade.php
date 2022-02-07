<x-appSocio>
  {{-- <div class="max-w-7xl ">

  </div> --}}
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('MenuSocio') }}
 {{--           <a href="{{ url('/Tconsumos/create') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Tarifa</a>

            <a href="{{ url('/Posts/create') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Registrar Posts</a>
--}}
        </h2>
    </x-slot>

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-3">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                  <main>
                    {{-- slot
                    {{-- {{ $slot }} --}}
                    {{-- <x-indexS :posts="$posts"/> --}}
                      {{-- <x-post-detail-card :post="$post"/> --}}
                  </main>
                </div>
            </div>
        </div>
    </div>
    {{-- Scripts-SideBar --}}
</x-appSocio>
