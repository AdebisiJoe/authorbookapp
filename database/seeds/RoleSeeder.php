<?php

use Illuminate\Database\Seeder;
use App\Role;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          if (App::environment() === 'production') {
            exit('I just stopped you getting fired. Love, Amo.');
        }
        DB::table('roles')->truncate();
        // Role::create([
        //     'id'            => 1,
        //     'name'          => 'Root',
        //     'description'   => 'Use this account with extreme caution. When using this account it is possible to cause irreversible damage to the system.'
        // ]);
        // Role::create([
        //     'id'            => 1,
        //     'name'          => 'Administrator',
        //     'description'   => 'Full access to create, edit, and update companies, and orders.'
        // ]);
        // Role::create([
        //     'id'            => 2,
        //     'name'          => 'merchant',
        //     'description'   => 'Ability to create new companies and orders, or edit and update any existing ones.'
        // ]);
        // Role::create([
        //     'id'            => 3,
        //     'name'          => 'user',
        //     'description'   => 'A standard user that can have a licence assigned to them. No administrative features.'
        // ]);
        Role::create([
            'id'            => 1,
            'name' =>'user',
            'description' => 'A rent Naija Customer',
        ]);
        Role::create([
            'id'            => 2,
            'name' =>'LandLord',
            'description' => 'A rent Naija LandLord',
        ]);
        Role::create([
            'id'            => 3,
            'name' =>'House Agent',
            'description' => 'A rent Naija House Agent',
        ]);
        Role::create([
            'id'            => 4,
            'name' =>'Field Agent',
            'description' => 'A rent Naija Field Agent',
        ]);
        Role::create([
            'id'            => 5,
            'name' =>'Staff Admin',
            'description' => 'A rent Naija Staff',
        ]);
        Role::create([
            'id'            => 6,
            'name' =>'Super Admin',
            'description' => 'rent Naija',
        ]);

         
        
        

        

    }

    
}
