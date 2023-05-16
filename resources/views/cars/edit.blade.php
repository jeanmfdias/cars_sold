@extends('layouts.app')

@section('content')
    <section>
        <h1>Edit car #{{ $car->id }}</h1>
        <form action="{{ route('cars.update', $car->id) }}" method="post">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="brand" class="form-label">Brand</label>
                <input type="text" name="brand" value="{{ $car->brand }}" class="form-control">
            </div>
            <div class="mb-3">
                <label for="model" class="form-label">Model</label>
                <input type="text" name="model" value="{{ $car->model }}" class="form-control">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <div class="input-group">
                    <span class="input-group-text">R$</span>
                    <input type="number" step="0.01" name="price" value="{{ $car->price }}" class="form-control">
                </div>
            </div>
            <div class="mb-3">
                <label for="motor" class="form-label">Motor</label>
                <input type="number" step="0.1" name="motor" value="{{ $car->motor }}" class="form-control">
            </div>
            <div class="mb-3">
                <label for="horse_power" class="form-label">Horse Power</label>
                <div class="input-group">
                    <input type="number" name="horse_power" value="{{ $car->horse_power }}" class="form-control">
                    <span class="input-group-text">cv</span>
                </div>
            </div>
            <div class="mb-3">
                <label for="color" class="form-label">Color</label>
                <select name="color" class="form-control">
                    @foreach($colors as $color)
                        <option value="{{ $color }}" {{ $color === $car->color ? 'selected' : '' }}>
                            {{ ucfirst($color) }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <p>It car was sold?</p>
                <label for="sold_price" class="form-label">Sold price</label>
                <div class="input-group">
                    <span class="input-group-text">R$</span>
                    <input type="number"
                           step="0.01"
                           name="sold_price"
                           value="{{ $car->sold_price }}"
                           class="form-control">
                </div>
                @if ($car->sold_at)
                    <p>Car was sold at {{ $car->sold_at->format('d/m/Y H:i:s') }}</p>
                @endif
            </div>
            <div class="mb-3">
                <button class="btn btn-success" type="submit">Update</button>
            </div>
        </form>
        <p>
            <a class="btn btn-outline-secondary" href="{{ route('cars.index') }}">Go Back</a>
        </p>
    </section>
@endsection
