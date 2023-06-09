<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CategoryController extends Controller
{
    public function index()
    {
        
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:categories|max:255',
            'description' => 'nullable|string|max:500',
        ]);

        $category = Category::create($validatedData);
        return redirect()->route('categories.index')->with('success', 'Category created successfully!');
    }

    public function show(Category $category)
    {
        return view('categories.show', compact('category'));
    }

    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $validatedData = $request->validate([
            'name' => [
                'required',
                'max:255',
                Rule::unique('categories')->ignore($category->id),
                'description' => 'nullable|string|max:500',
            ],
        ]);

        $category->update($validatedData);
        return redirect()->route('categories.index')->with('success', 'Category updated successfully!');
    }

    public function destroy(Category $category)
    {
       // Check if category has associated products
        $productsCount = Product::where('category_id', $category->id)->count();
        if ($productsCount > 0) {
        return redirect()->route('categories.index')->with('error', 'Cannot delete category. It has associated products.');
        }
       
        $category->delete();
        return redirect()->route('categories.index')->with('success', 'Category deleted successfully!');
    }
}
