<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Hero;

class HeroController extends Controller
{
    private $hero;
    public function __construct(Hero $hero)
	{
		$this->hero = $hero;
    }
    
	public function index()
    {
        // return ['status'=> true];
        $data = ['data' => $this->hero::all()];
        return response() -> json($data);
    }

	public function show(Hero $id)
    {
        $data = ['data' => $id];
        return response() -> json($data);
    }

    public function store(Request $request)
    {
        $herodata = $request->all();
        $this->hero->create($herodata);

        return response()->json(['msg'=> 'Hero created with success'], 201);
    }
    public function update(Request $request, $id)
    {
        $herodata = $request->all();
        $hero = $this->hero->find($id);
        $hero->update($herodata);

        return response()->json(['msg'=> 'Hero updated with success'], 201);
    }
}
