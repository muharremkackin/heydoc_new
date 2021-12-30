<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::first();
        $doc = User::find(2);

        $group = $user->groups()->create([
            'unique_id' => \Str::orderedUuid(),
            'name' => 'Bilgisayar Mühendisliği Semineri',
            'slug' => \Str::slug('Bilgisayar Mühendisliği Semineri'),
            'description' => 'Bilgisayar Mühendisliği Semineri',
            'created_by' => $user->id,
        ]);

        $doc->groups()->attach($group->id);


    }
}
