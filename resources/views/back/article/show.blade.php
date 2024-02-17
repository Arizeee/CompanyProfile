@extends('back.layout.template')
@section('title', 'Detail Articles | Admin')
@section('content')
    {{-- section harus sama dengan yeild --}}

    {{-- content --}}
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Detail Articles</h1>

        </div>

        <div class="mt-3">
            <table class="table table-striped table bordered">
                <tr>
                    <th>Title</th>
                    <td>: {{ $article->title }}</td>
                </tr>
                <tr>
                    <th>Category</th>
                    <td>: {{ $article->Category->name }}</td>
                </tr>
                <tr>
                    <th>Desc</th>
                    <td>: {!! $article->desc !!}</td>
                </tr>
                <tr>
                    <th>Img</th>
                    <td>: <img src="{{ asset('storage/back/' . $article->img) }}" alt="" width="20%"></td>
                </tr>
                <tr>
                    <th>Views</th>
                    <td>: {{ $article->views }}x</td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>: 
                        @if ($article->status == 1)
                            <span class="badge bg-success">Published</span>
                        @else
                            <span class="badge bg-danger">Private</span>
                        @endif
                    </td>
                </tr>
                <tr>
                    <th>Publish Date</th>
                    <td>
                        : {{ $article->publish_date }}
                    </td>
                </tr>
                <tr>
                    <th>Writer</th>
                    <td>
                        {{ $article->User->name }}
                    </td>
                </tr>
            </table>
            <div class="float-end">
                <a href="{{ url('article') }}" class="btn btn-secondary">Back</a>
            </div>
        </div>


    </main>
    {{-- footer --}}
@endsection
