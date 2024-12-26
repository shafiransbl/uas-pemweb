@extends('layouts.app')

@section('content')
    <div class="container">
    @include('header') <!-- Memanggil file header.blade.php -->
    
        <h1>Daftar Artikel</h1>
        <!-- Menampilkan hasil pencarian -->
        @if(request()->has('query'))
            <h3>Search Results for: "{{ request()->query }}"</h3>
            @if(isset($blogs) && $blogs->isNotEmpty())
                <ul>
                    @foreach ($blogs as $blog)
                        <li>
                            <a href="{{ route('blogs.show', $blog->id) }}">
                                {{ $blog->title }}
                            </a>
                            <!-- Menampilkan cuplikan artikel (misalnya 100 karakter pertama) -->
                            <p>{{ Str::limit($blog->content, 100) }}</p>
                        </li>
                    @endforeach
                </ul>
            @else
                <p>No blogs found matching your search.</p>
            @endif
        @else
            <!-- Menampilkan daftar artikel jika tidak ada pencarian -->
            <ul>
                @foreach ($blogs as $blog)
                    <li>
                        <a href="{{ route('blogs.show', $blog->id) }}">
                            {{ $blog->title }}
                        </a>
                        <!-- Menampilkan cuplikan artikel (misalnya 100 karakter pertama) -->
                        <p>{{ Str::limit($blog->content, 100) }}</p>
                    </li>
                @endforeach
            </ul>
        @endif

    
    </div>
@endsection
