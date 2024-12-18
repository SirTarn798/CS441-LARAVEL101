<?php

namespace Database\Seeders;

use App\Models\Artist;
use Illuminate\Database\Seeder;

class ArtistSeeder extends Seeder
{
    public function run(): void
    {
        $limit = 50;
        $count = Artist::count();
        if($limit > $count) {
            Artist::factory()->count($limit - $count)->create();
        }
    }
}