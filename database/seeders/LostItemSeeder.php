<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LostItem;

class LostItemSeeder extends Seeder
{
    public function run()
    {
        LostItem::create([
            'title' => 'Dompet Kulit Hitam',
            'type' => 'lost',
            'description' => 'Dompet kulit hitam berisi KTP dan beberapa kartu.',
            'location' => 'Gedung Rektorat',
            'date_lost' => '2025-01-10',
            'status' => 'open',
            'user_id' => null,
            'image_path' => null
        ]);

        LostItem::create([
            'title' => 'Kunci Motor Honda',
            'type' => 'found',
            'description' => 'Kunci motor dengan gantungan biru ditemukan di parkiran.',
            'location' => 'Parkiran Utama',
            'date_lost' => '2025-01-11',
            'status' => 'open',
            'user_id' => null,
            'image_path' => null
        ]);
    }
}
