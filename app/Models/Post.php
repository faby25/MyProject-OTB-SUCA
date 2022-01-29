<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
/**
 * Class Post
 *
 * @property $id
 * @property $user_id
 * @property $category_id
 * @property $slug
 * @property $title
 * @property $excerpt
 * @property $body
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Post extends Model
{
   use HasFactory;
      // protected $guarded= ['id'];
      //protected $fillable= ['title','excerpt','body'];


    static $rules = [
		'user_id' => 'required',
		'category_id' => 'required',
		'slug' => 'required',
		'title' => 'required',
		'excerpt' => 'required',
		'body' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id','category_id','slug','title','excerpt','body'];

        protected $with=['category', 'user'];//todos los post incluiran su categoria y usuario o autor
        // protected $guarded=[];

        public function scopeFilter($query, array $filters)
        {
          $query->when($filters['search']?? false, function($query,$search){
            $query->where(function($query){
              $query->where('title','like','%'.$search. '%')
              ->orWhere('body','like','%'.$search.'%');
            });
          });
            $query->when($filters['category']?? false, function($query,$category){

              $query->whereHas('category',function($query){
                $query->Where('slug',$category);
              });
            });

            $query->when($filters['user']?? false, function($query,$user){
              $query->whereHas('user',function($query){
                $query->Where('username',$user);
              });
            });

          
        }

        public function category(){
          return $this->belongsTo(Category::class);
        }
        public function user(){
          return $this->belongsTo(User::class);
        }
}
