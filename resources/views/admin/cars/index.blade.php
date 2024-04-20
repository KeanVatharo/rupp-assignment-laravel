<x-layout>
    <div class="container mt-5">
        <h1 class="mb-4">Car Inventory</h1>
        <a href="{{ route('admin.cars.create') }}" class="btn btn-primary mb-3">Create New</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Brand</th>
                    <th>Name</th>
                    <th>Year</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Loop through cars and display each row -->
                @foreach ($cars as $car)
                    <tr>
                        <td>{{ $car->id }}</td>
                        <td>{{ $car->brand->name }}</td>
                        <td>{{ $car->name }}</td>
                        <td>{{ $car->year }}</td>
                        <td>${{ $car->getPriceWithSymbol() }}</td>
                        <td>{{ $car->description }}</td>
                        <td><img src="{{ Storage::disk('public')->url($car->image_url) }}" alt="Car Image"
                                style="max-width: 40px;">
                        </td>
                        <td>{{ $car->created_at }}</td>
                        <td>{{ $car->updated_at }}</td>
                        <td class="d-flex gap-1">
                            <a href="{{ route('admin.cars.edit', $car) }}" class="btn btn-primary btn-sm">Edit</a>
                            <form action="{{ route('admin.cars.destroy', $car) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-primary btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>
