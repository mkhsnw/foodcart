@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="bg-gray-100 p-8 rounded-lg">
        <div class="flex items-center justify-between">
            <!-- Store Image -->
            <div class="w-1/4">
                <img src="images/menu1.png" alt="Food" class="w-full rounded-lg">
            </div>
            
            <!-- Contact Information -->
            <div class="flex-1 flex justify-around">
                <div class="text-center">
                    <div class="bg-red-400 p-2 rounded-full w-12 h-12 mx-auto mb-2 flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                        </svg>
                    </div>
                    <h3 class="font-bold">Alamat</h3>
                    <p class="text-gray-600">Jl...</p>
                </div>
                
                <div class="text-center">
                    <div class="bg-orange-400 p-2 rounded-full w-12 h-12 mx-auto mb-2 flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                    </div>
                    <h3 class="font-bold">Informasi Kontak</h3>
                    <p class="text-gray-600">+62...</p>
                </div>
                
                <div class="text-center">
                    <div class="bg-green-400 p-2 rounded-full w-12 h-12 mx-auto mb-2 flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="font-bold">Support</h3>
                    <p class="text-gray-600">Senin-Jumat</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection