<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-xl">
            {{ __('Presentación un Reclamo o sugerencia') }}
            <a href="{{ url('socios/posts/create') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Postear</a>
        </h2>
    </x-slot>

    <section class="container">
        <form class="card-blue" action="/posteado" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-header">
                <h1 class="card-title">Postear un Reclamo o Sugerencia</h1>
            </div>
            <div class="card-body">

                <label>*DATOS DE USUARIO</label>
                @php
                $users =\App\Models\User::all();
                $posts=\App\Models\Post::all();
                @endphp
                @foreach ($posts as $post)
                @endforeach
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <!-- text input -->
                        {{-- <input type="text" name="username" id="username" required class="form-control" placeholder="Enter ..."> --}}
                      {{ Form::label('Usuario:') }}<!--user_id-->{{-- <label for="username">Nombre de Usuario:</label> --}}
                      {{ Form::text('username',Auth::user()->username, ['class' => 'form-control' , 'placeholder'=>'username' ]), }}
                      {{-- {!! $errors->first('user_id', '<div class="invalid-feedback"/>:message</p>') !!} --}}
                    </div>
                    <div class="col-sm-6 form-group">
                      {{ Form::label('Email:') }}<!--user_id-->{{-- <label for="username">Nombre de Usuario:</label> --}}
                      {{ Form::text('email',Auth::user()->email , ['class' => 'form-control'] ) }}
                      {{-- {!! $errors->first('user_id', '<div class="invalid-feedback"/>:message</p>') !!} --}}
                            {{-- <label for="exampleFormControlInput12">Email:</label>
                            <input type="email" class="form-control r-0" id="exampleFormControlInput12" placeholder="name@example.com"> --}}
                    </div>
                  </div>
                  <div class="row">
                      <div class="col-sm-6 form-group">
                        {{ Form::label('Nombre(s):') }}<!--user_id-->{{-- <label for="username">Nombre de Usuario:</label> --}}
                        {{ Form::text('name',Auth::user()->name , ['class' => 'form-control']) }}
                        {{-- {!! $errors->first('user_id', '<div class="invalid-feedback"/>:message</p>') !!} --}}
                            {{-- <label>Nombre(s):</label>
                            <input type="text" class="form-control" placeholder="Enter ..."> --}}
                        </div>
                        <div class="col-sm-6 form-group">
                          {{ Form::label('Apellidos:') }}<!--user_id-->{{-- <label for="username">Nombre de Usuario:</label> --}}
                          {{ Form::text('name',Auth::user()->name , ['class' => 'form-control']) }}
                          {{-- {!! $errors->first('user_id', '<div class="invalid-feedback"/>:message</p>') !!} --}}
                            {{-- <label>Apellidos:</label>
                            <input type="text" class="form-control" placeholder="Enter ..."> --}}
                        </div>
                   </div>
                    {{-- <div class="row form-group">
                        <label for="inputAddress" class="col-form-label">Dirección</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                    </div> --}}
                    <label>*DATOS DE RECLAMO O SUGERENCIA</label>
                    <div class="row">
                        <div class="form-group col-sm-6">
                            {{ Form::label('title') }}{{-- <label for="inputAddress" class="col-form-label">Dirección</label> --}}
                            {{ Form::text('title', "", ['class' => 'form-control' . ($errors->has('title') ? ' is-invalid' : ''), 'placeholder' => 'Title']) }}
                            {{-- <input type="text" name="title" id="title" value="{{old('title')}} required " class="form-control" placeholder="Enter ..."> --}}
                            @error ('title')
                            <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                            @enderror
                        </div>
                        <!-- select Category-->
                        <div class="form-group col-sm-6">
                            <label for="category_id">Seleccionar Categoría</label>
                            <select class="form-control" name="category_id" id="category_id">
                                @php
                                $categories =\App\Models\Category::all();
                                @endphp
                                @foreach ($categories as $category)
                                <option value="{{$category->id}}" {{old('category_id')==$category->id ? 'selected':''}}>
                                    {{ucwords($category->name)}}
                                </option>
                                @endforeach
                            </select>
                            @error ('category')
                            <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                            {{-- {!! $errors->first('user_id', '<div class="invalid-feedback">:message</p>') !!} --}}
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-6">
                            {{ Form::label('slug') }}
                            {{ Form::text('slug', "", ['class' => 'form-control' . ($errors->has('slug') ? ' is-invalid' : ''), 'placeholder' => 'Slug']) }}
                            {!! $errors->first('slug', '<div class="invalid-feedback"/>:message</p>') !!}
                        </div>
                        <div class="form-group col-sm-6">
                            {{ Form::label('excerpt') }}
                            {{ Form::text('excerpt', "", ['class' => 'form-control' . ($errors->has('excerpt') ? ' is-invalid' : ''), 'placeholder' => 'Excerpt']) }}
                            {!! $errors->first('excerpt', '<div class="invalid-feedback"/>:message</p>') !!}
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <!-- textarea -->
                        {{ Form::label('body') }}
                        {{ Form::textarea('body', "", ['class' => 'form-control' . ($errors->has('body') ? ' is-invalid' : ''), 'placeholder' => 'Body']) }}
                        {!! $errors->first('body', '<div class="invalid-feedback"/>:message</p>') !!}
                        {{-- <label for="exampleFormControlTextarea2">Detalles del post</label> --}}
                        {{-- <div class="form-group">
                            {{ Form::label('body') }}
                        {{ Form::text('body', $post->body, ['class' => 'form-control' . ($errors->has('body') ? ' is-invalid' : ''), 'placeholder' => 'Body']) }}
                        {!! $errors->first('body', '<div class="invalid-feedback">:message</p>') !!}
                        </div> --}}
                        {{-- <textarea class="form-control r-0" id="exampleFormControlTextarea2" rows="3" placeholder="Enter ..."></textarea> --}}
                    </div>
                    <!-- Adjuntar -->
                    <div class="form-group">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="thumbnail">Adjuntar Detalles</label>
                        <input type="file" name="thumbnail" value="" class="border border-gray-400 p-2 w-full" id="thumbnail">
                        {{-- <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea> --}}
                    </div>
                    {{-- {!! Form::submit('Postear', ['class' => 'btn btn-info pull-right']) !!} --}}
                    <div class="box-footer mt20">
                        <button type="submit" class="btn btn-primary pull-right">Submit</button>
                    </div>

                </div>
                {{-- <div class="form-check mb-2 mr-sm-2">
                    <input class="form-check-input" type="checkbox" id="inlineFormCheck">
                    <label class="form-check-label" for="inlineFormCheck">Remember me</label>
                </div> --}}
                {{-- <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button> --}}
                {{-- <div class="float-right">
                  {{ route('posts.create') }}
                   <a href="/posteado" class="btn btn-primary btn-sm float-right"  data-placement="left">
                     {{ __('Create New') }}
                   </a>
                 </div> --}}
        </form>
    </section>
</x-app-layout>
