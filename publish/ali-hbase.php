<?php
/**
 * User: 周华
 * Date: 2019-10-28
 * Time: 10:40
 */

return [
    'default' => [
        'host' => env('ALIHBASE_HOST', 'localhost'),
        'port' => (int) env('ALIHBASE_PORT', 9190),
        'key_id' => env('ALIHBASE_KEYID', 'root'),
        'signature' => env('ALIHBASE_SIGNATURE', 'root'),
    ],
];