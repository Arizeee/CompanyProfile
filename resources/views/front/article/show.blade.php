@extends('front.layout.template')
@section('title', $article->title, 'FR')
@section('content')
    <!-- Page content -->
    <section id="blog" class="blog_area pt-120">
        <div class="container">
            <div class="row justify-center">
                <div class="w-full lg:w-1/2">
                    <div class="section_title text-center pb-6">
                        {{-- <h5 class="sub_title">Blog</h5> --}}
                        <h4 class="main_title">{{ $article->title }}</h4>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->

        <div class="row justify-center pb-25">
            <!-- Loop untuk artikel -->
            <div class="w-full md:w-8/12 lg:w-6/12 xl:w-4/12" style="width: 70%">
                <!-- Blog post -->
                <div class="single_blog mx-3 mt-8 rounded-xl bg-white transition-all duration-300 overflow-hidden hover:shadow-lg">
                    <!-- Gambar blog -->
                    <div class="blog_image">
                        <img src="{{ asset('storage/back/'.$article->img) }}" alt="blog" class="w-930 h-620 object-cover" />
                    </div>
                    <!-- Konten blog -->
                    <div class="blog_content p-4 md:p-5">
                        <!-- Info penulis dan tanggal -->
                        <ul class="blog_meta flex justify-between">
                            <li class="text-body-color text-sm md:text-base">By: {{ $article->User->name }} | {{ $article->created_at->format('d-m-Y') }} </li>
                            <a href="{{ url('category/' . $article->Category->slug) }}" class="text-body-color text-sm md:text-base">{{ $article->Category->name }} | {{ $article->views }}x</a>
                        </ul>
                        <!-- Judul blog -->
                        {{-- <h3 class="blog_title"><a href="#">{{ $article->title }}</a></h3> --}}
                        <!-- Tombol Read More -->
                        <p class="text-base text-gray-700 mt-5">{!! $article->desc !!}</p>
                    </div>
                </div> <!-- single_blog -->
            </div>
        </div> <!-- row -->
    </section> <!-- blog_area -->
@endsection

    {{-- <!-- Side widgets-->
    @include('front/layout/side-widget') --}}
