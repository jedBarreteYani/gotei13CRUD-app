<?php

namespace App\Http\Controllers;

use App\Models\Captain;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CaptainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        $captains = Captain::all();
        return view('captains.index')->with('captains', $captains);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('captains.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Captain::create($input);
        return redirect('captains')->with('flash_message', 'Captain Added');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $captains = Captain::find($id);
        return view('captains.show')->with('captains', $captains);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $captains = Captain::find($id);
        return view('captains.edit')->with('captains', $captains);
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $captains = Captain::find($id);
        $input = $request->all();
        $captains->update($input);
        return Redirect('captains')->with('flash_message', 'Captain updated!');
    }

    public function destroy(string $id): RedirectResponse
    {
        Captain::destroy($id);
        return Redirect('captains')->with('flash_message', 'Captain deleted!');
    }
}

