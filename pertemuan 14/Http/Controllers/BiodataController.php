<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Biodata;

class BiodataController extends Controller
{
    public function index()
    {
        return view('biodata.create', compact('biodata'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'gender' => 'required',
        ]);
        
        // Logika penyimpanan data

        return redirect()->route('biodata.index');
    }

    public function edit($id)
    {
        $biodata = Biodata::find($id);
        return view('biodata.edit', compact('biodata'));
    }

    public function update(Request $request, $id)
    {
        // Logika pembaruan data
    }

    public function destroy($id)
    {
        Biodata::find($id)->delete();
        return redirect()->route('biodata.index');
    }
}