<?php

namespace App\Http\Controllers;


use App\Models\Dashboard;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mengambil semua data dari tabel dashboards
        $dashboards = Dashboard::all();

        // Mengirim data ke view 'dashboard'
        return view('invent', compact('dashboards'));
    }

}