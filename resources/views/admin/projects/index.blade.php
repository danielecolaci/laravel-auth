@extends('layouts.admin')

@section('content')
    <section class="py-5">
        <div class="container">
            <h4 class="text-muted">All Projects</h4>
            <div class="row">
                @forelse ($projects as $project)
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="{{ $project->image }}" class="card-img-top img-fluid" alt="{{ $project->title }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $project->title }}</h5>
                                <h6 class="card-subtitle mb-2 text-muted">{{ $project->subtitle }}</h6>
                                <p class="card-text">{{ Str::limit($project->description, 100) }}</p>
                                <p class="card-text"><small class="text-muted">{{ $project->url_code }}</small></p>
                                <a href="{{ route('admin.projects.show', $project) }}"
                                    class="btn btn-primary btn-sm">Show</a>
                                <a href="#" class="btn btn-warning btn-sm">Edit</a>
                                <a href="#" class="btn btn-danger btn-sm">Delete</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <div class="alert alert-info text-center">No projects yet</div>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
@endsection
