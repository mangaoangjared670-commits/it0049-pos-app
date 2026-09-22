<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $data['users'] = [
            ['username' => 'admin_user', 'full_name' => 'Rhianna Arevalo', 'role' => 'Administrator'],
            ['username' => 'cashier_1', 'full_name' => 'Jared Mangaoang', 'role' => 'Cashier'],
            ['username' => 'cashier_2', 'full_name' => 'Jose Rizal', 'role' => 'Cashier'],
            ['username' => 'manager_1', 'full_name' => 'Keoni Manglona', 'role' => 'Manager'],
            ['username' => 'inventory_staff', 'full_name' => 'Eclair Ladao', 'role' => 'Inventory Clerk'],
        ];

        return view('templates/header') . view('users/index', $data);
    }
}