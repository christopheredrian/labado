<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new \App\Role();
        $admin->name = 'admin';
        $admin->display_name = 'User Administrator'; // optional
        $admin->description = 'User is allowed to edit and manage users'; // optional
        $admin->save();

        $customer = new \App\Role();
        $customer->name = 'customer';
        $customer->display_name = 'Customer'; // optional
        $customer->description = 'Customer is allowed to request for laundry pick-up'; // optional
        $customer->save();

        $admin_account = new \App\User();
        $admin_account->email = "admin@example.com";
        $admin_account->name = "LabaDo";
        $admin_account->password = bcrypt('password');
        $admin_account->save();

        $customer_account = new \App\User();
        $customer_account->email = "customer@example.com";
        $customer_account->name = "First Customer";
        $customer_account->password = bcrypt('password');
        $customer_account->save();


        $admin_account->attachRole($admin);
        $customer_account->attachRole($customer);

    }
}
