<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Comment;

class MenuController extends Controller
{
    public function index() {
    	$categories = Category::all();

    	return view('menu.index', compact('categories'));
    }

    public function show($id) {
    	$product = Product::findOrFail($id);
    	$sames = Product::where('category_id', $product->category->id)->get();

    	return view('menu.show', compact('product', 'sames'));
    }
}
