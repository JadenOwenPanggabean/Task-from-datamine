<?php

namespace App\Http\Controllers;

use App\Services\WeatherService;

class WeatherController extends Controller
{
    public function show(WeatherService $weatherService)
    {
        // Ambil data cuaca dari service
        $weatherData = $weatherService->getWeatherData();

        // Kirim data cuaca ke tampilan
        return view('weather.index', compact('weatherData'));
    }
}
