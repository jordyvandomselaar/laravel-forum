<?php

Route::prefix(config('forum.prefix'))->namespace(config('forum.namespace'))->name('forum.')->group(function () {
    Route::get('/', 'ForumController@index')->name('home');
    Route::post('search', 'ForumController@search')->name('search');

    Route::resource('groups', 'GroupController', ['store', 'update', 'destroy']);
    Route::resource('discussions', 'DiscussionController', ['store', 'update', 'destroy']);
    Route::resource('posts', 'PostController', ['store', 'update', 'destroy']);

    Route::resource('lock', 'Discussion\LockController', ['store', 'destroy']);
    Route::resource('sticky', 'Discussion\StickyController', ['store', 'destroy']);
});
