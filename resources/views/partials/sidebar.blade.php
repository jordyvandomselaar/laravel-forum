<div class="panel panel-default">
    <div class="panel-body">
        <a href="{{ route('forum.discussions.create') }}" class="btn btn-success btn-block">New Discussion</a>

        @if ($groups)
            <ul class="list-group">
                @foreach ($groups as $group)
                    <li class="list-group-item">
                        {{ $group->name }} <span class="badge" style="background: {{ $group->color }}">&nbsp;</span>
                    </li>
                @endforeach
            </ul>
        @else
            No groups to display.
        @endif
    </div>
</div>
