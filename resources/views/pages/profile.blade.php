@extends('layouts.app')

@section('content')
<div class="container mx-auto my-8 w-4/5">
    <div class="flex items-center justify-center gap-4">
        <div class="w-1/2">
            <h3 class="text-2xl font-poltawski-nowy font-regular">Profil Usaha</h3>
            <h1 class="text-4xl font-bold mb-4">Taste Of Yogyakarta</h1>
            <p class="text-gray-700 mb-4">Kami adalah sebuah usaha kuliner yang berfokus pada hidangan khas Yogyakarta. Kami menggunakan bahan-bahan segar dan resep-resep tradisional untuk menciptakan pengalaman kuliner yang autentik bagi pelanggan kami.</p>
            <p class="text-gray-700 mb-4">Didirikan pada tahun 2018, Taste Of Yogyakarta telah menjadi tujuan utama bagi para pecinta kuliner lokal maupun wisatawan yang berkunjung ke Yogyakarta. Kami berkomitmen untuk melestarikan dan mempromosikan kekayaan kuliner daerah ini.</p>
            <a href="#" class="bg-pink-500 hover:bg-pink-600 text-white px-4 py-2 rounded-md">Selengkapnya</a>
        </div>
        <div class="w-1/2">
            <img src="{{ asset('images/menulain.png') }}" alt="Kuliner Yogyakarta" class="rounded-md ">
        </div>
    </div>
</div>
@endsection