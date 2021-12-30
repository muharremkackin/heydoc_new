<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Group;
use App\Models\User;
use Illuminate\Database\Seeder;

class DocumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::first();
        $group = Group::first();

        $category_results = Category::first();
        $user->documents()->create([
            'category_id' => $category_results->id,
            'unique_id' => \Str::orderedUuid(),
            'name' => 'Bitirme Semineri Sunum Sonuçları',
            'slug' => \Str::slug('Bitirme Semineri Sunum Sonuçları'),
            'description' => 'Sonuclar asagida listelenmistir',
        ]);

        $group->documents()->create([
            'category_id' => $category_results->id,
            'unique_id' => \Str::orderedUuid(),
            'name' => 'Görüntü İşleme Dersi Sunum Sonuçları',
            'slug' => \Str::slug('Görüntü İşleme Dersi Sunum Sonuçları'),
            'description' => 'Sonuclar asagida listelenmistir',
        ]);
    }
}
