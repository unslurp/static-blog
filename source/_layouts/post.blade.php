@extends('_layouts.master')

@section('title', $page->title)

@section('content')
    <h1>{{ $page->title }}</h1>

    @if ($page->image)
        <img src="{{ $page->imageCdn($page->image) }}" style="object-fit: cover; height: 250px; width: 100%;">
    @endif

    <p>
        <strong>{{ date('F j, Y', $page->date) }}</strong><br>
        @foreach ($page->tags as $tag)
            <a href="/tags/{{ $tag }}">{{ $tag }}</a>
            {{ $loop->last ? '' : '-' }}
        @endforeach
    </p>

    <blockquote data-phpdate="{{ $page->date }}">
        <em>WARNING: This post is over a year old. Some of the information this contains may be outdated.</em>
    </blockquote>

    <hr>

    @yield('postContent')

    <hr>

    @include('_partials.share')

@endsection
