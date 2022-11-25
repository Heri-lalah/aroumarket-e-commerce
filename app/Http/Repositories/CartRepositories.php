<?php
namespace App\Http\Repositories;

    class CartRepositories
    {

        //GetTotalQuantity

        public static function getCount()
        {

            return \Cart::getTotalQuantity();

        }

        //Get Content
        public function getContent()
        {
            return \Cart::getContent();
        }

    }
