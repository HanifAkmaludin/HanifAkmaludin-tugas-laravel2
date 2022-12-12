@extends("templates.template")

@section('content')
<section>
    <a href="{{ route('blog.list') }}" class="w-[40px] h-[40px] bg-slate-300 rounded-full flex justify-center items-center mt-10 ml-10">
        <i class="fa-solid fa-arrow-left text-xl"></i>
    </a>
    <div class="container w-[70%]">
        <h1 class="text-4xl">{{ $blog->judul }}</h1>
        <div class="my-10">
            <img src="{{ Storage::url($blog->gambar) }}" alt="" class="w-full h-[350px] object-cover object-center ">
        </div>
        <div>
            @foreach($blog->artikel as $b)
            <p>{{ $b }}</p><br>
            @endforeach
        </div>
    </div>
</section>
@endsection