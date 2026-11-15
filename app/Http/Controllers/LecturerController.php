<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Lecturer;
use App\Models\User;
class LecturerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    $lecturers = Lecturer::where('isActivated', true)
    ->with('user')
    ->withCount('courses') 
    ->get();

    return view('Lecturers', compact('lecturers'));


    }

    /**
     * Show the form for creating a new resource.
     */
    
public function create()
{
    $users = User::whereDoesntHave('lecturer')->get();

    return view('lecturers.create', compact('users'));
}


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
