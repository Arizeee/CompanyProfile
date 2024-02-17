@extends('back.layout.template')

@section('title', 'Create Articles | Admin')
@section('content')
    {{-- section harus sama dengan yeild --}}

    {{-- content --}}
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Create Articles</h1>

        </div>

        <div class="mt-3">
            <a href="{{ url('article/create') }}" class="btn btn-success mb-2">Create</a>

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


            <form action="{{ url('article') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="title">Title</label>
                            <input type="text" name="title" id="title" class="form-control"
                                value="{{ old('title') }}">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="category_id">Category</label>
                            <select name="category_id" id="category_id" class="form-control">
                                <option value="" hidden> Choose Category</option>
                                @foreach ($categories as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="desc">Desc</label>
                    <textarea name="desc" id="myeditor" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <label for="img">img (MAX 2MB)</label>
                    <input type="file" name="img" id="img" class="form-control">
                    <div class="mt-1">
                        <img src="" class="img-thumbnail img-preview" width="100px">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label for="status">status</label>
                        <select name="status" id="status" class="form-control">
                            <option value="" hidden> Choose Status</option>
                            <option value="1">Publish</option>
                            <option value="0">Private</option>
                        </select>
                    </div>
                    <div class="col-6">
                        <label for="publish_date">Publish</label>
                        <input type="date" name="publish_date" id="publish_date" class="form-control">
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="category_id">Writer</label>
                            <select name="user_id" id="user_id" class="form-control">
                                <option value="" hidden> Choose Writer</option>
                                @foreach ($users as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <div class="float-end">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>


    </main>
    {{-- footer --}}
@endsection

@push('js')
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>

    <script>
        var options = {
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token',
            clipboard_handleImages: false
        };
    </script>

    <script>
        // ing preview

        $("#img").change(function() {
            previewImage(this);
        });

        function previewImage(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('.img-preview').attr('src', e.target.result); // Perbaiki sintaks ini
                };

                reader.readAsDataURL(input.files[0]);
            }
        }


        CKEDITOR.replace('myeditor', options);
    </script>
@endpush
