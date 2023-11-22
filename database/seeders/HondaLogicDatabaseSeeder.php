<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Seeder;

class HondaLogicDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        $this->call([

            DataTypesTableSeeder::class,
            DataRowsTableSeeder::class,
            MenusTableSeeder::class,
            MenuItemsTableSeeder::class,
            RolesTableSeeder::class,
            UsersTableSeeder::class,
            PermissionsTableSeeder::class,
            SettingsTableSeeder::class,
            TranslationsTableSeeder::class,
            CompaniesTableSeeder::class,
            EmployeesTableSeeder::class,
            PermissionRoleTableSeeder::class,
        ]);
    }
}
