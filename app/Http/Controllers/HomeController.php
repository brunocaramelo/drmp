<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $galleriesData = [];

        return response()->view([
            'galleries' => $galleriesData;
        ]);
    }
}
