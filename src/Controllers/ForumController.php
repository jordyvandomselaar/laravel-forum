<?php

namespace Bitporch\Forum\Controllers;

use Bitporch\Forum\Models\Discussion;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $discussions = Discussion::orderBy('created_at', 'desc')->paginate(10);

        return view('forum::index')->with(compact('discussions'));
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
