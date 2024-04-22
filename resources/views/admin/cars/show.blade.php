<x-layout>
    <div class="container mt-5">
        <h1>{{ $car->name }}</h1>
        <div class="row">
            <div class="col-md-6">
                <p><strong>Brand:</strong> {{ $car->brand->name }}</p>
                <p><strong>Year:</strong> {{ $car->year }}</p>
                <p><strong>Price:</strong> ${{ $car->price }}</p>
                <p><strong>Description:</strong> {{ $car->description }}</p>
            </div>
            <div class="col-md-6">
                <img src="{{ Storage::disk('public')->url($car->image_url) }}" alt="Car image" class="img-fluid" />
            </div>
        </div>
    </div>
</x-layout>
