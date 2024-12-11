<!-- resources/views/components/header.blade.php -->
<div class="bg-pink-500 text-white py-2">
    <div class="container my-4 w-4/5 mx-auto flex justify-between items-center">
        <a href="{{ route('landing') }}" class="font-bold text-xl">FOODCART</a>
        <nav class="space-x-4">
            <a href="{{ route('landing') }}" class="hover:underline {{ $currentRoute === 'landing' ? 'font-bold' : '' }}">Beranda</a>
            <a href="{{ route('profile') }}" class="hover:underline {{ $currentRoute === 'profile' ? 'font-bold' : '' }}">Profil Usaha</a>
            <a href="{{ route('menu') }}" class="hover:underline {{ $currentRoute === 'menu' ? 'font-bold' : '' }}">Menu</a>
            <a href="{{ route('blog') }}" class="hover:underline {{ $currentRoute === 'blog' ? 'font-bold' : '' }}">Blog</a>
            <a href="{{ route('contact') }}" class="hover:underline {{ $currentRoute === 'contact' ? 'font-bold' : '' }}">Kontak Usaha Kuliner</a>
        </nav>
    </div>
</div>