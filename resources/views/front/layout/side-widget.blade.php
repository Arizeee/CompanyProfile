<div class="col-lg-4">
    <!-- Search widget-->
    <div class="card mb-4">
        <div class="card-header">Search</div>
        <div class="card-body">
            <form action="{{ route('articlesearch') }}" method="POST">
                @csrf
                <div class="input-group">
                    <input class="form-control" type="text" name="keyword" placeholder="seacrh article..."
                        aria-label="seacrh article..." aria-describedby="button-search" />
                    <button class="btn btn-primary" id="button-search" type="submit">cari</button>
                </div>
            </form>
        </div>
    </div>
    <!-- Categories widget-->
    <div class="card mb-4 shadow-sm">
        <div class="card-header">Categories</div>
        <div class="card-body">
            <div>
                @foreach ($categories as $item)
                    <span ><a href="{{ url('category/'.$item->slug) }}" class="bg-primary badge text-white unstyle-list-category" href="#!">{{ $item->name }}({{ $item->articles_count }})</a></span>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Side widget-->
    <div class="card mb-4 shadow-sm">
        <div class="card-header">Popular post</div>
        <div class="card-body">
            @foreach ($popular_posts as $item)
            <div class="card mb-3">
                <div class="row">
                    <div class="col-md-3">
                        <img src="{{ asset('storage/back/'.$item->img) }}" alt="{{ $item->title }}" class="img-fluid">
                    </div>
                    <div class="col-md-9">
                        <div class="card-body">
                            <div class="card-title">
                                <a href="{{ url('post/'.$item->slug) }}">
                                    {{ $item->title }}
                               </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                
            @endforeach
        </div>
    </div>
</div>
