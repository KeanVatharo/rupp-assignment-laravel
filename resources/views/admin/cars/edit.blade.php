<x-layout>
    <div class="container mt-5">
        <h1>Edit Car</h1>
        <form action="{{ route('admin.cars.update', $car) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="d-flex flex-column gap-3">
                <div class="form-group">
                    <label for="brand">Brand:</label>
                    <input type="text" class="form-control" id="brand" name="brand" value="{{ $car->brand }}">
                </div>

                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name"
                        value="{{ $car->name }}">
                </div>

                <div class="form-group">
                    <label for="year">Year:</label>
                    <input type="number" class="form-control" id="year" name="year"
                        value="{{ $car->year }}">
                </div>

                <div class="form-group">
                    <label for="price">Price:</label>
                    <input type="number" step="0.01" class="form-control" id="price" name="price"
                        value="{{ $car->price }}">
                </div>

                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea class="form-control" id="description" name="description" rows="7">{{ $car->description }}</textarea>
                </div>

                <div class="form-group">
                    <label for="image_url">Image:</label>
                    <input type="file" class="form-control" id="image_url" name="image_url">
                    @if ($errors->has('image_url'))
                        <span class="text-danger">{{ $errors->first('image_url') }}</span>
                    @endif
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
</x-layout>
