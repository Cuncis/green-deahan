{{-- Shared form partial for create/edit galeri --}}
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

    {{-- Left: main fields --}}
    <div class="lg:col-span-2 space-y-4">

        <div class="bg-gray-900 rounded-xl border border-gray-800 p-5 space-y-4">

            <div>
                <label class="block text-xs text-gray-400 mb-1.5">Judul <span class="text-red-500">*</span></label>
                <input type="text" name="title" value="{{ old('title', $galeri->title ?? '') }}" required class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-2.5 text-white text-sm
                              focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-transparent transition
                              @error('title') border-red-500 @enderror" />
                @error('title')<p class="text-red-400 text-xs mt-1">{{ $message }}</p>@enderror
            </div>

            <div>
                <label class="block text-xs text-gray-400 mb-1.5">Deskripsi</label>
                <textarea name="description" rows="4"
                    class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-2.5 text-white text-sm
                                 focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-transparent transition resize-y">{{ old('description', $galeri->description ?? '') }}</textarea>
            </div>

        </div>

    </div>

    {{-- Right: meta fields --}}
    <div class="space-y-4">

        <div class="bg-gray-900 rounded-xl border border-gray-800 p-5 space-y-4">

            <div>
                <label class="block text-xs text-gray-400 mb-1.5">Kategori <span class="text-red-500">*</span></label>
                <input type="text" name="category" value="{{ old('category', $galeri->category ?? '') }}" required
                    placeholder="futsal / padel / badminton …"
                    class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-2.5 text-white text-sm
                              focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-transparent transition" />
            </div>

            <div>
                <label class="block text-xs text-gray-400 mb-1.5">Kota</label>
                <input type="text" name="kota" value="{{ old('kota', $galeri->kota ?? '') }}" placeholder="Jakarta"
                    class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-2.5 text-white text-sm
                              focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-transparent transition" />
            </div>

            <div>
                <label class="block text-xs text-gray-400 mb-1.5">Material</label>
                <input type="text" name="material" value="{{ old('material', $galeri->material ?? '') }}"
                    placeholder="Vinyl Pro"
                    class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-2.5 text-white text-sm
                              focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-transparent transition" />
            </div>

            <div>
                <label class="block text-xs text-gray-400 mb-1.5">Badge</label>
                <input type="text" name="badge" value="{{ old('badge', $galeri->badge ?? '') }}" placeholder="⚽ Futsal"
                    class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-2.5 text-white text-sm
                              focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-transparent transition" />
            </div>

            <div>
                <label class="block text-xs text-gray-400 mb-1.5">Warna Badge (Tailwind classes)</label>
                <input type="text" name="badge_color" value="{{ old('badge_color', $galeri->badge_color ?? '') }}"
                    placeholder="bg-green-100 text-green-700"
                    class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-2.5 text-white text-sm
                              focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-transparent transition" />
            </div>

            <div>
                <label class="block text-xs text-gray-400 mb-1.5">Urutan (sort_order)</label>
                <input type="number" name="sort_order" value="{{ old('sort_order', $galeri->sort_order ?? 0) }}" min="0"
                    class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-2.5 text-white text-sm
                              focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-transparent transition" />
            </div>

            <div class="flex items-center gap-3 pt-1">
                <label class="flex items-center gap-2 text-sm text-gray-400 cursor-pointer">
                    <input type="hidden" name="is_active" value="0">
                    <input type="checkbox" name="is_active" value="1" {{ old('is_active', $galeri->is_active ?? true) ? 'checked' : '' }}
                        class="w-4 h-4 rounded bg-gray-700 border-gray-600 text-green-600 focus:ring-green-600 focus:ring-offset-gray-900">
                    Aktif
                </label>

                <label class="flex items-center gap-2 text-sm text-gray-400 cursor-pointer">
                    <input type="hidden" name="is_tall" value="0">
                    <input type="checkbox" name="is_tall" value="1" {{ old('is_tall', $galeri->is_tall ?? false) ? 'checked' : '' }}
                        class="w-4 h-4 rounded bg-gray-700 border-gray-600 text-blue-500 focus:ring-blue-500 focus:ring-offset-gray-900">
                    Tall (portrait)
                </label>
            </div>
        </div>

        <div class="bg-gray-900 rounded-xl border border-gray-800 p-5">
            <label class="block text-xs text-gray-400 mb-1.5">Gambar</label>

            @if (isset($galeri) && $galeri->image_path)
                <div class="mb-3">
                    <img src="{{ Storage::url($galeri->image_path) }}" alt="Current"
                        class="w-full h-32 object-cover rounded-lg border border-gray-700">
                    <p class="text-xs text-gray-600 mt-1">Upload baru untuk mengganti gambar.</p>
                </div>
            @endif

            <input type="file" name="image" accept="image/*"
                class="w-full text-sm text-gray-400 file:mr-3 file:py-1.5 file:px-3 file:rounded-lg file:border-0
                          file:text-xs file:bg-gray-700 file:text-gray-300 hover:file:bg-gray-600 file:cursor-pointer" />
            @error('image')<p class="text-red-400 text-xs mt-1">{{ $message }}</p>@enderror
        </div>

        <button type="submit" class="w-full bg-green-700 hover:bg-green-600 text-white font-semibold py-2.5 rounded-lg
                       transition focus:outline-none focus:ring-2 focus:ring-green-500">
            Simpan
        </button>
    </div>

</div>