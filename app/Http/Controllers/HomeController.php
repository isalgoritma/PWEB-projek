<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LostItem;

class HomeController extends Controller
{
    public function index()
    {
        $latest = LostItem::orderBy('created_at','desc')->take(6)->get();
        return view('home', compact('latest'));
    }
}
