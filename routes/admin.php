<?php

// Авторизация, выход из системы и восстановление пароля
Route::auth(['register' => false]);

// Только для авторизованных пользователей
Route::group(['middleware' => ['admin.auth']], function () {
    // Главная страница
    Route::get('/', 'DashboardController@index')->name('dashboard');

    // Черный список участников
    Route::resource('blacklist', 'BlacklistController', ['except' => 'show']);
    Route::resource('subscribers', 'SubscriptionController',  ['except' => ['show']]);
    Route::get('subscribers/post','SubscriptionController@post')->name('subscribers.post');
    Route::post('subscribers/post','SubscriptionController@createPost')->name('subscribers.post.create');


    // Комментарии
    Route::group(['prefix' => 'comments', 'as' => 'comments.', 'namespace' => 'Comments'], function () {
        // Страницы заданий (шаги)
        Route::resource('steps', 'StepController', ['except' => ['show']])->parameters(['steps' => 'comment']);
        Route::post('steps/ajax', 'StepController@ajax')->name('steps.ajax');
        Route::resource('reviews', 'ReviewsController', ['except' => ['show']])->parameters(['steps' => 'comment']);
        Route::post('reviews/ajax', 'ReviewsController@ajax')->name('reviews.ajax');
        Route::post('reviews/publish/{comment_id}', 'ReviewsController@publish')->name('reviews.publish');
        Route::delete('reviews/publish/{comment_id}', 'ReviewsController@publish')->name('reviews.unpublish');


    });

    // Участники
    Route::group(['namespace' => 'Participants'], function () {
        Route::resource('participants', 'ParticipantController', ['except' => ['create', 'store', 'show']]);
        Route::group(['prefix' => 'participants', 'as' => 'participants.'], function () {
            // Подтверждение участника
            Route::post('{participant}/verify', 'ParticipantController@verify')->name('verify');
            // Подтверждение вупскника
            Route::post('{participant}/graduate', 'ParticipantController@graduate')->name('graduate');


            // Архив
            Route::get('archive', 'ArchiveController@index')->name('archive');
            Route::get('graduates', 'GraduateController@index')->name('graduates');

        });
    });

    // Статистика опросов
    Route::resource('polls', 'PollController', ['only' => 'index']);
    Route::get('curator-statistics', 'StatisticController@index')->name('curator.statistics');


    // Шаблоны
    Route::group(['prefix' => 'templates', 'as' => 'templates.', 'namespace' => 'Templates'], function () {
        // Шаблоны писем
        Route::resource('email', 'EmailController');
        // Предпросмотр шаблона письма
        Route::post('email/preview', 'EmailController@preview')->name('email.preview');

        // Шаблоны сообщений
        Route::resource('message', 'MessageController');
        // Предпросмотр шаблона сообщения
        Route::post('message/preview', 'MessageController@preview')->name('message.preview');
    });

    // Пользователи
    Route::resource('users', 'UserController', ['except' => 'show']);
});
