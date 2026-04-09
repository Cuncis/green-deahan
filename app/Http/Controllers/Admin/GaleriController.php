<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GaleriItem;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function index()
    {
        $items = GaleriItem::orderBy('sort_order')->orderByDesc('id')->paginate(20);

        return view('admin.galeri.index', compact('items'));
    }

    public function create()
    {
        return view('admin.galeri.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'category' => ['required', 'string', 'max:100'],
            'title' => ['required', 'string', 'max:255'],
            'kota' => ['nullable', 'string', 'max:100'],
            'material' => ['nullable', 'string', 'max:100'],
            'description' => ['nullable', 'string'],
            'badge' => ['nullable', 'string', 'max:100'],
            'badge_color' => ['nullable', 'string', 'max:200'],
            'sort_order' => ['nullable', 'integer', 'min:0'],
            'is_tall' => ['boolean'],
            'is_active' => ['boolean'],
            'image' => ['nullable', 'image', 'max:3072'],
        ]);

        $data['is_tall'] = $request->boolean('is_tall');
        $data['is_active'] = $request->boolean('is_active');
        $data['sort_order'] = $request->integer('sort_order', 0);

        if ($request->hasFile('image')) {
            $data['image_path'] = $request->file('image')->store('galeri', 'public');
        }

        GaleriItem::create($data);

        return redirect()->route('admin.galeri.index')->with('success', 'Galeri item berhasil dibuat.');
    }

    public function edit(GaleriItem $galeri)
    {
        return view('admin.galeri.edit', compact('galeri'));
    }

    public function update(Request $request, GaleriItem $galeri)
    {
        $data = $request->validate([
            'category' => ['required', 'string', 'max:100'],
            'title' => ['required', 'string', 'max:255'],
            'kota' => ['nullable', 'string', 'max:100'],
            'material' => ['nullable', 'string', 'max:100'],
            'description' => ['nullable', 'string'],
            'badge' => ['nullable', 'string', 'max:100'],
            'badge_color' => ['nullable', 'string', 'max:200'],
            'sort_order' => ['nullable', 'integer', 'min:0'],
            'is_tall' => ['boolean'],
            'is_active' => ['boolean'],
            'image' => ['nullable', 'image', 'max:3072'],
        ]);

        $data['is_tall'] = $request->boolean('is_tall');
        $data['is_active'] = $request->boolean('is_active');
        $data['sort_order'] = $request->integer('sort_order', 0);

        if ($request->hasFile('image')) {
            $data['image_path'] = $request->file('image')->store('galeri', 'public');
        }

        $galeri->update($data);

        return redirect()->route('admin.galeri.index')->with('success', 'Galeri item berhasil diperbarui.');
    }

    public function destroy(GaleriItem $galeri)
    {
        $galeri->delete();

        return redirect()->route('admin.galeri.index')->with('success', 'Galeri item berhasil dihapus.');
    }
}
