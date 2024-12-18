<?php

return [
    'server_key' => env('MIDTRANS_SERVER_KEY', 'SB-Mid-server-UCs7Npu3XcdcduUAZbK5fDVS'),
    'client_key' => env('MIDTRANS_CLIENT_KEY', 'SB-Mid-client-Nj4v1_WBiEA33msT'),
    'is_production' => env('MIDTRANS_IS_PRODUCTION', false),
    'is_sanitized' => true,
    'is_3ds' => true,
];

