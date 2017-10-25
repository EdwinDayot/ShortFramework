<?php

$route->get('posts', 'PostController@index')
    ->get('posts/{slug:[a-z0-9\-]+}-{id:\d+}', 'PostController@show');
