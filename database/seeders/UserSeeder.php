<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('@admin_pdam')
        ]);

        $data = [
            [
                'name' => 'Admin',
            ],
            [
                'name' => 'Calon Magang',
            ],
            [
                'name' => 'Siswa/Mahasiswa',
            ],
            [
                'name' => 'Manager',
            ],
        ];

        foreach ($data as $item) {
            $role =  Role::create($item);
            $permissions = Permission::pluck('id', 'id')->all();

            $role->syncPermissions($permissions);
        }
        $user->assignRole([1]);
    }
}
