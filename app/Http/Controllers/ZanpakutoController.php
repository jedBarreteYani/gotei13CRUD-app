<?php

namespace App\Http\Controllers;

use App\Models\Zanpakuto;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ZanpakutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $zanpakutos = Zanpakuto::all();
        return view('zanpakutos.index')->with('zanpakutos', $zanpakutos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('zanpakutos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Zanpakuto::create($input);
        return redirect('zanpakutos')->with('flash_message', 'Zanpakuto Added');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $zanpakutos = Zanpakuto::find($id);
        return view('zanpakutos.show')->with('zanpakutos', $zanpakutos);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $zanpakutos = Zanpakuto::find($id);
        return view('zanpakutos.edit')->with('zanpakutos', $zanpakutos);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $zanpakutos = Zanpakuto::find($id);
        $input = $request->all();
        $zanpakutos->update($input);
        return Redirect('zanpakutos')->with('flash_message', 'Zanpakuto updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        Zanpakuto::destroy($id);
        return Redirect('zanpakutos')->with('flash_message', 'Zanpakuto deleted!');
    }
}
