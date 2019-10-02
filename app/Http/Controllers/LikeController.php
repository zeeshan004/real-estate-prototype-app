<?php

namespace App\Http\Controllers;

use App\Model\Like;
use Illuminate\Http\Request;
use App\Model\Property;

class LikeController extends Controller
{
  /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth:api', ['except' => ['login','signup']]);
        $this->middleware('JWT');
    }
    public function likeIt(Property $property)
    {
      $property->like()->create(
        [
          'user_id' => '1'
        ]
      );
    }

    public function unLikeIt(Property $property)
    {
      //$property->like()->where(['user_id',auth()-id()])->first->delete();
      $property->like()->where('user_id','1')->first()->delete();
    }
}
