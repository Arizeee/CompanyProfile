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
        <div class="row">
            @forelse ($article as $item)
                <div class="col-4">
                    <!-- Blog post-->
                    <div class="card mb-4 shadow-sm">
                        <a href="{{ url('post/'.$item->slug) }}"><img class="card-img-top post-img" src="{{ asset('storage/back/'.$item->img) }}" /></a>
                        <div class="card-height card-body">
                            <div class="small text-muted">
                                {{ $item->created_at->format('d-m-Y') }}
                                <a href="{{ url('category/'.$item->Category->slug) }}">{{ $item->Category->name }} | {{ $item->User->name }}</a>
                            </div>
                            <h2 class="card-title h4">{{ $item->title }}</h2>
                    <p class="card-text">{{ Str::limit(strip_tags($item->desc), 200, '...') }}</p>
        
                            <a class="btn btn-primary" href="{{ url('post/'.$item->slug) }}">Read more →</a>
                        </div>
                    </div>
                </div>
            @empty
            <h3>not found</h3>
            @endforelse

        </div>
        {{ $article->onEachSide(0)->links() }}
    </div>
@endsection
