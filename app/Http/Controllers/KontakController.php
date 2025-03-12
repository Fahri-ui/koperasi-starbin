<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Setting;


class KontakController extends Controller
{
    public function kontakkoperasi()
    {
        $kontak = Setting::all();
        return view('admin.kontak-koperasi', compact('kontak'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'key' => 'required',
            'title' => 'required|string|max:255',
            'value' => 'required|string|max:255',
        ]);
    
        // Cek apakah key sudah ada
        $existing = Setting::where('key', $request->key)->first();
        if ($existing) {
            return redirect()->route('kontakkoperasi')->with('error', 'Data dengan kategori ini sudah ada!');
        }
    
        $icons = [
            'alamat' => 'bi bi-geo-alt',
            'telepon' => 'bi bi-telephone',
            'email' => 'bi bi-envelope',
        ];
    
        Setting::create([
            'key' => $request->key,
            'icon' => $icons[$request->key] ?? '',
            'title' => $request->title,
            'value' => $request->value,
        ]);
    
        return redirect()->route('kontakkoperasi')->with('success', 'Kontak berhasil ditambahkan!');
    }    
    
    public function update(Request $request, $id)
    {
        $request->validate([
            'key' => 'required',
            'title' => 'required|string|max:255',
            'value' => 'required|string|max:255',
        ]);
    
        $icons = [
            'alamat' => 'bi bi-geo-alt',
            'telepon' => 'bi bi-telephone',
            'email' => 'bi bi-envelope',
        ];
    
        $kontak = Setting::findOrFail($id);
        $kontak->update([
            'key' => $request->key,
            'icon' => $icons[$request->key] ?? '',
            'title' => $request->title,
            'value' => $request->value,
        ]);
    
        return redirect()->route('kontakkoperasi')->with('success', 'Kontak berhasil diperbarui!');
    }
    
    public function destroy(Request $request)
    {
        try {
            $kontak = Setting::findOrFail($request->id);
            $kontak->delete();
            return redirect()->route('kontakkoperasi')->with('success', 'Kontak berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->route('kontakkoperasi')->with('error', 'Gagal menghapus kontak.');
        }
    }    
}
