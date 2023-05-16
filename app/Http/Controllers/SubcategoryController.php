<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    public function create(Category $category)
    {
        return view('subcategories.create', compact('category'));
    }

    public function store(Request $request, Category $category)
    {
        $subcategory = new Subcategory($request->all());
        $category->subcategories()->save($subcategory);
        return redirect()->route('categories.show', $category)->with('success', 'Subcategory created successfully.');
    }

    public function edit(Category $category, Subcategory $subcategory)
    {
        return view('subcategories.edit', compact('category', 'subcategory'));
    }

    public function update(Request $request, Category $category, Subcategory $subcategory)
    {
        $subcategory->update($request->all());
        return redirect()->route('categories.show', $category)->with('success', 'Subcategory updated successfully.');
    }

    public function destroy(Category $category, Subcategory $subcategory)
    {
        $subcategory->delete();
        return redirect()->route('categories.show', $category)->with('success', 'Subcategory deleted successfully.');
    }
}
