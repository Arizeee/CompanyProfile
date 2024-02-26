<div class="lg:col-span-4 flex flex-col">
    <!-- Search widget -->
    <div class="card mb-4">
        <div class="card-header">Search</div>
        <div class="card-body">
            <form action="{{ route('articlesearch') }}" method="POST">
                @csrf
                <div class="flex">
                    <input class="form-control rounded-l-lg flex-grow" type="text" name="keyword" placeholder="Search articles..."
                        aria-label="Search articles..." aria-describedby="button-search" />
                    <button class="btn btn-primary rounded-r-lg ml-1" id="button-search" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>
    <!-- Categories dropdown -->
    <div class="relative">
        <button class="btn btn-primary dropdown-toggle" type="button" onclick="menua('dropdownMenutarget')" id="dropdownMenuButton">
            Select Category
        </button>
        <div class="dropdown-menu absolute bg-white border rounded-md shadow-lg hidden" id="dropdownMenutarget">
            @foreach ($categories as $item)
                <a class="block px-4 py-2 text-gray-800 hover:bg-gray-200" href="{{ url('category/'.$item->slug) }}">{{ $item->name }}</a>
            @endforeach
        </div>

        <script>
            function menua(targeta) {
                let el = document.getElementById(targeta)
                if(el.classList.contains('hidden')) {
                    el.classList.remove('hidden');
                    el.classList.add('block');
                } else {
                    el.classList.remove('block');
                    el.classList.add('hidden');
                }
            }
        </script>
    </div>
</div>


{{-- <div class="card mb-4 shadow-sm">
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
</div> --}}
