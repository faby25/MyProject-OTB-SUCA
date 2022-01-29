<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-xl">
            {{ __('Presentación un Reclamo o sugerencia') }}
            <a href="{{ url('/Posts/create') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Postear</a>
        </h2>
    </x-slot>

    <section class="container">
        @includeif('partials.errors')

        <div class="card card-default">
            <form class="card-blue" action="/posted" method="POST" role="form" enctype="multipart/form-data">
                @csrf
                <div class="card-header ">
                    <span class="card-title">Postear un Reclamo o Sugerencia</span>
                </div>
                <div class="card-body">
                    <label>*DATOS DE USUARIO</label>
                    @php
                    $users =\App\Models\User::all();
                    // $posts=\App\Models\Post::all();
                    @endphp
                    {{-- @foreach ($posts as $post)
                    @endforeach --}}
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            {{ Form::label('Usuario:') }}
                          {{ Form::text('username',Auth::user()->username, ['class' => 'form-control' , 'placeholder'=>'username' ]), }}
                        </div>
                        <div class="col-sm-6 form-group">
                            {{ Form::label('Email:') }}
                          {{ Form::text('email',Auth::user()->email , ['class' => 'form-control'] ) }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            {{ Form::label('Nombre(s):') }}
                            {{ Form::text('name',Auth::user()->name , ['class' => 'form-control']) }}
                        </div>
                        <div class="col-sm-6 form-group">
                            {{ Form::label('Apellidos:') }}
                            {{ Form::text('name',Auth::user()->name , ['class' => 'form-control']) }}
                        </div>
                    </div>
                    @include('posts.form')
                </div>
            </form>
        </div>
    </section>
</x-app-layout>
