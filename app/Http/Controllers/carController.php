<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all(); // استعلام قاعدة البيانات
        return view('cars.index', compact('cars'));
    }
}
