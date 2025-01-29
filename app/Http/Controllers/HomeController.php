<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $hotels = Hotel::with('rooms')
            ->orderBy('name')
            ->get();

        return view('hotels.index', compact('hotels'));
    }
}
