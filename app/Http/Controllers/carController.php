<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        return response()->json(Car::all());
    }
}

// public function index()  عدلناها حتى ترجعلنا ملفات json
// {
//     $cars = Car::all(); // استعلام قاعدة البيانات
//     return view('cars.index', compact('cars'));
// }