<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use App\Models\GaleriItem;

class DashboardController extends Controller
{
    public function index()
    {
        $totalPosts = BlogPost::count();
        $publishedPosts = BlogPost::where('is_published', true)->count();
        $totalGaleri = GaleriItem::count();
        $activeGaleri = GaleriItem::where('is_active', true)->count();

        return view('admin.dashboard', compact(
            'totalPosts',
            'publishedPosts',
            'totalGaleri',
            'activeGaleri'
        ));
    }
}
