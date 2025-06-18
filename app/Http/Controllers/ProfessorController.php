<?php

namespace App\Http\Controllers;

use App\Models\Professor;
use Illuminate\Http\Request;

class ProfessorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $professors = Professor::latest()->get();
        return view('professors.index', compact('professors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('professors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:professors',
        ]);

        Professor::create($validated);

        return redirect()->route('professors.index')->with('success', 'Professor added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Professor $professor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Professor $professor)
    {
        return view('professors.edit', compact('professor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Professor $professor)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:professors,email,'.$professor->id,
        ]);

        $professor->update($validated);

        return redirect()->route('professors.index')->with('success', 'Professor updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Professor $professor)
    {
        // Check if professor has exams
        if ($professor->exams()->count() > 0) {
            return redirect()->route('professors.index')->with('error', 'Cannot delete professor with assigned exams.');
        }

        $professor->delete();
        return redirect()->route('professors.index')->with('success', 'Professor deleted successfully.');
    }
}
