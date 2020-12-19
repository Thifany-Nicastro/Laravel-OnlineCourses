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
        return session('cart') ?? [];
    }


    public function addItem(Course $course)
    {
        session(["cart.$course->reference" => $course]); 
    }

    public function removeItem(Course $course)
    {
        session()->forget("cart.$course->reference");
    }

    public function countItems()
    {
        return count($this->items());
    }

    public function checkItem(Course $course)
    {
        return session()->has("cart.$course->reference");
    }

    public function totalValue()
    {
        $total = 0;
        foreach($this->items() as $item) {
            $total += $item->price;
        }
        return $total;
    }

    public function clean()
    {
        session()->forget('cart');
    }
}