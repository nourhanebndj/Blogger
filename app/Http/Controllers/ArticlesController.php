<?php

namespace App\Http\Controllers;
use App\Models\Articles;  // Adjusted from Articles
use App\Models\Categories; // Adjusted from Categories
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function create()
    {
        $categories = Categories::all(); 
        return view('admin.add_articles', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'category_id' => 'required|exists:categories,id',
            'meta_title' => 'nullable|string|max:255',  
            'meta_content' => 'nullable|string',        
            'front_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);
    
        $article = new Articles();  
        $article->title = $request->title;
        $article->content = strip_tags($request->content);  
        $article->category_id = $request->category_id;
        $article->meta_title = $request->meta_title;
        $article->meta_content = strip_tags($request->meta_content);  
    
        if ($request->hasFile('front_image')) {
            $imageName = time().'.'.$request->front_image->extension();  
            $request->front_image->move(public_path('images'), $imageName);
            $article->front_image = $imageName;
        }
    
    
        $article->save();
    
        return redirect()->route('admin.articles.index')->with('success', 'Article added successfully');
    }
    public function index()
    {
        $articles = Articles::orderBy('updated_at', 'desc')->get();
        return view('admin.articles', compact('articles'));        
    }

    public function edit($id)
    {
        $article = Articles::findOrFail($id);
        $categories = Categories::all(); 
        return view('admin.edit_article', compact('article', 'categories'));
    }
    
    public function update(Request $request, $id)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'content' => 'required',
        'category_id' => 'required|exists:categories,id',
        'meta_title' => 'nullable|string|max:255',  
        'meta_content' => 'nullable|string',        
        'front_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
    ]);

    $article = Articles::findOrFail($id);

    // Use strip_tags to sanitize the content
    $sanitizedContent = strip_tags($request->input('content'));
    $sanitizedMetaContent = strip_tags($request->input('meta_content'));

    // Update the article with sanitized content
    $article->update([
        'title' => $request->input('title'),
        'content' => $sanitizedContent,
        'category_id' => $request->input('category_id'),
        'meta_title' => $request->input('meta_title'),
        'meta_content' =>$sanitizedMetaContent,
        'front_image' => $article->front_image, 
    ]);

    return redirect()->route('admin.articles.index')->with('success', 'Article updated successfully');
}

    
public function destroy($id)
{
    Articles::destroy($id);
    return redirect()->route('admin.articles.index')->with('success', 'Article deleted successfully');
}


public function search(Request $request)
{
    $query = $request->input('query');

    // Recherche dans les titres et le contenu des articles
    $articles = Articles::where('title', 'LIKE', "%$query%")
        ->orWhere('content', 'LIKE', "%$query%")
        ->get();

        return view('user.pages.search_results', ['searchResults' => $articles, 'query' => $query]);
    }
    public function show($id) {
        $article = Articles::findOrFail($id);
        return view('user.pages.article_details', compact('article'));
    }
    
}