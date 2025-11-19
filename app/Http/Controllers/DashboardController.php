<?php

namespace App\Http\Controllers;

use App\Services\WeatherService;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(WeatherService $weatherService)
    {
        // Mengambil data cuaca untuk kota Jakarta
        $weather = $weatherService->getCurrentWeather('Jakarta');


        // Tampilkan data cuaca di dashboard
        return view('dashboard', compact('weather'));
    }
}
