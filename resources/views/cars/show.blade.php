@extends('layouts.app')

@section('content')
    <section>
        <h1>Car #{{ $car->id }}</h1>
        <div>
            <label for="brand">Brand:</label>
            <p>{{ $car->brand }}</p>
        </div>
        <div>
            <label for="model">Model:</label>
            <p>{{ $car->model }}</p>
        </div>
        <div>
            <label for="price">Price:</label>
            <p>R$ {{ number_format($car->price, 2, ',', '.') }}</p>
        </div>
        <div>
            <label for="motor">Motor:</label>
            <p>{{ number_format($car->motor, 1, '.', '') }}</p>
        </div>
        <div>
            <label for="horse_power">Horse Power:</label>
            <p>{{ $car->horse_power }}cv</p>
        </div>
        <div>
            <label for="created_at">Created At:</label>
            <p>{{ $car->created_at->format('d/m/Y H:i:s') }}</p>
        </div>
        <div>
            <label for="updated_at">Updated At:</label>
            <p>{{ $car->updated_at->format('d/m/Y H:i:s') }}</p>
        </div>
        <div>
            <a href="{{ route('cars.index') }}">Go back</a>
        </div>
    </section>
@endsection
