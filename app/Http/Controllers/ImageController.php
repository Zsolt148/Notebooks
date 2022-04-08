<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    /**
     * ImageController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth')->except('index');
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
            ->with('image', Image::find($image->id));
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

        $file = $request->file('file')->store('public');

        $image = new Image();
        $image->name = $request->get('name');
        $image->file = $file;
        $image->user()->associate(auth()->user());
        $image->save();

        return redirect()->route('images.index')->with('status', 'Sikeresen feltöltve');
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

        return redirect()->route('images.index')->with('status', 'Sikeresen frissítve!');
    }

    public function destroy(Image $image){
        $image->delete();

        return redirect()->route('images.index')->with('status', 'Sikeresen törölve.');
    }
}
