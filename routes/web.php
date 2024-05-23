<?php

use Illuminate\Support\Facades\Route;

$cars = [
    [
        "id" => 1,
        "name" => "Nissan Livina",
        "image" => "https://i.postimg.cc/2yqgT8Mt/nissan-livina.png",
        "year" => 2021,
        "description" => "The car is in excellent condition with routine maintenance always performed on time. The interior is clean and comfortable, providing a pleasant driving experience. Fuel consumption is very efficient, making it a perfect choice for long-distance and city driving.",
        "isAvailable" => true,
        "price" => 250000
    ],
    [
        "id" => 2,
        "name" => "Honda BRV",
        "image" => "https://i.postimg.cc/ryPk473b/honda-brv.png",
        "year" => 2021,
        "description" => "This car offers reliable engine performance and has passed various tests with satisfying results. With well-maintained regular maintenance, this car is very suitable for long-distance trips. Equipped with adequate comfort features for all passengers.",
        "isAvailable" => true,
        "price" => 310000
    ],
    [
        "id" => 3,
        "name" => "Toyota Yaris",
        "image" => "https://i.postimg.cc/tCxLxJhZ/toyota-yaris.png",
        "year" => 2020,
        "description" => "The car's design is very modern and stylish, making it look attractive on the road. The cabin is spacious with ample legroom, allowing passengers to feel comfortable throughout the journey. Equipped with complete safety features, providing safety and comfort for all passengers.",
        "isAvailable" => false,
        "price" => 225000
    ],
    [
        "id" => 4,
        "name" => "Suzuki Ertiga",
        "image" => "https://i.postimg.cc/B6nrLCg4/suzuki-ertiga.png",
        "year" => 2021,
        "description" => "The car is in prime condition with very low mileage. Equipped with the latest technology that enhances driving comfort and safety. The interior is equipped with various adequate entertainment and navigation features.",
        "isAvailable" => true,
        "price" => 220000
    ],
    [
        "id" => 5,
        "name" => "Toyota Agya",
        "image" => "https://i.postimg.cc/7Zb9v2bf/toyota-agya.png",
        "year" => 2020,
        "description" => "This car has a very fuel-efficient engine, making it very economical for daily use. Maintenance is easy and operational costs are low. Ideal to be used as a daily vehicle with comfort maintained.",
        "isAvailable" => true,
        "price" => 175000
    ],
    [
        "id" => 6,
        "name" => "Daihatsu Xenia",
        "image" => "https://i.postimg.cc/Xqm60y93/daihatsu-xenia.png",
        "year" => 2019,
        "description" => "The car's cabin is very comfortable and spacious, equipped with modern entertainment systems. With stable and efficient engine performance, this car is suitable for use in various road conditions.",
        "isAvailable" => false,
        "price" => 220000
    ],
    [
        "id" => 7,
        "name" => "BMW F30",
        "image" => "https://i.postimg.cc/q7kYSGWy/bmw-f30.png",
        "year" => 2022,
        "description" => "This car has high stability and advanced braking systems, providing safety during driving. Suitable to be used as a family vehicle with a large passenger capacity.",
        "isAvailable" => true,
        "price" => 1300000
    ],
    [
        "id" => 8,
        "name" => "Mini Cooper",
        "image" => "https://i.postimg.cc/1302vd7y/mini-cooper.png",
        "year" => 2020,
        "description" => "The car's interior is very elegant and comfortable, with a stylish and modern exterior. This car is very comfortable for long-distance and city driving, equipped with various comfort and safety features.",
        "isAvailable" => true,
        "price" => 1250000
    ],
    [
        "id" => 9,
        "name" => "Suzuki XL7",
        "image" => "https://i.postimg.cc/tJYGfzZ2/suzuki-xl7.png",
        "year" => 2021,
        "description" => "A high-performance car equipped with complete safety features, making it ideal for various road conditions. With low mileage and well-maintained, it ensures comfort and safety during driving.",
        "isAvailable" => false,
        "price" => 250000
    ],
    [
        "id" => 10,
        "name" => "Honda HRV",
        "image" => "https://i.postimg.cc/CMt35kfp/honda-hrv.png",
        "year" => 2020,
        "description" => "This car is in pristine condition with a powerful engine and efficient fuel consumption. Very suitable for long-distance trips and daily use with comfort maintained.",
        "isAvailable" => true,
        "price" => 200000
    ],
    [
        "id" => 11,
        "name" => "Daihatsu Terios",
        "image" => "https://i.postimg.cc/28Lf72f5/daihatsu-terios.png",
        "year" => 2019,
        "description" => "The car's cabin is very spacious and comfortable, with well-maintained regular maintenance. Equipped with the latest technology, this car provides a safe and comfortable driving experience for all passengers.",
        "isAvailable" => false,
        "price" => 175000
    ],
    [
        "id" => 12,
        "name" => "Hyundai Stargazer",
        "image" => "https://i.postimg.cc/J09vFCWz/hyundai-stargazer.png",
        "year" => 2023,
        "description" => "The aerodynamic design and ergonomic interior make this car very comfortable for long-distance trips. Equipped with adequate safety and comfort features, making it an ideal choice for various purposes.",
        "isAvailable" => true,
        "price" => 680000
    ],
    [
        "id" => 13,
        "name" => "Toyota Calya",
        "image" => "https://i.postimg.cc/MpkJPVWm/toyota-calya.png",
        "year" => 2020,
        "description" => "Complete modern safety features and a smooth engine make this car suitable for family trips. The interior is well-designed, providing maximum comfort for all passengers.",
        "isAvailable" => true,
        "price" => 225000
    ],
    [
        "id" => 14,
        "name" => "Toyota Sienta",
        "image" => "https://i.postimg.cc/NMCW1rJT/toyota-sienta.png",
        "year" => 2021,
        "description" => "The car is in excellent condition with complete entertainment systems that will make the journey more enjoyable. Routine maintenance is always performed, ensuring optimal engine performance.",
        "isAvailable" => false,
        "price" => 275000
    ],
    [
        "id" => 15,
        "name" => "Mitsubishi Xpander",
        "image" => "https://i.postimg.cc/6QtJwK47/mitsubishi-xpander.png",
        "year" => 2021,
        "description" => "The car has high stability and a comfortable cabin, suitable for long-distance trips. An efficient engine and easy maintenance make this car a good choice for daily use.",
        "isAvailable" => true,
        "price" => 350000
    ],
    [
        "id" => 16,
        "name" => "Toyota Fortuner",
        "image" => "https://i.postimg.cc/R0X8BHz8/toyota-fortuner.png",
        "year" => 2022,
        "description" => "This car's design is very modern with an efficient and high-performance engine. Equipped with complete safety features, it provides safety and comfort for all passengers.",
        "isAvailable" => true,
        "price" => 270000
    ],
    [
        "id" => 17,
        "name" => "Honda Brio",
        "image" => "https://i.postimg.cc/yNjq8G0L/honda-brio.png",
        "year" => 2019,
        "description" => "The car is in prime condition with very fuel-efficient consumption. Maintenance is easy and costs are low, making it an ideal choice for daily use and long-distance trips.",
        "isAvailable" => false,
        "price" => 220000
    ],
    [
        "id" => 18,
        "name" => "Hyundai H1",
        "image" => "https://i.postimg.cc/g2b1qpDM/hyundai-h1.png",
        "year" => 2023,
        "description" => "The car's interior is very clean and equipped with various modern entertainment features. Very suitable for family trips with maximum comfort for all passengers.",
        "isAvailable" => true,
        "price" => 550000
    ],
    [
        "id" => 19,
        "name" => "Toyota NEw Innova",
        "image" => "https://i.postimg.cc/pTVHQv2N/toyota-innova.png",
        "year" => 2023,
        "description" => "The car has a reliable engine performance and very low mileage. Equipped with the latest technology that enhances driving comfort and safety.",
        "isAvailable" => true,
        "price" => 375000
    ],
    [
        "id" => 20,
        "name" => "Toyota Raize",
        "image" => "https://i.postimg.cc/CxjTW55T/toyota-raize.png",
        "year" => 2020,
        "description" => "The car is in good condition with a spacious cabin and efficient fuel consumption. Very suitable for long-distance trips and daily use with comfort maintained.",
        "isAvailable" => false,
        "price" => 225000
    ],
    [
        "id" => 21,
        "name" => "Daihatsu Rocky",
        "image" => "https://i.postimg.cc/qRmdjFRN/daihatsu-rocky.png",
        "year" => 2021,
        "description" => "This car's engine is very powerful with routine maintenance always performed. Very suitable for daily trips with efficient fuel consumption and maximum comfort.",
        "isAvailable" => true,
        "price" => 250000
    ],
];

Route::get('/', function () {
    $cars = [
    [
        "id" => 1,
        "name" => "Nissan Livina",
        "image" => "https://i.postimg.cc/2yqgT8Mt/nissan-livina.png",
        "year" => 2021,
        "description" => "The car is in excellent condition with routine maintenance always performed on time. The interior is clean and comfortable, providing a pleasant driving experience. Fuel consumption is very efficient, making it a perfect choice for long-distance and city driving.",
        "isAvailable" => true,
        "price" => 250000
    ],
    [
        "id" => 2,
        "name" => "Honda BRV",
        "image" => "https://i.postimg.cc/ryPk473b/honda-brv.png",
        "year" => 2021,
        "description" => "This car offers reliable engine performance and has passed various tests with satisfying results. With well-maintained regular maintenance, this car is very suitable for long-distance trips. Equipped with adequate comfort features for all passengers.",
        "isAvailable" => true,
        "price" => 310000
    ],
    [
        "id" => 3,
        "name" => "Toyota Yaris",
        "image" => "https://i.postimg.cc/tCxLxJhZ/toyota-yaris.png",
        "year" => 2020,
        "description" => "The car's design is very modern and stylish, making it look attractive on the road. The cabin is spacious with ample legroom, allowing passengers to feel comfortable throughout the journey. Equipped with complete safety features, providing safety and comfort for all passengers.",
        "isAvailable" => false,
        "price" => 225000
    ],
    [
        "id" => 4,
        "name" => "Suzuki Ertiga",
        "image" => "https://i.postimg.cc/B6nrLCg4/suzuki-ertiga.png",
        "year" => 2021,
        "description" => "The car is in prime condition with very low mileage. Equipped with the latest technology that enhances driving comfort and safety. The interior is equipped with various adequate entertainment and navigation features.",
        "isAvailable" => true,
        "price" => 220000
    ],
    [
        "id" => 5,
        "name" => "Toyota Agya",
        "image" => "https://i.postimg.cc/7Zb9v2bf/toyota-agya.png",
        "year" => 2020,
        "description" => "This car has a very fuel-efficient engine, making it very economical for daily use. Maintenance is easy and operational costs are low. Ideal to be used as a daily vehicle with comfort maintained.",
        "isAvailable" => true,
        "price" => 175000
    ],
    [
        "id" => 6,
        "name" => "Daihatsu Xenia",
        "image" => "https://i.postimg.cc/Xqm60y93/daihatsu-xenia.png",
        "year" => 2019,
        "description" => "The car's cabin is very comfortable and spacious, equipped with modern entertainment systems. With stable and efficient engine performance, this car is suitable for use in various road conditions.",
        "isAvailable" => false,
        "price" => 220000
    ],
    [
        "id" => 7,
        "name" => "BMW F30",
        "image" => "https://i.postimg.cc/q7kYSGWy/bmw-f30.png",
        "year" => 2022,
        "description" => "This car has high stability and advanced braking systems, providing safety during driving. Suitable to be used as a family vehicle with a large passenger capacity.",
        "isAvailable" => true,
        "price" => 1300000
    ],
    [
        "id" => 8,
        "name" => "Mini Cooper",
        "image" => "https://i.postimg.cc/1302vd7y/mini-cooper.png",
        "year" => 2020,
        "description" => "The car's interior is very elegant and comfortable, with a stylish and modern exterior. This car is very comfortable for long-distance and city driving, equipped with various comfort and safety features.",
        "isAvailable" => true,
        "price" => 1250000
    ],
    [
        "id" => 9,
        "name" => "Suzuki XL7",
        "image" => "https://i.postimg.cc/tJYGfzZ2/suzuki-xl7.png",
        "year" => 2021,
        "description" => "A high-performance car equipped with complete safety features, making it ideal for various road conditions. With low mileage and well-maintained, it ensures comfort and safety during driving.",
        "isAvailable" => false,
        "price" => 250000
    ],
    [
        "id" => 10,
        "name" => "Honda HRV",
        "image" => "https://i.postimg.cc/CMt35kfp/honda-hrv.png",
        "year" => 2020,
        "description" => "This car is in pristine condition with a powerful engine and efficient fuel consumption. Very suitable for long-distance trips and daily use with comfort maintained.",
        "isAvailable" => true,
        "price" => 200000
    ],
    [
        "id" => 11,
        "name" => "Daihatsu Terios",
        "image" => "https://i.postimg.cc/28Lf72f5/daihatsu-terios.png",
        "year" => 2019,
        "description" => "The car's cabin is very spacious and comfortable, with well-maintained regular maintenance. Equipped with the latest technology, this car provides a safe and comfortable driving experience for all passengers.",
        "isAvailable" => false,
        "price" => 175000
    ],
    [
        "id" => 12,
        "name" => "Hyundai Stargazer",
        "image" => "https://i.postimg.cc/J09vFCWz/hyundai-stargazer.png",
        "year" => 2023,
        "description" => "The aerodynamic design and ergonomic interior make this car very comfortable for long-distance trips. Equipped with adequate safety and comfort features, making it an ideal choice for various purposes.",
        "isAvailable" => true,
        "price" => 680000
    ],
    [
        "id" => 13,
        "name" => "Toyota Calya",
        "image" => "https://i.postimg.cc/MpkJPVWm/toyota-calya.png",
        "year" => 2020,
        "description" => "Complete modern safety features and a smooth engine make this car suitable for family trips. The interior is well-designed, providing maximum comfort for all passengers.",
        "isAvailable" => true,
        "price" => 225000
    ],
    [
        "id" => 14,
        "name" => "Toyota Sienta",
        "image" => "https://i.postimg.cc/NMCW1rJT/toyota-sienta.png",
        "year" => 2021,
        "description" => "The car is in excellent condition with complete entertainment systems that will make the journey more enjoyable. Routine maintenance is always performed, ensuring optimal engine performance.",
        "isAvailable" => false,
        "price" => 275000
    ],
    [
        "id" => 15,
        "name" => "Mitsubishi Xpander",
        "image" => "https://i.postimg.cc/6QtJwK47/mitsubishi-xpander.png",
        "year" => 2021,
        "description" => "The car has high stability and a comfortable cabin, suitable for long-distance trips. An efficient engine and easy maintenance make this car a good choice for daily use.",
        "isAvailable" => true,
        "price" => 350000
    ],
    [
        "id" => 16,
        "name" => "Toyota Fortuner",
        "image" => "https://i.postimg.cc/R0X8BHz8/toyota-fortuner.png",
        "year" => 2022,
        "description" => "This car's design is very modern with an efficient and high-performance engine. Equipped with complete safety features, it provides safety and comfort for all passengers.",
        "isAvailable" => true,
        "price" => 270000
    ],
    [
        "id" => 17,
        "name" => "Honda Brio",
        "image" => "https://i.postimg.cc/yNjq8G0L/honda-brio.png",
        "year" => 2019,
        "description" => "The car is in prime condition with very fuel-efficient consumption. Maintenance is easy and costs are low, making it an ideal choice for daily use and long-distance trips.",
        "isAvailable" => false,
        "price" => 220000
    ],
    [
        "id" => 18,
        "name" => "Hyundai H1",
        "image" => "https://i.postimg.cc/g2b1qpDM/hyundai-h1.png",
        "year" => 2023,
        "description" => "The car's interior is very clean and equipped with various modern entertainment features. Very suitable for family trips with maximum comfort for all passengers.",
        "isAvailable" => true,
        "price" => 550000
    ],
    [
        "id" => 19,
        "name" => "Toyota NEw Innova",
        "image" => "https://i.postimg.cc/pTVHQv2N/toyota-innova.png",
        "year" => 2023,
        "description" => "The car has a reliable engine performance and very low mileage. Equipped with the latest technology that enhances driving comfort and safety.",
        "isAvailable" => true,
        "price" => 375000
    ],
    [
        "id" => 20,
        "name" => "Toyota Raize",
        "image" => "https://i.postimg.cc/CxjTW55T/toyota-raize.png",
        "year" => 2020,
        "description" => "The car is in good condition with a spacious cabin and efficient fuel consumption. Very suitable for long-distance trips and daily use with comfort maintained.",
        "isAvailable" => false,
        "price" => 225000
    ],
    [
        "id" => 21,
        "name" => "Daihatsu Rocky",
        "image" => "https://i.postimg.cc/qRmdjFRN/daihatsu-rocky.png",
        "year" => 2021,
        "description" => "This car's engine is very powerful with routine maintenance always performed. Very suitable for daily trips with efficient fuel consumption and maximum comfort.",
        "isAvailable" => true,
        "price" => 250000
    ],
];
    return view('homepage', [
        "cars" => $cars,
    ]);
})->name('homepage');

Route::get('/cars', function () {
    $cars = [
    [
        "id" => 1,
        "name" => "Nissan Livina",
        "image" => "https://i.postimg.cc/2yqgT8Mt/nissan-livina.png",
        "year" => 2021,
        "description" => "The car is in excellent condition with routine maintenance always performed on time. The interior is clean and comfortable, providing a pleasant driving experience. Fuel consumption is very efficient, making it a perfect choice for long-distance and city driving.",
        "isAvailable" => true,
        "price" => 250000
    ],
    [
        "id" => 2,
        "name" => "Honda BRV",
        "image" => "https://i.postimg.cc/ryPk473b/honda-brv.png",
        "year" => 2021,
        "description" => "This car offers reliable engine performance and has passed various tests with satisfying results. With well-maintained regular maintenance, this car is very suitable for long-distance trips. Equipped with adequate comfort features for all passengers.",
        "isAvailable" => true,
        "price" => 310000
    ],
    [
        "id" => 3,
        "name" => "Toyota Yaris",
        "image" => "https://i.postimg.cc/tCxLxJhZ/toyota-yaris.png",
        "year" => 2020,
        "description" => "The car's design is very modern and stylish, making it look attractive on the road. The cabin is spacious with ample legroom, allowing passengers to feel comfortable throughout the journey. Equipped with complete safety features, providing safety and comfort for all passengers.",
        "isAvailable" => false,
        "price" => 225000
    ],
    [
        "id" => 4,
        "name" => "Suzuki Ertiga",
        "image" => "https://i.postimg.cc/B6nrLCg4/suzuki-ertiga.png",
        "year" => 2021,
        "description" => "The car is in prime condition with very low mileage. Equipped with the latest technology that enhances driving comfort and safety. The interior is equipped with various adequate entertainment and navigation features.",
        "isAvailable" => true,
        "price" => 220000
    ],
    [
        "id" => 5,
        "name" => "Toyota Agya",
        "image" => "https://i.postimg.cc/7Zb9v2bf/toyota-agya.png",
        "year" => 2020,
        "description" => "This car has a very fuel-efficient engine, making it very economical for daily use. Maintenance is easy and operational costs are low. Ideal to be used as a daily vehicle with comfort maintained.",
        "isAvailable" => true,
        "price" => 175000
    ],
    [
        "id" => 6,
        "name" => "Daihatsu Xenia",
        "image" => "https://i.postimg.cc/Xqm60y93/daihatsu-xenia.png",
        "year" => 2019,
        "description" => "The car's cabin is very comfortable and spacious, equipped with modern entertainment systems. With stable and efficient engine performance, this car is suitable for use in various road conditions.",
        "isAvailable" => false,
        "price" => 220000
    ],
    [
        "id" => 7,
        "name" => "BMW F30",
        "image" => "https://i.postimg.cc/q7kYSGWy/bmw-f30.png",
        "year" => 2022,
        "description" => "This car has high stability and advanced braking systems, providing safety during driving. Suitable to be used as a family vehicle with a large passenger capacity.",
        "isAvailable" => true,
        "price" => 1300000
    ],
    [
        "id" => 8,
        "name" => "Mini Cooper",
        "image" => "https://i.postimg.cc/1302vd7y/mini-cooper.png",
        "year" => 2020,
        "description" => "The car's interior is very elegant and comfortable, with a stylish and modern exterior. This car is very comfortable for long-distance and city driving, equipped with various comfort and safety features.",
        "isAvailable" => true,
        "price" => 1250000
    ],
    [
        "id" => 9,
        "name" => "Suzuki XL7",
        "image" => "https://i.postimg.cc/tJYGfzZ2/suzuki-xl7.png",
        "year" => 2021,
        "description" => "A high-performance car equipped with complete safety features, making it ideal for various road conditions. With low mileage and well-maintained, it ensures comfort and safety during driving.",
        "isAvailable" => false,
        "price" => 250000
    ],
    [
        "id" => 10,
        "name" => "Honda HRV",
        "image" => "https://i.postimg.cc/CMt35kfp/honda-hrv.png",
        "year" => 2020,
        "description" => "This car is in pristine condition with a powerful engine and efficient fuel consumption. Very suitable for long-distance trips and daily use with comfort maintained.",
        "isAvailable" => true,
        "price" => 200000
    ],
    [
        "id" => 11,
        "name" => "Daihatsu Terios",
        "image" => "https://i.postimg.cc/28Lf72f5/daihatsu-terios.png",
        "year" => 2019,
        "description" => "The car's cabin is very spacious and comfortable, with well-maintained regular maintenance. Equipped with the latest technology, this car provides a safe and comfortable driving experience for all passengers.",
        "isAvailable" => false,
        "price" => 175000
    ],
    [
        "id" => 12,
        "name" => "Hyundai Stargazer",
        "image" => "https://i.postimg.cc/J09vFCWz/hyundai-stargazer.png",
        "year" => 2023,
        "description" => "The aerodynamic design and ergonomic interior make this car very comfortable for long-distance trips. Equipped with adequate safety and comfort features, making it an ideal choice for various purposes.",
        "isAvailable" => true,
        "price" => 680000
    ],
    [
        "id" => 13,
        "name" => "Toyota Calya",
        "image" => "https://i.postimg.cc/MpkJPVWm/toyota-calya.png",
        "year" => 2020,
        "description" => "Complete modern safety features and a smooth engine make this car suitable for family trips. The interior is well-designed, providing maximum comfort for all passengers.",
        "isAvailable" => true,
        "price" => 225000
    ],
    [
        "id" => 14,
        "name" => "Toyota Sienta",
        "image" => "https://i.postimg.cc/NMCW1rJT/toyota-sienta.png",
        "year" => 2021,
        "description" => "The car is in excellent condition with complete entertainment systems that will make the journey more enjoyable. Routine maintenance is always performed, ensuring optimal engine performance.",
        "isAvailable" => false,
        "price" => 275000
    ],
    [
        "id" => 15,
        "name" => "Mitsubishi Xpander",
        "image" => "https://i.postimg.cc/6QtJwK47/mitsubishi-xpander.png",
        "year" => 2021,
        "description" => "The car has high stability and a comfortable cabin, suitable for long-distance trips. An efficient engine and easy maintenance make this car a good choice for daily use.",
        "isAvailable" => true,
        "price" => 350000
    ],
    [
        "id" => 16,
        "name" => "Toyota Fortuner",
        "image" => "https://i.postimg.cc/R0X8BHz8/toyota-fortuner.png",
        "year" => 2022,
        "description" => "This car's design is very modern with an efficient and high-performance engine. Equipped with complete safety features, it provides safety and comfort for all passengers.",
        "isAvailable" => true,
        "price" => 270000
    ],
    [
        "id" => 17,
        "name" => "Honda Brio",
        "image" => "https://i.postimg.cc/yNjq8G0L/honda-brio.png",
        "year" => 2019,
        "description" => "The car is in prime condition with very fuel-efficient consumption. Maintenance is easy and costs are low, making it an ideal choice for daily use and long-distance trips.",
        "isAvailable" => false,
        "price" => 220000
    ],
    [
        "id" => 18,
        "name" => "Hyundai H1",
        "image" => "https://i.postimg.cc/g2b1qpDM/hyundai-h1.png",
        "year" => 2023,
        "description" => "The car's interior is very clean and equipped with various modern entertainment features. Very suitable for family trips with maximum comfort for all passengers.",
        "isAvailable" => true,
        "price" => 550000
    ],
    [
        "id" => 19,
        "name" => "Toyota NEw Innova",
        "image" => "https://i.postimg.cc/pTVHQv2N/toyota-innova.png",
        "year" => 2023,
        "description" => "The car has a reliable engine performance and very low mileage. Equipped with the latest technology that enhances driving comfort and safety.",
        "isAvailable" => true,
        "price" => 375000
    ],
    [
        "id" => 20,
        "name" => "Toyota Raize",
        "image" => "https://i.postimg.cc/CxjTW55T/toyota-raize.png",
        "year" => 2020,
        "description" => "The car is in good condition with a spacious cabin and efficient fuel consumption. Very suitable for long-distance trips and daily use with comfort maintained.",
        "isAvailable" => false,
        "price" => 225000
    ],
    [
        "id" => 21,
        "name" => "Daihatsu Rocky",
        "image" => "https://i.postimg.cc/qRmdjFRN/daihatsu-rocky.png",
        "year" => 2021,
        "description" => "This car's engine is very powerful with routine maintenance always performed. Very suitable for daily trips with efficient fuel consumption and maximum comfort.",
        "isAvailable" => true,
        "price" => 250000
    ],
    ];

    return view('rent', [
        "cars" => $cars
    ]);
})->name('rent');

Route::get('/car/{id}', function (int $id) {
    $cars = [
    [
        "id" => 1,
        "name" => "Nissan Livina",
        "image" => "https://i.postimg.cc/2yqgT8Mt/nissan-livina.png",
        "year" => 2021,
        "description" => "The car is in excellent condition with routine maintenance always performed on time. The interior is clean and comfortable, providing a pleasant driving experience. Fuel consumption is very efficient, making it a perfect choice for long-distance and city driving.",
        "isAvailable" => true,
        "price" => 250000
    ],
    [
        "id" => 2,
        "name" => "Honda BRV",
        "image" => "https://i.postimg.cc/ryPk473b/honda-brv.png",
        "year" => 2021,
        "description" => "This car offers reliable engine performance and has passed various tests with satisfying results. With well-maintained regular maintenance, this car is very suitable for long-distance trips. Equipped with adequate comfort features for all passengers.",
        "isAvailable" => true,
        "price" => 310000
    ],
    [
        "id" => 3,
        "name" => "Toyota Yaris",
        "image" => "https://i.postimg.cc/tCxLxJhZ/toyota-yaris.png",
        "year" => 2020,
        "description" => "The car's design is very modern and stylish, making it look attractive on the road. The cabin is spacious with ample legroom, allowing passengers to feel comfortable throughout the journey. Equipped with complete safety features, providing safety and comfort for all passengers.",
        "isAvailable" => false,
        "price" => 225000
    ],
    [
        "id" => 4,
        "name" => "Suzuki Ertiga",
        "image" => "https://i.postimg.cc/B6nrLCg4/suzuki-ertiga.png",
        "year" => 2021,
        "description" => "The car is in prime condition with very low mileage. Equipped with the latest technology that enhances driving comfort and safety. The interior is equipped with various adequate entertainment and navigation features.",
        "isAvailable" => true,
        "price" => 220000
    ],
    [
        "id" => 5,
        "name" => "Toyota Agya",
        "image" => "https://i.postimg.cc/7Zb9v2bf/toyota-agya.png",
        "year" => 2020,
        "description" => "This car has a very fuel-efficient engine, making it very economical for daily use. Maintenance is easy and operational costs are low. Ideal to be used as a daily vehicle with comfort maintained.",
        "isAvailable" => true,
        "price" => 175000
    ],
    [
        "id" => 6,
        "name" => "Daihatsu Xenia",
        "image" => "https://i.postimg.cc/Xqm60y93/daihatsu-xenia.png",
        "year" => 2019,
        "description" => "The car's cabin is very comfortable and spacious, equipped with modern entertainment systems. With stable and efficient engine performance, this car is suitable for use in various road conditions.",
        "isAvailable" => false,
        "price" => 220000
    ],
    [
        "id" => 7,
        "name" => "BMW F30",
        "image" => "https://i.postimg.cc/q7kYSGWy/bmw-f30.png",
        "year" => 2022,
        "description" => "This car has high stability and advanced braking systems, providing safety during driving. Suitable to be used as a family vehicle with a large passenger capacity.",
        "isAvailable" => true,
        "price" => 1300000
    ],
    [
        "id" => 8,
        "name" => "Mini Cooper",
        "image" => "https://i.postimg.cc/1302vd7y/mini-cooper.png",
        "year" => 2020,
        "description" => "The car's interior is very elegant and comfortable, with a stylish and modern exterior. This car is very comfortable for long-distance and city driving, equipped with various comfort and safety features.",
        "isAvailable" => true,
        "price" => 1250000
    ],
    [
        "id" => 9,
        "name" => "Suzuki XL7",
        "image" => "https://i.postimg.cc/tJYGfzZ2/suzuki-xl7.png",
        "year" => 2021,
        "description" => "A high-performance car equipped with complete safety features, making it ideal for various road conditions. With low mileage and well-maintained, it ensures comfort and safety during driving.",
        "isAvailable" => false,
        "price" => 250000
    ],
    [
        "id" => 10,
        "name" => "Honda HRV",
        "image" => "https://i.postimg.cc/CMt35kfp/honda-hrv.png",
        "year" => 2020,
        "description" => "This car is in pristine condition with a powerful engine and efficient fuel consumption. Very suitable for long-distance trips and daily use with comfort maintained.",
        "isAvailable" => true,
        "price" => 200000
    ],
    [
        "id" => 11,
        "name" => "Daihatsu Terios",
        "image" => "https://i.postimg.cc/28Lf72f5/daihatsu-terios.png",
        "year" => 2019,
        "description" => "The car's cabin is very spacious and comfortable, with well-maintained regular maintenance. Equipped with the latest technology, this car provides a safe and comfortable driving experience for all passengers.",
        "isAvailable" => false,
        "price" => 175000
    ],
    [
        "id" => 12,
        "name" => "Hyundai Stargazer",
        "image" => "https://i.postimg.cc/J09vFCWz/hyundai-stargazer.png",
        "year" => 2023,
        "description" => "The aerodynamic design and ergonomic interior make this car very comfortable for long-distance trips. Equipped with adequate safety and comfort features, making it an ideal choice for various purposes.",
        "isAvailable" => true,
        "price" => 680000
    ],
    [
        "id" => 13,
        "name" => "Toyota Calya",
        "image" => "https://i.postimg.cc/MpkJPVWm/toyota-calya.png",
        "year" => 2020,
        "description" => "Complete modern safety features and a smooth engine make this car suitable for family trips. The interior is well-designed, providing maximum comfort for all passengers.",
        "isAvailable" => true,
        "price" => 225000
    ],
    [
        "id" => 14,
        "name" => "Toyota Sienta",
        "image" => "https://i.postimg.cc/NMCW1rJT/toyota-sienta.png",
        "year" => 2021,
        "description" => "The car is in excellent condition with complete entertainment systems that will make the journey more enjoyable. Routine maintenance is always performed, ensuring optimal engine performance.",
        "isAvailable" => false,
        "price" => 275000
    ],
    [
        "id" => 15,
        "name" => "Mitsubishi Xpander",
        "image" => "https://i.postimg.cc/6QtJwK47/mitsubishi-xpander.png",
        "year" => 2021,
        "description" => "The car has high stability and a comfortable cabin, suitable for long-distance trips. An efficient engine and easy maintenance make this car a good choice for daily use.",
        "isAvailable" => true,
        "price" => 350000
    ],
    [
        "id" => 16,
        "name" => "Toyota Fortuner",
        "image" => "https://i.postimg.cc/R0X8BHz8/toyota-fortuner.png",
        "year" => 2022,
        "description" => "This car's design is very modern with an efficient and high-performance engine. Equipped with complete safety features, it provides safety and comfort for all passengers.",
        "isAvailable" => true,
        "price" => 270000
    ],
    [
        "id" => 17,
        "name" => "Honda Brio",
        "image" => "https://i.postimg.cc/yNjq8G0L/honda-brio.png",
        "year" => 2019,
        "description" => "The car is in prime condition with very fuel-efficient consumption. Maintenance is easy and costs are low, making it an ideal choice for daily use and long-distance trips.",
        "isAvailable" => false,
        "price" => 220000
    ],
    [
        "id" => 18,
        "name" => "Hyundai H1",
        "image" => "https://i.postimg.cc/g2b1qpDM/hyundai-h1.png",
        "year" => 2023,
        "description" => "The car's interior is very clean and equipped with various modern entertainment features. Very suitable for family trips with maximum comfort for all passengers.",
        "isAvailable" => true,
        "price" => 550000
    ],
    [
        "id" => 19,
        "name" => "Toyota NEw Innova",
        "image" => "https://i.postimg.cc/pTVHQv2N/toyota-innova.png",
        "year" => 2023,
        "description" => "The car has a reliable engine performance and very low mileage. Equipped with the latest technology that enhances driving comfort and safety.",
        "isAvailable" => true,
        "price" => 375000
    ],
    [
        "id" => 20,
        "name" => "Toyota Raize",
        "image" => "https://i.postimg.cc/CxjTW55T/toyota-raize.png",
        "year" => 2020,
        "description" => "The car is in good condition with a spacious cabin and efficient fuel consumption. Very suitable for long-distance trips and daily use with comfort maintained.",
        "isAvailable" => false,
        "price" => 225000
    ],
    [
        "id" => 21,
        "name" => "Daihatsu Rocky",
        "image" => "https://i.postimg.cc/qRmdjFRN/daihatsu-rocky.png",
        "year" => 2021,
        "description" => "This car's engine is very powerful with routine maintenance always performed. Very suitable for daily trips with efficient fuel consumption and maximum comfort.",
        "isAvailable" => true,
        "price" => 250000
    ],
];
    $selectedCar = null;
    foreach ($cars as $car) {
        if ($car['id'] == $id)
        $selectedCar = $car;
    }
    return view('car.detail', [
        "car" => $selectedCar
    ]);
})->name('car-detail');

Route::get('/edit/{id}', function (int $id) {
    $cars = [
    [
        "id" => 1,
        "name" => "Nissan Livina",
        "image" => "https://i.postimg.cc/2yqgT8Mt/nissan-livina.png",
        "year" => 2021,
        "description" => "The car is in excellent condition with routine maintenance always performed on time. The interior is clean and comfortable, providing a pleasant driving experience. Fuel consumption is very efficient, making it a perfect choice for long-distance and city driving.",
        "isAvailable" => true,
        "price" => 250000
    ],
    [
        "id" => 2,
        "name" => "Honda BRV",
        "image" => "https://i.postimg.cc/ryPk473b/honda-brv.png",
        "year" => 2021,
        "description" => "This car offers reliable engine performance and has passed various tests with satisfying results. With well-maintained regular maintenance, this car is very suitable for long-distance trips. Equipped with adequate comfort features for all passengers.",
        "isAvailable" => true,
        "price" => 310000
    ],
    [
        "id" => 3,
        "name" => "Toyota Yaris",
        "image" => "https://i.postimg.cc/tCxLxJhZ/toyota-yaris.png",
        "year" => 2020,
        "description" => "The car's design is very modern and stylish, making it look attractive on the road. The cabin is spacious with ample legroom, allowing passengers to feel comfortable throughout the journey. Equipped with complete safety features, providing safety and comfort for all passengers.",
        "isAvailable" => false,
        "price" => 225000
    ],
    [
        "id" => 4,
        "name" => "Suzuki Ertiga",
        "image" => "https://i.postimg.cc/B6nrLCg4/suzuki-ertiga.png",
        "year" => 2021,
        "description" => "The car is in prime condition with very low mileage. Equipped with the latest technology that enhances driving comfort and safety. The interior is equipped with various adequate entertainment and navigation features.",
        "isAvailable" => true,
        "price" => 220000
    ],
    [
        "id" => 5,
        "name" => "Toyota Agya",
        "image" => "https://i.postimg.cc/7Zb9v2bf/toyota-agya.png",
        "year" => 2020,
        "description" => "This car has a very fuel-efficient engine, making it very economical for daily use. Maintenance is easy and operational costs are low. Ideal to be used as a daily vehicle with comfort maintained.",
        "isAvailable" => true,
        "price" => 175000
    ],
    [
        "id" => 6,
        "name" => "Daihatsu Xenia",
        "image" => "https://i.postimg.cc/Xqm60y93/daihatsu-xenia.png",
        "year" => 2019,
        "description" => "The car's cabin is very comfortable and spacious, equipped with modern entertainment systems. With stable and efficient engine performance, this car is suitable for use in various road conditions.",
        "isAvailable" => false,
        "price" => 220000
    ],
    [
        "id" => 7,
        "name" => "BMW F30",
        "image" => "https://i.postimg.cc/q7kYSGWy/bmw-f30.png",
        "year" => 2022,
        "description" => "This car has high stability and advanced braking systems, providing safety during driving. Suitable to be used as a family vehicle with a large passenger capacity.",
        "isAvailable" => true,
        "price" => 1300000
    ],
    [
        "id" => 8,
        "name" => "Mini Cooper",
        "image" => "https://i.postimg.cc/1302vd7y/mini-cooper.png",
        "year" => 2020,
        "description" => "The car's interior is very elegant and comfortable, with a stylish and modern exterior. This car is very comfortable for long-distance and city driving, equipped with various comfort and safety features.",
        "isAvailable" => true,
        "price" => 1250000
    ],
    [
        "id" => 9,
        "name" => "Suzuki XL7",
        "image" => "https://i.postimg.cc/tJYGfzZ2/suzuki-xl7.png",
        "year" => 2021,
        "description" => "A high-performance car equipped with complete safety features, making it ideal for various road conditions. With low mileage and well-maintained, it ensures comfort and safety during driving.",
        "isAvailable" => false,
        "price" => 250000
    ],
    [
        "id" => 10,
        "name" => "Honda HRV",
        "image" => "https://i.postimg.cc/CMt35kfp/honda-hrv.png",
        "year" => 2020,
        "description" => "This car is in pristine condition with a powerful engine and efficient fuel consumption. Very suitable for long-distance trips and daily use with comfort maintained.",
        "isAvailable" => true,
        "price" => 200000
    ],
    [
        "id" => 11,
        "name" => "Daihatsu Terios",
        "image" => "https://i.postimg.cc/28Lf72f5/daihatsu-terios.png",
        "year" => 2019,
        "description" => "The car's cabin is very spacious and comfortable, with well-maintained regular maintenance. Equipped with the latest technology, this car provides a safe and comfortable driving experience for all passengers.",
        "isAvailable" => false,
        "price" => 175000
    ],
    [
        "id" => 12,
        "name" => "Hyundai Stargazer",
        "image" => "https://i.postimg.cc/J09vFCWz/hyundai-stargazer.png",
        "year" => 2023,
        "description" => "The aerodynamic design and ergonomic interior make this car very comfortable for long-distance trips. Equipped with adequate safety and comfort features, making it an ideal choice for various purposes.",
        "isAvailable" => true,
        "price" => 680000
    ],
    [
        "id" => 13,
        "name" => "Toyota Calya",
        "image" => "https://i.postimg.cc/MpkJPVWm/toyota-calya.png",
        "year" => 2020,
        "description" => "Complete modern safety features and a smooth engine make this car suitable for family trips. The interior is well-designed, providing maximum comfort for all passengers.",
        "isAvailable" => true,
        "price" => 225000
    ],
    [
        "id" => 14,
        "name" => "Toyota Sienta",
        "image" => "https://i.postimg.cc/NMCW1rJT/toyota-sienta.png",
        "year" => 2021,
        "description" => "The car is in excellent condition with complete entertainment systems that will make the journey more enjoyable. Routine maintenance is always performed, ensuring optimal engine performance.",
        "isAvailable" => false,
        "price" => 275000
    ],
    [
        "id" => 15,
        "name" => "Mitsubishi Xpander",
        "image" => "https://i.postimg.cc/6QtJwK47/mitsubishi-xpander.png",
        "year" => 2021,
        "description" => "The car has high stability and a comfortable cabin, suitable for long-distance trips. An efficient engine and easy maintenance make this car a good choice for daily use.",
        "isAvailable" => true,
        "price" => 350000
    ],
    [
        "id" => 16,
        "name" => "Toyota Fortuner",
        "image" => "https://i.postimg.cc/R0X8BHz8/toyota-fortuner.png",
        "year" => 2022,
        "description" => "This car's design is very modern with an efficient and high-performance engine. Equipped with complete safety features, it provides safety and comfort for all passengers.",
        "isAvailable" => true,
        "price" => 270000
    ],
    [
        "id" => 17,
        "name" => "Honda Brio",
        "image" => "https://i.postimg.cc/yNjq8G0L/honda-brio.png",
        "year" => 2019,
        "description" => "The car is in prime condition with very fuel-efficient consumption. Maintenance is easy and costs are low, making it an ideal choice for daily use and long-distance trips.",
        "isAvailable" => false,
        "price" => 220000
    ],
    [
        "id" => 18,
        "name" => "Hyundai H1",
        "image" => "https://i.postimg.cc/g2b1qpDM/hyundai-h1.png",
        "year" => 2023,
        "description" => "The car's interior is very clean and equipped with various modern entertainment features. Very suitable for family trips with maximum comfort for all passengers.",
        "isAvailable" => true,
        "price" => 550000
    ],
    [
        "id" => 19,
        "name" => "Toyota NEw Innova",
        "image" => "https://i.postimg.cc/pTVHQv2N/toyota-innova.png",
        "year" => 2023,
        "description" => "The car has a reliable engine performance and very low mileage. Equipped with the latest technology that enhances driving comfort and safety.",
        "isAvailable" => true,
        "price" => 375000
    ],
    [
        "id" => 20,
        "name" => "Toyota Raize",
        "image" => "https://i.postimg.cc/CxjTW55T/toyota-raize.png",
        "year" => 2020,
        "description" => "The car is in good condition with a spacious cabin and efficient fuel consumption. Very suitable for long-distance trips and daily use with comfort maintained.",
        "isAvailable" => false,
        "price" => 225000
    ],
    [
        "id" => 21,
        "name" => "Daihatsu Rocky",
        "image" => "https://i.postimg.cc/qRmdjFRN/daihatsu-rocky.png",
        "year" => 2021,
        "description" => "This car's engine is very powerful with routine maintenance always performed. Very suitable for daily trips with efficient fuel consumption and maximum comfort.",
        "isAvailable" => true,
        "price" => 250000
    ],
];

    $selectedCar = null;
    foreach ($cars as $car) {
        if ($car['id'] == $id)
        $selectedCar = $car;
    }
    return view('car.edit', [
        "car" => $selectedCar
    ]);
})->name('car.edit');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/transaction', function () {
    return view('transaction.index');
})->name('transaction');