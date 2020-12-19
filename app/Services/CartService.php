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
        if (session()->has('cart')) {
            session()->push('cart', $course);
        } else {
            $items[] = $course;
            session(['cart' => $items]);
        }
    }

    public function removeItem(Course $course)
    {

    }

    public function countItems()
    {
        return count($this->items());
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