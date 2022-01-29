<x-app-layout>
    <x-slot name="header">
        <div class="col-sm-6">
            <h2 class="font-bold text-xl">
                {{ __('Mis Notificaciones') }}
            </h2>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active"></li>
            </ol>
        </div>
    </x-slot>
    {{-- @section('content') --}}
    <div class="card">
        <div class="card-header">
            <div style="display: flex; justify-content: space-between; align-items: center;">
                <span id="card_title">
                    {{ __('Notice') }}
                </span>
            </div>
        </div>
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif

        <div class="card-body">
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
                {{-- @foreach ($notices as $notice) --}}
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
                        <form action="{{ url('notices.destroy',$post->id) }}" method="POST">
                            <a class="btn btn-sm btn-primary " href="{{ url('notices.show',$post->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                            <a class="btn btn-sm btn-success" href="{{ url('notices.edit',$post->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i>Borrar</button>
                        </form>
                      </td>
                  </tr>
                  @endif
                  @endforeach
              </tbody>
            </table>
        </div>
    </div>
    {!! $notices->links() !!}
    {{-- @endsection --}}
</x-app-layout>
