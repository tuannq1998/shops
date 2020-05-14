<?php
Route::group(['prefix' => 'api-admin', 'namespace' => 'Admin'], function () {
    Route::get('/', function () {
        return view('admin.index');
    });

    /**
     * Route danh mục sản phẩm
     **/
    Route::group(['prefix' => 'category'], function () {
        Route::get('', 'AdminCategoryController@index')->name('admin.category.index');
        Route::get('create', 'AdminCategoryController@create')->name('admin.category.create');
        Route::post('create', 'AdminCategoryController@store');

        Route::get('update/{id}', 'AdminCategoryController@edit')->name('admin.category.update');
        Route::post('update/{id}', 'AdminCategoryController@update');

        Route::get('active/{id}', 'AdminCategoryController@active')->name('admin.category.active');
        Route::get('hot/{id}', 'AdminCategoryController@hot')->name('admin.category.hot');
        Route::get('delete/{id}', 'AdminCategoryController@delete')->name('admin.category.delete');

    });
});
