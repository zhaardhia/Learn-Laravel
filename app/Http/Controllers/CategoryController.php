<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Book;


class CategoryController extends Controller
{
    public function index(){
        return view ('categoryBar', [
            "categories" => Category::all()
        ]);
    }
    public function show($id){
        $selectedCategory = Book::where('category_id', '=', $id)
            ->get();
        $category = Category::where('id', '=', $id)
            ->get();
        
        return view('home', [
            "title" => $category[0]->category,
            "books" => $selectedCategory,
            "categories" => Category::all()
        ]);
    }
}
