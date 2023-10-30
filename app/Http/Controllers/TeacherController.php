<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Kelas;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teacher = User::all();
        $kelas = Kelas::all();
        return view('teacher.index', compact('teacher', 'kelas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $teacher = User::all();
        return view('teacher.create', compact('teacher'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        if ($request->input('password')) {
            $input['password'] = bcrypt($input['password']);
        }
        User::create($input);
        return redirect('/teacher');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $teacher = User::findOrFail($id);
        $kelas = Kelas::findOrFail($id);
        return view('teacher.detail', compact('teacher', 'kelas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $teacher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $teacher)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $teacher)
    {
        //
    }
}
