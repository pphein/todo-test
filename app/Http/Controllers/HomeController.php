<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\ToDoList;
use Illuminate\Http\Request;

class HomeController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $tasks = ToDoList::where('user_id', Auth::user()->id)->get()->all();
        
        return view('home', ['tasks' => $tasks]);
    }
}
