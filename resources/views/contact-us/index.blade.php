<x-layout>
    <header class="bg-light text-white py-3">
        <div class="container">
            <h1 class="display-4 mb-0">Contact us</h1>
            <p class="text-black lead">Feel free to reach out to us with any inquiries or concerns you may have. We're
                here to assist you every step of the way!</p>
        </div>
    </header>

    <main class="container mt-4">
        <div class="row">
            <div class="col-md-6 mb-4">
                <h2 class="mb-3">Get in touch</h2>
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">Your Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter your name" />
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter your email" />
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" rows="3" placeholder="Write your message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>
            <div class="col-md-6">
                <p>
                    We'd love to hear from you! Don't hesitate to reach out if you have
                    any questions or feedback.
                </p>
                <ul class="list-unstyled">
                    <li>
                        <i class="bi bi-geo-alt-fill me-2"></i>St.372, Boeung Keng Kong,
                        Phnom Penh.
                    </li>
                    <li><i class="bi bi-phone-fill me-2"></i> +855 23222333</li>
                    <li>
                        <i class="bi bi-envelope-fill me-2"></i>support@buycar24.com
                    </li>
                </ul>
            </div>
        </div>
    </main>
</x-layout>
