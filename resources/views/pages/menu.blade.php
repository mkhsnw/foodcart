@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="bg-gray-100 p-8 rounded-lg">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Main Featured Item -->
            <div class="bg-white p-4 rounded-lg shadow">
                <img src="images/menu1.png" alt="Featured Menu" class="w-full h-[360px] object-cover rounded-lg">
                <div class="mt-4">
                    <h3 class="font-bold">Nama menu:</h3>
                    <p class="mt-2">Jam Operasional:</p>
                </div>
            </div>
            
            <!-- Other Menu Items Grid -->
            <div class="grid grid-cols-2 gap-4">
                @foreach(range(2,5) as $index)
                <div class="bg-white p-4 rounded-lg shadow">
                    <img src="images/menu{{$index}}.png" alt="Menu Item {{$index}}" class="w-full h-48 object-cover rounded-lg">
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection