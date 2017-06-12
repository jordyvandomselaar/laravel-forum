<?php

namespace AndreasElia\Forum\Controllers;

use AndreasElia\Forum\Models\Discussion;
use AndreasElia\Forum\Models\Group;
use App\Http\Controllers\Controller;

class ForumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groups = Group::all();

        $discussions = Discussion::orderBy('created_at', 'desc')->paginate(10);

        return view('forum::index')->with(compact('groups', 'discussions'));
    }

    /**
     * Display a listing of the queried resource.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $discussions = Discussion::where('title', 'like', '%'.$request->get('query').'%')
            ->paginate(10);

        return view('forum::search-results')->with(compact('discussions'));
    }
}
