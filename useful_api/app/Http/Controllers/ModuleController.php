<?php

namespace App\Http\Controllers;

use App\Models\Modules;
use Illuminate\Http\Request;

class ModulesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'description' => 'required|string|max:255',
            
        ]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function delete()
    {
        //
    }

