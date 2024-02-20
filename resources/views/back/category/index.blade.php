@extends('back.layout.template')
@section('title', 'List Category | Admin')
@section('content')
    {{-- section harus sama dengan yeild --}}

    {{-- content --}}
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Categories</h1>

        </div>

        <div class="mt-3">
            <button class="btn btn-success mb-2" data-bs-toggle="modal" data-bs-target="#modalCreate">Create</button>

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
                        {{ session('success') }}
                    </div>
                </div>
            @endif
            <!-- Create Post Form -->
            <div class="flex flex-wrap -mx-3">
                <div class="flex-none w-full max-w-full px-3">
                    <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                        <div class="p-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                            <h6>Category</h6>
                        </div>
                        <div class="flex-auto px-0 pt-0 pb-2">
                            <div class="p-6 overflow-x-auto">
                                <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                                    <thead class="align-bottom">
                                        <tr>
                                            <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">No</th>
                                            <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Name</th>
                                            <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Slug</th>
                                            <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Created_at</th>
                                            <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Function</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($categories as $item)
                                            <tr>
                                                <td class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparentp-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                    <p class="mb-0 text-xs font-semibold leading-tight">{{ $loop->iteration }}</p>
                                                </td>
                                                <td class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                    <p class="mb-0 text-xs font-semibold leading-tight">{{ $item->name }}</p>
                                                </td>
                                                <td class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                    <p class="mb-0 text-xs font-semibold leading-tight">{{ $item->slug }}</p>
                                                </td>
                                                <td class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                    <p class="mb-0 text-xs font-semibold leading-tight">{{ $item->created_at }}</p>
                                                </td>
                                                <td class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                    <div class="text-center">
                                                        <button class="btn btn-secondary" data-bs-toggle="modal"
                                                            data-bs-target="#modalUpdate{{ $item->id }}">edit</button>
                                                        <button class="btn btn-danger" data-bs-toggle="modal"
                                                            data-bs-target="#modalDelete{{ $item->id }}">delete</button>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Create-->
        @include('back.category.create-modal')
        <!-- Modal Update-->
        @include('back.category.update-modal')
        <!-- Modal Delete-->
        @include('back.category.delete-modal')

    </main>
    {{-- footer --}}
@endsection
