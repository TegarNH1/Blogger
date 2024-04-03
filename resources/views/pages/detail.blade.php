@extends('layouts.app')

@section('content')
    <section class="bg-soft-blue">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <h1 class="text-dark fw-bold">
                        {{ $article->title }}
                    </h1>
                    <p class="mb-0 text-secondary fs-7">Dipublish pada
                        {{ Carbon\Carbon::parse($article->created_at)->translatedFormat('d F Y') }} oleh
                        {{ $article->user->name }}</p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <img src="{{ url('storage/' . $article->thumbnail) }}" alt="Image" class="rounded-2 mb-5">

                    <div class="text-secondary">
                        {!! $article->body !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
