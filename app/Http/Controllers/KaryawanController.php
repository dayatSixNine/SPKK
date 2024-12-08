<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query'); // Get the search query

        // Search in the `name` and `description` columns
        $results = User::where('name', 'LIKE', "%{$query}%")
                    ->orWhere('description', 'LIKE', "%{$query}%")
                    ->get();

        // Return a view with the results
        return view('smartphones.search_results', compact('results', 'query'));
    }
}
