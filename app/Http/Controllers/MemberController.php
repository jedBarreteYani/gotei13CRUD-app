<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        $members = Member::all();
        return view('members.index')->with('members', $members);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('members.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Member::create($input);
        return redirect('members')->with('flash_message', 'Member Added');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $members = Member::find($id);
        return view('members.show')->with('members', $members);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $members = Member::find($id);
        return view('members.edit')->with('members', $members);
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $members = Member::find($id);
        $input = $request->all();
        $members->update($input);
        return Redirect('members')->with('flash_message', 'Member updated!');
    }

    public function destroy(string $id): RedirectResponse
    {
        member::destroy($id);
        return Redirect('members')->with('flash_message', 'Member deleted!');
    }
}

