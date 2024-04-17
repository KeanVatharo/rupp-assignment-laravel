<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Assignment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <link rel="stylesheet" href="./assets/css/app.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-white shadow mb-4">
        <div class="container-fluid py-2">
            <a class="navbar-brand" href="/">Car Garage</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/cars">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Reviews</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/register">Register</a>
                    </li>
                </ul>

                <!-- Search -->
                <div class="d-flex">
                    <input class="form-control me-2" type="search" id="navbar-search-input" placeholder="Search" />
                    <a href="/cars" id="navbar-search-button" class="btn btn-primary">Search</a>
                </div>
            </div>
        </div>
    </nav>

    {{ $slot }}

    <!--Footer-->
    <footer class="bg-light mt-5 p-5">
        <div class="container">
            <div class="row gap-4 justify-between">
                <div class="col-md">
                    <div class="d-flex gap-2 flex-column">
                        <h4>Contact</h4>
                        <a href="#" class="text-black"><i class="fa-solid fa-house"></i>RUPP/PP/CAMBODIA</a>
                        <a href="#" class="text-black"><i class="fa-solid fa-phone"></i>+855 99304367</a>
                        <a href="#" class="text-black"><i class="fa-solid fa-envelope"></i>Nak168@gmail.com</a>
                    </div>
                </div>

                <div class="col-md">
                    <div class="d-flex gap-2 flex-column">
                        <h4>Get Help</h4>
                        <a href="#" class="text-black">FAQ</a>
                        <a href="#" class="text-black">Shipping</a>
                        <a href="#" class="text-black">Returns</a>
                        <a href="#" class="text-black">Payment Options</a>
                    </div>
                </div>

                <div class="col-md">
                    <div class="d-flex gap-2 flex-column">
                        <h4>Our Garage</h4>
                        <a href="#" class="text-black">Cambodia</a>
                        <a href="#" class="text-black">USA</a>
                        <a href="#" class="text-black">China</a>
                        <a href="#" class="text-black">Japan</a>
                    </div>
                </div>

                <div class="tag col-md">
                    <h4>Follow Us</h4>
                    <div class="social_link">
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="./assets/js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    @stack('scripts')

    <script>
        const container = document.getElementById("data-container");
        const feedBacksContainer = document.getElementById("feedbacks-container");

        // Fetch the data from data.json
        fetch("./assets/js/data.json")
            .then((response) => response.json())
            .then((data) => {
                data.cars.forEach((car) => {
                    container.appendChild(createCarElement(car));
                });

                data.feedbacks.forEach((feedback) => {
                    feedBacksContainer.appendChild(createFeedbackElement(feedback));
                });

                // Initial call to filter and display cars
            })
            .catch((error) => console.error(error));

        function createCarElement(car) {
            const element = document.createElement("div");
            // element.setAttribute("class", "col-sm");
            element = `
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

        function createFeedbackElement(feedback) {
            const element = document.createElement("div");
            // element.setAttribute("class", "col-sm");
            element.innerHTML = `
                  <div class="col shadow p-4 rounded">
            <div class="d-flex gap-3 mb-4">
              <img
                src="${feedback.photo_url}"
                class="rounded-circle"
                width="60"
                height="60"
              />

              <div>
                <h5 class="fw-bold">${feedback.name}</h5>
                <i class="fa-solid text-warning fa-star"></i>
                <i class="fa-solid text-warning fa-star"></i>
                <i class="fa-solid text-warning fa-star"></i>
                <i class="fa-solid text-warning fa-star"></i>
                <i class="fa-solid text-warning fa-star-half-stroke"></i>
              </div>
            </div>

            <p class="m-0">${feedback.description}</p>
          </div>
                  `;

            return element;
        }
    </script>
</body>

</html>
