<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Weather Data') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
            <h1 class="text-3xl font-semibold text-gray-800">Weather Data from OpenWeather API</h1>

            <!-- Tampilkan data cuaca -->
            <div class="mt-6">
                @if(isset($weatherData['error']))
                    <p class="text-red-500">Error: {{ $weatherData['error'] }}</p>
                @else
                    <div class="bg-blue-50 p-6 rounded-lg shadow-lg">
                        <p class="text-lg text-gray-800 font-semibold">Deskripsi: {{ $weatherData['weather'][0]['description'] }}</p>
                        <p class="text-lg text-gray-800 font-semibold">Temperatur: {{ $weatherData['main']['temp'] }}°C</p>
                        <p class="text-sm text-gray-500">Kelembaban: {{ $weatherData['main']['humidity'] }}%</p>
                        <p class="text-sm text-gray-500">Kota: {{ $weatherData['name'] }}</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
