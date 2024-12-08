<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\User;

class NilaiKaryawanController extends Controller
{
    public function index()
    {
        $employees = User::all();
        return view('pages.nilaikaryawan.index', compact('employees'));
    }

    public function showAddGradeForm($id)
    {
        $employee = User::findOrFail($id);
        return view('pages.nilaikaryawan.addgrade', compact('employee'));
    }

    public function addGrade(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:employees,id',
            'dob' => 'nullable|string',
            'role' => 'nullable|string',
            'absensi' => 'nullable|string|max:2',
            'kebersihan' => 'nullable|string|max:2',
            'loyalitas' => 'nullable|string|max:2',
            'perilaku' => 'nullable|string|max:2',
            'peringatan' => 'nullable|string|max:2',
            'kinerja' => 'nullable|string|max:2',
        ]);

        $employee = User::find($request->id);
        $employee->absensi = $request->absensi;
        $employee->kebersihan = $request->kebersihan;
        $employee->loyalitas = $request->loyalitas;
        $employee->perilaku = $request->perilaku;
        $employee->peringatan = $request->peringatan;
        $employee->kinerja = $request->kinerja;
        $employee->save();

        return redirect()->route('nilaikaryawan.index')->with('success', 'Nilai Grade Berhasil Ditambahkan');
    }
    public function search(Request $request) {

    }
}
