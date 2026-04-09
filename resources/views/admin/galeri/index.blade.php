@extends('admin.layouts.app')

@section('title', 'Galeri')
@section('header', 'Galeri')

@section('content')
    <div class="flex items-center justify-between mb-5">
        <p class="text-sm text-gray-400">{{ $items->total() }} item ditemukan</p>
        <a href="{{ route('admin.galeri.create') }}"
            class="bg-green-700 hover:bg-green-600 text-white text-sm font-medium px-4 py-2 rounded-lg transition">
            + Item Baru
        </a>
    </div>

    <div class="bg-gray-900 rounded-xl border border-gray-800 overflow-hidden">
        <table class="w-full text-sm">
            <thead class="border-b border-gray-800">
                <tr class="text-left text-xs text-gray-500 uppercase tracking-wider">
                    <th class="px-4 py-3">Gambar</th>
                    <th class="px-4 py-3">Judul</th>
                    <th class="px-4 py-3">Kategori</th>
                    <th class="px-4 py-3">Status</th>
                    <th class="px-4 py-3">Urutan</th>
                    <th class="px-4 py-3 text-right">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-800">
                @forelse ($items as $item)
                    <tr class="hover:bg-gray-800/40 transition">
                        <td class="px-4 py-3">
                            @if ($item->image_path)
                                <img src="{{ Storage::url($item->image_path) }}" alt="{{ $item->title }}"
                                    class="w-12 h-12 object-cover rounded-lg border border-gray-700">
                            @else
                                <div
                                    class="w-12 h-12 rounded-lg bg-gray-800 border border-gray-700 flex items-center justify-center">
                                    <span class="text-gray-600 text-xs">–</span>
                                </div>
                            @endif
                        </td>
                        <td class="px-4 py-3">
                            <p class="font-medium text-white line-clamp-1">{{ $item->title }}</p>
                            @if ($item->kota)
                                <p class="text-xs text-gray-500 mt-0.5">{{ $item->kota }}</p>
                            @endif
                        </td>
                        <td class="px-4 py-3 text-gray-400">{{ $item->category }}</td>
                        <td class="px-4 py-3">
                            @if ($item->is_active)
                                <span
                                    class="inline-flex px-2 py-0.5 rounded-full text-xs bg-green-900/50 text-green-400 border border-green-800/50">Aktif</span>
                            @else
                                <span
                                    class="inline-flex px-2 py-0.5 rounded-full text-xs bg-gray-800 text-gray-500 border border-gray-700">Nonaktif</span>
                            @endif
                        </td>
                        <td class="px-4 py-3 text-gray-500 text-xs">{{ $item->sort_order }}</td>
                        <td class="px-4 py-3 text-right">
                            <a href="{{ route('admin.galeri.edit', $item) }}"
                                class="text-blue-400 hover:text-blue-300 text-xs font-medium transition mr-3">Edit</a>
                            <form method="POST" action="{{ route('admin.galeri.destroy', $item) }}" class="inline"
                                onsubmit="return confirm('Hapus item ini?')">
                                @csrf @method('DELETE')
                                <button type="submit"
                                    class="text-red-500 hover:text-red-400 text-xs font-medium transition">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="px-4 py-8 text-center text-gray-600">Belum ada item galeri.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    @if ($items->hasPages())
        <div class="mt-4">{{ $items->links() }}</div>
    @endif
@endsection