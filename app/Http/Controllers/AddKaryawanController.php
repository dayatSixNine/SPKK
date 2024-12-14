<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;

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
            'email' => 'required|string|email|max:255|unique:users',
        ]);

        // Convert the date string to a Carbon instance
        $dobCarbon = Carbon::parse($request->dob);

        // Remove hyphens and format the date
        $pass = str_replace('-', '', $dobCarbon->format('dmY'));

        User::create([
            'name' => $request->name,
            'dob' => $dobCarbon, // Save as Carbon instance if your database field accepts it
            'role' => $request->role,
            'email' => $request->email,
            'password' => $pass,
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
            'email' => 'required|string',
        ]);

        $employee = User::findOrFail($id);
        $employee->update([
            'name' => $request->name,
            'dob' => $request->dob,
            'role' => $request->role,
            'email' => $request->email,
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
