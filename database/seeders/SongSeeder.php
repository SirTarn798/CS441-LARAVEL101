<?php

namespace Database\Seeders;

use App\Models\Artist;
use App\Models\Song;
use Illuminate\Database\Seeder;

class SongSeeder extends Seeder
{
    public function run(): void
    {
        $limit = 50;
        $count = Song::count();
        if ($limit > $count) {
            Song::factory()->count($limit - $count)->create();
        }
    }
}