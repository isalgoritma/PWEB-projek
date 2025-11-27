<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $lostCategories = [
            ['category' => 'Dompet', 'slug' => 'dompet'],
            ['category' => 'Kunci', 'slug' => 'kunci'],
            ['category' => 'HP', 'slug' => 'hp'],
        ];

        return view('dashboard', compact('lostCategories'));
    }
}
