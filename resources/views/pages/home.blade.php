@extends('layouts.app')

@section('content')
    <section class="bg-soft-blue">
        <div class="container">
            <h1 class="text-dark fw-bold">NewsOnlen</h1>
            <p class="mb-0 text-secondary">All the latest Programmer News posts.</p>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row g-4">
                @foreach ($articles as $item)
                    <div class="col-md-4">
                        <a href="{{ route('home.detail', $item->slug) }}" class="article">
                            <img src="{{ url('storage/' . $item->thumbnail) }}" alt="Article 1" class="rounded-3 mb-3">
                            <h3>{{ $item->title }}</h3>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
