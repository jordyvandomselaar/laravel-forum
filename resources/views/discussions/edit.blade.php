@extends('forum::layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Edit Discussion</div>

        <div class="panel-body">
            <form action="{{ route('forum.discussions.update', $discussion->id) }}" method="PUT">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="group">Group</label>
                    <select name="group" id="group" class="form-control">
                        @foreach ($groups as $group)
                            <option value="{{ $group->slug }}"{{ ($discussion->group->slug != $group->slug) ?: ' selected' }}>{{ $group->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" value="{{ $discussion->title }}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea name="content" id="content" class="form-control">{{ $discussion->post->content }}</textarea>
                </div>

                <button class="btn btn-success">Save</button>
            </form>
        </div>
    </div>
@endsection
