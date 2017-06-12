<?php

Route::prefix(config('forum.prefix'))->namespace(config('forum.namespace'))->group(function () {
    Route::get('/', 'ForumController@index')->name(config('forum.prefix').'.home');
    Route::post('search', 'ForumController@search')->name(config('forum.prefix').'.search');

    Route::resource('groups', 'GroupController', ['store', 'update', 'destroy']);
    Route::resource('discussions', 'DiscussionController', ['store', 'update', 'destroy']);
    Route::resource('posts', 'PostController', ['store', 'update', 'destroy']);

    Route::resource('lock', 'Discussion\LockController', ['store', 'destroy']);
    Route::resource('sticky', 'Discussion\StickyController', ['store', 'destroy']);
});
