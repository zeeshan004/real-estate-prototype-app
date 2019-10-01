<?php

namespace App\Http\Controllers;

use App\Model\Property;
use App\Model\Builder;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Resources\PropertyResource;
use App\Http\Requests\PropertyRequest;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Builder $builder)
    {
        //return $builder;
        return PropertyResource::collection($builder->properties);
        //return PropertyResource::collection(Property::latest()->get());
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
    public function store(Builder $builder, Request $request)
    {
        // auth()->user->question()->create($urequest->all());
        //Property::create($request->all());
        $property = $builder->properties()->create($request->all());
        return response(['property' => new PropertyResource($property)],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function show(Builder $builder, Property $property)
    {
        return new PropertyResource($property);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function edit(Property $property)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function update(Builder $builder, Request $request, Property $property)
    { 
        $property ->update($request->all());
        return response('Updated',200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function destroy(Builder $builder, Property $property)
    {
        $property->delete();
        return response('Deleted',200);
    }
}
