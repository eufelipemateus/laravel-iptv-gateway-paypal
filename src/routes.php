<?php

Route::group([
    'middleware' => ['web', 'iptv_locale'],
	],
	function(){

        Route::prefix('paypal')->group(function () {
            Route::get('/config', 'FelipeMateus\IPTVPaypal\Controllers\ConfigPayPalController@config')->name('cofig_paypal');
            Route::post('/config', 'FelipeMateus\IPTVPaypal\Controllers\ConfigPayPalController@save_config');
        });
    }
);
