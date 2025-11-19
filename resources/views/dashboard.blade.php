<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Kartu 1 -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                <h3 class="text-2xl font-semibold text-gray-800 mb-4">Cuaca Saat Ini</h3>
                <p class="text-lg text-gray-700">Lihat informasi cuaca terkini di kota Anda.</p>
                <a href="{{ url('/weather') }}">
                    <!-- Tombol dengan Ikon dan Teks Hitam -->
                    <button class="mt-4 bg-transparent text-black px-6 py-3 rounded-md border-2 border-blue-500 hover:bg-blue-500 hover:text-white transition duration-300 flex items-center space-x-2">
                        <!-- Ikon cuaca -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 2a4 4 0 00-4 4v3h8V6a4 4 0 00-4-4z" />
                        </svg>
                        <span>Lihat Cuaca</span>
                    </button>
                </a>
            </div>
</x-app-layout>
