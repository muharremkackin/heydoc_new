<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            'administrator' => [
                'title' => 'Lw.',
                'first_name' => 'Murphy',
                'middle_name' => null,
                'last_name' => 'Murdock',
                'email' => 'lw.murphy.murdock@app.test',
                'unique_id' => \Str::orderedUuid()
            ],
            'lecturer' => [
                'title' => 'Dr.',
                'first_name' => 'Emmet',
                'middle_name' => null,
                'last_name' => 'Brown',
                'email' => 'dr.emmet.brown@app.test',
                'unique_id' => \Str::orderedUuid()
            ],
            'student' => [
                'title' => 'S.',
                'first_name' => 'Marty',
                'middle_name' => null,
                'last_name' => 'McFly',
                'email' => 'st.mary.mcfly@app.test',
                'unique_id' => \Str::orderedUuid()
            ],
        ];

        foreach ($users as $key => $user) {
            $users[$key] = User::factory()->create($user);
            $users[$key]->assignRole($key);
        }
    }
}
