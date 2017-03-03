<?php 

Route::group(['prefix' => 'knowledges', 'middleware' => 'auth'], function () {
    Route::get('/', 'KnowledgeController@index')->name('knowledge.index');
    // Maybe next, required parameter
    Route::get('{id}/posts', 'KnowledgeController@posts')->name('knowledge.posts');
});