@extends('templates.template')

@section('content')
<section>
    <a href="{{ route('product.list') }}" class="w-[40px] h-[40px] bg-slate-300 rounded-full flex justify-center items-center mt-10 ml-10">
        <i class="fa-solid fa-arrow-left text-xl"></i>
    </a>
    <div class="container">
        <h1 class="text-center text-4xl font-light uppercase">Tambah Product</h1>
        <form method="post" action="{{ route('product.create') }}" enctype="multipart/form-data" class="mt-9 w-[50%] mx-auto flex flex-col gap-4">
            @csrf
            <div class="flex gap-4">
                <label for="nama" class="text-2xl w-[20%]">Nama</label>
                <input type="text" name="nama" id="nama" class="border border-slate-300 w-[80%] focus:outline-none py-2 px-3 rounded-lg focus:border-blue-400">
            </div>
            <div class="flex gap-4">
                <label for="stok" class="text-2xl w-[20%]">Stok</label>
                <input type="number" name="stok" id="stok" class="border border-slate-300 w-[80%] focus:outline-none py-2 px-3 rounded-lg focus:border-blue-400">
            </div>
            <div class="flex gap-4">
                <label for="deskripsi" class="text-2xl w-[20%]">Deskripsi</label>
                <textarea name="deskripsi" id="deskripsi" class="border border-slate-300 w-[80%] focus:outline-none py-2 px-3 rounded-lg h-[150px] focus:border-blue-400"></textarea>
            </div>
            <div class="flex gap-4">
                <label for="harga" class="text-2xl w-[20%]">Harga</label>
                <input type="number" name="harga" id="harga" class="border border-slate-300 w-[80%] focus:outline-none py-2 px-3 rounded-lg focus:border-blue-400">
            </div>
            <div class="flex gap-4">
                <label for="gambar" class="text-2xl w-[20%]">Image</label>
                <input type="file" name="gambar" accept="image/*" id="gambar" class="w-[80%]">
            </div>
            <button type="submit" class="bg-[#ebebeb] w-28 h-10 rounded-lg flex justify-center items-center mt-10">Tambah</button>
        </form>
    </div>
</section>
@endsection