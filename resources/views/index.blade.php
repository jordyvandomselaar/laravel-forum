@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Discussions</div>

        @if ($discussions)
            <ul class="list-group">
                @each('forum::partials.discussion', $discussions, 'discussion')
            </ul>
        @else
            No discussions to display.
        @endif
    </div>
@endsection
