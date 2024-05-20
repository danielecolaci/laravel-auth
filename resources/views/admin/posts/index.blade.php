@extends('layouts.admin')

@section('content')
    <section class="py-5">
        <div class="container">
            <h4 class="text-muted">All posts</h4>
            <div class="row">
                @forelse ($posts as $post)
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="{{ $post->cover_image }}" class="card-img-top img-fluid" alt="{{ $post->title }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $post->title }}</h5>
                                <p class="card-text">{{ Str::limit($post->content, 100) }}</p>
                                <p class="card-text"><small class="text-muted">{{ $post->slug }}</small></p>
                                <a href="#" class="btn btn-primary btn-sm">View</a>
                                <a href="#" class="btn btn-warning btn-sm">Edit</a>
                                <a href="#" class="btn btn-danger btn-sm">Delete</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <div class="alert alert-info text-center">No posts yet</div>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
@endsection
