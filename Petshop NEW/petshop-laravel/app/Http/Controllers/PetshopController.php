<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetshopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return View('home');
    }

}