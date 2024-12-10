<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taste Of Yogyakarta - Discover Authentic Flavors</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body>
    <div class="bg-pink-500 text-white py-2">
        <div class="container my-6 w-4/5 mx-auto flex justify-between items-center">
            <div class="font-bold text-xl">FOODCART</div>
            <nav class="space-x-4">
                <a href="#" class="hover:underline">Profil Usaha</a>
                <a href="#" class="hover:underline">Menu</a>
                <a href="#" class="hover:underline">Blog</a>
                <a href="#" class="hover:underline">Kontak Usaha Kuliner</a>
            </nav>
        </div>
    </div>

    <div class="container mx-auto my-8 w-4/5">
        <div class="flex items-center">
            <div class="w-1/2">
                <h1 class="text-4xl font-bold mb-4">Taste Of Yogyakarta</h1>
                <p class="text-gray-700 mb-4">Sebuah petualangan kuliner yang mengajak Anda merasakan dan menggali kekayaan rasa dari kota budaya Yogyakarta.Kata ini terkental akan ragam hidangan tradisionalnya yang menggoyang lidah hingga camilan ringan yang kaya akan nuansa dan sejara.</p>
                <a href="#" class="bg-pink-500 hover:bg-pink-600 text-white px-4 py-2 rounded-md">Discover Now</a>
            </div>
            <div class="w-1/2">
                <img src="{{ asset('images/kuliner.png') }}" alt="Kuliner Yogyakarta" class="rounded-md shadow-lg">
            </div>
        </div>
    </div>
</body>
</html>