<x-layout>
    <header class="bg-light text-white py-3 mb-4">
        <div class="container">
            <h1 class="display-4 mb-0">BuyCar24</h1>
            <p class="text-black lead">
                Your one-stop shop for cars, services, and parts.
            </p>
        </div>
    </header>

    <!-- Cars -->
    <div class="container">
        <div class="" id="Products">
            <h1 class="text-center mb-4">Car In-Stock</h1>

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4" id="data-container">
                <!-- cars inject here -->
                @foreach ($cars as $car)
                    <div class="col-3">
                        <div class="card">
                            <img src="{{ Storage::disk('public')->url($car->image_url) }}" class="card-img-top" />
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
                                <a href="{{ route('cars.index') }}" class="btn btn-primary">View</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!--Promotion Discount -->
    <div class="container-fluid bg-light my-5 py-5">
        <div class="container">
            <h2 class="display-4 fw-bold text-primary">
                Hot Deals & Exclusive Offers!
            </h2>
            <p class="lead py-3">
                Save big on your dream car with our limited-time promotions and
                discounts. Browse our selection now and find the perfect deal for you!
            </p>
            <a href="./cars.html" class="btn btn-primary">Shop Now</a>
        </div>
    </div>

    <!--Review-->
    <x-all-feedbacks :feedbacks="$feedbacks" />

    <!--Services-->
    <div class="services container" id="Servises">
        <h1 class="mb-4">Our Services</h1>

        <div class="row">
            <div class="">
                <i class="fa-solid fa-truck-fast fa-3x text-warning mb-3"></i>
                <h4 class="fw-bold">Fast Delivery</h4>
                <p>
                    We understand car problems are urgent. Order your car parts or
                    accessories online, and enjoy same-day or next-day delivery to most
                    locations. No more waiting days or endless trips to the store!
                </p>
            </div>

            <div class="">
                <i class="fa-solid fa-rotate-left fa-3x text-warning mb-3"></i>
                <h4 class="fw-bold">7 Days Replacement</h4>
                <p>
                    Worried about getting the wrong part or having it arrive damaged?
                    Relax, we offer a hassle-free 7-day replacement policy. Simply
                    return the item in its original packaging and get a replacement sent
                    out promptly. Peace of mind is just a click away!
                </p>
            </div>

            <div class="">
                <i class="fa-solid fa-headset fa-3x text-warning mb-3"></i>
                <h4 class="fw-bold">24 x 7 Support</h4>
                <p>
                    Car troubles don't keep office hours. That's why our friendly and
                    knowledgeable team is available 24 hours a day, 7 days a week.
                    Whether it's a quick question about a part or troubleshooting a
                    tricky repair, we're always here to guide you.
                </p>
            </div>
        </div>
    </div>

    <!--Footer-->
</x-layout>
