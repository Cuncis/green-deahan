{{-- Shared form partial for create/edit post --}}
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

    {{-- Left: main fields --}}
    <div class="lg:col-span-2 space-y-4">

        <div class="bg-gray-900 rounded-xl border border-gray-800 p-5 space-y-4">

            <div>
                <label class="block text-xs text-gray-400 mb-1.5">Judul <span class="text-red-500">*</span></label>
                <input type="text" name="title" value="{{ old('title', $post->title ?? '') }}" required class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-2.5 text-white text-sm
                              focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-transparent transition
                              @error('title') border-red-500 @enderror" />
                @error('title')<p class="text-red-400 text-xs mt-1">{{ $message }}</p>@enderror
            </div>

            <div>
                <label class="block text-xs text-gray-400 mb-1.5">Excerpt</label>
                <textarea name="excerpt" rows="2"
                    class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-2.5 text-white text-sm
                                 focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-transparent transition resize-y">{{ old('excerpt', $post->excerpt ?? '') }}</textarea>
            </div>

            <div>
                <label class="block text-xs text-gray-400 mb-1.5">Body <span class="text-red-500">*</span></label>
                <textarea name="body" rows="16" required
                    class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-2.5 text-white text-sm font-mono
                                 focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-transparent transition resize-y
                                 @error('body') border-red-500 @enderror">{{ old('body', $post->body ?? '') }}</textarea>
                @error('body')<p class="text-red-400 text-xs mt-1">{{ $message }}</p>@enderror
            </div>

        </div>

    </div>

    {{-- Right: meta fields --}}
    <div class="space-y-4">

        <div class="bg-gray-900 rounded-xl border border-gray-800 p-5 space-y-4">

            <div>
                <label class="block text-xs text-gray-400 mb-1.5">Kategori <span class="text-red-500">*</span></label>
                <input type="text" name="category" value="{{ old('category', $post->category ?? '') }}" required
                    placeholder="panduan / futsal / padel …"
                    class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-2.5 text-white text-sm
                              focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-transparent transition" />
            </div>

            <div>
                <label class="block text-xs text-gray-400 mb-1.5">Label Kategori</label>
                <input type="text" name="cat_label" value="{{ old('cat_label', $post->cat_label ?? '') }}"
                    placeholder="📚 Panduan Bisnis"
                    class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-2.5 text-white text-sm
                              focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-transparent transition" />
            </div>

            <div>
                <label class="block text-xs text-gray-400 mb-1.5">Warna Label (Tailwind classes)</label>
                <input type="text" name="cat_color" value="{{ old('cat_color', $post->cat_color ?? '') }}"
                    placeholder="bg-blue-100 text-blue-700"
                    class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-2.5 text-white text-sm
                              focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-transparent transition" />
            </div>

            <div>
                <label class="block text-xs text-gray-400 mb-1.5">Waktu Baca</label>
                <input type="text" name="read_time" value="{{ old('read_time', $post->read_time ?? '') }}"
                    placeholder="8 menit"
                    class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-2.5 text-white text-sm
                              focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-transparent transition" />
            </div>

            <div>
                <label class="block text-xs text-gray-400 mb-1.5">Tags (pisahkan koma)</label>
                <input type="text" name="tags"
                    value="{{ old('tags', isset($post) ? implode(', ', $post->tags ?? []) : '') }}"
                    placeholder="futsal, bisnis, tips"
                    class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-2.5 text-white text-sm
                              focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-transparent transition" />
            </div>

            <div>
                <label class="block text-xs text-gray-400 mb-1.5">Tanggal Publikasi</label>
                <input type="datetime-local" name="published_at"
                    value="{{ old('published_at', isset($post) && $post->published_at ? $post->published_at->format('Y-m-d\TH:i') : '') }}"
                    class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-2.5 text-white text-sm
                              focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-transparent transition" />
            </div>

            <div class="flex items-center gap-3 pt-1">
                <label class="flex items-center gap-2 text-sm text-gray-400 cursor-pointer">
                    <input type="hidden" name="is_published" value="0">
                    <input type="checkbox" name="is_published" value="1" {{ old('is_published', $post->is_published ?? true) ? 'checked' : '' }}
                        class="w-4 h-4 rounded bg-gray-700 border-gray-600 text-green-600 focus:ring-green-600 focus:ring-offset-gray-900">
                    Publik
                </label>

                <label class="flex items-center gap-2 text-sm text-gray-400 cursor-pointer">
                    <input type="hidden" name="is_featured" value="0">
                    <input type="checkbox" name="is_featured" value="1" {{ old('is_featured', $post->is_featured ?? false) ? 'checked' : '' }}
                        class="w-4 h-4 rounded bg-gray-700 border-gray-600 text-yellow-500 focus:ring-yellow-500 focus:ring-offset-gray-900">
                    Featured
                </label>
            </div>
        </div>

        <div class="bg-gray-900 rounded-xl border border-gray-800 p-5">
            <label class="block text-xs text-gray-400 mb-1.5">Gambar</label>

            @if (isset($post) && $post->image_path)
                <div class="mb-3">
                    <img src="{{ Storage::url($post->image_path) }}" alt="Current"
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