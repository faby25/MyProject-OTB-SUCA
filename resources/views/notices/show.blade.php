<x-app-layout>
    <x-slot name="header">
        <div class="px-6 mx-3">
            <x-application-logo class="w-auto h-20" id="otbsuca.jpg" />
        </div>
        <div class="col text-center ">
            <h1 class="font-semibold text-2x1 uppercase">
                {{ __('Administración del servicio de agua potable') }}
            </h1>
            <h2 class="font-bold text-3xl">
                {{ __('S.A.P. O.T.B. SUCA') }}
            </h2>
        </div>
        <div class="px6 mx-3" style="right: 12px;">
            <x-application-logo class="w-auto h-20" id="otbsuca.jpg" />
        </div>
    </x-slot>

    <div class="card">
        <div class="card-header">
            <div class="float-left">
                <h2 class="font-bold text-xl">
                    {{ $notice->detalle ?? __('Recibo') }}
                </h2>
            </div>
            <div class="float-right">
              <h2 >
                @if ($notice->pagado)
                {{ "pagado" }}
                @else
                {{ "pendiente" }}
                @endif
                <a href="{{ URL::previous() }}" class="btn btn-primary">Volver</a>
            </div>
        </div>
        <div class="card-body">

            @include('notices.recibo')

            {{-- <form method="POST" action="{{ route('lecturas.update', $lectura->id) }}" role="form" enctype="multipart/form-data">
            {{ method_field('PATCH') }}
            @csrf

            @include('lecturas.form')

            </form> --}}
            <div class="float-right">
                <a href="create-pdf-file" class="btn btn-primary">Imprimir</a>
            </div>
        </div>
</x-app-layout>
