@extends('layouts.app')

@section('content')
    <head>
        <meta charset="utf-8"/>
        <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
        <title>@yield('title', 'Blog News')</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet"> 
    </head>
    <body>
        <div class="container">
            <h1 class="text-6xl font-extrabold text-gray-900 mb-2">Daftar Artikel</h1>
            <br>
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
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Main Article -->
                <div class="lg:col-span-2">
                    @foreach($blogs as $blog)
                    <div class="bg-white rounded-lg shadow-xl overflow-hidden mb-8 hover:shadow-2xl transition duration-300">
                        <img src="{{ $blog->image_url }}" alt="{{ $blog->title }}" class="w-full h-56 object-cover"/>
                        <div class="p-6">
                            <h3 class="text-3xl font-semibold text-gray-800 hover:text-blue-600 transition duration-300">
                            <a href="{{ route('blogs.show', $blog) }}">{{ $blog->title }}</a>
                            </h3>
                            <p class="text-sm text-gray-500 mt-2">by {{ $blog->author }} - {{ $blog->created_at->format('M d, Y') }}</p>
                            <p class="text-gray-700 mt-4">{{ Str::limit($blog->content, 200) }}</p>
                            <div class="mt-4 text-right">
                                <a href="{{ route('blogs.show', $blog) }}" class="text-blue-600 font-semibold hover:text-blue-800 transition duration-300">Read more</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            @endif
        </div>
        
    </body>
    
@endsection
