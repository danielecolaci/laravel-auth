@extends('layouts.admin')

@section('content')
    <section class="py-5">
        <div class="container">
            <a href="{{ route('admin.projects.index') }}" class="btn btn-primary btn-sm mb-5">Back</a>
            <div class="card">
                <div class="card-body">
                    <img src="{{ $project->image }}" alt="" class="card-image w-100">
                    <h5 class="card-title">{{ $project->title }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $project->subtitle }}</h6>
                    <p class="card-text">{{ $project->description }}</p>
                    <button class="btn btn-primary"><a href="{{ $project->url_code }}"></a>Code</button>
                    <button class="btn btn-secondary"><a href="{{ $project->url_web }}"></a>Web</button>
                </div>
            </div>
        </div>
    </section>
@endsection
