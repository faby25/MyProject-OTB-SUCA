<x-app-layout>
    <x-slot name="header">
        <div class="col-sm-6">
            <h2 class="font-bold text-xl">
                {{ __('Lista de Posts, Reclamos o Sugerencias') }}
            </h2>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active"></li>
            </ol>
        </div>
    </x-slot>

    {{-- <x-slot name="content-main"> --}}
      <div class="card">
        <div class="card-header">
            <h3 class="card-title">Mis Posts</h3>
            <div class="float-right">
                <a href="posts.create" class="btn btn-primary btn-sm float-right">{{-- <a href="{{ route('posts.create') }}" class="btn btn-primary btn-sm float-right" data-placement="left"> --}}
                    {{ __('Crear Nuevo') }}</a>
            </div>
        </div>

        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif
        <div class="card-body">
            {{-- <form class="" action="index.html" method="post">
                  @csrf --}}
            @php $posts=\App\Models\Post::all();$i='0'@endphp
            <table id="example1" class="table table-hover table-striped">
                <thead>
                    <tr>
                        {{-- <th>No</th>
                        <th>Usuario</th> --}}
                        <th>Categoría</th>
                        {{-- <th>Slug</th> --}}
                        <th>Titulo</th>
                        {{-- <th>Excerpt</th> --}}
                        <th>Detalle</th>
                        <th>Archivos</th>
                        <th>Archivos</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                    @if ($post->user_id == auth()->id())
                    <tr>
                        {{-- <td>{{ ++$i }}</td>
                        <td value="{{$post->user_id}}">{{ $post->user->name }}</td> --}}
                        <td value="{{ $post->category_id}}">{{ $post->category->name}}</td>
                        {{-- <td>{{ $post->slug }}</td> --}}
                        <td>{{ $post->title }}</td>
                        {{-- <td>{{ $post->excerpt }}</td> --}}
                        <td>{{ $post->body }}</td>
                        <td>{{ $post->thumbnail }}</td>
                        <td>
                          @method('PATCH')
                          <form method="POST" action="posts.delete.{{$post->id}}">
                          {{-- <form action="{{ url('posts.destroy',$post->id) }}" method="POST"> --}}
                              <a class="btn btn-sm btn-primary " href="posts.show.{{$post->slug}}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                              <a class="btn btn-sm btn-success" href="posts.edit.{{$post->slug}}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i>Borrar</button>
                          </form>
                           {{-- <a class="btn btn-sm btn-success" href="posts.edit.{{$post->slug}}"><i class="fa fa-fw fa-edit"></i> Edit</a> --}}

                        </td>
                    </tr>
                    @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {{-- </x-slot> --}}
</x-app-layout>
