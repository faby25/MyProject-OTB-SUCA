@props(['posts'])

@for ($i=0; $i < $posts->count(); $i++)
  @if ($posts[$i]->user->is_admin=='1')
    <x-post-featured-card :post="$posts[$i]"/>
    @php $c=$i;$i=$posts->count();@endphp
  @endif
@endfor
@if($posts->count()>$c)
  <div class="lg:grid lg:grid-cols-3">
    @foreach ($posts->skip($c+1) as $post)
      @if ($post->user->is_admin=='1')

         <x-post-card
           :post="$post"
           class="{{$loop->iteration<3? 'col-span-3' : 'col-span-2'}}"/>
     @endif
    @endforeach
  </div>
@endif
