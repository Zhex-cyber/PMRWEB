<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        Role::findOrCreate('Admin', 'web', 'Anggota', 'web', 'Guest', 'web');

        $role = [
            [
                'name'          => 'Pembimbing',
                'guard_name'    => 'web'

            ],
        
            [
                'name'          => 'Anggota',
                'guard_name'    => 'web'
            ],
           
            [
                'name'          => 'Guest',
                'guard_name'    => 'web'
            ]
        ];

        foreach ($role as $roleData) {
            $role = Role::findOrCreate($roleData['name'], $roleData['guard_name']);
            $this->command->info('Data Role ' . $role->name . ' has been saved or already exists.');
        }
    }
}
