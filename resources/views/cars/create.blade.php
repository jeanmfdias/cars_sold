@extends('layouts.app')

@section('content')
    <section>
        <form action="{{ route('cars.store') }}" method="post">
            @csrf
            <div>
                <label>Brand</label>
                <input type="text" name="brand">
            </div>
            <div>
                <label>Model</label>
                <input type="text" name="model">
            </div>
            <div>
                <label>Price</label>
                <input type="number" name="price">
            </div>
            <div>
                <label>Motor</label>
                <input type="number" name="motor">
            </div>
            <div>
                <label>Horse Power</label>
                <input type="number" name="horse_power">
            </div>
            <div>
                <label>Color</label>
                <select name="color">
                    @foreach($colors as $color)
                        <option value="{{ $color }}">{{ ucfirst($color) }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit">Save</button>
        </form>
    </section>
@endsection
