<?php

namespace Bitporch\Forum\Controllers;

use Bitporch\Forum\Models\Discussion;
use Bitporch\Forum\Requests\Discussions\CreateDiscussionRequest;
use Bitporch\Forum\Requests\Discussions\UpdateDiscussionRequest;

class DiscussionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forum::discussions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateDiscussionRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(CreateDiscussionRequest $request)
    {
        $request['slug'] = str_slug($request->title, '-');

        $discussion = Discussion::create($request->all());

        return redirect()->route('forum.discussions.show', $discussion->id);
    }

    /**
     * Display the specified resource.
     *
     * @param Discussion $discussion
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Discussion $discussion)
    {
        return view('forum::discussions.show')->with(compact('discussion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateDiscussionRequest $request
     * @param Discussion              $discussion
     *
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDiscussionRequest $request, Discussion $discussion)
    {
        $discussion->update($request->all());

        return redirect()->route('forum.discussions.show', $discussion->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Discussion $discussion
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Discussion $discussion)
    {
        $discussion->delete();

        return redirect()->route('forum.home')->with('success', 'Discussion deleted successfully.');
    }
}
