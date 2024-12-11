@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="bg-gray-100 p-8 rounded-lg">
        <div class="flex gap-4">
            <!-- Store Image -->
            <div class="w-1/3 flex justify-between gap-2">
                <img src="images/tahuwalik.png" alt="Tahu Walik" class="w-full rounded-lg">
                <img src="images/reviews.png" alt="Tahu Walik" class="w-full rounded-lg">
            </div>
            
            <!-- Review Section -->
            <div class="w-2/3">
                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-center mb-4">
                        <span class="font-bold text-lg">Mawar</span>
                    </div>
                    <div class="text-gray-700">
                        <p>Review:</p>
                        <p class="mt-2">Tahu Walik adalah camilan renyah di luar dan lembut di dalam, dengan isian tahu yang dibuat hingga krispi. Rasanya benar-benar sempurna dengan saus sambal yang kami sediakan. Kesempurnaan cemilan yang kamu cari ada disini. Walik artinya balik kata di daerah kami tambahin yang krispi dan saos.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection