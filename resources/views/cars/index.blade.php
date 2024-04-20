<x-layout>
    <div class="container mt-4">
        <div class="" id="Products">
            <h1 class="text-center mb-4">Available Cars</h1>
            <!-- Filters -->
            <div class="filter-container d-flex gap-3 justify-content-center align-items-center">
                <label for="brand-filter">Brand:</label>
                <select class="form-select" id="brand-filter">
                    <option value="">All</option>
                    @foreach ($cars as $car)
                        <option value="{{ $car->name }}">{{ $car->name }}</option>
                    @endforeach
                </select>

                <label for="price-min">Min Price:</label>
                <input class="form-control" type="number" id="price-min" min="0" />

                <label for="price-max">Max Price:</label>
                <input class="form-control" type="number" id="price-max" min="0" />
            </div>

            <!-- Search -->
            <input class="form-control me-2 my-3" id="search-input" type="search" placeholder="Search cars..." />

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4" id="data-container">
                <!-- cars inject here -->
                @foreach ($cars as $car)
                    <div class="col-3">
                        <div class="card">
                            <img src="{{ Storage::disk('public')->url($car->image_url) }}" class="card-img-top" />
                            <div class="card-body">
                                <h5>{{ $car->brand->name }} {{ $car->name }} {{ $car->year }}</h5>
                                <p class="text-truncate">{{ $car->description }}</p>
                                <p class="fw-bold">${{ $car->getPriceWithSymbol() }}</p>
                                <div class="text-warning">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>
                                <a href="{{ route('cars.show', $car) }}" class="btn btn-primary">View</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                // Get reference to filter elements
                const brandFilter = document.getElementById("brand-filter");
                const minPriceInput = document.getElementById("price-min");
                const maxPriceInput = document.getElementById("price-max");
                const searchInput = document.getElementById("search-input");
                const dataContainer = document.getElementById("data-container");

                // Attach event listeners
                brandFilter.addEventListener("change", applyFilters);
                minPriceInput.addEventListener("input", applyFilters);
                maxPriceInput.addEventListener("input", applyFilters);
                searchInput.addEventListener("input", applyFilters);

                // Function to filter cars
                function applyFilters() {
                    const brandValue = brandFilter.value.toLowerCase();
                    const minPrice = parseFloat(minPriceInput.value) || 0;
                    const maxPrice = parseFloat(maxPriceInput.value) || Infinity;
                    const searchValue = searchInput.value.trim().toLowerCase();

                    Array.from(dataContainer.children).forEach(card => {
                        const carBrand = card.querySelector("h5").textContent.toLowerCase();
                        const carPrice = parseFloat(card.querySelector(".fw-bold").textContent.replace("$",
                            ""));
                        const carDescription = card.querySelector("p").textContent.toLowerCase();

                        const brandMatch = !brandValue || carBrand.includes(brandValue);
                        const priceMatch = carPrice >= minPrice && carPrice <= maxPrice;
                        const searchMatch = !searchValue || carDescription.includes(searchValue);

                        if (brandMatch && priceMatch && searchMatch) {
                            card.style.display = "block";
                        } else {
                            card.style.display = "none";
                        }
                    });
                }
            });
        </script>
    @endpush
</x-layout>
