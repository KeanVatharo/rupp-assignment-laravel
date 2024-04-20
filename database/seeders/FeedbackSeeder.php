<?php

namespace Database\Seeders;

use App\Models\Feedback;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FeedbackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Feedback::insert([
            [
                'name' => 'Sarah',
                'description' => 'The entire process of buying my new car at BuyCar24 was smooth and stress-free. Everyone was friendly and helpful, especially Kean Vatharo. I love my new car and would definitely recommend your dealership to others!',
                'number_of_stars' => 5,
                'avatar_url' => 'https://keanvatharo.github.io/rupp-web/assets/images/feedbacks/customer1.jpg',
            ],
            [
                'name' => 'Michael',
                'description' => 'Your car repair service at BuyCar24 was fantastic! The team diagnosed the problem quickly and accurately, and the repairs were done efficiently and at a fair price. I can finally trust my car again!',
                'number_of_stars' => 5,
                'avatar_url' => 'https://keanvatharo.github.io/rupp-web/assets/images/feedbacks/customer2.jpg',
            ],
            [
                'name' => 'Tim',
                'description' => "I appreciate the transparency and honesty I experienced when dealing with BuyCar24. They listened to my needs and didn't try to pressure me into anything I wasn't comfortable with. They found the perfect car for me within my budget!",
                'number_of_stars' => 5,
                'avatar_url' => 'https://keanvatharo.github.io/rupp-web/assets/images/feedbacks/customer3.jpg',
            ],
            [
                'name' => 'David',
                'description' => "The selection of cars at BuyCar24 is amazing! I found a car I never even knew I wanted, thanks to the knowledgeable staff who helped me explore different options. My test drive was even better!",
                'number_of_stars' => 5,
                'avatar_url' => 'https://keanvatharo.github.io/rupp-web/assets/images/feedbacks/customer4.jpg',
            ],
            [
                'name' => 'Jessica',
                'description' => "The after-sales service at BuyCar24 is outstanding. They're always available to answer my questions and provide support when I need it. They truly stand behind their products and prioritize customer satisfaction.",
                'number_of_stars' => 5,
                'avatar_url' => 'https://keanvatharo.github.io/rupp-web/assets/images/feedbacks/customer5.jpg',
            ],
            [
                'name' => 'Thomas',
                'description' => "BuyCar24 goes the extra mile for its customers. The small gestures, like the complimentary car wash with every service, really make a difference. I feel valued and appreciated every time I visit.",
                'number_of_stars' => 5,
                'avatar_url' => 'https://keanvatharo.github.io/rupp-web/assets/images/feedbacks/customer6.jpg',
            ],
        ]);
    }
}
