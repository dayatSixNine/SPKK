<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query'); // Get the search query
        $employees = $results = [];
        
        if (empty($query)) {
            // If the search query is empty, retrieve all data
            $results = User::all();
            $employees = User::all();
            $query = "";
        } else {
            // If a search query is provided, filter the results
            $results = User::where('name', 'LIKE', "%{$query}%")
                // ->orWhere('description', 'LIKE', "%{$query}%")
                ->get();
        }
        // Return a view with the results
        return view('pages.nilaikaryawan.index', compact('results', 'query', 'employees'));
    }
}
