<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ArticleController extends Controller
{
    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), Article::$rules);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Creëer artikel
        Article::create($request->all());

        // Redirect of andere actie

        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust max file size as needed
            'date' => 'required|date',
            'full_date' => 'required|date',
            'description' => 'required|string',
        ]);

        // Save article to database
        $article = new Article();
        $article->title = $validatedData['title'];
        // Handle image upload
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        $article->image = '/images/' . $imageName;
        $article->date = $validatedData['date'];
        $article->full_date = $validatedData['full_date'];
        $article->description = $validatedData['description'];
        $article->save();

        return redirect()->route('articles.index')->with('success', 'Artikel is succesvol opgeslagen!');
    }
}
