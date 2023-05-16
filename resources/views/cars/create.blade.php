@extends('layouts.app')

@section('content')
    <section>
        <h1>Create a car</h1>
        <form action="{{ route('cars.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label class="form-label">Brand</label>
                <input type="text" name="brand" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Model</label>
                <input type="text" name="model" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Price</label>
                <div class="input-group">
                    <span class="input-group-text">R$</span>
                    <input type="number" name="price" step="0.01" class="form-control">
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Motor</label>
                <input type="number" name="motor" step="0.1" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Horse Power</label>
                <div class="input-group">
                    <input type="number" name="horse_power" class="form-control">
                    <span class="input-group-text">cv</span>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Color</label>
                <select name="color" class="form-control">
                    @foreach($colors as $color)
                        <option value="{{ $color }}">{{ ucfirst($color) }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <button class="btn btn-success" type="submit">Save</button>
            </div>
        </form>
        <p>
            <a class="btn btn-outline-secondary" href="{{ route('cars.index') }}">Go Back</a>
        </p>
    </section>
@endsection
