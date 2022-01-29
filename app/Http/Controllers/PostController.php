<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str;

    use App\Models\User;
/**
 * Class PostController
 * @package App\Http\Controllers
 */
class PostController extends Controller
{
    //se escriben metodos para administrar rutas
     public function home()
     {
        return view('home.home',[
          'posts'=>Post::latest()->filter(request(['search','category','user']))->get(),
        ]);
     }
     public function showhome(Post $post)
     {
       return view('home.showhome',[
         'post'=>$post
       ]);
     }
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::paginate();
        return view('posts.index',['posts'=>Post::paginate(10)] )//compact('posts')
            ->with('i', (request()->input('page', 1) - 1) * $posts->perPage());
    }
    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $post = new Post();
        return view ('posts.create', compact('post'));
    }
    /**
     * Store a newly created resource in storage.
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $request['slug'] = Str::slug($request->title);
        $attributes = $this->validatePost();
        $attributes['user_id']=auth()->id();
        $attributes['thumbnail']=request()->file('thumbnail')->store('thumbnails');
        // $attributes['slug']=$this->setSlugAttribute('slug')
        Post::create($attributes);
        return redirect('posts')
            ->with('success', 'Post created successfully.');
    }
      // public function store(Request $request)
      // {
      //           // request()->validate(Post::$rules);
      //           // $post = Post::create($request->all());
      //      // ddd(request()->all());
      //      $post=new Post();
      //      $attributes = request()->validate([
      //        'title' =>'required',
      //        'thumbnail'=>$post->exists ? ['image']:['required','image'],
      //        'slug'=>'required',
      //         // Rule::unique('posts','slug')],
      //        'excerpt' =>'required',
      //        'body'=>'required',
      //        'category_id' =>'required',
      //        // Rule::exists('categories','id')]
      //      ]);
      //
      //      $attributes['user_id']=auth()->id();
      //      $attributes['thumbnail']=request()->file('thumbnail')->store('thumbnails');
      //      Post::create($attributes);
      //      // $posts->save();
      //      return redirect('/posts')
      //          ->with('success', 'Post created successfully.');
      //    }
    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        // $post = Post::find($id);
        return view('posts.show', compact('post'));
    }
    /**
     * Show the form for editing the specified resource.
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('posts.edit',['post'=>$post]);// return view('posts.edit')->with('post',$post);
    }
    /**
     * Update the specified resource in storage.
     * @param  \Illuminate\Http\Request $request
     * @param  Post $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $path=request()->file('thumbnail')->store('thumbnail');

        $attributes = $this->validatePost();
        if (isset($attributes['thumbnail'])) {
            $attributes['thumbnail']=request()->file('thumbnail')->store('thumbnails');
        }            // $attributes['user_id']=auth()->id();
        $post->update($attributes);
        return redirect('posts')->with('success', 'Post updated successfully.');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return back()->with('success', 'Post deleted successfully');
    }

    protected function validatePost(?Post $post =null ):array
    {
      $post ??= new Post();// $post=new Post();

      return request()->validate([
             'title' =>'required',
             'thumbnail'=>$post->exists ? ['image']:['required','image'],
             'slug'=>'required',
             // $post->update(['slug' => $post->title]);
              // Rule::unique('posts','slug')],
              // Rule::exists('categories','id')]->ignore($post->id)
             'excerpt' =>'required',
             'body'=>'required',
             'category_id' =>'required',
             // Rule::exists('categories','id')]
       ]);
    }
    // public function setSlugAttribute($value){
    //     if (static::whereSlug($slug = str_slug($value))->exists()) {
    //         $slug = $this->incrementSlug($slug);
    //     }
    //     $this->attributes['slug'] = $slug;
    // }
    // public function incrementSlug($slug){
    //     // get the slug of the latest created post
    //     $max = static::whereTitle($this->title)->latest('id')->skip(1)->value('slug');
    //
    //     if (is_numeric($max[-1])) {
    //         return pred_replace_callback('/(\d+)$/', function ($mathces) {
    //             return $mathces[1] + 1;
    //         }, $max);
    //     }
    //
    //     return "{$slug}-2";
    // }
}
