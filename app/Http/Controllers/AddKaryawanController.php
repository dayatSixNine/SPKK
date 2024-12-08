<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AddKaryawanController extends Controller
{
    public function index()
    {
        $employees = User::all();
        return view('pages.addkaryawan.index', compact('employees'));
    }

    public function create()
    {
        return view('pages.addkaryawan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'dob' => 'required|date',
            'role' => 'required|string|max:255',
        ]);

        User::create([
            'name' => $request->name,
            'dob' => $request->dob,
            'role' => $request->role,
        ]);

        return redirect()->route('addkaryawan.index')->with('success', 'Data Karyawan Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $employee = User::findOrFail($id);
        return view('pages.addkaryawan.edit', compact('employee'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'dob' => 'required|date',
            'role' => 'required|string|max:255',
        ]);

        $employee = User::findOrFail($id);
        $employee->update([
            'name' => $request->full_name,
            'dob' => $request->date_of_birth,
            'role' => $request->position,
        ]);

        return redirect()->route('addkaryawan.index')->with('success', 'Data Karyawan Berhasil Diperbaharui');
    }

    public function destroy($id)
    {
        $employee = User::findOrFail($id);
        $employee->delete();
        return redirect()->route('addkaryawan.index')->with('success', 'Data Karyawan Berhasil Dihapus');
    }
}
