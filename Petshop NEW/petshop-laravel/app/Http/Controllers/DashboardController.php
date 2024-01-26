<?php

namespace App\Http\Controllers;

use App\Models\Dashboard;
use Illuminate\Http\Request;
use Storage;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mengambil semua data dari tabel dashboards
        $dashboards = Dashboard::all();

        // Mengirim data ke view 'dashboard'
        return view('dashboard', compact('dashboards'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title'       => 'required',
            'description' => 'required',
            'stock'       => 'required|integer',
            'price'       => 'required|integer',
            'image'       => 'required|image|mimes:jpeg,png,jpg,gif|max:2048' // Validasi untuk file gambar
        ]);

        $image = file_get_contents($request->file('image')); // Ambil konten gambar

        Dashboard::create([
            'title'       => $validatedData['title'],
            'description' => $validatedData['description'],
            'stock'       => $validatedData['stock'],
            'price'       => $validatedData['price'],
            'image'       => $image, // Simpan gambar sebagai BLOB
        ]);

        return redirect('/dashboard')->with('success', 'Data added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Dashboard $dashboard)
    {
        return $dashboard;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $dashboard = Dashboard::findOrFail($id);
        return view('edit', compact('dashboard'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title'       => 'required',
            'description' => 'required',
            'stock'       => 'required|integer',
            'price'       => 'required|integer',
            'image'       => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048' // Validasi untuk file gambar
        ]);

        $dashboard = Dashboard::findOrFail($id);

        if ($request->hasFile('image')) {
            $image = file_get_contents($request->file('image')); // Ambil konten gambar baru

            $dashboard->update([
                'title'       => $validatedData['title'],
                'description' => $validatedData['description'],
                'stock'       => $validatedData['stock'],
                'price'       => $validatedData['price'],
                'image'       => $image, // Simpan gambar baru sebagai BLOB
            ]);
        } else {
            // Jika tidak ada gambar baru diunggah, hanya update data lainnya
            $dashboard->update([
                'title'       => $validatedData['title'],
                'description' => $validatedData['description'],
                'stock'       => $validatedData['stock'],
                'price'       => $validatedData['price'],
            ]);
        }

        return redirect('/dashboard')->with('success', 'Data updated successfully!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $dashboard = Dashboard::findOrFail($id);
        $dashboard->delete();

        return redirect('/dashboard')->with('success', 'Data deleted successfully!');
    }

}
