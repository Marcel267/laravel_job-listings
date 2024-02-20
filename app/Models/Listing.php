<?php

namespace App\Models;


class Listing
{
    public static function all()
    {
        for ($i = 1; $i < 11; $i++) {
            $listings[] = ['id' => $i, 'content' => 'Listing number' . $i];
        }

        return $listings;
    }

    public static function find($id)
    {
        $listings = self::all();

        foreach ($listings as $listing) {
            if ($listing['id'] === $id) {
                return $listing;
            }
        }

        return false;
    }
}
