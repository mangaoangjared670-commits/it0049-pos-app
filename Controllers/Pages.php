<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        return view('templates/header') . view('pages/home');
    }

    public function about()
    {
        return view('templates/header') . view('pages/about');
    }
}