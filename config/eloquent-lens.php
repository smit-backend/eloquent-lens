<?php

return [
    enabled => env(ELOQUENT_LENS_ENABLED, true),
    threshold => env(ELOQUENT_LENS_THRESHOLD, 5),
    log_channel => env(ELOQUENT_LENS_LOG_CHANNEL, daily),
    ignore_tables => [
        migrations,
        sessions,
        jobs,
    ],
];
