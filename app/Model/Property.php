<?php

namespace App\Model;


use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Model\Builder;

class Property extends Model
{
    public function getRouteKeyName()
    {
      return 'slug';
    }
    
    //protected $fillable = ['builder_id','category_id','title','slug','description','logo'];
    protected $guarded = [];


    public function getPathAttribute()
    {
      return asset("api/property/$this->slug");
    }

    public function user() {
      return $this->belongsTo(User::class);
    }

     public function builder() {
       return $this->belongsTo(Builder::class);
     }

    public function category() {
      return $this->belongsTo(Category::class);
    }

}
