<section id="navbar" class="bg-blue-400">
    <div class="container flex justify-between items-center py-5">
        <div class="navbar-brand text-white">
            <h1 class="text-2xl">Toko</h1>
        </div>
        <div class="navbar-list">
            <ul class="flex gap-5 text-white">
                <li><a href="{{ route('homepage') }}">Home</a></li>
                <li><a href="{{ route('product.list') }}">Product</a></li>
                <li><a href="{{ route('blog.list') }}">Blog</a></li>
            </ul>
        </div>
    </div>
</section>