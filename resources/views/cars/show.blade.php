<x-layout>
    <div class="container mt-4">
        <h1>Car's Details</h1>
        <hr />

        <div class="row mb-4">
            <div class="col-md-4">
                <img src="{{ Storage::disk('public')->url($car->image_url) }}" alt="Car image" class="img-fluid" />
            </div>
            <div class="col-md-8">
                <h4>{{ $car->brand }} {{ $car->name }} {{ $car->year }}</h4>
                <p>
                    {{ $car->description }}
                </p>
                <ul class="list-unstyled">
                    <li><b>Price:</b> ${{ $car->getPriceWithSymbol() }}</li>
                    <li><b>Year:</b> {{ $car->year }}</li>
                    <li><b>Mileage:</b> 100km/12L</li>
                </ul>
            </div>
        </div>

        <div class="d-flex justify-content-between align-items-center mb-4">
            <div class="d-flex">
                {{-- <a href="./" class="btn btn-outline-primary me-2">Continue Shopping</a> --}}
                <a href="{{ route('cars.index') }}" class="btn btn-primary">Back</a>
            </div>
            {{-- <a href="./" class="text-muted">Remove from Cart</a> --}}
        </div>
    </div>
</x-layout>
