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
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <x-navbar />
    <x-display-messages />

    {{ $slot }}

    <x-footer />

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
