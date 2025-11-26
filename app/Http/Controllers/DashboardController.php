public function index()
{
    $lostCategories = [
        [
            'category' => 'Elektronik',
            'count' => 12,
            'slug' => 'elektronik',
        ],
        [
            'category' => 'Pakaian',
            'count' => 8,
            'slug' => 'pakaian',
        ],
        [
            'category' => 'Aksesoris',
            'count' => 15,
            'slug' => 'aksesoris',
        ],
        [
            'category' => 'Dokumen',
            'count' => 5,
            'slug' => 'dokumen',
        ],
        [
            'category' => 'Tas & Dompet',
            'count' => 9,
            'slug' => 'tas-dompet',
        ],
    ];

    $foundCategories = [
        [
            'category' => 'Elektronik',
            'count' => 18,
            'slug' => 'elektronik',
        ],
        [
            'category' => 'Pakaian',
            'count' => 10,
            'slug' => 'pakaian',
        ],
        [
            'category' => 'Aksesoris',
            'count' => 22,
            'slug' => 'aksesoris',
        ],
        [
            'category' => 'Dokumen',
            'count' => 7,
            'slug' => 'dokumen',
        ],
        [
            'category' => 'Tas & Dompet',
            'count' => 14,
            'slug' => 'tas-dompet',
        ],
    ];

    return view('dashboard', compact('lostCategories', 'foundCategories'));
}
