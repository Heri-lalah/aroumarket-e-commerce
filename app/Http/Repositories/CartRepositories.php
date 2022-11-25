<?php
namespace App\Http\Repositories;

    class CartRepositories
    {

        //GetTotalQuantity

        public static function totalQuantity()
        {

            return \Cart::getTotalQuantity();

        }

    }
