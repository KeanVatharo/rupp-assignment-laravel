<x-layout>
    <header class="bg-light text-white py-3">
        <div class="container">
            <h1 class="display-4 mb-0">BuyCar24</h1>
            <p class="text-black lead">Trusted solutions for all your needs.</p>
        </div>
    </header>

    <main class="container my-5">
        <h2 class="mb-4">Our Services</h2>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            @foreach ($services as $service)
                <div class="col">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">
                                <i class="{{ $service->icon_name }}"></i>
                                {{ $service->name }}
                            </h5>
                            <p class="card-text">
                                {{ $service->description }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
</x-layout>
