<?php

namespace App\Http\Controllers;

use App\Models\NewsArticle;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $newsArticles = NewsArticle::orderBy('publication_date', 'desc')->take(3)->get();
        return view('home', compact('newsArticles'));
    }
}