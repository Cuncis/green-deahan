@extends('admin.layouts.app')

@section('title', 'Galeri Baru')
@section('header', 'Galeri Baru')

@section('content')
    <div class="flex items-center gap-2 mb-5">
        <a href="{{ route('admin.galeri.index') }}" class="text-gray-500 hover:text-gray-300 text-sm transition">←
            Kembali</a>
    </div>

    <form method="POST" action="{{ route('admin.galeri.store') }}" enctype="multipart/form-data">
        @csrf
        @include('admin.galeri._form')
    </form>
@endsection