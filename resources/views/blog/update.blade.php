@extends('templates.template')


@section('content')
<section>
    <a href="{{ route('blog.list') }}" class="w-[40px] h-[40px] bg-slate-300 rounded-full flex justify-center items-center mt-10 ml-10">
        <i class="fa-solid fa-arrow-left text-xl"></i>
    </a>
    <div class="container">
        <h1 class="text-center text-4xl font-light uppercase">Update Postingan</h1>
        <form method="post" action="{{ route('blog.edit', ['id' => $blog->id]) }}" enctype="multipart/form-data" class="mt-6 w-[50%] mx-auto flex flex-col gap-4">
            @method("put")
            @csrf
            <div class="flex gap-4">
                <label for="judul" class="text-2xl w-[20%]">Judul</label>
                <input type="text" name="judul" id="judul" value="{{ $blog->judul }}" class="border border-slate-300 w-[80%] focus:outline-none py-2 px-3 rounded-lg">
            </div>
            <div class="flex gap-4">
                <label for="artikel" class="text-2xl w-[20%]">Artikel</label>
                <textarea name="artikel" id="artikel" class="border border-slate-300 w-[80%] h-[150px] focus:outline-none py-2 px-3 rounded-lg">{{ $blog->artikel }}</textarea>
            </div>
            <div class="flex gap-4">
                <label for="gambar" class="text-2xl w-[20%]">Image</label>
                <input type="file" name="gambar" accept="image/*" value="pilih gambar">
            </div>
            <button type="submit" class="bg-[#ebebeb] w-28 h-10 rounded-lg flex justify-center items-center mt-10">Edit</button>
        </form>
    </div>
</section>
@endsection