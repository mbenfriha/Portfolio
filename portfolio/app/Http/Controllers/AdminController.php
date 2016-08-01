<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Skill;
use App\Message;
use App\Http\Requests;
use Session;

class AdminController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $messages = Message::orderBy('id', 'desc')->take(5)->get();

        $count = Message::where('view', 0)->count();

        return view('admin.index', compact('messages', 'count'));
    }

    public function message()
    {
        $messages = Message::orderBy('id', 'desc')->paginate(10);

        return view('admin.message', compact('messages'));
    }

    public function skill()
    {

        $skills = Skill::all();

        return view('admin.skill', compact('skills'));
    }
}
