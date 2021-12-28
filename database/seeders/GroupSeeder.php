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
            'name' => 'Bilgisayar Mühendisliği Semineri',
            'description' => 'Bilgisayar Mühendisliği Semineri',
            'created_by' => $user->id
        ]);

        $doc->groups()->attach($group->id);


    }
}
