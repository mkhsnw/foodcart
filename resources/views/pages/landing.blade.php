@extends('layouts.app')

@section('content')
<div class="container mx-auto my-8 w-4/5">
    <div class="flex items-center">
        <div class="w-1/2">
            <h3 class="text-2xl font-poltawski-nowy font-regular">Kuliner</h3>
            <h1 class="text-4xl font-bold mb-4">Taste Of Yogyakarta</h1>
            <p class="text-gray-700 mb-4">Sebuah petualangan kuliner yang mengajak Anda merasakan dan menggali kekayaan rasa dari kota budaya Yogyakarta.Kata ini terkental akan ragam hidangan tradisionalnya yang menggoyang lidah hingga camilan ringan yang kaya akan nuansa dan sejara.</p>
            <a href="{{ route('profile') }}" class="bg-pink-500 hover:bg-pink-600 text-white px-4 py-2 rounded-md">Discover Now</a>
        </div>
        <div class="w-1/2">
            <img src="{{ asset('images/kuliner1.png') }}" alt="Kuliner Yogyakarta" class="rounded-md ">
        </div>
    </div>
</div>
@endsection