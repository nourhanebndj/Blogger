<?php

namespace App\Http\Controllers;
use App\Models\Categories;
use SEO;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request
        $validatedData = $request->validate([
            'category_name' => 'required|string|max:255',
            'title_meta' => 'nullable|string|max:255',
            'content_meta' => 'nullable|string',
            'keyword_meta' => 'nullable|string',
        ]);

        Categories::create($validatedData);

        return redirect()->route('admin.Categories')->with('success', 'Category added successfully.');
    }
    public function display()
    {
        $categories = Categories::orderBy('updated_at', 'desc')->get();
        return view('admin.Categories', compact('categories'));
    }
    public function edit($id)
    {
        $category = Categories::findOrFail($id); // Retrieve the category by its ID
        return view('admin.edit', compact('category')); // Pass the category to the edit view
    }
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'category_name' => 'required|string|max:255',
            'title_meta' => 'nullable|string|max:255',
            'content_meta' => 'nullable|string',
            'keyword_meta' => 'nullable|string',
        ]);
    
        $category = Categories::findOrFail($id);
        $category->update($validatedData);
    
        return redirect()->route('admin.Categories')->with('success', 'Category updated successfully.');
    }
        

public function destroy($id)
{
    $category = Categories::findOrFail($id);
    $category->delete();
    
    return redirect()->route('admin.Categories')->with('success', 'Category deleted successfully.');
}


}