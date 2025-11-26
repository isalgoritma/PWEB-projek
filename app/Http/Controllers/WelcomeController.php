<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\LostItem;

class WelcomeController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $categories = [
            [
                'category' => 'Elektronik',
                'lost_count' => LostItem::where('type', 'lost')->where('category', 'Elektronik')->count(),
                'found_count' => LostItem::where('type', 'found')->where('category', 'Elektronik')->count()
            ],
            [
                'category' => 'Pakaian',
                'lost_count' => LostItem::where('type', 'lost')->where('category', 'Pakaian')->count(),
                'found_count' => LostItem::where('type', 'found')->where('category', 'Pakaian')->count()
            ],
            [
                'category' => 'Aksesoris',
                'lost_count' => LostItem::where('type', 'lost')->where('category', 'Aksesoris')->count(),
                'found_count' => LostItem::where('type', 'found')->where('category', 'Aksesoris')->count()
            ],
            [
                'category' => 'Dokumen',
                'lost_count' => LostItem::where('type', 'lost')->where('category', 'Dokumen')->count(),
                'found_count' => LostItem::where('type', 'found')->where('category', 'Dokumen')->count()
            ],
            [
                'category' => 'Tas & Dompet',
                'lost_count' => LostItem::where('type', 'lost')->where('category', 'Tas & Dompet')->count(),
                'found_count' => LostItem::where('type', 'found')->where('category', 'Tas & Dompet')->count()
            ],
        ];

        return view('welcome', compact('user', 'categories'));
    }
};
