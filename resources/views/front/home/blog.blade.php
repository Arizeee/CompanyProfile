@extends('front.layout.template')

@section('title', 'Blog | FR')



@section('content')
<section id="blog" class="blog_area pt-120">
    <div class="container">
        <div class="row justify-center">
            <div class="w-full lg:w-1/2">
                <div class="section_title text-center pb-6">
                    <h5 class="sub_title">Blog</h5>
                    <h4 class="main_title">From The Blog</h4>
                </div> <!-- section title -->
            </div>
        </div> <!-- row -->
        @include('front/layout/side-widget')
        <!-- Konten lain di sini -->
        <div class="row justify-center lg:justify-start">
            <!-- Loop untuk artikel -->
            @foreach ($article as $item)
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

        <!-- Pagination -->
        <div class="flex justify-center mb-4 mt-10">
            <nav class="inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                <!-- Previous button -->
                @if ($article->previousPageUrl())
                <a href="{{ $article->previousPageUrl() }}" rel="prev" class="px-3 py-2 bg-white border border-gray-300 text-sm font-medium text-gray-500 rounded-l-md hover:bg-gray-50">
                    Previous
                </a>
                @endif

                <!-- Numbered page links -->
                @foreach ($article->getUrlRange(1, $article->lastPage()) as $page => $url)
                @if ($page == $article->currentPage())
                <span aria-current="page" class="px-3 py-2 bg-theme-color border border-theme-color text-sm font-medium text-white rounded-md">{{ $page }}</span>
                @else
                <a href="{{ $url }}" class="px-3 py-2 bg-white border border-gray-300 text-sm font-medium text-gray-500 hover:bg-gray-50">{{ $page }}</a>
                @endif
                @endforeach

                <!-- Next button -->
                @if ($article->nextPageUrl())
                <a href="{{ $article->nextPageUrl() }}" rel="next" class="px-3 py-2 bg-white border border-gray-300 text-sm font-medium text-gray-500 rounded-r-md hover:bg-gray-50">
                    Next
                </a>
                @endif
            </nav>
        </div>

    </div> <!-- container -->



</section> <!-- blog_area -->

