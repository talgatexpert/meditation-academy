<?php

// Вход/Регистрация участника
Route::post('login', 'Auth\LoginController@login')->name('login');

// Главная
Route::get('/', 'HomeController@index')->name('home');
Route::post('user-update', 'UserController@userUpdate')->name('user.update');
Route::get('participant-get', 'UserController@getParticipant');

Route::post('subscribe', 'SubscriptionController@subscribe')->name('subscribe');
Route::get('unsubscribe/{token}', 'SubscriptionController@unsubscribe')->name('unsubscribe');


// Истории успеха участников
Route::group(['as' => 'success-stories.'], function () {
    // Повышение эффективности
    Route::get('success-stories-effectiveness', 'SuccessStoryController@effectiveness')->name('effectiveness');
    // Контроль эмоций
    Route::get('success-stories-emotional-stability', 'SuccessStoryController@emotionalStability')->name('emotional-stability');
    // Жизнь в позитиве
    Route::get('success-stories-positive-experiences', 'SuccessStoryController@positiveExperiences')->name('positive-experiences');
    // Духовный рост
    Route::get('success-stories-self-awareness', 'SuccessStoryController@selfAwareness')->name('self-awareness');
});

// Шаги
Route::group(['as' => 'steps.', 'namespace' => 'Steps'], function () {

    // Шаг 1
    Route::get('step-1-meditation-posture', 'StepController@step1')->name('1');
    // Шаг 2
    Route::get('step-2-meditation-hands', 'StepController@step2')->name('2');
    // Шаг 3
    Route::get('step-3-dynamic-meditation', 'StepController@step3')->name('3');
    // Шаг 4
    Route::get('step-4-breathing', 'StepController@step4')->name('4');
    // Шаг 5
    Route::get('step-5-happyday', 'StepController@step5')->name('5');
    // Шаг 6
    Route::get('step-6-counting', 'StepController@step6')->name('6');
    // Шаг 7
    Route::get('step-7-gratitude', 'StepController@step7')->name('7');

    // Комментарии
    Route::resource('comments', 'CommentController', ['except' => ['create', 'show', 'edit']]);

    // Лайк комментарию
    Route::post('like', 'LikeController@like')->name('like');
});


// Финальный шаг
Route::post('/', 'Steps\CommentController@store_final')->name('store_final');
// сертификат
Route::get('certificate', 'Steps\CertificateController@index')->name('certificated');

// Отзывы выпускников

Route::get('reviews', 'ReviewController@index')->name('reviews');


// Интервью
Route::get('interviews', 'InterviewController@index')->name('interviews');

// О проекте
Route::get('about', 'AboutController@index')->name('about');

// Корпоративным клиентам
Route::get('corporate', 'CorporateController@index')->name('corporate');
// Форма заказа обратного звонка
Route::post('corporate/callback', 'CorporateController@callback')->name('corporate.callback');

// Опрос
Route::post('poll', 'PollController@vote')->name('poll');

// Только для гостей
Route::group(['middleware' => ['guest:participant']], function () {
    // Подтверждение email участника
    Route::get('verify/{participant}/{hash}', 'Auth\VerificationController@verify')->name('verify');
});



// Только для авторизованных участников
Route::group(['middleware' => ['auth:participant']], function () {
    // Письма
    Route::resource('messages', 'MessageController', ['only' => ['index', 'update']]);

});
