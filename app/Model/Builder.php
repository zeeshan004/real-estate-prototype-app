<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Model\Property;


class Builder extends Model
{
    protected $guarded=[];
    public function getRouteKeyName(){
      return 'slug';
    }

    public function getPathAttribute()
    {
      return asset("api/builder/$this->slug");
    }

    public function user() {
      return $this->belongsTo(User::class);
    }

    public function properties()
    {
      return $this->hasMany(Property::class);
    }
}
