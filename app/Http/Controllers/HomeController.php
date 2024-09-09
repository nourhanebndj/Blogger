<?php

namespace App\Http\Controllers;

use App\Models\Articles; // Import your Articles model
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $recentArticles = Articles::orderBy('updated_at', 'desc')->take(6)->get();
        
        $popularArticles = Articles::orderBy('created_at', 'desc')->take(6)->get();
        
        return view('index', compact('recentArticles', 'popularArticles'));
    }
    public function allArticles()
    {
        $allArticles = Articles::orderBy('created_at', 'desc')->get();
        return view('user.pages.articles', compact('allArticles'));
    }
}