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
}
