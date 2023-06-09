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

    public function show(Car $car)
    {
        return view('cars.show', compact('car'));
    }

    public function edit(Car $car)
    {
        $colors = Car::COLORS;

        return view('cars.edit', compact('car', 'colors'));
    }

    public function update(Car $car, Request $request)
    {
        $data = $request->all();

        if (!$car->sold_at) {
            $data['sold_at'] = date('Y-m-d H:i:s');
        }

        $car->update($data);

        return redirect(route('cars.show', $car->id));
    }

    public function destroy(Car $car)
    {
        $car->delete();

        return redirect(route('cars.index'));
    }
}
