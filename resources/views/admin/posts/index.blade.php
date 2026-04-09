@extends('admin.layouts.app')

@section('title', 'Blog Posts')
@section('header', 'Blog Posts')

@section('content')
    <div class="flex items-center justify-between mb-5">
        <p class="text-sm text-gray-400">{{ $posts->total() }} post ditemukan</p>
        <a href="{{ route('admin.posts.create') }}"
            class="bg-green-700 hover:bg-green-600 text-white text-sm font-medium px-4 py-2 rounded-lg transition">
            + Post Baru
        </a>
    </div>

    <div class="bg-gray-900 rounded-xl border border-gray-800 overflow-hidden">
        <table class="w-full text-sm">
            <thead class="border-b border-gray-800">
                <tr class="text-left text-xs text-gray-500 uppercase tracking-wider">
                    <th class="px-4 py-3">Judul</th>
                    <th class="px-4 py-3">Kategori</th>
                    <th class="px-4 py-3">Status</th>
                    <th class="px-4 py-3">Tanggal</th>
                    <th class="px-4 py-3 text-right">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-800">
                @forelse ($posts as $post)
                    <tr class="hover:bg-gray-800/40 transition">
                        <td class="px-4 py-3">
                            <p class="font-medium text-white line-clamp-1">{{ $post->title }}</p>
                            <p class="text-xs text-gray-500 mt-0.5">{{ $post->slug }}</p>
                        </td>
                        <td class="px-4 py-3 text-gray-400">{{ $post->category }}</td>
                        <td class="px-4 py-3">
                            @if ($post->is_published)
                                <span
                                    class="inline-flex px-2 py-0.5 rounded-full text-xs bg-green-900/50 text-green-400 border border-green-800/50">Publik</span>
                            @else
                                <span
                                    class="inline-flex px-2 py-0.5 rounded-full text-xs bg-gray-800 text-gray-500 border border-gray-700">Draft</span>
                            @endif
                            @if ($post->is_featured)
                                <span
                                    class="inline-flex px-2 py-0.5 rounded-full text-xs bg-yellow-900/40 text-yellow-400 border border-yellow-800/40 ml-1">Featured</span>
                            @endif
                        </td>
                        <td class="px-4 py-3 text-gray-500 text-xs">{{ $post->created_at->format('d M Y') }}</td>
                        <td class="px-4 py-3 text-right">
                            <a href="{{ route('admin.posts.edit', $post) }}"
                                class="text-blue-400 hover:text-blue-300 text-xs font-medium transition mr-3">Edit</a>
                            <form method="POST" action="{{ route('admin.posts.destroy', $post) }}" class="inline"
                                onsubmit="return confirm('Hapus post ini?')">
                                @csrf @method('DELETE')
                                <button type="submit"
                                    class="text-red-500 hover:text-red-400 text-xs font-medium transition">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="px-4 py-8 text-center text-gray-600">Belum ada post.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    @if ($posts->hasPages())
        <div class="mt-4">{{ $posts->links() }}</div>
    @endif
@endsection