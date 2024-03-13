<?php

namespace App\Http\Controllers;

use App\Models\Games;
use Illuminate\Http\Request;

class GamesController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function home()
    {
        //

        $games = Games::all();

        return view('home', compact('games'));
    }

    public function index()
    {
        //

        $games = Games::all();

        return view('portfolio.index', compact('games'));
    }

    public function count()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        return view('portfolio.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'project_status' => 'required|max:255',
            'project_type' => 'required|max:255',
            'project_duration' => 'required|max:255',
            'software_used' => 'required|max:255',
            'languages_used' => 'required|max:255',
            'primary_roles' => 'required|max:255',
            'body' => '',
            'image_path' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust the allowed file types and size
        ]);

        // Handle file upload
        if ($request->hasFile('image_path')) {
            $originalName = pathinfo($request->file('image_path')->getClientOriginalName(), PATHINFO_FILENAME);
            $timestamp = time();
            $imageName = "{$originalName}_{$timestamp}.{$request->file('image_path')->getClientOriginalExtension()}";

            $imagePath = $request->file('image_path')->storeAs('images', $imageName, 'public');
        } else {
            return back()->withErrors(['image_path' => 'The image file is required.']);
        }

        // Create record in the database
        Games::create([
            'name' => $request->input('name'),
            'project_status' => $request->input('project_status'),
            'project_type' => $request->input('project_type'),
            'project_duration' => $request->input('project_duration'),
            'software_used' => $request->input('software_used'),
            'languages_used' => $request->input('languages_used'),
            'primary_roles' => $request->input('primary_roles'),
            'body' => $request->input('body'),
            'image_path' => $imagePath,
        ]);

        return redirect('/')->with("success", "Portfolio Article has been created");
    }


    public function uploadImage(Request $request) {
        $image = $request->file('upload');

        $name = hash('sha256', $image->getClientOriginalName()).'.'.$image->getClientOriginalExtension();
        Storage::disk('public')->putFileAs('blog/userfiles/files/', $image, $name);

        return response()->json([
            'uploaded' => true,
            'fileName' => $name,
            'url'      => asset('storage/blog/userfiles/files/'.$name),
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $game = Games::find($id);

        return view('portfolio.show', compact('game'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Games $games)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Games $games)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Games $games)
    {
        //
    }
}
