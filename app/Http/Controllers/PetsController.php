<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Pet;

class PetsController extends Controller
{
    
    public function index()
    {

    	$pets = Pet::all();

    	return response()->json([
    		'data' => $this->transformCollection($pets)
    	], 200);
    }


    public function show($id)
    {
    	$pet = Pet::find($id);

    	if(!$pet)
    	{
    		return response()->json([

    			'error' => [
    				'message' => 'Pet not found'
    			]

    		], 404);
    	}

    	return response()->json([

    		'data' => $this->transform($pet)

    	], 200);
    }


    private function transformCollection($pets)
    {
    	return array_map([$this, 'transform'], $pets->toArray());
    }

    private function transform($pet) 
    {
    	return [
			'name' => $pet['name']
		];
    }
}
















