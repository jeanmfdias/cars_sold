@extends('layouts.app')

@section('content')
    <section>
        <h1>Edit car #{{ $car->id }}</h1>
        <form action="{{ route('cars.update', $car->id) }}" method="post">
            @method('put')
            @csrf
            <div>
                <label for="brand">Brand</label>
                <input type="text" name="brand" value="{{ $car->brand }}">
            </div>
            <div>
                <label for="model">Model</label>
                <input type="text" name="model" value="{{ $car->model }}">
            </div>
            <div>
                <label for="price">Price</label>
                <input type="number" step="0.01" name="price" value="{{ $car->price }}">
            </div>
            <div>
                <label for="motor">Motor</label>
                <input type="number" step="0.1" name="motor" value="{{ $car->motor }}">
            </div>
            <div>
                <label for="horse_power">Horse Power</label>
                <input type="number" name="horse_power" value="{{ $car->horse_power }}">
            </div>
            <div>
                <label for="color">Color</label>
                <select name="color">
                    @foreach($colors as $color)
                        <option value="{{ $color }}" {{ $color === $car->color ? 'selected' : '' }}>
                            {{ ucfirst($color) }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div>
                <button type="submit">Update</button>
            </div>
        </form>
        <p>
            <a href="{{ route('cars.index') }}">Go Back</a>
        </p>
    </section>
@endsection
