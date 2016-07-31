<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function zipform() {
        $categories = [
            [
                "id" => 1,
                "name" => "Name 1",
                "icon" => 'icon.png'
            ],
            [
                "id" => 2,
                "name" => "Name 2",
                "icon" => 'icon.png'
            ],
            [
                "id" => 3,
                "name" => "Name 3",
                "icon" => 'icon.png'
            ],
            [
                "id" => 4,
                "name" => "Name 4",
                "icon" => 'icon.png'
            ]
        ];

        return view('zipform')->withCategories($categories);
    }

    public function subcategories(Request $request) {
        echo 'Zipcode: ' . $request->zipcode;
        dd($request);

        // if (!empty($request->zipcode) and is_numeric($request->zipcode)) {
        //     Zip::setZip($request->zipcode);
        // }
    }
}
