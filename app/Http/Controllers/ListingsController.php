<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;

class ListingsController extends Controller
{
    public function showListings() {
        return view('listings', [
            'heading' => 'Latest Listings',
            'listings' => Listing::all()
        ]);
    }

    public function showListing($id) {
        return view('listing', [
            'listing' => Listing::find($id)
        ]);
    }
}
