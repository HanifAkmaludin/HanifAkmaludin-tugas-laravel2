@extends('templates.template')

@section('content')
@include("components.navbar")
<section id="product">
    <div class="container pt-10">
            <h1 class="text-center text-4xl font-light uppercase mb-10">Product</h1>
            <div class="flex mt-10 flex-wrap gap-[40px]">
                @foreach($product as $p => $val)
                    <div class="card shadow-xl w-col-4 pb-2">
                        <div class="card-img bg-slate-400">
                            <img src="{{ Storage::url($val->gambar) }}" alt="hahah" class="h-[210px] w-full object-cover object-center"/>
                        </div>
                        <div class="card-description flex flex-col items-center mt-3 gap-2">
                            <h3 class="text-xl font-light">{{ $val->nama }}</h3>
                            <p class="text-base font-light">Stok: {{ $val->stok }}</p>
                            <p class="text-xl font-bold">Rp.{{ number_format($val->harga, 2) }}</p>
                        </div>
                        <div class="py-3 px-3 flex justify-center gap-4 mt-5">
                            <a href="{{ route('product.detail', ['id' => $val->id]) }}" class="bg-blue-500 text-white px-3 py-1 rounded-lg">
                                <button>Detail</button>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
    </div>
</section>
<section id="blog" class="mt-10">
    <div class="container">
        <h1 class="text-center text-4xl font-light uppercase mb-10">Blog</h1>
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
                        <div class="py-3 px-4 flex mt-5">
                            <a href="{{ route('blog.readmore', ['id' => $val->id]) }}" class="bg-blue-500 px-3 py-1 text-white rounded-lg">
                                <button>Readmore</button>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
    </div>
</section>
@endsection