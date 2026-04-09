<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index()
    {
        $posts = BlogPost::latest()->paginate(15);

        return view('admin.posts.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'category' => ['required', 'string', 'max:100'],
            'title' => ['required', 'string', 'max:255'],
            'excerpt' => ['nullable', 'string'],
            'body' => ['required', 'string'],
            'cat_label' => ['nullable', 'string', 'max:100'],
            'cat_color' => ['nullable', 'string', 'max:200'],
            'read_time' => ['nullable', 'string', 'max:50'],
            'tags' => ['nullable', 'string'],
            'is_featured' => ['boolean'],
            'is_published' => ['boolean'],
            'published_at' => ['nullable', 'date'],
            'image' => ['nullable', 'image', 'max:2048'],
        ]);

        $data['slug'] = $this->uniqueSlug($data['title']);
        $data['tags'] = $this->parseTags($request->input('tags'));
        $data['is_featured'] = $request->boolean('is_featured');
        $data['is_published'] = $request->boolean('is_published');

        if ($request->hasFile('image')) {
            $data['image_path'] = $request->file('image')->store('posts', 'public');
        }

        BlogPost::create($data);

        return redirect()->route('admin.posts.index')->with('success', 'Post berhasil dibuat.');
    }

    public function edit(BlogPost $post)
    {
        return view('admin.posts.edit', compact('post'));
    }

    public function update(Request $request, BlogPost $post)
    {
        $data = $request->validate([
            'category' => ['required', 'string', 'max:100'],
            'title' => ['required', 'string', 'max:255'],
            'excerpt' => ['nullable', 'string'],
            'body' => ['required', 'string'],
            'cat_label' => ['nullable', 'string', 'max:100'],
            'cat_color' => ['nullable', 'string', 'max:200'],
            'read_time' => ['nullable', 'string', 'max:50'],
            'tags' => ['nullable', 'string'],
            'is_featured' => ['boolean'],
            'is_published' => ['boolean'],
            'published_at' => ['nullable', 'date'],
            'image' => ['nullable', 'image', 'max:2048'],
        ]);

        // Re-slug only if title changed
        if ($data['title'] !== $post->title) {
            $data['slug'] = $this->uniqueSlug($data['title'], $post->id);
        }

        $data['tags'] = $this->parseTags($request->input('tags'));
        $data['is_featured'] = $request->boolean('is_featured');
        $data['is_published'] = $request->boolean('is_published');

        if ($request->hasFile('image')) {
            $data['image_path'] = $request->file('image')->store('posts', 'public');
        }

        $post->update($data);

        return redirect()->route('admin.posts.index')->with('success', 'Post berhasil diperbarui.');
    }

    public function destroy(BlogPost $post)
    {
        $post->delete();

        return redirect()->route('admin.posts.index')->with('success', 'Post berhasil dihapus.');
    }

    private function uniqueSlug(string $title, ?int $exceptId = null): string
    {
        $slug = Str::slug($title);
        $original = $slug;
        $i = 1;

        while (
            BlogPost::where('slug', $slug)
                ->when($exceptId, fn($q) => $q->where('id', '!=', $exceptId))
                ->exists()
        ) {
            $slug = "{$original}-{$i}";
            $i++;
        }

        return $slug;
    }

    private function parseTags(?string $raw): array
    {
        if (empty($raw)) {
            return [];
        }

        return array_values(array_filter(array_map('trim', explode(',', $raw))));
    }
}
