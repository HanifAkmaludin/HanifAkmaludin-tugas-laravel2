<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function home(){
        $blog = Blog::query()->get();
        foreach($blog as $b){
            $b->artikel = explode(" ", $b->artikel);
            $b->artikel = array_slice($b->artikel, 0, 15);
            $b->artikel = implode(" ", $b->artikel);
        }
        return view('home', [
            'blog' => $blog
        ]);
    }

    public function index(){
        $blog = Blog::query()->get();
        foreach($blog as $b){
            $b->artikel = explode(" ", $b->artikel);
            $b->artikel = array_slice($b->artikel, 0, 15);
            $b->artikel = implode(" ", $b->artikel);
        }
        return view('blog.list', [
            'blog' => $blog
        ]);
    }

    public function store(){
        return view('blog.store');
    }

    public function create(Request $request){
        $data = [
            'judul' => $request->input('judul'),
            'artikel' => $request->input('artikel'),
            'gambar' => $request->file('gambar')->store('img', 'public')
        ];
        Blog::query()->create($data);
        return redirect(route('blog.list'));
    }

    public function update($id){
        $blog = Blog::query()->where('id', $id)->first();
        return view('blog.update', [
            'blog' => $blog
        ]);
    }

    public function edit(Request $request, $id){
        $blog = [
            'judul' => $request->input('judul'),
            'artikel' => $request->input('artikel')
        ];

        if($request->hasFile('gambar')){
            $blog['gambar'] = $request->file('gambar')->store('img','public');
        }

        Blog::query()->where('id', $id)->update($blog);
        return redirect(route('blog.list'));
    }

    public function destroy($id){
        $blog = Blog::query()->where('id', $id)->first();
        $blog->delete();
        Storage::disk('public')->delete($blog->gambar);
        return redirect(route('blog.list'));
    }

    public function readmore($id){
        $blog = Blog::query()->where('id', $id)->first();
        $blog->artikel = explode("\r\n", $blog->artikel);
        $blog->artikel = array_filter($blog->artikel, function($b){
            if($b !== ""){
                return $b;
            };
        });
        return view('blog.readmore', [
            'blog' => $blog
        ]);
    }
}


