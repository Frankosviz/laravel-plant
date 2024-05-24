<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Plant;

class PlantController extends Controller
{
    public function indexHome(){
        $plants = Plant::all();
        return view('home', compact('plants'));
    }
    public function show($id)
    {
        $plantDetail = Plant::findOrFail($id);
        return view('plants.show', compact('plantDetail'));
    }

    public function index()
    {
        $plants = Plant::all();
        return view('plants.index', compact('plants'));
    }
}
