<?php

namespace Database\Seeders;

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

        $user->documents()->create([
            'name' => 'Bitirme Semineri Sunum Sonuçları',
            'description' => 'Sonuclar asagida listelenmistir',
        ]);

        $group->documents()->create([
            'name' => 'Bitirme Semineri Sunum Sonuçları',
            'description' => 'Sonuclar asagida listelenmistir',
        ]);
    }
}
