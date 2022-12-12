<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index(){
        $blog = Blog::query()->get();
        $product = Product::query()->get();
        foreach($blog as $b){
            $b->artikel = explode(" ", $b->artikel);
            $b->artikel = array_slice($b->artikel, 0, 15);
            $b->artikel = implode(" ", $b->artikel);
        }
        return view('home', [
            'blog' => $blog,
            'product' => $product
        ]);
    }
}
