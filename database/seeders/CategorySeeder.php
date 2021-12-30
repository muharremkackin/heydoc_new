<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'Sınav Sonuçları',
            'Ders Kaynakları',
            'Sunumlar',
            'Duyurular',
            'Etkinlikler'
        ];

        foreach ($categories as $category) {
            Category::create([
                'unique_id' => \Str::orderedUuid(),
                'name' => $category,
                'slug' => \Str::slug($category),
                'description' => $category
            ]);
        }
    }
}
