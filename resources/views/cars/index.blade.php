@extends('layouts.app')

@section('content')
    <section>
        <h1>Cars</h1>
        <p>
            <a href="{{ route('cars.create') }}">New</a>
        </p>
        <table>
            <thead>
                <tr>
                    <th>Brand</th>
                    <th>Model</th>
                    <th>Price</th>
                    <th>Motor</th>
                    <th>Horse Power</th>
                    <th>Color</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cars as $car)
                    <tr>
                        <td>{{ $car->brand }}</td>
                        <td>{{ $car->model }}</td>
                        <td>{{ "R$ " . number_format($car->price, 2, ',', '.') }}</td>
                        <td>{{ number_format($car->motor, 1) }}</td>
                        <td>{{ $car->horse_power . "cv" }}</td>
                        <td>{{ ucfirst($car->color) }}</td>
                        <td>
                            <div>
                                <a href="{{ route('cars.edit', $car->id) }}">Edit</a>
                                <a href="{{ route('cars.show', $car->id) }}">Show</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection
