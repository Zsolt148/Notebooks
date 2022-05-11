<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    /**
     * ImageController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('images.index')
            ->with('images', Image::all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        return view('images.show')
            ->with('image', $image);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('images.create');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'file' => 'required|mimes:jpg,png|max:2048',
        ]);

        $image = new Image();
        $image->name = $request->get('name');
        $image->file = $request->file('file')->store('public');
        $image->user()->associate(auth()->user());
        $image->save();

        return redirect()->route('images.index')->with('status', 'Successfully created');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        return view('images.edit')
            ->with('image', $image);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, Image $image)
    {

        $request->validate([
            "name" => "required|string|max:255",
        ]);

        $image->name = $request->name;
        $image->save();

        return redirect()->route('images.index')->with('status', 'Successfully uploded');
    }

    /**
     * @param Image $image
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Image $image)
    {
        if(Storage::exists($image->file)) {
            Storage::delete($image->file);
        }

        $image->delete();

        return redirect()->route('images.index')->with('status', 'Successfully deleted');
    }
}
