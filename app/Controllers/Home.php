<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function snap()
    {
        return view('/snap/index');
    }

    public function checkoutProcess()
    {
        return view('/snap/checkout-process');
    }
}
