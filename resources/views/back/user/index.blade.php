@extends('back.layout.template')
@section('title', 'List User | Admin')
@section('content')
    {{-- section harus sama dengan yeild --}}

    {{-- content --}}
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">User</h1>

        </div>

        <div class="mt-3">
            @if (auth()->user()->role == 1)
            <button class="btn btn-success mb-2" data-bs-toggle="modal" data-bs-target="#modalCreate">Create</button>

            @endif
            <!-- /resources/views/post/create.blade.php -->
            @if ($errors->any())
                <div class="my-3">
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif

            @if (session('success'))
                <div class="my-3">
                    <div class="alert alert-success">
                        {{session('success')}}
                    </div>
                </div>
            @endif
            <!-- Create Post Form -->
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Created_at</th>
                        <th>Function</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->slug }}</td>
                            <td>{{ $item->created_at }}</td>
                            <td>
                                <div class="text-center">
                                    <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#update">edit</button>
                                    @if (auth()->user()->role == 1)
                                    @if ($item->id != auth()->user()->id)

                                    <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{ $item->id }}">delete</button>
                                    @endif
                                    @endif
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


        @include('back.user.update')
        @include('back.user.create-modal')
        @include('back.user.delete')
        <!-- Modal Create-->
        <!-- Modal Update-->
        <!-- Modal Delete-->

    </main>
    {{-- footer --}}
@endsection
