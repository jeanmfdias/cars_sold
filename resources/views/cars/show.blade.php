@extends('layouts.app')

@section('content')
    <section>
        <h1>Car #{{ $car->id }}</h1>
        <div class="mb-3">
            <label for="brand" class="form-label">Brand:</label>
            <p class="form-control">{{ $car->brand }}</p>
        </div>
        <div class="mb-3">
            <label for="model" class="form-label">Model:</label>
            <p class="form-control">{{ $car->model }}</p>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price:</label>
            <p class="form-control">R$ {{ number_format($car->price, 2, ',', '.') }}</p>
        </div>
        <div class="mb-3">
            <label for="motor" class="form-label">Motor:</label>
            <p class="form-control">{{ number_format($car->motor, 1, '.', '') }}</p>
        </div>
        <div class="mb-3">
            <label for="horse_power" class="form-label">Horse Power:</label>
            <p class="form-control">{{ $car->horse_power }}cv</p>
        </div>
        <div class="mb-3">
            <label for="color" class="form-label">Color:</label>
            <p class="form-control">{{ ucfirst($car->color) }}</p>
        </div>
        <div class="mb-3">
            <label for="created_at" class="form-label">Created At:</label>
            <p class="form-control">{{ $car->created_at->format('d/m/Y H:i:s') }}</p>
        </div>
        <div class="mb-3">
            <label for="updated_at" class="form-label">Updated At:</label>
            <p class="form-control">{{ $car->updated_at->format('d/m/Y H:i:s') }}</p>
        </div>
        @if ($car->isSold())
            <div class="mb-3">
                <label for="sold_at" class="form-label">Sold At:</label>
                <p class="form-control">{{ $car->sold_at->format('d/m/Y H:i:s') }}</p>
            </div>
            <div class="mb-3">
                <label for="sold_price" class="form-label">Sold price:</label>
                <p class="form-control">R$ {{ number_format($car->sold_price, 2, '.', ',') }}</p>
            </div>
        @endif
        <div>
            <a class="btn btn-outline-secondary" href="{{ route('cars.index') }}">Go back</a>
        </div>
    </section>
@endsection
