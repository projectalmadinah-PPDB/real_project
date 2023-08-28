<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Parents;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PendaftaranController extends Controller
{
    public function index()
    {
        return view('front.dashboard.pendaftaran');
    }

    public function store(Request $request)
    {
        $user = Auth::user()->id;

        $student = $request->validate([
            'birthplace' => 'required',
            'nik' => 'required',
            'nisn' => 'required',
            'hobby' => 'required',
            'ambition' => 'required',
            'last_graduate' => 'required',
            'old_school' => 'required',
            'organization_exp' => 'required',
            'address' => 'required'
        ]);
        $student['user_id'] = $user;
        Student::create($student);

        $parent = $request->validate([
            'father_name' => 'required|string',
            'father_phone' => 'required',
            'father_job' => 'required',
            'mother_name' => 'required|string',
            'mother_phone' => 'required',
            'mother_job' => 'required',
            'parent_earning' => 'required|string',
            'no_of_sibling' => 'required|string',
            'child_no' => 'required|string'
        ]);
        $parent['user_id'] = $user;
        Parents::create($parent);

        return redirect()->route('user.dashboard')->with('success','Berhasil Melengkapi Data Pribadi');
    }
}
