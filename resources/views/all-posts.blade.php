<x-layout>

  @include('_post-header')
  <link rel="stylesheet" href="css/styles.css">

  @foreach ($posts as $post)
    <article>

      <h1>
        <a href="/posts/{{$post->slug}}">
          {!!$post->title!!}
        </a>
      </h1>

      <p>
        <a href="/categories/{{$post->category->slug}}">
          {{$post->category->name}}
          Posteado Por: <a href="/users/{{$post->user->username}}">{{$post->user->name}}</a>
          Para: <a href="/categories/{{$post->category->slug}}">
            {{$post->category->name}};
        </a>
      </p>

      <div>
        {!!$post->excerpt !!}
      </div>

    </article>
 @endforeach
</x-layout>
