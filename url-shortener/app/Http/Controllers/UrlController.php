<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Url;
use Illuminate\Support\Str;

class UrlController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function shorten(Request $request)
    {
        $request->validate([
            'url' => 'required|url'
        ]);

        $originalUrl = $request->input('url');
        $url = Url::where('original_url', $originalUrl)->first();

        if ($url) {
            return redirect('/')->with('shortened_url', $url->shortened_url);
        }

        $shortenedUrl = Str::random(12);
        Url::create([
            'original_url' => $originalUrl,
            'shortened_url' => $shortenedUrl
        ]);

        return redirect('/')->with('shortened_url', $shortenedUrl);
    }

    public function redirect($shortenedUrl)
    {
        $url = Url::where('shortened_url', $shortenedUrl)->firstOrFail();
        return redirect($url->original_url);
    }
}

