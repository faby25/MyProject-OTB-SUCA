<x-layout>
    <article>

      <h1> {!!$post->title!!} </h1>

      <p>
        Posteado Por: <a href="/users/{{$post->user->username}}">{{$post->user->name}}</a> Para: <a href="/categories/{{$post->category->slug}}">
          {{$post->category->name}}
        </a>
      </p>

      <div>
        {!!$post->body!!}
      </div>


    </article>

    <a href="/">Go Back</a>
</x-layout>
