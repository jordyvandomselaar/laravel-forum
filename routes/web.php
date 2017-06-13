<?php

    Route::resource('groups', 'GroupController', ['store', 'update', 'destroy']);
    Route::resource('discussions', 'DiscussionController', ['store', 'update', 'destroy']);
    Route::resource('posts', 'PostController', ['store', 'update', 'destroy']);

    Route::resource('lock', 'Discussion\LockController', ['store', 'destroy']);
    Route::resource('sticky', 'Discussion\StickyController', ['store', 'destroy']);
});
