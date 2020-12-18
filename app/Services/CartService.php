<?php

namespace App\Services;

use App\Models\Course;

class CartService
{
    //private $var;

    public function __construct()
    {
        //
    }

    public function items()
    {
        return collect([session('cart')]) ?? [];
    }


    public function addItem(Course $course)
    {
        session(['cart' => $course]);
    }

    public function removeItem(Course $course)
    {

    }

    public function clean()
    {
        session()->forget('cart');
    }
}