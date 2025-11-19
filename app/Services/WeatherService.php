<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class WeatherService
{
    protected $apiKey;

    public function __construct()
    {
        $this->apiKey = env('OPENWEATHER_API_KEY');
    }

    public function getWeatherData()
    {
        // Kirim permintaan ke OpenWeather API tanpa verifikasi SSL
        $response = Http::withOptions([
            'verify' => false,  // Menonaktifkan verifikasi SSL
        ])->get("https://api.openweathermap.org/data/2.5/weather", [
            'q' => 'London', // Menggunakan kota default (London)
            'appid' => $this->apiKey,
            'units' => 'metric',
        ]);

        // Cek apakah request berhasil
        if ($response->successful()) {
            return $response->json(); // Kembalikan response JSON
        }

        // Jika gagal, kembalikan pesan error
        return ['error' => 'Data cuaca tidak dapat diambil.'];
    }
}
