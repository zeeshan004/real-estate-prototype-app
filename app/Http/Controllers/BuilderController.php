<?php

namespace App\Http\Controllers;

use App\Model\Builder;
use Illuminate\Http\Request;

use Symfony\Component\HttpFoundation\Response;
use App\Http\Resources\BuilderResource;
use App\Http\Requests\BuilderRequest;

class BuilderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return BuilderResource::collection(Builder::latest()->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // auth()->user->question()->create($urequest->all());
      Builder::create($request->all());
      return response('Builder created!',200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Builder  $builder
     * @return \Illuminate\Http\Response
     */
    public function show(Builder $builder)
    {
        return new BuilderResource($builder);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Builder  $builder
     * @return \Illuminate\Http\Response
     */
    public function edit(Builder $builder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Builder  $builder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Builder $builder)
    {
      $builder ->update($request->all());
      return response('Builder Updated',200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Builder  $builder
     * @return \Illuminate\Http\Response
     */
    public function destroy(Builder $builder)
    {
      $builder->delete();
      return response('Builder Deleted',200);
    }
}
