<x-layout>

    <!--Products-->
    <div class="container">
        <div class="" id="Products">
            <h1 class="text-center mb-4">Car In-Stock</h1>

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4" id="data-container">
                <!-- cars inject here -->
            </div>
        </div>
    </div>

    <!--About-->
    <div class="container">
        <div class="about" id="About">
            <h1 class="text-center">About Car</h1>

            <div class="about_main d-flex gap-2 align-items-center justify-content-center">
                <div class="about_image">
                    <div class="about_small_image">
                        <img src="/images/STO3.jpg" onclick="functio(this)" />
                        <img src="/images/STO1.jpg" onclick="functio(this)" />
                        <img src="/images/STO2.jpg" onclick="functio(this)" />
                        <img src="/images/STO4.jpg" onclick="functio(this)" />
                    </div>

                    <div class="image_contaner">
                        <img src="/images/STO.jpg" id="imagebox" />
                    </div>
                </div>

                <div class="about_text">
                    <p>
                        A super-sports car created with a singular purpose, the Huracán
                        STO delivers all the feel and technology of a genuine race car in
                        a road-legal model. Lamborghini’s years-long motorsport know-how,
                        intensified by a winning heritage, is concentrated in the new
                        Huracán STO. Its extreme aerodynamics, track-honed handling
                        dynamics, lightweight contents and the highest-performing V10
                        engine to date come together, ready to trigger all the emotions of
                        the racetrack in your everyday life.
                    </p>
                </div>
            </div>

            <a href="#" class="about_btn">Shop Now</a>
        </div>
    </div>

    <!--Review-->
    <div class="container" id="Review">
        <h1 class="text-center mb-4">Customer's Feedbacks</h1>
        <div class="row row-cols-md-3 g-4 align-items-center" id="feedbacks-container">
            <!-- Feedbacks will inject here  -->
        </div>
    </div>

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
