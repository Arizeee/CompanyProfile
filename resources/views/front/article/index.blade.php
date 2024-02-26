@extends('front.layout.template')
@section('title', 'Article | FR')
@section('content')
    <!-- Page content-->

    <div class="container">
        <div class="mb-3">
            <form action="{{ route('articlesearch') }}" method="POST">
                @csrf
                <div class="input-group">
                    <input class="form-control" type="text" name="keyword" placeholder="seacrh article..."
                        aria-label="seacrh article..." aria-describedby="button-search" />
                    <button class="btn btn-primary" id="button-search" type="submit">cari</button>
                </div>
            </form>
        </div>

        @if ($keyword)
            <p>Showing article with keyword : <b>{{ $keyword }}</b></p>
            <a href="{{ url('articles') }}" class="btn btn-secondary btn-sm mb-4">reset</a>
        @else

        @endif
        <section id="blog" class="blog_area">
            <div class="container">
                <div class="row justify-center">
                    <div class="w-full lg:w-1/2">
                        <div class="section_title text-center pb-6">
                            <h5 class="sub_title">Blog</h5>
                            <h4 class="main_title">From The Blog</h4>
                        </div> <!-- section title -->
                    </div>
                </div> <!-- row -->

            <div class="row justify-center">
                <!-- Loop untuk artikel -->
                @forelse ($article as $item)
                <div class="w-full md:w-8/12 lg:w-6/12 xl:w-4/12">
                    <!-- Blog post -->
                    <div class="single_blog mx-3 mt-8 rounded-xl bg-white transition-all duration-300 overflow-hidden hover:shadow-lg">
                        <!-- Gambar blog -->
                        <div class="blog_image">
                            <img src="{{ asset('storage/back/'.$item->img) }}" alt="blog" class="w-64 h-48 object-cover" style="width: 405px; height: 362px;">
                        </div>
                        <!-- Konten blog -->
                        <div class="blog_content p-4 md:p-5">
                            <!-- Info penulis dan tanggal -->
                            <ul class="blog_meta flex justify-between">
                                <li class="text-body-color text-sm md:text-base">By: {{ $item->User->name }}</li>
                                <li class="text-body-color text-sm md:text-base">{{ $item->created_at->format('d-m-Y') }}</li>
                            </ul>
                            <!-- Judul blog -->
                            <h3 class="blog_title"><a href="#" class="truncate overflow-ellipsis">{{ $item->title }}</a></h3>
                            <!-- Tombol Read More -->
                            <a href="{{ url('post/'.$item->slug) }}" class="more_btn">Read More</a>
                        </div>
                    </div> <!-- single_blog -->
                </div>
                @endforeach
            </div> <!-- row -->
        </section> <!-- blog_area -->
        {{ $article->onEachSide(0)->links() }}
    </div>
@endsection
