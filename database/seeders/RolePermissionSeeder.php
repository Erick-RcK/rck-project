<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // --- BUAT PERMISSIONS ---
        Permission::firstOrCreate(['name' => 'view-soc-dashboard', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name' => 'view-noc-dashboard', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name' => 'manage-users', 'guard_name' => 'web']);

        // --- BUAT ROLES BARU ---
        $superadminRole = Role::firstOrCreate(['name' => 'superadmin', 'guard_name' => 'web']);
        $nocRole = Role::firstOrCreate(['name' => 'NOC Engineer', 'guard_name' => 'web']);
        $socRole = Role::firstOrCreate(['name' => 'SOC Analyst', 'guard_name' => 'web']);
        $supportRole = Role::firstOrCreate(['name' => 'Support', 'guard_name' => 'web']);
        $managementRole = Role::firstOrCreate(['name' => 'Management', 'guard_name' => 'web']);

        // --- BERIKAN PERMISSIONS KE ROLES ---
        $socRole->givePermissionTo('view-soc-dashboard');
        $nocRole->givePermissionTo('view-noc-dashboard');
        
        // Support dan Management bisa melihat kedua dashboard
        $supportRole->givePermissionTo(['view-soc-dashboard', 'view-noc-dashboard']);
        $managementRole->givePermissionTo(['view-soc-dashboard', 'view-noc-dashboard']);

        // Superadmin bisa mengakses semua permission yang ada
        $superadminRole->syncPermissions(Permission::all());

        // --- BUAT USER SUPERADMIN ---
        $superadmin = User::updateOrCreate(
            ['email' => 'superadmin@example.com'],
            [
                'name' => 'Super Admin',
                'password' => Hash::make('password123'), // Ganti dengan password yang aman
                'email_verified_at' => now()
            ]
        );

        // Selalu pastikan user ini memiliki role superadmin
        $superadmin->assignRole($superadminRole);
    }
}
