<div class="box box-info padding-1">
    <div class="box-body">
      <label>*DATOS DE RECLAMO O SUGERENCIA</label>
        <div class="row">
          <div class="form-group col-sm-6">
              {{ Form::label('Título del Post') }}
              {{ Form::text('title', $post->title, ['class' => 'form-control' . ($errors->has('title') ? ' is-invalid' : ''), 'placeholder' => 'Title' ]) }}{{--{{$attributes(['value'=>old($post->title)])}}--}}
              {!! $errors->first('title', '<div class="invalid-feedback"/>:message</p>') !!}
          </div>
          <div class="form-group col-sm-6">
              {{ Form::label('Seleccionar Categoría') }}
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
              @enderror
          </div>
        </div>
        <div class="row">
            <div class="form-group col-sm-6">
                {{ Form::label('slug') }}
                {{ Form::text('slug', $post->slug, ['class' => 'form-control' . ($errors->has('slug') ? ' is-invalid' : ''), 'placeholder' => 'slug', 'value' =>old('slug', $post->slug)]) }}
                {!! $errors->first('slug', '<div class="invalid-feedback"/>:message</p>') !!}
            </div>
            <div class="form-group col-sm-6">
                {{ Form::label('excerpt') }}
                {{ Form::text('excerpt',$post->excerpt, ['class' => 'form-control' . ($errors->has('excerpt') ? ' is-invalid' : ''), 'placeholder' => 'Excerpt']) }}
                {!! $errors->first('excerpt', '<div class="invalid-feedback"/>:message</p>') !!}
            </div>
        </div>
        <div class="form-group">
            {{ Form::label('Detalles del Post') }}
            {{ Form::textarea('body', $post->body, ['class' => 'form-control' . ($errors->has('body') ? ' is-invalid' : ''), 'placeholder' => 'Body']) }}
            {!! $errors->first('body', '<div class="invalid-feedback"/>:message</p>') !!}
        </div>
        <div class="form-group">
          {{ Form::label('Adjumtar archivos') }}
          {{ Form::file('thumbnail', $post->thumbnail, ['class' => 'form-control' . ($errors->has('thumbnail') ? ' is-invalid' : ''), 'placeholder' => '']) }}
          {{-- {!! $errors->first('thumbnail', '<div class="invalid-feedback"/>:message</p>') !!} --}}
          <img src="{{  asset('storage/'.$post->thumbnail) }}" alt="" class="rounded-xl" width="50">
            {{-- <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="thumbnail">Adjuntar Detalles</label>
            <input type="file" name="thumbnail" value= "{{$post->thumbnail}}" class="border border-gray-400 p-2 w-full" id="thumbnail"> --}}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary pull-right">Guardar</button>
    </div>
</div>
