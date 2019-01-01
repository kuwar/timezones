<?php

Route::get('timezones/{timezone?}',
    'kuwar\timezones\TimezonesController@index');