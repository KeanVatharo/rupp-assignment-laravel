<x-layout>
    <div class="container">
        <div class="" id="Products">
            <h1 class="text-center mb-4">Available Cars</h1>
            <!-- Filters -->
            <div class="filter-container d-flex gap-3 justify-content-center align-items-center">
                <label for="brand-filter">Brand:</label>
                <select class="form-select" id="brand-filter">
                    <option value="">All</option>
                </select>

                <label for="price-min">Min Price:</label>
                <input class="form-control" type="number" id="price-min" min="0" />

                <label for="price-max">Max Price:</label>
                <input class="form-control" type="number" id="price-max" min="0" />
            </div>

            <div class="row">
                @foreach ($cars as $car)
                    <div class="col-3">
                        <div class="card">
                            <img src="${car.photo_url}" class="card-img-top" />
                            <div class="card-body">
                                <h5>{{ $car->brand }} {{ $car->name }} {{ $car->year }}</h5>
                                <p class="text-truncate">{{ $car->description }}</p>
                                <p class="fw-bold">${{ $car->price }}</p>
                                <div class="text-warning">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>
                                <a href="/add-to-cart.html" class="btn btn-primary">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Search -->
            <input class="form-control me-2 my-3" id="search-input" type="search" placeholder="Search cars..." />

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4" id="data-container">
                <!-- cars inject here -->
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            const container = document.getElementById("data-container");
            const brandFilter = document.getElementById("brand-filter");
            const searchInput = document.getElementById("search-input");
            const priceMinInput = document.getElementById("price-min");
            const priceMaxInput = document.getElementById("price-max");
            const searchParams = new URLSearchParams(window.location.search).get(
                "search"
            );

            var allCars;

            if (searchParams) {
                searchInput.value = searchParams;
            }

            // Fetch the data from data.json
            fetch("./assets/js/data.json")
                .then((response) => response.json())
                .then((data) => {
                    // Inject filter options
                    const cars = data.cars;
                    cars.forEach(function(car) {
                        brandFilter.appendChild(createBrandFilter(car));
                    });

                    // Initialize variables
                    let filteredCars = cars; // initially, all cars are displayed

                    // Define event listeners
                    searchInput.addEventListener("keyup", filterCars);
                    brandFilter.addEventListener("change", filterCars);
                    priceMinInput.addEventListener("change", filterCars);
                    priceMaxInput.addEventListener("change", filterCars);

                    // Function to filter cars based on search, brand, and price range
                    function filterCars() {
                        // Get search value
                        const searchValue = searchInput.value.toLowerCase().trim();

                        // Get selected brand
                        const selectedBrand = brandFilter.value.toLowerCase();

                        // Get price range
                        const priceMin = parseInt(priceMinInput.value) || 0;
                        const priceMax = parseInt(priceMaxInput.value) || Infinity;

                        // Filter cars based on search, brand, and price
                        filteredCars = cars.filter((car) => {
                            const brandMatch =
                                car.brand.toLowerCase().includes(selectedBrand) ||
                                selectedBrand === "";
                            const priceMatch = car.price >= priceMin && car.price <= priceMax;
                            const searchMatch = !searchValue ||
                                car.brand.toLowerCase().includes(searchValue) ||
                                car.model.toLowerCase().includes(searchValue) ||
                                car.description.toLowerCase().includes(searchValue);

                            return brandMatch && priceMatch && searchMatch;
                        });

                        // Update content with filtered cars
                        container.innerHTML = "";
                        filteredCars.forEach((car) => {
                            container.appendChild(createCarElement(car));
                        });
                    }

                    // Initial call to filter and display cars
                    filterCars();
                })
                .catch((error) => console.error(error));

            function createBrandFilter(car) {
                const element = document.createElement("option");
                element.setAttribute("value", car.brand);
                element.innerHTML = car.brand;

                return element;
            }

            function createCarElement(car) {
                const element = document.createElement("div");
                element.innerHTML = `
                  <div class="card">
                    <img
                      src="${car.photo_url}"
                      class="card-img-top"
                    />

                    <div class="card-body">
                      <h5>${car.brand} ${car.model}</h5>
                      <p class="text-truncate">${car.description}</p>
                      <p class="fw-bold">$${car.price}</p>
                      <div class="text-warning">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                      </div>
                      <a href="/add-to-cart.html" class="btn btn-primary">Add To Cart</a>
                    </div>
                  </div>
                  `;

                return element;
            }
        </script>
    @endpush
</x-layout>
