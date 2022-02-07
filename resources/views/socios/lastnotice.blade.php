<x-app-layout>
    <x-slot name="header">

      <div class="px-6 mx-3" >
              <x-application-logo class="w-auto h-20" id="otbsuca.jpg"/>
      </div>
            <div class="col text-center ">
              <h1 class="font-semibold text-2x1 uppercase">
                  {{ __('Administración del servicio de agua potable') }}
              </h1>
              <h2  class="font-bold text-3xl">
                  {{ __('S.A.P. O.T.B. SUCA') }}
              </h2>
            </div>
            <div class="px6 mx-3" style="right: 12px;" >
                  <x-application-logo class="w-auto h-20" id="otbsuca.jpg"/>
            </div>
    </x-slot>
    <main>

        @php
        $meters = App\Models\Meter::where('user_id', auth()->id())->get();

        $notice = App\Models\Notice::where('pagado', '0')->first();
        @endphp

          @include('notices.recibo')

    </main>
</x-app-layout>
