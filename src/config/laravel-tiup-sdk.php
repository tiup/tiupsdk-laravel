<?php

return [
    'tiup_config' => [
		'auth_host' => env('TIUP_AUTH_HOST'),
		'api_host' => env('TIUP_API_HOST'),
		'client_id' => env('TIUP_CLIENT_ID'),
		'client_secret' => env('TIUP_CLIENT_SECRET'),
    ],
    'default_scope' => [],
    'default_redirect_uri' => '/tiup/callback',
];
