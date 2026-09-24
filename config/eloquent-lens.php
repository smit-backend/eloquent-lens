<?php

return [
    'enabled' => env('ELOQUENT_LENS_ENABLED', true),
    'timeout' => env('ELOQUENT_LENS_TIMEOUT', 30),
    'log_channel' => env('ELOQUENT_LENS_LOG', 'stack'),
];
