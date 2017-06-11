<li class="list-group-item">
    <a href="{{-- route('forum.discussions.show', $discussion->id) --}}">{{ $discussion->title }}</a><br>
    <p class="meta">Posted by {{ $discussion->post->user->name }} - {{ $discussion->created_at->diffForHumans() }}</p><br>
    <p class="excerpt">{{ str_limit($discussion->post->content, 200) }}</p>
</li>
