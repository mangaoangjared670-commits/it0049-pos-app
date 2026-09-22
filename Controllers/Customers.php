<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index()
    {
        $data['customers'] = [
            ['full_name' => 'Rhianna Arevalo', 'email' => 'rarevalo@gmail.com', 'phone' => '09171234567'],
            ['full_name' => 'Jared Mangaoang', 'email' => 'jmangaoang@gmail.com', 'phone' => '09182345678'],
            ['full_name' => 'Jose Rizal', 'email' => 'jrizal@gmail.com', 'phone' => '09193456789'],
            ['full_name' => 'Keoni Manglona', 'email' => 'kmanglona@gmail.com', 'phone' => '09204567890'],
            ['full_name' => 'Eclair Ladao', 'email' => 'eladao@gmail.com', 'phone' => '09215678901'],
        ];

        return view('templates/header') . view('customers/index', $data);
    }
}