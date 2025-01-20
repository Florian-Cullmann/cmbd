<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\View\View;

class StaffController extends Controller
{
    public function index(): View
    {
        $staff = Staff::orderBy('lastName')->get();
        return view('staff.index', compact('staff'));
    }

    public function show($id): View
    {
        $staff = Staff::with('history')->findOrFail($id);
        $history = $staff->history()->orderBy('validFrom', 'desc')->get();
        return view('staff.show', compact('staff', 'history'));
    }
}
