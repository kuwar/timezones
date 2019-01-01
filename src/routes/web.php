<?php

Route::get('timezones/{timezone?}',
    'saurav\timezones\TimezonesController@index');