<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SocialLink;

class SocialMediaController extends Controller
{
    public function index()
    {
        $links = SocialLink::all();
        return view('admin.social-link', compact('links'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'platform' => 'required|string|max:255',
            'url' => 'required|url|max:255',
            'icon' => 'required|string|max:255',
        ]);

        SocialLink::create($request->all());

        return redirect()->route('sosmed')->with('success', 'Link sosial media berhasil ditambahkan!');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'platform' => 'required|string|max:255',
            'url' => 'required|url|max:255',
            'icon' => 'required|string|max:255',
        ]);

        $link = SocialLink::findOrFail($id);
        $link->update($request->all());

        return redirect()->route('sosmed')->with('success', 'Link sosial media berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $link = SocialLink::findOrFail($id);
        $link->delete();

        return response()->json(['success' => true]);
    }
}
