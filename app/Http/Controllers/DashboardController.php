<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    /**
     * Menampilkan halaman dashboard internal pengguna.
     *
     * @return \Illuminate\View\View
     */
        public function index()
    {
        $lostCategories = [
            [
                'category' => 'Elektronik',
                'count' => 12,
                'image' => 'data:image/svg+xml,<svg ...>'
            ],
            [
                'category' => 'Pakaian',
                'count' => 8,
                'image' => 'data:image/svg+xml,<svg ...>'
            ],
            // tambahkan sesuai datamu
        ];

        $foundCategories = [
            [
                'category' => 'Elektronik',
                'count' => 18,
                'image' => 'data:image/svg+xml,<svg ...>'
            ],
            // tambahkan sesuai datamu
        ];

        return view('dashboard', [
            'lostCategories' => $lostCategories,
            'foundCategories' => $foundCategories
        ]);
    }
}
