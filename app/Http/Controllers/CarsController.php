<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    public function index()
    {
        $cars = Car::all();

        return view('cars.index', compact('cars'));
    }

    public function create()
    {
        $colors = Car::COLORS;
        return view('cars.create', compact('colors'));
    }

    public function store(Request $request)
    {
        $data = $request->all();

        Car::create($data);

        return redirect(route('cars.index'));
    }
}
