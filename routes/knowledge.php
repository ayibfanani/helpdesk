<?php 

Route::group(['prefix' => 'knowledges', 'middleware' => 'auth'], function () {
    Route::get('/', 'KnowledgeController@index')->name('knowledge.index');
    // Post of Knowledge Base
    Route::group(['prefix' => 'posts'], function () {
        Route::get('{id}', 'KnowledgeController@posts')->name('knowledge.posts');
        Route::get('{id}/create', 'KnowledgeController@createPost')->name('knowledge.createpost');
        Route::get('{id}/edit/{post_id}', 'KnowledgeController@editPost')->name('knowledge.editpost');
    });
});