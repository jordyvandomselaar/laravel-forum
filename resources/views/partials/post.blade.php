<li class="list-group-item">
    <div class="row" style="display: flex">
        <div class="col-xs-12 col-sm-3" style="border-right: 1px solid #ddd">
            {{ $post->user->name }}
        </div>
        <div class="col-xs-12 col-sm-9">
            {{ $post->content }}
        </div>
    </div>
</li>
