<?php

namespace App\Http\Controllers;

use App\Models\letter_type;
use Illuminate\Http\Request;

class LetterTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lettertypes = letter_type::all();
        return view('lettertype.index', compact('lettertypes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('lettertype.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'letter_code' => 'required|max:5',
            'name_type' => 'required'
        ]);

        $existingCount = letter_type::count();

        $letterCode = $request->letter_code . '-' . ($existingCount + 1);

        letter_type::create([
            'letter_code' => $letterCode,
            'name_type' => $request->name_type
        ]);
        return redirect()->route('lettertype.create')->with('success', 'Surat berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     */
    public function show(letter_type $letter_type)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(letter_type $letter_type)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, String $id)
    {
        $request->validate([
            'code' => 'required',
            'klasifikasi' => 'required',
        ]);
        
        letterType::where('id', $id)->update([
        'letter_code' => $request->code,
        'name_type' => $request->klasifikasi,
    ]);

        return redirect()->route('letterType.index')->with('success', 'Berhasil mengubah data user!'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        LetterType::where('id', $id)->delete();
        return redirect()->back()->with('deleted', 'berhasil menghapus data user');
    }
}
