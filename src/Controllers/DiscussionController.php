<?php

namespace AndreasElia\Forum\Controllers;

use AndreasElia\Forum\Model\Discussion;
use AndreasElia\Forum\Requests\Discussions\CreateDiscussionRequest;
use AndreasElia\Forum\Requests\Discussions\UpdateDiscussionRequest;
use App\Http\Controllers\Controller;

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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \AndreasElia\Forum\Requests\Discussions\CreateDiscussionRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(CreateDiscussionRequest $request)
    {
        $discussion = Discussion::create($request->all());

        return response($discussion, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \AndreasElia\Forum\Requests\Discussions\UpdateDiscussionRequest $request
     * @param int                                                             $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDiscussionRequest $request, $id)
    {
        $discussion = Discussion::find($id);
        $discussion->update($request->all());

        return response($discussion, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $discussion = Discussion::find($id);
        $discussion->delete();

        return response($discussion, 204);
    }
}
