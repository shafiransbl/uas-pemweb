<footer class="bg-black text-white py-8">
    <div class="container mx-auto text-center">
        <!-- Logo / Nama Toko -->
        <h2 class="text-2xl font-bold mb-2">KabarUNTIRTA</h2>
        <p class="text-sm text-gray-400 mb-4">Berita Paling Update dari Kampus</p>
        
        <!-- Navigasi -->
        <nav class="flex justify-center space-x-6 text-sm mb-6">
            <a href="#" class="text-gray-400 hover:text-white">Kategori 1</a>
            <a href="#" class="text-gray-400 hover:text-white">Kategori 2</a>
            <a href="#" class="text-gray-400 hover:text-white">Kategori 3</a>
            <a href="#" class="text-gray-400 hover:text-white">Kategori 4</a>
            <a class="nav-link text-gray-400 hover:text-white" href="{{ route('blogs.about') }}">{{ __('About Us') }}</a>
        </nav>
    
        
        <!-- Copyright -->
        <p class="text-xs text-gray-500">
            © 2024 BeritaKampus. All rights reserved.
        </p>
    </div>
</footer>
