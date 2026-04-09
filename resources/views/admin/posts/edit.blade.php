@extends('admin.layouts.app')

@section('title', 'Edit Post')
@section('header', 'Edit Post')

@section('content')
    <div class="flex items-center gap-2 mb-5">
        <a href="{{ route('admin.posts.index') }}" class="text-gray-500 hover:text-gray-300 text-sm transition">←
            Kembali</a>
    </div>

    <form method="POST" action="{{ route('admin.posts.update', $post) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @include('admin.posts._form')
    </form>
@endsection