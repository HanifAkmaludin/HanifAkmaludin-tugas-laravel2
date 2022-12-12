@extends('templates.template')

@section('content')
@include('components.navbar')
<section>
        <div class="container pt-10">
            <h1 class="text-center text-4xl font-light uppercase mb-10">Daftar Blog</h1>
            <a href="{{ route('blog.store') }}" class="py-2 px-4 bg-green-400 rounded-lg hover:bg-green-400/70 text-white">Tambah Blog</a>
            <div class="flex mt-10 flex-wrap gap-[40px]">
                @foreach($blog as $b => $val)
                    <div class="card shadow-xl w-col-4 pb-4">
                        <div class="card-img bg-slate-400">
                            <img src="{{ Storage::url($val->gambar) }}" alt="hahah" class="h-[210px] w-full object-cover object-center"/>
                        </div>
                        <div class="card-description flex flex-col items-center mt-3 gap-2 px-4">
                            <h3 class="text-xl font-light">{{ $val->judul }}</h3>
                            <p class="text-base font-light w-full">{{ $val->artikel }} .....</p>
                        </div>
                        <div class="py-3 px-4 flex justify-center flex-col gap-4 mt-5">
                            <div>
                                <a href="{{ route('blog.readmore', ['id' => $val->id]) }}" class="bg-blue-500 text-white px-3 py-1 rounded-lg">
                                    <button>Readmore</button>
                                </a>
                            </div>
                            <div class="flex gap-4">
                                <a href="{{ route('blog.update', ['id' =>  $val->id]) }}" class="bg-yellow-500 px-3 py-1 rounded-lg text-white">
                                    <button>Update</button>
                                </a>
                                <a href="{{ route('blog.destroy', ['id' => $val->id]) }}" class="bg-red-500 px-3 py-1 rounded-lg text-white">
                                    <button>Hapus</button>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
</section>
@endsection
