<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{

    /**
     * MessageController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth')->except('create', 'store');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages = Message::query()
            ->orderByDesc('id')
            ->paginate(10);

        return view('messages.index')->with('messages', $messages);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('messages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'location' => 'required|string|max:255',
            'text' => 'required|string',
        ]);

        Message::create([
            'email' => $request->get('email'),
            'sent_by' => $request->get('name'),
            'location' => $request->get('location'),
            'text' => $request->get('text')
        ]);

        return redirect()->back()->with('status', 'Successfully sent the message!');
    }

    /**
     * @param Message $message
     * @return mixed
     */
    public function update(Message $message)
    {
        $message->read = true;
        $message->save();

        return back()->with('status', 'Successfully marked as read!');
    }

    /**
     * @param Message $message
     * @return mixed
     */
    public function destroy(Message $message)
    {
        $message->delete();

        return back()->with('status', 'Successfully deleted!');
    }
}
