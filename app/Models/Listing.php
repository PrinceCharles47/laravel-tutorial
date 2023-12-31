<?php

namespace App\Models;

class Listing {

    public static function all() {
        return [
            [
                'id' => 1,
                'title' => 'Listing One',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi quibusdam, expedita odio vel dicta ipsum, aliquid voluptatibus, atque nihil tempore quod excepturi animi. Magnam minus repellat ipsam ipsa, ducimus quidem.'
            ],
            [
                'id' => 2,
                'title' => 'Listing Two',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi quibusdam, expedita odio vel dicta ipsum, aliquid voluptatibus, atque nihil tempore quod excepturi animi. Magnam minus repellat ipsam ipsa, ducimus quidem.'
            ]
            ];
    }

    public static function find($id){
        $listings = self::all();

        foreach ($listings as $listing) {
            if($listing['id'] == $id){
                return $listing;
            }
        }
    }

}