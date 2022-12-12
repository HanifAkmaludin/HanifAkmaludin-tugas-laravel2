<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;


class ProductController extends Controller
{
    public function home(){
        $product = Product::query()->get();
        return view('home', [
            'product' => $product
        ]);
    }

    public function index() {
        $product = Product::query()->get();
        return view('product.list', [
            'product' => $product
        ]);
    }

    public function store(){
        return view('product.store');
    }

    public function create(Request $request){
        $data = [
            'nama' => $request->input('nama'),
            'stok' => $request->input('stok'),
            'deskripsi' => $request->input('deskripsi'),
            'harga' => $request->input('harga'),
            'gambar' => $request->file('gambar')->store('img', 'public')
        ];
        Product::query()->create($data);
        return redirect(route('product.list'));
    }

    public function update($id){
        $product = Product::query()->where('id', $id)->first();
        return view('product.update', [
            'product' => $product
        ]);
    }

    public function edit(Request $request, $id){
        $product = [
            'nama' => $request->input('nama'),
            'stok' => $request->input('stok'),
            'deskripsi' => $request->input('deskripsi'),
            'harga' => $request->input('harga')
        ];

        if($request->hasFile('gambar')){
            $product['gambar'] = $request->file('gambar')->store('img','public');
        }

        Product::query()->where('id', $id)->update($product);
        return redirect(route('product.list'));
    }

    public function detail($id){
        $product = Product::query()->where('id', $id)->first();
        return view('product.detail', [
            'product' => $product
        ]);
    }

    public function destroy($id){
        $product = Product::query()->where('id', $id)->first();
        $product->delete();
        Storage::disk('public')->delete($product->gambar);
        return redirect(route('product.list'));
    }
}


 // public function upload(Request $request) {
    //     if($request->method() === "GET"){
    //         $publicfile = public_path("gambar\\6392a8ef735ed.png");
    //         unlink($publicfile);
    //         return view('upload');
    //     }

    //     $file = $request->file("gambar");
    //     $filename = $file->hashName();
    //     $path = $file->store("gambar");
    //     return Storage::download($path);
    //     $file->move("gambar", $filename);
    //     $path = $request->getSchemeAndHttpHost() . "/gambar/" . $filename;
    //     $path2 = str_replace($request->getSchemeAndHttpHost(), "", $path);
    //     dd([$path, $path2]);
    // }
