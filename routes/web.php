
<?php
// お問い合わせ入力ページ
Route::get('/', 'ContactsController@index')->name('contact');

// 確認ページ
Route::post('/confirm', 'ContactsController@confirm')->name('confirm');

// DB挿入、メール送信
Route::post('/process', 'ContactsController@process')->name('process');

// 完了ページ
Route::get('/complete', 'ContactsController@complete')->name('complete');
