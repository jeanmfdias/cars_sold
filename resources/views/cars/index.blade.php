@extends('layouts.app')

@section('content')
    <section>
        <h1>Cars</h1>
        <p>
            <a class="btn btn-primary" href="{{ route('cars.create') }}">New</a>
        </p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Brand</th>
                    <th>Model</th>
                    <th>Price</th>
                    <th>Motor</th>
                    <th>Horse Power</th>
                    <th>Color</th>
                    <th>Sold</th>
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
                        <td>{{ $car->isSold() ? 'Yes' : 'No' }}</td>
                        <td>
                            <form action="{{ route('cars.destroy', $car->id) }}" method="post">
                                @method('delete')
                                @csrf
                                <div class="btn-group">
                                    <a class="btn btn-warning" href="{{ route('cars.edit', $car->id) }}">Edit</a>
                                    <a class="btn btn-info" href="{{ route('cars.show', $car->id) }}">Show</a>
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                </div>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <p>
            <small>* To mark as sold, go to edit page</small>
        </p>
    </section>
@endsection
