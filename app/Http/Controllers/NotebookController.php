<?php

namespace App\Http\Controllers;

use App\Http\Requests\NotebookRequest;
use App\Models\Notebook;
use App\Models\Opsystem;
use App\Models\Processor;
use Illuminate\Http\Request;

class NotebookController extends Controller
{
    /**
     * NotebookController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request->validate([
            'search' => 'string'
        ]);

        $notebooks = Notebook::query()
            ->with('processor', 'opsystem')
            ->when(
                $search = $request->get('search'),
                function ($query) use ($search) {
                    $query
                        ->where('manufacturer', 'LIKE' , '%'.$search.'%')
                        ->orWhere('type', 'LIKE' , '%'.$search.'%')
                        ->orWhere('display', 'LIKE' , '%'.$search.'%')
                        ->orWhere('memory', 'LIKE' , '%'.$search.'%')
                        ->orWhere('harddisk', 'LIKE' , '%'.$search.'%')
                        ->orWhere('videocontroller', 'LIKE' , '%'.$search.'%')
                        ->orWhere('price', 'LIKE' , '%'.$search.'%');
                }
            )
            ->latest();

        return view('notebooks.index')
            ->with('notebooks', $notebooks->paginate(10));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('notebooks.create')
            ->with('processors', Processor::all())
            ->with('opsystems', Opsystem::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\NotebookRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NotebookRequest $request)
    {
        Notebook::create($request->validated());

        return redirect()->route('notebooks.index')->with('status', 'Laptop sikeresen létrehozva');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Notebook  $notebook
     * @return \Illuminate\Http\Response
     */
    public function edit(Notebook $notebook)
    {
        return view('notebooks.edit')
            ->with('notebook', $notebook)
            ->with('processors', Processor::all())
            ->with('opsystems', Opsystem::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\NotebookRequest  $request
     * @param  \App\Models\Notebook  $notebook
     * @return \Illuminate\Http\Response
     */
    public function update(NotebookRequest $request, Notebook $notebook)
    {
        $notebook->update($request->validated());

        return redirect()->route('notebooks.index')->with('status', 'Laptop sikeresen frissítve');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Notebook  $notebook
     * @return \Illuminate\Http\Response
     */
    public function destroy(Notebook $notebook)
    {
        $notebook->delete();

        return back()->with('status', 'Laptop sikeresen törölve');
    }
}
