@extends('templates.template')

@section('content')
<section>
    <a href="{{ route('product.list') }}" class="w-[40px] h-[40px] bg-slate-300 rounded-full flex justify-center items-center mt-10 ml-10">
        <i class="fa-solid fa-arrow-left text-xl"></i>
    </a>
    <h1 class="text-center text-4xl font-light uppercase">Detail Product</h1>
    <div class="container flex pt-10 gap-10">
        <div class="card-img w-[40%]">
            <img src="{{ Storage::url($product->gambar) }}" class="h-[400px] w-full object-cover">
        </div>
        <div class="card-description w-[60%]">
            <h3 class="text-3xl mb-3">{{ $product->nama }}</h3>
            <p class="text-2xl font-light mb-3">Stok: {{ $product->stok }}</p>
            <p class="text-xl mb-3 overflow-y-scroll h-[260px] scroll-bar">{{ $product->deskripsi }}</p>
            <p class="text-3xl font-bold">Rp.{{ number_format($product->harga, 2) }}</p>
        </div>
    </div>
</section> 
@endsection
