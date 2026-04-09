@extends('admin.layouts.app')

@section('title', 'Dashboard')
@section('header', 'Dashboard')

@section('content')
    <div class="grid grid-cols-2 gap-4 max-w-xl">
        <div class="bg-gray-900 rounded-xl border border-gray-800 p-5">
            <p class="text-xs text-gray-500 uppercase tracking-wider mb-1">Total Posts</p>
            <p class="text-3xl font-bold text-white">{{ $totalPosts }}</p>
            <p class="text-xs text-gray-500 mt-1">{{ $publishedPosts }} dipublikasikan</p>
        </div>

        <div class="bg-gray-900 rounded-xl border border-gray-800 p-5">
            <p class="text-xs text-gray-500 uppercase tracking-wider mb-1">Total Galeri</p>
            <p class="text-3xl font-bold text-white">{{ $totalGaleri }}</p>
            <p class="text-xs text-gray-500 mt-1">{{ $activeGaleri }} aktif</p>
        </div>
    </div>

    <div class="mt-6 flex gap-3">
        <a href="{{ route('admin.posts.create') }}" class="inline-flex items-center gap-2 bg-green-700 hover:bg-green-600 text-white text-sm font-medium
                  px-4 py-2 rounded-lg transition">
            + Post Baru
        </a>
        <a href="{{ route('admin.galeri.create') }}" class="inline-flex items-center gap-2 bg-gray-700 hover:bg-gray-600 text-white text-sm font-medium
                  px-4 py-2 rounded-lg transition">
            + Galeri Baru
        </a>
    </div>
@endsection