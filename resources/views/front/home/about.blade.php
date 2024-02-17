@extends('front.layout.template')

@section('title', 'About | FR')
    


@section('content')
    
        <!-- Page content-->
        <div class="container">
            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-8">
                    <!-- Featured blog post-->
                    <div class="card mb-4 shadow-sm">
                        <a href="{{ asset('front/img/laravel.png') }}">
                            <img class="card-img-top featured-img" src="{{ asset('front/img/laravel.png') }}" alt="..." />
                        </a>
                        <div class="card-body">
                            <div class="small text-muted">{{ date('d/m/y') }}</div>
                            <h2 class="card-title">About FR</h2>
                            <p class="card-text">sunt cumque amet sit, velit voluptas reprehenderit illo! Assumenda excepturi illo, laudantium molestiae officiis deserunt! Officiis, iure. Vitae, nulla architecto? Deleniti est incidunt sunt quibusdam maiores! Sed quas voluptas quia aperiam. Autem neque placeat veritatis, itaque reiciendis distinctio esse, maiores magni molestiae, provident aperiam laboriosam accusamus nulla. Aspernatur corrupti culpa a sit molestias commodi rerum, maiores temporibus est, pariatur inventore quidem quasi dignissimos voluptate in, laborum quo fuga quam deserunt eveniet. Quis tempora magni minima vitae nemo quam expedita blanditiis quisquam reprehenderit aliquid?

                                Lorem ipsum dolor sit amet consectetur adipisicing elit. At saepe, sed quam quis repellendus eum magni assumenda, eius quidem quo labore! Soluta, earum. Rerum necessitatibus consequatur facere assumenda quisquam blanditiis optio cumque adipisci, officiis voluptatum, explicabo quasi quo rem. Dolor deserunt tempora consequatur optio molestias quos, rem earum ad facere beatae officia nostrum cupiditate quisquam culpa fugiat excepturi, quaerat id soluta totam voluptate. Molestiae ex eligendi aut. Ratione impedit perspiciatis, error dicta dolor officia magni doloribus minima earum iure, eaque totam dolores animi debitis sequi ducimus, recusandae tenetur quae modi consectetur adipisci a velit. Delectus doloribus sapiente corrupti sed impedit.</p>
                        </div>
                    </div>
                </div>
                <!-- Side widgets-->
                @include('front/layout/side-widget')
            </div>
        </div>


@endsection