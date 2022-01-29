<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-xl">
            {{ __('Lista de posts ') }}
            <a href="{{ url('/Posts/create') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Postear</a>
        </h2>
    </x-slot>
    <section>
    @php
    $posts=\App\Models\Post::all();
    @endphp
    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Post') }}
                            </span>

                             <div class="float-right">
                                {{-- <a href="{{ route('posts.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left"> --}}
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

                    <th>User Id</th>
                    <th>Category Id</th>
                    <th>Slug</th>
                    <th>Title</th>
                    <th>Excerpt</th>
                    <th>Body</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($posts as $post)
                                        <tr>

                                            {{-- <td>{{ ++$i }}</td> --}}

                      <td>{{ $post->user_id }}</td>
                      <td>{{ $post->category_id }}</td>
                      <td>{{ $post->slug }}</td>
                      <td>{{ $post->title }}</td>
                      <td>{{ $post->excerpt }}</td>
                      <td>{{ $post->body }}</td>

                                            <td>
                                                {{-- <form action="{{ route('posts.destroy',$post->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('posts.show',$post->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('posts.edit',$post->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form> --}}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {{-- {!! $posts->links() !!} --}}
            </div>
        </div>
    </div>

    </section>


</x-app-layout>
