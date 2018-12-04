<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\User::class, function (Faker\Generator $faker) {
    
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' =>  bcrypt('rrr'),
        'image' =>  '1541348720.jpg',

        'blood_group' => $faker->randomElement(['A-', 'A+' , 'B-', 'B+', 'AB-', 'AB+', 'O-', 'O+']),

        'division' => $faker->randomElement(['Barisal', 'Chittagong', 'Dhaka', 'Khulna', 'Mymensingh', 'Rajshahi', 'Rangpur', 'Sylhet']),

        'district' => $faker->randomElement(['Barguna', 'Barisal', 'Bhola', 'Jhalokati', 'Patuakhali', 'Pirojpur', 'Bandarban', 'Brahmanbaria', 'Chandpur', 'Chittagong', 'Comilla', 'Cox\'s Bazar', 'Feni', 'Khagrachhari', 'Lakshmipur', 'Noakhali', 'Rangamati', 'Dhaka', 'Faridpur', 'Gazipur', 'Gopalganj', 'Kishoreganj', 'Madaripur', 'Manikganj', 'Munshiganj', 'Narayanganj', 'Narsingdi', 'Rajbari', 'Shariatpur', 'Tangail', 'Bagerhat', 'Chuadanga', 'Jessore', 'Jhenaidah', 'Khulna', 'Kushtia', 'Magura', 'Meherpur', 'Narail', 'Satkhira', 'Jamalpur', 'Mymensingh', 'Netrokona', 'Sherpur', 'Bogra', 'Joypurhat', 'Naogaon', 'Natore', 'Chapai Nawabganj', 'Pabna', 'Rajshahi', 'Sirajganj', 'Dinajpur', 'Gaibandha', 'Kurigram', 'Lalmonirhat', 'Nilphamari', 'Panchagarh', 'Rangpur', 'Thakurgaon', 'Habiganj', 'Moulvibazar', 'Sunamganj', 'Sylhet']),

        'phone' => '01'.$faker->randomElement(['7', '8','6','9','5']).rand(1134,9999).rand(1134,9999),
        'age' => rand(18,50),
        'is_show_in_history' => 1,
        'is_want_to_donate_now' => rand(1,2),
        'is_wantto_rec_mail_for_blood_req' => rand(1,2),
        'is_wantto_rec_mail_from_people' => rand(1,2),
        'remember_token' => str_random(10),
        'created_at'=> $faker->randomElement(['2017', '2018']).'-'.rand(1,12).'-'.rand(1,30).' '.rand(10,11).':'.rand(11,59).':'.rand(11,59)
    ];
});


$factory->define(App\Models\BloodRequest::class, function (Faker\Generator $faker) {
    
    return [
        'name' => $faker->name,
        'phone' => '01'.$faker->randomElement(['7', '8','6','9','5']).rand(1134,9999).rand(1134,9999),

        'blood_group' => $faker->randomElement(['A-', 'A+' , 'B-', 'B+', 'AB-', 'AB+', 'O-', 'O+']),

        'amount' => rand(1,5),

        'division' => $faker->randomElement(['Barisal', 'Chittagong', 'Dhaka', 'Khulna', 'Mymensingh', 'Rajshahi', 'Rangpur', 'Sylhet']),

        'present_district' => $faker->randomElement(['Barguna', 'Barisal', 'Bhola', 'Jhalokati', 'Patuakhali', 'Pirojpur', 'Bandarban', 'Brahmanbaria', 'Chandpur', 'Chittagong', 'Comilla', 'Cox\'s Bazar', 'Feni', 'Khagrachhari', 'Lakshmipur', 'Noakhali', 'Rangamati', 'Dhaka', 'Faridpur', 'Gazipur', 'Gopalganj', 'Kishoreganj', 'Madaripur', 'Manikganj', 'Munshiganj', 'Narayanganj', 'Narsingdi', 'Rajbari', 'Shariatpur', 'Tangail', 'Bagerhat', 'Chuadanga', 'Jessore', 'Jhenaidah', 'Khulna', 'Kushtia', 'Magura', 'Meherpur', 'Narail', 'Satkhira', 'Jamalpur', 'Mymensingh', 'Netrokona', 'Sherpur', 'Bogra', 'Joypurhat', 'Naogaon', 'Natore', 'Chapai Nawabganj', 'Pabna', 'Rajshahi', 'Sirajganj', 'Dinajpur', 'Gaibandha', 'Kurigram', 'Lalmonirhat', 'Nilphamari', 'Panchagarh', 'Rangpur', 'Thakurgaon', 'Habiganj', 'Moulvibazar', 'Sunamganj', 'Sylhet']),

        'present_location' => 'Lorem Ipsum Dummy Content',
        
        'date' => '2018-'.rand(1,12).'-'.rand(1,30),
        'code' => 'rrr',
        'created_at'=> $faker->randomElement(['2017', '2018']).'-'.rand(1,12).'-'.rand(1,30).' '.rand(10,11).':'.rand(11,59).':'.rand(11,59)
    ];
});


$factory->define(App\Models\Donation::class, function (Faker\Generator $faker) {
    
    return [
        'user_id' => rand(156,205),

        'donation_date' => $faker->randomElement(['2017', '2018']).'-'.rand(1,11).'-'.rand(1,12),

        'donation_to' => $faker->randomElement(['Direct To Patient', 'Direct To Blood Bank']),

        'donation_address' => 'Lorem Ipsum Dummy Content',
       
    ];
});
