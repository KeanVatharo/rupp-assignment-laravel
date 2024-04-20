@props(['feedbacks' => []])
<!--Review-->
<div class="container" id="Review">
    <h1 class="text-center mb-4">Customer's Feedbacks</h1>
    <div class="row row-cols-md-3 g-4 align-items-start" id="feedbacks-container">
        @foreach ($feedbacks as $feedback)
            <div class="col shadow p-4 rounded">
                <div class="d-flex gap-3 mb-4">
                    <img src="{{ $feedback->avatar_url }}" class="rounded-circle object-fit-cover" width="60"
                        height="60" />
                    <div>
                        <h5 class="fw-bold">{{ $feedback->name }}</h5>
                        @for ($i = 0; $i < $feedback->number_of_stars; $i++)
                            <i class="fa-solid text-warning fa-star"></i>
                        @endfor
                    </div>
                </div>

                <p class="m-0">{{ $feedback->description }}</p>
            </div>
        @endforeach
    </div>
</div>
