<?php

namespace App\Http\Controllers;

use App\Models\NewsArticle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsArticleController extends Controller
{
    public function index()
    {
        $newsArticles = NewsArticle::orderBy('publication_date', 'desc')->get();
        return view('news.index', compact('newsArticles'));
    }

    public function create()
    {
        return view('news.create');
    }

    public function show(NewsArticle $newsArticle)
    {
        return view('news.show', compact('newsArticle'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'publication_date' => 'required|date',
            'image' => 'nullable|image|max:2048',
        ]);

        $data = $request->all();
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('news_images', 'public');
        }

        NewsArticle::create($data);

        return redirect()->route('news.index')->with('success', 'Artikel succesvol aangemaakt.');
    }

    public function edit(NewsArticle $newsArticle)
    {
        return view('news.edit', compact('newsArticle'));
    }


    public function update(Request $request, NewsArticle $newsArticle)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'publication_date' => 'required|date',
            'image' => 'nullable|image|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            if ($newsArticle->image) {
                Storage::disk('public')->delete($newsArticle->image);
            }
            $data['image'] = $request->file('image')->store('news_images', 'public');
        }

        $newsArticle->update($data);
        return redirect()->route('news.index')->with('success', 'Artikel succesvol bijgewerkt.');
    }

    public function destroy(NewsArticle $newsArticle)
    {
        if ($newsArticle->image) {
            Storage::disk('public')->delete($newsArticle->image);
        }

        $newsArticle->delete();

        return redirect()->route('news.index')->with('success', 'Artikel succesvol verwijderd.');
    }

    public function recent()
    {
        $newsArticles = NewsArticle::orderBy('publication_date', 'desc')->take(2)->get();
        return view('home', compact('newsArticles'));
    }
}