<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Setting;


class KontakController extends Controller
{
    public function kontakkoperasi()
    {
        // Ambil data kontak berdasarkan kategori
        $kontak = Setting::whereIn('key', ['alamat', 'email', 'telepon'])->get();
        return view('admin.kontak-koperasi', compact('kontak'));
    }

    public function store(Request $request)
    {
        // Tentukan ikon berdasarkan kategori yang dipilih
        $iconMapping = [
            'alamat' => 'bi bi-geo-alt',
            'telepon' => 'bi bi-telephone',
            'email' => 'bi bi-envelope',
        ];

        $icon = $iconMapping[$request->key] ?? 'bi bi-question-circle'; // Default jika tidak ditemukan

        Setting::create([
            'key' => $request->key, // Ambil key dari pilihan dropdown
            'icon' => $icon, // Ambil icon dari mapping di atas
            'title' => $request->title,
            'value' => $request->value,
        ]);

        return redirect()->route('kontakkoperasi')->with('success', 'Kontak berhasil ditambahkan');
    }

    public function edit($id)
    {
        $kontakData = Setting::findOrFail($id);
        $kontak = Setting::whereIn('key', ['alamat', 'email', 'telepon'])->get();

        return view('admin.kontak-koperasi', compact('kontak', 'kontakData'));
    }



    public function update(Request $request, $id)
    {
        $request->validate([
            'key' => 'required|string|max:50',
            'title' => 'required|string|max:255',
            'value' => 'nullable|string|max:255',
            'icon' => 'required|string',
        ]);

        // Update kontak berdasarkan ID
        Setting::where('id', $id)->update([
            'key' => $request->key,
            'title' => $request->title,
            'value' => $request->value,
            'icon' => $request->icon,
            'updated_at' => now()
        ]);

        return redirect()->back()->with('success', 'Data kontak berhasil diperbarui.');
    }


    public function destroy(Request $request)
    {
        // Hapus kontak berdasarkan ID
        Setting::where('id', $request->id)->delete();

        return redirect()->route('kontakkoperasi')->with('success', 'Kontak berhasil dihapus');
    }
}
